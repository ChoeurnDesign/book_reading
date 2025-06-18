<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category; // Make sure this line is here to import your Category model
use Illuminate\Support\Str; // Import the Str facade for slug generation

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Add your category data here.
        // Ensure to include the 'slug' as it's a unique column in your categories table.

        Category::create([
            'name' => 'Fiction',
            'slug' => Str::slug('Fiction'),
            'description' => 'Books based on imaginative narrative.',
        ]);

        Category::create([
            'name' => 'Non-Fiction',
            'slug' => Str::slug('Non-Fiction'),
            'description' => 'Books that are based on facts, real events, and real people, such as biography or history.',
        ]);

        Category::create([
            'name' => 'Science Fiction',
            'slug' => Str::slug('Science Fiction'),
            'description' => 'Speculative fiction dealing with imaginative concepts such as futuristic science and technology, space travel, time travel, faster-than-light travel, parallel universes, and extraterrestrial life.',
        ]);

        Category::create([
            'name' => 'Fantasy',
            'slug' => Str::slug('Fantasy'),
            'description' => 'Genre of speculative fiction set in a fictional universe, often inspired by real-world myth and folklore.',
        ]);

        Category::create([
            'name' => 'Thriller',
            'slug' => Str::slug('Thriller'),
            'description' => 'A genre of fiction with numerous, often overlapping, subgenres, whose aim is to keep the reader on the "edge of their seat".',
        ]);

        Category::create([
            'name' => 'Romance',
            'slug' => Str::slug('Romance'),
            'description' => 'Stories that focus on the relationship and romantic love between two people.',
        ]);

        // You can add more categories here as needed
    }
}
