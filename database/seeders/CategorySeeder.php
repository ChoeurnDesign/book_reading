<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        // Disable foreign key checks to allow truncation if there are relationships.
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Category::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Now seed categories
        Category::create([
            'name' => 'Sciencefiction',
            'slug' => Str::slug('Science-fiction'),
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
    }
}
