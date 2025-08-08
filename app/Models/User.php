<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Carbon\Carbon;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'last_seen',
        'avatar_number',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'last_seen' => 'datetime',
        ];
    }

    // ========================================
    // RELATIONSHIPS (Following Single Responsibility)
    // ========================================

    /**
     * Messages sent by this user
     */
    public function sentMessages(): HasMany
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    /**
     * Messages received by this user
     */
    public function receivedMessages(): HasMany
    {
        return $this->hasMany(Message::class, 'receiver_id');
    }

    /**
     * Users that this user has marked as favorites
     */
    public function favorites(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_favorites', 'user_id', 'favorite_user_id')
            ->withTimestamps();
    }

    /**
     * Users who have marked this user as favorite
     */
    public function favoritedBy(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_favorites', 'favorite_user_id', 'user_id')
            ->withTimestamps();
    }

    // ========================================
    // SCOPES (Following Open/Closed Principle)
    // ========================================

    /**
     * Scope to get online users (active in last 5 minutes)
     */
    public function scopeOnline(Builder $query): Builder
    {
        return $query->where('last_seen', '>=', Carbon::now()->subMinutes(5));
    }

    /**
     * Scope to get users except current user
     */
    public function scopeExceptCurrent(Builder $query, int $userId): Builder
    {
        return $query->where('id', '!=', $userId);
    }

    /**
     * Scope to get users with their last message for chat list
     */
    public function scopeWithLastMessage(Builder $query, int $currentUserId): Builder
    {
        return $query->with(['sentMessages' => function ($query) use ($currentUserId) {
            $query->where('receiver_id', $currentUserId)
                ->latest()
                ->limit(1);
        }, 'receivedMessages' => function ($query) use ($currentUserId) {
            $query->where('sender_id', $currentUserId)
                ->latest()
                ->limit(1);
        }]);
    }

    // ========================================
    // BUSINESS LOGIC METHODS
    // ========================================

    /**
     * Get the user's initials
     */
    public function initials(): string
    {
        return Str::of($this->name)
            ->explode(' ')
            ->take(2)
            ->map(fn ($word) => Str::substr($word, 0, 1))
            ->implode('');
    }

    /**
     * Get avatar URL based on avatar_number
     */
    public function avatarUrl(): string
    {
        return asset("assets/images/avatar/{$this->avatar_number}.png");
    }

    /**
     * Check if user is online (active in last 5 minutes)
     */
    public function isOnline(): bool
    {
        if (!$this->last_seen) {
            return false;
        }
        
        return $this->last_seen->diffInMinutes(Carbon::now()) <= 5;
    }

    /**
     * Get last seen status text
     */
    public function lastSeenText(): string
    {
        if (!$this->last_seen) {
            return 'Never';
        }

        if ($this->isOnline()) {
            return 'Active Now';
        }

        return $this->last_seen->diffForHumans();
    }

    /**
     * Get conversation with another user
     */
    public function conversationWith(User $user)
    {
        return Message::where(function ($query) use ($user) {
            $query->where('sender_id', $this->id)
                  ->where('receiver_id', $user->id);
        })->orWhere(function ($query) use ($user) {
            $query->where('sender_id', $user->id)
                  ->where('receiver_id', $this->id);
        })->orderBy('created_at');
    }

    /**
     * Get last message with another user
     */
    public function lastMessageWith(User $user): ?Message
    {
        return Message::where(function ($query) use ($user) {
            $query->where('sender_id', $this->id)
                  ->where('receiver_id', $user->id);
        })->orWhere(function ($query) use ($user) {
            $query->where('sender_id', $user->id)
                  ->where('receiver_id', $this->id);
        })->latest()->first();
    }

    /**
     * Check if user has favorited another user
     */
    public function hasFavorited(User $user): bool
    {
        return $this->favorites()->where('favorite_user_id', $user->id)->exists();
    }

    /**
     * Mark user as favorite
     */
    public function addToFavorites(User $user): void
    {
        if (!$this->hasFavorited($user)) {
            $this->favorites()->attach($user->id);
        }
    }

    /**
     * Remove user from favorites
     */
    public function removeFromFavorites(User $user): void
    {
        $this->favorites()->detach($user->id);
    }

    /**
     * Update last seen timestamp
     */
    public function updateLastSeen(): void
    {
        $this->update(['last_seen' => Carbon::now()]);
    }

    /**
     * Get unread messages count from a specific user
     */
    public function unreadMessagesFrom(User $user): int
    {
        return $this->receivedMessages()
            ->where('sender_id', $user->id)
            ->where('is_read', false)
            ->count();
    }
}
