<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('book_category')->truncate();
        Book::truncate();
        
        // Ensure 'Romance' category exists
        $romance = Category::where('name', 'Romance')->first();

        $books = [
            [
                'title' => 'The Hating Game',
                'author' => 'Sally Thorne',
                'description' => 'A witty enemies-to-lovers romantic comedy set in the workplace.',
                'image' => 'romance (1).jpg',
            ],
            [
                'title' => 'The Seven Husbands of Evelyn Hugo',
                'author' => 'Taylor Jenkins Reid',
                'description' => 'A reclusive Hollywood legend recounts her glamorous and scandalous life.',
                'image' => 'romance (2).jpg',
            ],
            [
                'title' => 'Red, White & Royal Blue',
                'author' => 'Casey McQuiston',
                'description' => 'A fun and steamy romance between the First Son and a British prince.',
                'image' => 'romance (3).jpg',
            ],
            [
                'title' => 'The Deal',
                'author' => 'Elle Kennedy',
                'description' => 'A college romance about fake dating that turns real.',
                'image' => 'romance (4).jpg',
            ],
            [
                'title' => 'People We Meet on Vacation',
                'author' => 'Emily Henry',
                'description' => 'Two best friends reunite for one last vacation and a second chance at love.',
                'image' => 'romance (5).jpg',
            ],
            [
                'title' => 'The Love Hypothesis',
                'author' => 'Ali Hazelwood',
                'description' => 'A fake relationship between scientists leads to real feelings.',
                'image' => 'romance (6).jpg',
            ],
            [
                'title' => 'Part of Your World',
                'author' => 'Abby Jimenez',
                'description' => 'A heartwarming romance about finding your place and your person.',
                'image' => 'romance (7).jpg',
            ],
            [
                'title' => 'Book Lovers',
                'author' => 'Emily Henry',
                'description' => 'A bookish romantic comedy for people who love love stories.',
                'image' => 'romance (8).jpg',
            ],
            [
                'title' => 'Twisted Love',
                'author' => 'Ana Huang',
                'description' => 'A steamy and suspenseful romance full of secrets and passion.',
                'image' => 'romance (9).jpg',
            ],
            [
                'title' => 'It Ends With Us',
                'author' => 'Colleen Hoover',
                'description' => 'A powerful story of love, heartbreak, and resilience.',
                'image' => 'romance (10).jpg',
            ],
            [
                'title' => 'Reckless',
                'author' => 'Lauren Roberts',
                'description' => 'A romance where danger and desire are never far apart.',
                'image' => 'romance (11).jpg',
            ],
            [
                'title' => 'Funny Story',
                'author' => 'Emily Henry',
                'description' => 'A charming romantic comedy about unexpected love.',
                'image' => 'romance (12).jpg',
            ],
            [
                'title' => 'Broken Country',
                'author' => 'Clare Leslie Hall',
                'description' => 'A tender love story set in a rural landscape.',
                'image' => 'romance (13).jpg',
            ],
            [
                'title' => 'Fearless',
                'author' => 'Lauren Roberts',
                'description' => 'A sweeping romance with high stakes and deep emotions.',
                'image' => 'romance (14).jpg',
            ],
            [
                'title' => 'The Wrath of the Fallen',
                'author' => 'Amber V. Nicole',
                'description' => 'A passionate romance set amidst fantasy and danger.',
                'image' => 'romance (15).jpg',
            ],
            [
                'title' => 'Heart of the Sun',
                'author' => 'Mia Sheridan',
                'description' => 'A love story of hope, healing, and second chances.',
                'image' => 'romance (16).jpg',
            ],
        ];

        foreach ($books as $bookData) {
            // Unique slug logic
            $baseSlug = Str::slug($bookData['title']);
            $slug = $baseSlug;
            $counter = 1;
            while (Book::where('slug', $slug)->exists()) {
                $slug = $baseSlug . '-' . $counter;
                $counter++;
            }

            $book = Book::create([
                'title' => $bookData['title'],
                'slug' => $slug,
                'author' => $bookData['author'],
                'description' => $bookData['description'],
                'image' => $bookData['image'],
                'status' => 'published',
            ]);
            if ($romance) {
                $book->categories()->attach($romance->id);
            }
        }
    }
}
