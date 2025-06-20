<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Chapter;

class BookChapterSeeder extends Seeder
{
    public function run(): void
    {
        // Drop old data
        DB::table('chapters')->truncate();

        // Organized by category: Fantasy, Thriller, Romance
        $booksByCategory = [
            'Fantasy' => [
                // Fantasy books: IDs 1 to 14
                [
                    'book_id' => 1,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A mysterious prophecy is revealed in the ancient kingdom, setting a young hero on a journey.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'The protagonist forms an unlikely alliance with a mage and a rogue.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'A confrontation with a mythical beast tests their courage and unity.',
                            'order' => 3,
                        ],
                    ],
                ],
                // ... Add book_id 2 to 14 similarly with their chapters
            ],
            'Thriller' => [
                // Thriller books: IDs 15 to 30
                [
                    'book_id' => 15,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A coded message is found at a crime scene, puzzling investigators.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'The detective uncovers a secret society operating in the city.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'A dangerous chase leads to a shocking betrayal within the police force.',
                            'order' => 3,
                        ],
                    ],
                ],
                // ... Add book_id 16 to 30 similarly with their chapters
            ],
            'Romance' => [
                // Romance books: IDs 31 to 45
                [
                    'book_id' => 31,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'Two rivals clash at a publishing house, each determined to outdo the other.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'A misunderstanding outside of work leads to an unexpected spark between them.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'They must decide if risking their hearts is worth leaving rivalry behind.',
                            'order' => 3,
                        ],
                    ],
                ],
                // ... Add book_id 32 to 45 similarly with their chapters
            ],
        ];

        foreach ($booksByCategory as $category => $books) {
            foreach ($books as $book) {
                foreach ($book['chapters'] as $chapter) {
                    Chapter::create([
                        'book_id' => $book['book_id'],
                        'title' => $chapter['title'],
                        'content' => $chapter['content'],
                        'order' => $chapter['order'],
                    ]);
                }
            }
        }
    }
}
