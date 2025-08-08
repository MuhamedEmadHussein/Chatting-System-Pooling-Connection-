<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     * Purpose: Add user favorites functionality and activity tracking
     * - user_favorites: Many-to-many relationship for favorite users
     * - last_seen: Track user activity for online status
     * - avatar_number: Store avatar image number (1-12)
     */
    public function up(): void
    {
        // Create user_favorites table for many-to-many relationship
        Schema::create('user_favorites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('favorite_user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
            
            // Ensure unique favorite relationships and add indexes for performance
            $table->unique(['user_id', 'favorite_user_id']);
            $table->index(['user_id', 'created_at']); // For efficient favorite queries
        });
        
        // Add activity tracking fields to users table
        Schema::table('users', function (Blueprint $table) {
            $table->timestamp('last_seen')->nullable()->after('remember_token');
            $table->tinyInteger('avatar_number')->default(1)->after('last_seen');
            
            // Index for efficient online user queries
            $table->index('last_seen');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_favorites');
        
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['last_seen', 'avatar_number']);
        });
    }
};