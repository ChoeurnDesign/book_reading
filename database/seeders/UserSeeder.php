<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'chunchoeurn99@gmail.com'],
            [
                'name' => 'Choeurn',
                'password' => Hash::make('Choeurn123'),
                'role' => 'admin',
            ]
        );
        
        User::updateOrCreate(
            ['email' => 'user@gmail.com'],
            [
                'name' => 'User',
                'password' => Hash::make('User12345'),
                'role' => 'user',
            ]
        );
    }
}
