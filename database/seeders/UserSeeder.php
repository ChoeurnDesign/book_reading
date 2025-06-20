
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Make sure the User model namespace is correct

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Admin user
        User::create([
            'name' => 'Choeurn',
            'email' => 'chunchoeurn99.com',
            'password' => Hash::make('Choeurn123'), // Change to a secure password
            'role' => 'admin', // Only if your users table has a 'role' column
        ]);

        // Create normal User
        User::create([
            'name' => 'User',
            'email' => 'user123@gmail.com',
            'password' => Hash::make('User123'), // Change to a secure password
            'role' => 'user', // Only if your users table has a 'role' column
        ]);
    }
}
