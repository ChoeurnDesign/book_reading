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
        // Ensure 'Thriller' category exists
        $thriller = Category::where('name', 'Thriller')->first();

        $books = [
            [
                'title' => 'Angels & Demons',
                'author' => 'Dan Brown',
                'description' => 'A symbologist races to prevent a secret society from destroying Vatican City.',
                'image' => 'thriller (1).jpg',
            ],
            [
                'title' => 'The Girl Who Played with Fire',
                'author' => 'Stieg Larsson',
                'description' => 'A gripping mystery involving hackers, journalists, and dark secrets.',
                'image' => 'thriller (2).jpg',
            ],
            [
                'title' => 'Sharp Objects',
                'author' => 'Gillian Flynn',
                'description' => 'A journalist returns to her hometown to cover a series of brutal murders.',
                'image' => 'thriller (3).jpg',
            ],
            [
                'title' => 'Gone Girl',
                'author' => 'Gillian Flynn',
                'description' => 'A psychological thriller about a marriage gone terribly wrong.',
                'image' => 'thriller (4).jpg',
            ],
            [
                'title' => 'The Girl on the Train',
                'author' => 'Paula Hawkins',
                'description' => 'A woman becomes entangled in a missing persons investigation.',
                'image' => 'thriller (5).jpg',
            ],
            [
                'title' => 'The Silent Patient',
                'author' => 'Alex Michaelides',
                'description' => 'A woman\'s act of violence against her husband—and her refusal to speak—unravels in this intense thriller.',
                'image' => 'thriller (6).jpg',
            ],
            [
                'title' => 'The Guest List',
                'author' => 'Lucy Foley',
                'description' => 'A wedding celebration turns deadly on a remote Irish island.',
                'image' => 'thriller (7).jpg',
            ],
            [
                'title' => 'Verity',
                'author' => 'Colleen Hoover',
                'description' => 'A struggling writer is hired to finish a book and discovers disturbing secrets.',
                'image' => 'thriller (8).jpg',
            ],
            [
                'title' => 'Listen for the Lie',
                'author' => 'Amy Tintera',
                'description' => 'A suspenseful tale where buried truths are forced to the surface.',
                'image' => 'thriller (9).jpg',
            ],
            [
                'title' => 'The Boyfriend',
                'author' => 'Freida McFadden',
                'description' => 'A twisty domestic thriller full of secrets and lies.',
                'image' => 'thriller (10).jpg',
            ],
            [
                'title' => 'Ward D',
                'author' => 'Freida McFadden',
                'description' => 'A psychological thriller set inside the locked walls of a hospital ward.',
                'image' => 'thriller (11).jpg',
            ],
            [
                'title' => 'The Crash',
                'author' => 'Freida McFadden',
                'description' => 'A suspenseful novel where danger lurks on the icy roads.',
                'image' => 'thriller (12).jpg',
            ],
            [
                'title' => 'Whispers of Dead Girls',
                'author' => 'Marlee Bush',
                'description' => 'Chilling secrets and past trauma resurface in this gripping thriller.',
                'image' => 'thriller (13).jpg',
            ],
            [
                'title' => 'Dying to Meet You',
                'author' => 'Sarina Bowen',
                'description' => 'A domestic thriller where first impressions can be deadly.',
                'image' => 'thriller (14).jpg',
            ],
            [
                'title' => 'Whistle',
                'author' => 'Linwood Barclay',
                'description' => 'A high-stakes thriller about survival and uncovering the truth.',
                'image' => 'thriller (15).jpg',
            ],
            [
                'title' => 'We Live Here Now',
                'author' => 'Sarah Pinborough',
                'description' => 'A haunting story of secrets and survival in a mysterious house.',
                'image' => 'thriller (16).jpg',
            ],
        ];

        foreach ($books as $bookData) {
            // Ensure unique slug
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
            if ($thriller) {
                $book->categories()->attach($thriller->id);
            }
        }
    }
}
