<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        // Truncate pivot table and books
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('book_categories')->truncate();
        DB::table('chapters')->truncate();
        Book::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Ensure categories exist before attaching them to books
        $thriller = Category::where('name', 'Thriller')->first();
        $category = Category::where('name', 'Fantasy')->first();
        $sciencefiction = Category::where('name', 'Sciencefiction')->first();
        $romance = Category::where('name', 'Romance')->first();

        $categories = Category::all()->keyBy('name'); 


        // Array of books to seed

        $books = array_merge(
            [
                [
                    'title' => 'Brave New World',
                    'author' => 'Aldous Huxley',
                    'description' => 'A dystopian future where technology and genetic engineering shape society.',
                    'image' => 'sciencefiction (1).jpg',
                    'categories' => ['Science-fiction'],
                ],
                [
                    'title' => 'Light Bringer',
                    'author' => 'Pierce Brown',
                    'description' => 'An epic space opera of rebellion and hope in a divided galaxy.',
                    'image' => 'sciencefiction (2).jpg',
                    'categories' => ['Science-fiction'],
                ],
                [
                    'title' => 'Project Hail Mary',
                    'author' => 'Andy Weir',
                    'description' => 'A lone astronaut races to save humanity from extinction.',
                    'image' => 'sciencefiction (3).jpg',
                    'categories' => ['Science-fiction'],
                ],
                [
                    'title' => 'Mickey7',
                    'author' => 'Edward Ashton',
                    'description' => 'A disposable crew member on a distant planet faces impossible odds and identity.',
                    'image' => 'sciencefiction (4).jpg',
                    'categories' => ['Science-fiction'],
                ],
                [
                    'title' => 'Sea of Tranquility',
                    'author' => 'Emily St. John Mandel',
                    'description' => 'A beautifully woven tale of time travel and humanity across centuries.',
                    'image' => 'sciencefiction (5).jpg',
                    'categories' => ['Science-fiction'],
                ],
                [
                    'title' => 'Harmattan Season',
                    'author' => 'Tochi Onyebuchi',
                    'description' => 'A speculative narrative exploring climate, migration, and survival.',
                    'image' => 'sciencefiction (6).jpg',
                    'categories' => ['Science-fiction'],
                ],
                [
                    'title' => 'Sky Daddy',
                    'author' => 'Kate Folk',
                    'description' => 'A surreal flight into the absurd and the unknown.',
                    'image' => 'sciencefiction (7).jpg',
                    'categories' => ['Science-fiction'],
                ],
                [
                    'title' => 'Overgrowth',
                    'author' => 'Mira Grant',
                    'description' => 'A bio-thriller where nature takes an unexpected and deadly turn.',
                    'image' => 'sciencefiction (8).jpg',
                    'categories' => ['Science-fiction'],
                ],
                [
                    'title' => 'Awake in the Floating City',
                    'author' => 'Susanna Kwan',
                    'description' => 'A mesmerizing journey through a city suspended above the clouds.',
                    'image' => 'sciencefiction (9).jpg',
                    'categories' => ['Science-fiction'],
                ],
                [
                    'title' => 'Esperance',
                    'author' => 'Adam Oyebanji',
                    'description' => 'A gripping space adventure with themes of hope and survival.',
                    'image' => 'sciencefiction (10).jpg',
                    'categories' => ['Science-fiction'],
                ],
                [
                    'title' => 'It Takes a Psychic',
                    'author' => 'Jayne Ann Krentz',
                    'description' => 'A blend of psychic abilities and futuristic intrigue.',
                    'image' => 'sciencefiction (11).jpg',
                    'categories' => ['Science-fiction'],
                ],
                [
                    'title' => 'The Book of Records',
                    'author' => 'Madeleine Thien',
                    'description' => 'A speculative meditation on memory, time, and identity.',
                    'image' => 'sciencefiction (12).jpg',
                    'categories' => ['Science-fiction'],
                ],
                [
                    'title' => 'The Memory Collectors',
                    'author' => 'Dete Meserve',
                    'description' => 'A mysterious tale where memories hold the key to the future.',
                    'image' => 'sciencefiction (13).jpg',
                    'categories' => ['Science-fiction'],
                ],
                [
                    'title' => 'Dark Dawn',
                    'author' => 'Seth Ring',
                    'description' => 'A thrilling odyssey through space as darkness rises.',
                    'image' => 'sciencefiction (14).jpg',
                    'categories' => ['Science-fiction'],
                ],
                [
                    'title' => 'All Superheroes Need PR',
                    'author' => 'Elizabeth Stephens',
                    'description' => 'A witty and imaginative story where superheroes navigate fame.',
                    'image' => 'sciencefiction (15).jpg',
                    'categories' => ['Science-fiction'],
                ],
                [
                    'title' => 'He Who Fights with Monsters',
                    'author' => 'Shirtaloon',
                    'description' => 'A saga of transformation and adventure in parallel worlds.',
                    'image' => 'sciencefiction (16).jpg',
                    'categories' => ['Science-fiction'],
                ],
            ],
            [
                [
                    'title' => 'Harry Potter and the Prisoner of Azkaban',
                    'author' => 'J.K. Rowling',
                    'description' => 'Harry faces new dangers and discovers secrets about his past in his third year at Hogwarts.',
                    'image' => 'fantasy (1).jpg',
                    'categories' => ['Fantasy'],
                ],
                [
                    'title' => 'The Hobbit',
                    'author' => 'J.R.R. Tolkien',
                    'description' => 'Bilbo Baggins embarks on a grand adventure with dwarves to reclaim their homeland.',
                    'image' => 'fantasy (2).jpg',
                    'categories' => ['Fantasy'],
                ],
                [
                    'title' => 'Harry Potter and the Chamber of Secrets',
                    'author' => 'J.K. Rowling',
                    'description' => 'Mysterious attacks threaten Hogwarts as Harry returns for his second year.',
                    'image' => 'fantasy (3).jpg',
                    'categories' => ['Fantasy'],
                ],
                [
                    'title' => 'A Court of Mist and Fury',
                    'author' => 'Sarah J. Maas',
                    'description' => 'Feyre navigates faerie courts and battles new threats in a richly imagined world.',
                    'image' => 'fantasy (4).jpg',
                    'categories' => ['Fantasy'],
                ],
                [
                    'title' => 'The Ballad of Songbirds and Snakes',
                    'author' => 'Suzanne Collins',
                    'description' => 'A prequel to The Hunger Games, exploring the rise of Coriolanus Snow.',
                    'image' => 'fantasy (5).jpg',
                    'categories' => ['Fantasy'],
                ],
                [
                    'title' => 'Once Upon a Broken Heart',
                    'author' => 'Stephanie Garber',
                    'description' => 'A magical tale of love, curses, and fate in a whimsical world.',
                    'image' => 'fantasy (6).jpg',
                    'categories' => ['Fantasy'],
                ],
                [
                    'title' => 'The Ballad of Never After',
                    'author' => 'Stephanie Garber',
                    'description' => 'A continuation of the magical adventures in the world of fairy tales and heartbreak.',
                    'image' => 'fantasy (7).jpg',
                    'categories' => ['Fantasy'],
                ],
                [
                    'title' => 'A Curse for True Love',
                    'author' => 'Stephanie Garber',
                    'description' => 'A curse, true love, and destiny intertwine in this enchanting fantasy.',
                    'image' => 'fantasy (8).jpg',
                    'categories' => ['Fantasy'],
                ],
                [
                    'title' => 'Heartless Hunter',
                    'author' => 'Kristen Ciccarelli',
                    'description' => 'A thrilling story of power, betrayal, and unexpected alliances.',
                    'image' => 'fantasy (9).jpg',
                    'categories' => ['Fantasy'],
                ],
                [
                    'title' => 'Reckless',
                    'author' => 'Lauren Roberts',
                    'description' => 'Danger and desire collide in a world where rules are meant to be broken.',
                    'image' => 'fantasy (10).jpg',
                    'categories' => ['Fantasy'],
                ],
                [
                    'title' => 'The Devils',
                    'author' => 'Joe Abercrombie',
                    'description' => 'A dark and gritty tale of war, honor, and the supernatural.',
                    'image' => 'fantasy (11).jpg',
                    'categories' => ['Fantasy'],
                ],
                [
                    'title' => 'The Wrath of the Fallen',
                    'author' => 'Amber V. Nicole',
                    'description' => 'A battle for survival and vengeance in a world of gods and monsters.',
                    'image' => 'fantasy (12).jpg',
                    'categories' => ['Fantasy'],
                ],
                [
                    'title' => 'The Incandescent',
                    'author' => 'Emily Tesh',
                    'description' => 'A tale of magic and transformation in a luminous, otherworldly setting.',
                    'image' => 'fantasy (13).jpg',
                    'categories' => ['Fantasy'],
                ],
                [
                    'title' => 'Aftertaste',
                    'author' => 'Daria Lavelle',
                    'description' => 'A haunting fantasy where past choices linger and shape the future.',
                    'image' => 'fantasy (14).jpg',
                    'categories' => ['Fantasy'],
                ],
            ],
            [
                [
                    'title' => 'Angels & Demons',
                    'author' => 'Dan Brown',
                    'description' => 'A symbologist races to prevent a secret society from destroying Vatican City.',
                    'image' => 'thriller (1).jpg',
                    'categories' => ['Thriller'],
                ],
                [
                    'title' => 'The Girl Who Played with Fire',
                    'author' => 'Stieg Larsson',
                    'description' => 'A gripping mystery involving hackers, journalists, and dark secrets.',
                    'image' => 'thriller (2).jpg',
                    'categories' => ['Thriller'],
                ],
                [
                    'title' => 'Sharp Objects',
                    'author' => 'Gillian Flynn',
                    'description' => 'A journalist returns to her hometown to cover a series of brutal murders.',
                    'image' => 'thriller (3).jpg',
                    'categories' => ['Thriller'],
                ],
                [
                    'title' => 'Gone Girl',
                    'author' => 'Gillian Flynn',
                    'description' => 'A psychological thriller about a marriage gone terribly wrong.',
                    'image' => 'thriller (4).jpg',
                    'categories' => ['Thriller'],
                ],
                [
                    'title' => 'The Girl on the Train',
                    'author' => 'Paula Hawkins',
                    'description' => 'A woman becomes entangled in a missing persons investigation.',
                    'image' => 'thriller (5).jpg',
                    'categories' => ['Thriller'],
                ],
                [
                    'title' => 'The Silent Patient',
                    'author' => 'Alex Michaelides',
                    'description' => 'A woman\'s act of violence against her husband—and her refusal to speak—unravels in this intense thriller.',
                    'image' => 'thriller (6).jpg',
                    'categories' => ['Thriller'],
                ],
                [
                    'title' => 'The Guest List',
                    'author' => 'Lucy Foley',
                    'description' => 'A wedding celebration turns deadly on a remote Irish island.',
                    'image' => 'thriller (7).jpg',
                    'categories' => ['Thriller'],
                ],
                [
                    'title' => 'Verity',
                    'author' => 'Colleen Hoover',
                    'description' => 'A struggling writer is hired to finish a book and discovers disturbing secrets.',
                    'image' => 'thriller (8).jpg',
                    'categories' => ['Thriller'],
                ],
                [
                    'title' => 'Listen for the Lie',
                    'author' => 'Amy Tintera',
                    'description' => 'A suspenseful tale where buried truths are forced to the surface.',
                    'image' => 'thriller (9).jpg',
                    'categories' => ['Thriller'],
                ],
                [
                    'title' => 'The Boyfriend',
                    'author' => 'Freida McFadden',
                    'description' => 'A twisty domestic thriller full of secrets and lies.',
                    'image' => 'thriller (10).jpg',
                    'categories' => ['Thriller'],
                ],
                [
                    'title' => 'Ward D',
                    'author' => 'Freida McFadden',
                    'description' => 'A psychological thriller set inside the locked walls of a hospital ward.',
                    'image' => 'thriller (11).jpg',
                    'categories' => ['Thriller'],
                ],
                [
                    'title' => 'The Crash',
                    'author' => 'Freida McFadden',
                    'description' => 'A suspenseful novel where danger lurks on the icy roads.',
                    'image' => 'thriller (12).jpg',
                    'categories' => ['Thriller'],
                ],
                [
                    'title' => 'Whispers of Dead Girls',
                    'author' => 'Marlee Bush',
                    'description' => 'Chilling secrets and past trauma resurface in this gripping thriller.',
                    'image' => 'thriller (13).jpg',
                    'categories' => ['Thriller'],
                ],
                [
                    'title' => 'Dying to Meet You',
                    'author' => 'Sarina Bowen',
                    'description' => 'A domestic thriller where first impressions can be deadly.',
                    'image' => 'thriller (14).jpg',
                    'categories' => ['Thriller'],
                ],
                [
                    'title' => 'Whistle',
                    'author' => 'Linwood Barclay',
                    'description' => 'A high-stakes thriller about survival and uncovering the truth.',
                    'image' => 'thriller (15).jpg',
                    'categories' => ['Thriller'],
                ],
                [
                    'title' => 'We Live Here Now',
                    'author' => 'Sarah Pinborough',
                    'description' => 'A haunting story of secrets and survival in a mysterious house.',
                    'image' => 'thriller (16).jpg',
                    'categories' => ['Thriller'],
                ],
            ],
            [
                [
                    'title' => 'The Hating Game',
                    'author' => 'Sally Thorne',
                    'description' => 'A witty enemies-to-lovers office romance full of humor and heart.',
                    'image' => 'romance (1).jpg',
                    'categories' => ['Romance'],
                ],
                [
                    'title' => 'The Seven Husbands of Evelyn Hugo',
                    'author' => 'Taylor Jenkins Reid',
                    'description' => 'A reclusive Hollywood icon shares her glamorous and scandalous life story.',
                    'image' => 'romance (2).jpg',
                    'categories' => ['Romance'],
                ],
                [
                    'title' => 'Red, White & Royal Blue',
                    'author' => 'Casey McQuiston',
                    'description' => 'A fun and heartfelt romance between the First Son of the United States and a British prince.',
                    'image' => 'romance (3).jpg',
                    'categories' => ['Romance'],
                ],
                [
                    'title' => 'The Deal',
                    'author' => 'Elle Kennedy',
                    'description' => 'A hockey player and a studious girl strike a deal that leads to unexpected love.',
                    'image' => 'romance (4).jpg',
                    'categories' => ['Romance'],
                ],
                [
                    'title' => 'People We Meet on Vacation',
                    'author' => 'Emily Henry',
                    'description' => 'Two best friends go on one last vacation to see if they can become more than friends.',
                    'image' => 'romance (5).jpg',
                    'categories' => ['Romance'],
                ],
                [
                    'title' => 'The Love Hypothesis',
                    'author' => 'Ali Hazelwood',
                    'description' => 'A fake relationship between scientists turns into real feelings in this charming romance.',
                    'image' => 'romance (6).jpg',
                    'categories' => ['Romance'],
                ],
                [
                    'title' => 'Part of Your World',
                    'author' => 'Abby Jimenez',
                    'description' => 'A small-town romance that challenges everything a city girl thought she wanted.',
                    'image' => 'romance (7).jpg',
                    'categories' => ['Romance'],
                ],
                [
                    'title' => 'Book Lovers',
                    'author' => 'Emily Henry',
                    'description' => 'A literary agent and an editor discover love in a charming small town.',
                    'image' => 'romance (8).jpg',
                    'categories' => ['Romance'],
                ],
                [
                    'title' => 'Twisted Love',
                    'author' => 'Ana Huang',
                    'description' => 'A steamy romance about secrets, betrayal, and the power of love.',
                    'image' => 'romance (9).jpg',
                    'categories' => ['Romance'],
                ],
                [
                    'title' => 'It Ends With Us',
                    'author' => 'Colleen Hoover',
                    'description' => 'A deeply emotional novel about love, resilience, and difficult choices.',
                    'image' => 'romance (10).jpg',
                    'categories' => ['Romance'],
                ],
                [
                    'title' => 'Reckless',
                    'author' => 'Lauren Roberts',
                    'description' => 'A passionate romance where danger and desire collide.',
                    'image' => 'romance (11).jpg',
                    'categories' => ['Romance'],
                ],
                [
                    'title' => 'Funny Story',
                    'author' => 'Emily Henry',
                    'description' => 'A heartwarming romantic comedy about unexpected love and second chances.',
                    'image' => 'romance (12).jpg',
                    'categories' => ['Romance'],
                ],
                [
                    'title' => 'Broken Country',
                    'author' => 'Claire Leslie Hall',
                    'description' => 'A moving romance set against the backdrop of change and new beginnings.',
                    'image' => 'romance (13).jpg',
                    'categories' => ['Romance'],
                ],
                [
                    'title' => 'Fearless',
                    'author' => 'Lauren Roberts',
                    'description' => 'A story of courage, love, and fighting for what matters most.',
                    'image' => 'romance (14).jpg',
                    'categories' => ['Romance'],
                ],
                [
                    'title' => 'The Wrath of the Fallen',
                    'author' => 'Amber V. Nicole',
                    'description' => 'A fantasy romance filled with passion and peril.',
                    'image' => 'romance (15).jpg',
                    'categories' => ['Romance'],
                ],
                [
                    'title' => 'Heart of the Sun',
                    'author' => 'Mia Sheridan',
                    'description' => 'A love story about hope, healing, and the power of second chances.',
                    'image' => 'romance (16).jpg',
                    'categories' => ['Romance'],
                ],
            ]
        );

        foreach ($books as $bookData) {
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

            // Attach all relevant categories
            if (!empty($bookData['categories'])) {
                $categoryIds = [];
                foreach ($bookData['categories'] as $catName) {
                    if (isset($categories[$catName])) {
                        $categoryIds[] = $categories[$catName]->id;
                    }
                }
                $book->categories()->attach($categoryIds);
            }
        }
    }
}
