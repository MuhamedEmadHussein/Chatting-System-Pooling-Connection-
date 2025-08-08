<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name'      => 'Muhammad',
            'email'     => 'muhammad@laravel-chat.test',
            'password'  => Hash::make('12345678')
        ]);

        User::create([
            'name'      => 'Ahmed',
            'email'     => 'ahmed@laravel-chat.test',
            'password'  => Hash::make('12345678')
        ]);
    }
}
