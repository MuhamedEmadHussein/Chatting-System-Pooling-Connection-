<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Message;
use Carbon\Carbon;

class SampleMessagesSeeder extends Seeder
{
    /**
     * Seed sample messages for testing chat functionality
     */
    public function run(): void
    {
        $users = User::all();
        
        if ($users->count() < 2) {
            $this->command->error('Need at least 2 users to create sample messages');
            return;
        }

        $firstUser = $users->first();
        $otherUsers = $users->skip(1)->take(5); // Get 5 other users for conversations

        $sampleConversations = [
            [
                'receiver' => $otherUsers->first(),
                'messages' => [
                    ['sender' => $firstUser, 'message' => 'Hi! How are you doing today?', 'time_ago' => 30],
                    ['sender' => $otherUsers->first(), 'message' => 'Hello! I\'m doing great, thanks for asking. How about you?', 'time_ago' => 25],
                    ['sender' => $firstUser, 'message' => 'I\'m doing well too! Are you free for a quick call later?', 'time_ago' => 20],
                    ['sender' => $otherUsers->first(), 'message' => 'Sure! What time works for you?', 'time_ago' => 15],
                    ['sender' => $firstUser, 'message' => 'How about 3 PM? I have some project updates to discuss.', 'time_ago' => 10],
                ]
            ],
            [
                'receiver' => $otherUsers->skip(1)->first(),
                'messages' => [
                    ['sender' => $otherUsers->skip(1)->first(), 'message' => 'Hey! Did you see the latest project requirements?', 'time_ago' => 45],
                    ['sender' => $firstUser, 'message' => 'Yes, I just reviewed them. Pretty comprehensive!', 'time_ago' => 40],
                    ['sender' => $otherUsers->skip(1)->first(), 'message' => 'I think we should schedule a team meeting to discuss the implementation approach.', 'time_ago' => 35],
                    ['sender' => $firstUser, 'message' => 'Great idea! When would be a good time for everyone?', 'time_ago' => 30],
                ]
            ],
            [
                'receiver' => $otherUsers->skip(2)->first(),
                'messages' => [
                    ['sender' => $firstUser, 'message' => 'Thanks for your help with the database optimization!', 'time_ago' => 60],
                    ['sender' => $otherUsers->skip(2)->first(), 'message' => 'You\'re welcome! The performance improvement was quite significant.', 'time_ago' => 55],
                    ['sender' => $firstUser, 'message' => 'Definitely! The query response time improved by 70%.', 'time_ago' => 50],
                ]
            ],
            [
                'receiver' => $otherUsers->skip(3)->first(),
                'messages' => [
                    ['sender' => $otherUsers->skip(3)->first(), 'message' => 'Are you joining the company event next Friday?', 'time_ago' => 120],
                    ['sender' => $firstUser, 'message' => 'Yes! Looking forward to it. Will there be team building activities?', 'time_ago' => 115],
                    ['sender' => $otherUsers->skip(3)->first(), 'message' => 'Yes, they planned some fun activities and networking sessions.', 'time_ago' => 110],
                    ['sender' => $firstUser, 'message' => 'Sounds great! See you there.', 'time_ago' => 105],
                ]
            ],
            [
                'receiver' => $otherUsers->skip(4)->first(),
                'messages' => [
                    ['sender' => $firstUser, 'message' => 'Hello! Welcome to the team! 🎉', 'time_ago' => 180],
                    ['sender' => $otherUsers->skip(4)->first(), 'message' => 'Thank you! I\'m excited to be here and work with everyone.', 'time_ago' => 175],
                    ['sender' => $firstUser, 'message' => 'If you have any questions, feel free to ask. We\'re here to help!', 'time_ago' => 170],
                    ['sender' => $otherUsers->skip(4)->first(), 'message' => 'I appreciate that! I\'ll definitely reach out if I need anything.', 'time_ago' => 165],
                ]
            ]
        ];

        foreach ($sampleConversations as $conversation) {
            foreach ($conversation['messages'] as $messageData) {
                Message::create([
                    'sender_id' => $messageData['sender']->id,
                    'receiver_id' => $conversation['receiver']->id,
                    'message' => $messageData['message'],
                    'is_read' => rand(0, 1) == 1, // Randomly mark some as read
                    'created_at' => Carbon::now()->subMinutes($messageData['time_ago']),
                    'updated_at' => Carbon::now()->subMinutes($messageData['time_ago']),
                ]);
            }
        }

        $this->command->info('Sample messages created successfully!');
        $this->command->info('You can now test the chat functionality with realistic conversations.');
    }
}