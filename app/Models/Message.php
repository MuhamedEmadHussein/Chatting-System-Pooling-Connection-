<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;

class Message extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'message', 
        'sender_id', 
        'receiver_id', 
        'is_read'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_read' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // ========================================
    // RELATIONSHIPS (Following Single Responsibility)
    // ========================================

    /**
     * Get the user who sent this message
     */
    public function sender(): BelongsTo
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    /**
     * Get the user who receives this message
     */
    public function receiver(): BelongsTo
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }

    // ========================================
    // SCOPES (Following Open/Closed Principle)
    // ========================================

    /**
     * Scope to get messages between two users
     */
    public function scopeBetweenUsers(Builder $query, int $user1Id, int $user2Id): Builder
    {
        return $query->where(function ($q) use ($user1Id, $user2Id) {
            $q->where('sender_id', $user1Id)->where('receiver_id', $user2Id);
        })->orWhere(function ($q) use ($user1Id, $user2Id) {
            $q->where('sender_id', $user2Id)->where('receiver_id', $user1Id);
        });
    }

    /**
     * Scope to get unread messages
     */
    public function scopeUnread(Builder $query): Builder
    {
        return $query->where('is_read', false);
    }

    /**
     * Scope to get messages after a specific timestamp (for polling)
     */
    public function scopeAfter(Builder $query, Carbon $timestamp): Builder
    {
        return $query->where('created_at', '>', $timestamp);
    }

    /**
     * Scope to get recent messages (last 50)
     */
    public function scopeRecent(Builder $query, int $limit = 50): Builder
    {
        return $query->latest()->limit($limit);
    }

    // ========================================
    // BUSINESS LOGIC METHODS
    // ========================================

    /**
     * Mark message as read
     */
    public function markAsRead(): bool
    {
        if (!$this->is_read) {
            return $this->update(['is_read' => true]);
        }
        
        return true;
    }

    /**
     * Check if message is from current user
     */
    public function isSentBy(User $user): bool
    {
        return $this->sender_id === $user->id;
    }

    /**
     * Get formatted time for display
     */
    public function timeForDisplay(): string
    {
        return $this->created_at->format('g:i A');
    }

    /**
     * Get formatted date for display
     */
    public function dateForDisplay(): string
    {
        $today = Carbon::today();
        $messageDate = $this->created_at->startOfDay();

        if ($messageDate->isSameDay($today)) {
            return 'Today';
        } elseif ($messageDate->isSameDay($today->subDay())) {
            return 'Yesterday';
        } else {
            return $this->created_at->format('M d, Y');
        }
    }

    /**
     * Sanitize message content to prevent XSS
     */
    public function sanitizedMessage(): string
    {
        return htmlspecialchars($this->message, ENT_QUOTES, 'UTF-8');
    }

    /**
     * Get message content with line breaks converted to HTML
     */
    public function formattedMessage(): string
    {
        return nl2br($this->sanitizedMessage());
    }

    /**
     * Check if message contains mentions (for future features)
     */
    public function hasMentions(): bool
    {
        return str_contains($this->message, '@');
    }

    /**
     * Get message length
     */
    public function length(): int
    {
        return mb_strlen($this->message);
    }

    /**
     * Check if message is long (more than 200 characters)
     */
    public function isLong(): bool
    {
        return $this->length() > 200;
    }
}
