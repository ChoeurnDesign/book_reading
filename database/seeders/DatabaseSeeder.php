<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create(); // Uncomment if you want to seed users

        // Order is important: categories must exist before books can be linked to them
        $this->call([
            CategorySeeder::class, // Ensure categories are seeded first
            BookSeeder::class,     // Then seed your books and attach categories
            UserSeederr::class,
            // Add other seeders here as you create them, e.g., ReviewSeeder::class, etc.
        ]);
    }
}
