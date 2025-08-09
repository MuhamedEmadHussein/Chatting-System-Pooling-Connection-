<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\ChatService;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

/**
 * ChatController - Handles HTTP requests for chat functionality
 * 
 * Following SOLID Principles:
 * - Single Responsibility: Only handles HTTP layer concerns
 * - Dependency Inversion: Depends on ChatService abstraction
 * - Open/Closed: Can be extended without modifying existing methods
 */
class ChatController extends Controller
{
    /**
     * Inject ChatService dependency
     */
    public function __construct(
        private ChatService $chatService
    ) {
    }

    /**
     * Display the main chat interface
     */
    public function index(): View
    {
        $currentUser = Auth::user();

        // Update user activity
        $this->chatService->updateUserActivity($currentUser);

        // Get users for chat list
        $users = $this->chatService->getChatUsers($currentUser);

        // Get unread messages count
        $unreadCount = $this->chatService->getUnreadMessagesCount($currentUser);

        return view('chat', compact('users', 'unreadCount', 'currentUser'));
    }

    /**
     * Get users list for chat sidebar
     */
    public function getUsers(): JsonResponse
    {
        try {
            $currentUser = Auth::user();
            $users = $this->chatService->getChatUsers($currentUser);

            return response()->json([
                'success' => true,
                'users' => $users,
                'current_user' => [
                    'id' => $currentUser->id,
                    'name' => $currentUser->name,
                    'avatar_url' => $currentUser->avatarUrl(),
                ]
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to load users',
                'error' => config('app.debug') ? $e->getMessage() : 'Internal server error'
            ], 500);
        }
    }

    /**
     * Get conversation between current user and specified user
     */
    public function getMessages(Request $request, User $user): JsonResponse
    {
        try {
            $validator = Validator::make($request->all(), [
                'page' => 'integer|min:1',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid parameters',
                    'errors' => $validator->errors()
                ], 422);
            }

            $currentUser = Auth::user();
            $page = $request->get('page', 1);

            // Prevent users from accessing conversations they're not part of
            if ($user->id === $currentUser->id) {
                return response()->json([
                    'success' => false,
                    'message' => 'Cannot load conversation with yourself'
                ], 422);
            }

            // Get conversation messages
            $messages = $this->chatService->getConversation($currentUser, $user, $page);

            // Get conversation stats
            $stats = $this->chatService->getConversationStats($currentUser, $user);

            // Mark messages as read
            $this->chatService->markMessagesAsRead($currentUser, $user);

            return response()->json([
                'success' => true,
                'messages' => $messages,
                'conversation_partner' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'avatar_url' => $user->avatarUrl(),
                    'is_online' => $user->isOnline(),
                    'last_seen' => $user->lastSeenText(),
                ],
                'stats' => $stats,
                'pagination' => [
                    'current_page' => $page,
                    'has_more' => $messages->count() === 50,
                ]
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to load messages',
                'error' => config('app.debug') ? $e->getMessage() : 'Internal server error'
            ], 500);
        }
    }

    /**
     * Send a new message
     */
    public function sendMessage(Request $request, User $user): JsonResponse
    {
        try {
            $receiver = $user;
            $validator = Validator::make($request->all(), [
                'message' => 'required|string|max:5000',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid message content',
                    'errors' => $validator->errors()
                ], 422);
            }

            $currentUser = Auth::user();

            if ($receiver->id === $currentUser->id) {
                return response()->json([
                    'success' => false,
                    'message' => 'Cannot send message to yourself'
                ], 422);
            }

            $message = $this->chatService->sendMessage(
                $currentUser,
                $receiver,
                $request->input('message')
            );

            return response()->json([
                'success' => true,
                'message' => [
                    'id' => $message->id,
                    'message' => $message->sanitizedMessage(),
                    'formatted_message' => $message->formattedMessage(),
                    'sender' => [
                        'id' => $message->sender->id,
                        'name' => $message->sender->name,
                        'avatar_url' => $message->sender->avatarUrl(),
                    ],
                    'is_sender' => true,
                    'time' => $message->timeForDisplay(),
                    'created_at' => $message->created_at->toISOString(),
                ]
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to send message',
                'error' => config('app.debug') ? $e->getMessage() : 'Internal server error'
            ], 500);
        }
    }

    /**
     * Mark messages as read
     */
    public function markAsRead(User $sender): JsonResponse
    {
        try {
            $currentUser = Auth::user();

            if ($sender->id === $currentUser->id) {
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid operation'
                ], 422);
            }

            $markedCount = $this->chatService->markMessagesAsRead($currentUser, $sender);

            return response()->json([
                'success' => true,
                'marked_count' => $markedCount
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to mark messages as read',
                'error' => config('app.debug') ? $e->getMessage() : 'Internal server error'
            ], 500);
        }
    }

    /**
     * Toggle favorite status for a user
     */
    public function toggleFavorite(User $user): JsonResponse
    {
        try {
            $currentUser = Auth::user();
            $result = $this->chatService->toggleFavorite($currentUser, $user);

            return response()->json([
                'success' => true,
                'data' => $result
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update favorite status',
                'error' => config('app.debug') ? $e->getMessage() : 'Internal server error'
            ], 500);
        }
    }

    /**
     * Long polling endpoint for real-time updates
     */
    public function poll(Request $request): JsonResponse
    {
        try {
            $validator = Validator::make($request->all(), [
                'last_check' => 'required|date',
                'timeout' => 'integer|min:5|max:30',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid parameters',
                    'errors' => $validator->errors()
                ], 422);
            }

            $currentUser = Auth::user();
            $lastCheck = Carbon::parse($request->input('last_check'));
            $timeout = $request->input('timeout', 25);
            $startTime = time();

            $this->chatService->updateUserActivity($currentUser);

            do {
                $newMessages = $this->chatService->getNewMessages($currentUser, $lastCheck);
                $userUpdates = $this->chatService->getUsersStatusUpdates($currentUser, $lastCheck);

                if ($newMessages->isNotEmpty() || $userUpdates->isNotEmpty()) {
                    return response()->json([
                        'success' => true,
                        'has_updates' => true,
                        'new_messages' => $newMessages,
                        'user_updates' => $userUpdates,
                        'server_time' => Carbon::now()->toISOString(),
                    ]);
                }

                sleep(1);
            } while ((time() - $startTime) < $timeout);

            return response()->json([
                'success' => true,
                'has_updates' => false,
                'new_messages' => [],
                'user_updates' => [],
                'server_time' => Carbon::now()->toISOString(),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Polling failed',
                'error' => config('app.debug') ? $e->getMessage() : 'Internal server error'
            ], 500);
        }
    }
}
