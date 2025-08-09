<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use Livewire\Volt\Volt;

// Main chat route
Route::get('/', [ChatController::class, 'index'])
    ->middleware(['auth'])
    ->name('home');

// Authenticated routes
Route::middleware(['auth'])->group(function () {
    // Settings routes
    Route::redirect('settings', 'settings/profile');
    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

// API routes for chat functionality with rate limiting
Route::middleware(['auth', 'throttle:60,1'])->prefix('api/chat')->name('api.chat.')->group(function () {
    
    // User management
    Route::get('/users', [ChatController::class, 'getUsers'])->name('users');
    Route::post('/users/{user}/favorite', [ChatController::class, 'toggleFavorite'])->name('favorite');
    
    // Message management  
    Route::get('/users/{user}/messages', [ChatController::class, 'getMessages'])->name('messages');
    Route::post('/users/{user}/messages', [ChatController::class, 'sendMessage'])->name('send');
    Route::post('/users/{user}/mark-read', [ChatController::class, 'markAsRead'])->name('mark-read');
    
    // Real-time polling (with stricter rate limiting)
    Route::middleware(['throttle:30,1'])->group(function () {
        Route::post('/poll', [ChatController::class, 'poll'])->name('poll');
    });
});

require __DIR__.'/auth.php';
