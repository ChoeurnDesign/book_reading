<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Create Admin user
        User::create([
            'name' => 'Choeurn',
            'email' => 'chunchoeurn99@gmail.com',
            'password' => Hash::make('Choeurn123'),
            'role' => 'admin', // Only if your users table has a 'role' column
        ]);

        // Create normal User
        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('User12345'),
            'role' => 'user', // Only if your users table has a 'role' column
        ]);
    }
}
