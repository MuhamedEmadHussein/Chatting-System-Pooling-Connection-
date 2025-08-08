<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class ChatUsersSeeder extends Seeder
{
    /**
     * Seed test users for chat system demo
     * Creates users with avatar numbers 1-12 and realistic data
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Erna Serpa',
                'email' => 'erna.serpa@example.com',
                'avatar_number' => 10,
                'last_seen' => Carbon::now()->subMinutes(2), // Online
            ],
            [
                'name' => 'Norman Byrd',
                'email' => 'norman.byrd@example.com',
                'avatar_number' => 2,
                'last_seen' => Carbon::now()->subMinutes(5), // Just went offline
            ],
            [
                'name' => 'Laura Foreman',
                'email' => 'laura.foreman@example.com',
                'avatar_number' => 11,
                'last_seen' => Carbon::now()->subMinutes(7), // Offline
            ],
            [
                'name' => 'Bryan Waters',
                'email' => 'bryan.waters@example.com',
                'avatar_number' => 3,
                'last_seen' => Carbon::now()->subMinutes(10), // Offline
            ],
            [
                'name' => 'Ursula Sanders',
                'email' => 'ursula.sanders@example.com',
                'avatar_number' => 12,
                'last_seen' => Carbon::now()->subMinutes(9), // Offline
            ],
            [
                'name' => 'Edward Andrade',
                'email' => 'edward.andrade@example.com',
                'avatar_number' => 4,
                'last_seen' => Carbon::now()->subMinutes(13), // Offline
            ],
            [
                'name' => 'Alexandra Della',
                'email' => 'alexandra.della@example.com',
                'avatar_number' => 1,
                'last_seen' => Carbon::now()->subMinutes(1), // Online
            ],
            [
                'name' => 'Timothy Boyd',
                'email' => 'timothy.boyd@example.com',
                'avatar_number' => 5,
                'last_seen' => Carbon::now()->subMinutes(13), // Offline
            ],
            [
                'name' => 'Curtis Green',
                'email' => 'curtis.green@example.com',
                'avatar_number' => 2,
                'last_seen' => Carbon::now()->subMinutes(20), // Offline
            ],
            [
                'name' => 'Michael Johnson',
                'email' => 'michael.johnson@example.com',
                'avatar_number' => 6,
                'last_seen' => Carbon::now()->subMinutes(3), // Online
            ],
            [
                'name' => 'Sarah Williams',
                'email' => 'sarah.williams@example.com',
                'avatar_number' => 7,
                'last_seen' => Carbon::now()->subMinutes(1), // Online
            ],
            [
                'name' => 'David Brown',
                'email' => 'david.brown@example.com',
                'avatar_number' => 8,
                'last_seen' => Carbon::now()->subMinutes(15), // Offline
            ],
        ];

        foreach ($users as $userData) {
            User::firstOrCreate(
                ['email' => $userData['email']],
                [
                    'name' => $userData['name'],
                    'password' => Hash::make('password'), // Default password for demo
                    'avatar_number' => $userData['avatar_number'],
                    'last_seen' => $userData['last_seen'],
                    'email_verified_at' => Carbon::now(),
                ]
            );
        }

        $this->command->info('Chat users seeded successfully!');
        $this->command->info('Demo users created with password: "password"');
    }
}