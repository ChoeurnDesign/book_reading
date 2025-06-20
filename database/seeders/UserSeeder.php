<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Create Admin user only if not exists
        User::firstOrCreate(
            ['email' => 'chunchoeurn99@gmail.com'],
            [
                'name' => 'Choeurn',
                'password' => Hash::make('Choeurn123'),
                'role' => 'admin', // Only if your users table has a 'role' column
            ]
        );

        // Create normal User only if not exists
        User::firstOrCreate(
            ['email' => 'user@gmail.com'],
            [
                'name' => 'User',
                'password' => Hash::make('User12345'),
                'role' => 'user', // Only if your users table has a 'role' column
            ]
        );
    }
}
