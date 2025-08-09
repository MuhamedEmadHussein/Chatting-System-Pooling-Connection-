<?php

namespace App\Services;

use App\Models\User;
use App\Models\Message;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

/**
 * ChatService - Handles all chat-related business logic
 * 
 * Following SOLID Principles:
 * - Single Responsibility: Only handles chat operations
 * - Open/Closed: Can be extended without modifying existing code
 * - Dependency Inversion: Depends on abstractions (Models) not concrete implementations
 */
class ChatService
{
    // ========================================
    // USER MANAGEMENT METHODS
    // ========================================

    /**
     * Get all users for chat list (excluding current user)
     * Optimized query with eager loading to reduce N+1 problems
     */
    public function getChatUsers(User $currentUser): Collection
    {
        return User::exceptCurrent($currentUser->id)
            ->select(['id', 'name', 'email', 'avatar_number', 'last_seen'])
            ->with([
                // Load latest message between users efficiently
                'sentMessages' => function ($query) use ($currentUser) {
                    $query->where('receiver_id', $currentUser->id)
                        ->latest()
                        ->limit(1)
                        ->select(['id', 'sender_id', 'receiver_id', 'message', 'is_read', 'created_at']);
                },
                'receivedMessages' => function ($query) use ($currentUser) {
                    $query->where('sender_id', $currentUser->id)
                        ->latest()
                        ->limit(1)
                        ->select(['id', 'sender_id', 'receiver_id', 'message', 'is_read', 'created_at']);
                }
            ])
            ->get()
            ->map(function ($user) use ($currentUser) {
                // Get the latest message between these two users
                $lastMessage = $this->getLastMessageBetweenUsers($currentUser, $user);
                
                return [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'avatar_url' => $user->avatarUrl(),
                    'avatar_number' => $user->avatar_number,
                    'initials' => $user->initials(),
                    'is_online' => $user->isOnline(),
                    'last_seen' => $user->lastSeenText(),
                    'last_message' => $lastMessage ? [
                        'content' => \Illuminate\Support\Str::limit($lastMessage->message, 50),
                        'time' => $lastMessage->created_at->diffForHumans(),
                        'is_sender' => $lastMessage->sender_id === $currentUser->id,
                        'is_read' => $lastMessage->is_read,
                    ] : null,
                    'unread_count' => $user->receivedMessages()
                        ->where('sender_id', $currentUser->id)
                        ->unread()
                        ->count(),
                    'is_favorite' => $currentUser->hasFavorited($user),
                ];
            })
            ->sortByDesc(function ($user) {
                // Sort by: favorites first, then by last message time, then by online status
                $favoriteWeight = $user['is_favorite'] ? 1000000 : 0;
                $lastMessageWeight = $user['last_message'] ? $user['last_message']['time'] : 0;
                $onlineWeight = $user['is_online'] ? 100000 : 0;
                return $favoriteWeight + $onlineWeight + intval($lastMessageWeight);
            })
            ->values();
    }

    /**
     * Get conversation between two users with pagination
     */
    public function getConversation(User $user1, User $user2, int $page = 1, int $perPage = 50): Collection
    {
        $offset = ($page - 1) * $perPage;

        $messages = Message::betweenUsers($user1->id, $user2->id)
            ->with(['sender:id,name,avatar_number', 'receiver:id,name,avatar_number'])
            ->orderBy('created_at', 'desc')
            ->offset($offset)
            ->limit($perPage)
            ->get()
            ->reverse()
            ->values();

        return $messages->map(function ($message) use ($user1) {
            return [
                'id' => $message->id,
                'message' => $message->sanitizedMessage(),
                'formatted_message' => $message->formattedMessage(),
                'sender' => [
                    'id' => $message->sender->id,
                    'name' => $message->sender->name,
                    'avatar_url' => $message->sender->avatarUrl(),
                ],
                'receiver' => [
                    'id' => $message->receiver->id,
                    'name' => $message->receiver->name,
                    'avatar_url' => $message->receiver->avatarUrl(),
                ],
                'is_sender' => $message->isSentBy($user1),
                'is_read' => $message->is_read,
                'time' => $message->timeForDisplay(),
                'date' => $message->dateForDisplay(),
                'created_at' => $message->created_at->toISOString(),
            ];
        });
    }

    /**
     * Send a new message between users
     */
    public function sendMessage(User $sender, User $receiver, string $content): Message
    {
        // Validate message content
        $content = trim($content);
        if (empty($content)) {
            throw new \InvalidArgumentException('Message content cannot be empty');
        }

        if (strlen($content) > 5000) {
            throw new \InvalidArgumentException('Message content is too long (max 5000 characters)');
        }

        // Create and save message
        $message = new Message([
            'sender_id' => $sender->id,
            'receiver_id' => $receiver->id,
            'message' => $content,
            'is_read' => false,
        ]);

        $message->save();

        // Update sender's last seen
        $sender->updateLastSeen();

        return $message->load(['sender:id,name,avatar_number', 'receiver:id,name,avatar_number']);
    }

    /**
     * Mark messages as read
     */
    public function markMessagesAsRead(User $reader, User $sender): int
    {
        return Message::where('sender_id', $sender->id)
            ->where('receiver_id', $reader->id)
            ->unread()
            ->update(['is_read' => true]);
    }

    // ========================================
    // POLLING AND REAL-TIME METHODS
    // ========================================

    /**
     * Get new messages for polling (after specific timestamp)
     */
    public function getNewMessages(User $user, Carbon $lastCheck): Collection
    {
        $newMessages = Message::where('receiver_id', $user->id)
            ->after($lastCheck)
            ->with(['sender:id,name,avatar_number'])
            ->orderBy('created_at', 'asc')
            ->get();

        return $newMessages->map(function ($message) {
            return [
                'id' => $message->id,
                'message' => $message->sanitizedMessage(),
                'formatted_message' => $message->formattedMessage(),
                'sender' => [
                    'id' => $message->sender->id,
                    'name' => $message->sender->name,
                    'avatar_url' => $message->sender->avatarUrl(),
                ],
                'time' => $message->timeForDisplay(),
                'created_at' => $message->created_at->toISOString(),
                'conversation_partner_id' => $message->sender_id,
            ];
        });
    }

    /**
     * Get users with updated status (for polling user list updates)
     */
    public function getUsersStatusUpdates(User $currentUser, Carbon $lastCheck): Collection
    {
        return User::exceptCurrent($currentUser->id)
            ->where('last_seen', '>=', $lastCheck)
            ->select(['id', 'name', 'last_seen'])
            ->get()
            ->map(function ($user) {
                return [
                    'id' => $user->id,
                    'name' => $user->name,
                    'is_online' => $user->isOnline(),
                    'last_seen' => $user->lastSeenText(),
                ];
            });
    }

    // ========================================
    // FAVORITES MANAGEMENT
    // ========================================

    /**
     * Toggle favorite status for a user
     */
    public function toggleFavorite(User $user, User $targetUser): array
    {
        if ($user->id === $targetUser->id) {
            throw new \InvalidArgumentException('Cannot favorite yourself');
        }

        $isFavorite = $user->hasFavorited($targetUser);

        if ($isFavorite) {
            $user->removeFromFavorites($targetUser);
            $status = 'removed';
        } else {
            $user->addToFavorites($targetUser);
            $status = 'added';
        }

        return [
            'status' => $status,
            'is_favorite' => !$isFavorite,
            'user_id' => $targetUser->id,
        ];
    }

    /**
     * Get user's favorite users
     */
    public function getFavoriteUsers(User $user): Collection
    {
        return $user->favorites()
            ->select(['id', 'name', 'email', 'avatar_number', 'last_seen'])
            ->get()
            ->map(function ($favoriteUser) {
                return [
                    'id' => $favoriteUser->id,
                    'name' => $favoriteUser->name,
                    'email' => $favoriteUser->email,
                    'avatar_url' => $favoriteUser->avatarUrl(),
                    'is_online' => $favoriteUser->isOnline(),
                    'last_seen' => $favoriteUser->lastSeenText(),
                ];
            });
    }

    // ========================================
    // UTILITY METHODS
    // ========================================

    /**
     * Get last message between two users
     */
    private function getLastMessageBetweenUsers(User $user1, User $user2): ?Message
    {
        return Message::betweenUsers($user1->id, $user2->id)
            ->latest()
            ->first();
    }

    /**
     * Get unread messages count for user
     */
    public function getUnreadMessagesCount(User $user): int
    {
        return Message::where('receiver_id', $user->id)
            ->unread()
            ->count();
    }

    /**
     * Get conversation statistics
     */
    public function getConversationStats(User $user1, User $user2): array
    {
        $totalMessages = Message::betweenUsers($user1->id, $user2->id)->count();
        $unreadFromUser2 = Message::where('sender_id', $user2->id)
            ->where('receiver_id', $user1->id)
            ->unread()
            ->count();

        return [
            'total_messages' => $totalMessages,
            'unread_count' => $unreadFromUser2,
            'has_conversation' => $totalMessages > 0,
        ];
    }

    /**
     * Search users for chat
     */
    public function searchUsers(User $currentUser, string $query): Collection
    {
        return User::exceptCurrent($currentUser->id)
            ->where(function ($q) use ($query) {
                $q->where('name', 'LIKE', "%{$query}%")
                  ->orWhere('email', 'LIKE', "%{$query}%");
            })
            ->select(['id', 'name', 'email', 'avatar_number', 'last_seen'])
            ->limit(10)
            ->get()
            ->map(function ($user) use ($currentUser) {
                return [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'avatar_url' => $user->avatarUrl(),
                    'is_online' => $user->isOnline(),
                    'is_favorite' => $currentUser->hasFavorited($user),
                ];
            });
    }

    /**
     * Clean old messages (for maintenance)
     */
    public function cleanOldMessages(int $daysOld = 365): int
    {
        return Message::where('created_at', '<', Carbon::now()->subDays($daysOld))
            ->delete();
    }

    /**
     * Update user activity (called on each request)
     */
    public function updateUserActivity(User $user): void
    {
        // Only update if last_seen is older than 1 minute to reduce DB writes
        if (!$user->last_seen || $user->last_seen->diffInMinutes(Carbon::now()) >= 1) {
            $user->updateLastSeen();
        }
    }
}