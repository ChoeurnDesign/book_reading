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
        $fiction = Category::where('name', 'Fiction')->first();
        $thriller = Category::where('name', 'Thriller')->first();
        $nonfiction = Category::where('name', 'Non-Fiction')->first();
        $category = Category::where('name', 'Fantasy')->first();
        $sciencefiction = Category::where('name', 'Science Fiction')->first();
        $romance = Category::where('name', 'Romance')->first();

        $categories = [
            'Fiction' => $fiction,
            'Thriller' => $thriller,
            'Non-Fiction' => $nonfiction,
            'Fantasy' => $category,
            'Science Fiction' => $sciencefiction,
            'Romance' => $romance,
        ];


        // Array of books to seed

        $books = array_merge(
            [
                [
                    'title' => 'The Kite Runner',
                    'author' => 'Khaled Hosseini',
                    'description' => 'A powerful story of friendship and redemption set in Afghanistan.',
                    'image' => 'fiction (1).jpg',
                    'categories' => ['Fiction'],
                ],
                [
                    'title' => 'The Alchemist',
                    'author' => 'Paulo Coelho',
                    'description' => 'A young shepherd embarks on a journey to discover his personal legend.',
                    'image' => 'fiction (2).jpg',
                    'categories' => ['Fiction'],
                ],
                [
                    'title' => 'The Great Gatsby',
                    'author' => 'F. Scott Fitzgerald',
                    'description' => 'A classic tale of love, wealth, and the American Dream in the Roaring Twenties.',
                    'image' => 'fiction (3).jpg',
                    'categories' => ['Fiction'],
                ],
                [
                    'title' => 'Harry Potter and the Sorcerer\'s Stone',
                    'author' => 'J.K. Rowling',
                    'description' => 'A young boy discovers he is a wizard and attends Hogwarts School of Witchcraft and Wizardry.',
                    'image' => 'fiction (4).jpg',
                    'categories' => ['Fiction'],
                ],
                [
                    'title' => 'The Midnight Library',
                    'author' => 'Matt Haig',
                    'description' => 'Exploring regrets and alternate lives, a woman finds herself in a magical library.',
                    'image' => 'fiction (5).jpg',
                    'categories' => ['Fiction'],
                ],
                [
                    'title' => 'Beach Read',
                    'author' => 'Emily Henry',
                    'description' => 'Two writers with writer’s block swap genres and fall in love during one summer.',
                    'image' => 'fiction (6).jpg',
                    'categories' => ['Fiction'],
                ],
                [
                    'title' => 'The Da Vinci Code',
                    'author' => 'Dan Brown',
                    'description' => 'A symbologist uncovers a secret that could shake the foundations of Christianity.',
                    'image' => 'fiction (7).jpg',
                    'categories' => ['Fiction'],
                ],
                [
                    'title' => 'To Kill a Mockingbird',
                    'author' => 'Harper Lee',
                    'description' => 'A powerful novel about racial injustice and childhood in the Deep South.',
                    'image' => 'fiction (8).jpg',
                    'categories' => ['Fiction'],
                ],
                [
                    'title' => 'Reminders of Him',
                    'author' => 'Colleen Hoover',
                    'description' => 'A young mother seeks redemption and a second chance at love after prison.',
                    'image' => 'fiction (9).jpg',
                    'categories' => ['Fiction'],
                ],
                [
                    'title' => '1984',
                    'author' => 'George Orwell',
                    'description' => 'A dystopian novel about totalitarianism and surveillance.',
                    'image' => 'fiction (10).jpg',
                    'categories' => ['Fiction'],
                ],
                [
                    'title' => 'Happy Place',
                    'author' => 'Emily Henry',
                    'description' => 'A couple pretends to still be together for the sake of friends.',
                    'image' => 'fiction (11).jpg',
                    'categories' => ['Fiction'],
                ],
                [
                    'title' => 'Just for the Summer',
                    'author' => 'Abby Jimenez',
                    'description' => 'A summer romance blurs the line between friends and lovers.',
                    'image' => 'fiction (12).jpg',
                    'categories' => ['Fiction'],
                ],
                [
                    'title' => 'My Friends',
                    'author' => 'Fredrik Backman',
                    'description' => 'A heartfelt story of friendship and the bonds that shape our lives.',
                    'image' => 'fiction (13).jpg',
                    'categories' => ['Fiction'],
                ],
                [
                    'title' => 'My Name is Emilia del Valle',
                    'author' => 'Isabel Allende',
                    'description' => 'A sweeping saga of love, loss, and self-discovery.',
                    'image' => 'fiction (14).jpg',
                    'categories' => ['Fiction'],
                ],
                [
                    'title' => 'The Names',
                    'author' => 'Florence Knapp',
                    'description' => 'A compelling narrative about identity and belonging.',
                    'image' => 'fiction (15).jpg',
                    'categories' => ['Fiction'],
                ],
                [
                    'title' => 'What Will People Think?',
                    'author' => 'Sara Hamdan',
                    'description' => 'A thought-provoking novel about societal expectations and personal choices.',
                    'image' => 'fiction (16).jpg',
                    'categories' => ['Fiction'],
                ],
                [
                    'title' => 'Immaculate Conception',
                    'author' => 'Ling Ling Huang',
                    'description' => 'A surreal and moving tale of motherhood and miracles.',
                    'image' => 'fiction (17).jpg',
                    'categories' => ['Fiction'],
                ],
                [
                    'title' => 'The Starving Saints',
                    'author' => 'Caitlin Starling',
                    'description' => 'A mesmerizing story of devotion and sacrifice.',
                    'image' => 'fiction (18).jpg',
                    'categories' => ['Fiction'],
                ],
                [
                    'title' => 'The Perfect Divorce',
                    'author' => 'Jeneva Rose',
                    'description' => 'A suspenseful drama about love, betrayal, and starting over.',
                    'image' => 'fiction (19).jpg',
                    'categories' => ['Fiction'],
                ],
                [
                    'title' => 'The Memory Collectors',
                    'author' => 'Dete Meserve',
                    'description' => 'A gripping mystery about secrets, memories, and healing.',
                    'image' => 'fiction (20).jpg',
                    'categories' => ['Fiction'],
                ],
                [
                    'title' => 'Aftertaste',
                    'author' => 'Daria Lavelle',
                    'description' => 'A story of love, loss, and the lingering taste of the past.',
                    'image' => 'fiction (21).jpg',
                    'categories' => ['Fiction'],
                ],
                [
                    'title' => 'Never Flinch',
                    'author' => 'Stephen King',
                    'description' => 'A chilling thriller where fear is the enemy.',
                    'image' => 'fiction (22).jpg',
                    'categories' => ['Fiction'],
                ],
                [
                    'title' => 'The Tenant',
                    'author' => 'Freida McFadden',
                    'description' => 'A psychological thriller about secrets lurking behind closed doors.',
                    'image' => 'fiction (23).jpg',
                    'categories' => ['Fiction'],
                ],
                [
                    'title' => 'Death Row',
                    'author' => 'Freida McFadden',
                    'description' => 'A gripping story about crime, justice, and redemption.',
                    'image' => 'fiction (24).jpg',
                    'categories' => ['Fiction'],
                ],
            ],
            [
                [
                    'title' => 'A Short History of Nearly Everything',
                    'author' => 'Bill Bryson',
                    'description' => 'An accessible journey through science, explaining how we got from the Big Bang to now.',
                    'image' => 'nonfiction (1).jpg',
                    'categories' => ['Non-Fiction'],
                ],
                [
                    'title' => 'Man\'s Search for Meaning',
                    'author' => 'Viktor E. Frankl',
                    'description' => 'A Holocaust survivor’s reflections on finding purpose in life, even in the darkest times.',
                    'image' => 'nonfiction (2).jpg',
                    'categories' => ['Non-Fiction'],
                ],
                [
                    'title' => 'The Devil in the White City',
                    'author' => 'Erik Larson',
                    'description' => 'A gripping tale of murder, magic, and madness at the 1893 Chicago World\'s Fair.',
                    'image' => 'nonfiction (3).jpg',
                    'categories' => ['Non-Fiction'],
                ],
                [
                    'title' => 'The Immortal Life of Henrietta Lacks',
                    'author' => 'Rebecca Skloot',
                    'description' => 'The story of the woman whose cells changed medical history.',
                    'image' => 'nonfiction (4).jpg',
                    'categories' => ['Non-Fiction'],
                ],
                [
                    'title' => 'We Should All Be Feminists',
                    'author' => 'Chimamanda Ngozi Adichie',
                    'description' => 'A personal and powerful essay on feminism in the 21st century.',
                    'image' => 'nonfiction (5).jpg',
                    'categories' => ['Non-Fiction'],
                ],
                [
                    'title' => 'Sapiens: A Brief History of Humankind',
                    'author' => 'Yuval Noah Harari',
                    'description' => 'A compelling exploration of the history and impact of Homo sapiens.',
                    'image' => 'nonfiction (6).jpg',
                    'categories' => ['Non-Fiction'],
                ],
                [
                    'title' => 'The Subtle Art of Not Giving a F*ck',
                    'author' => 'Mark Manson',
                    'description' => 'A counterintuitive approach to living a good life.',
                    'image' => 'nonfiction (7).jpg',
                    'categories' => ['Non-Fiction'],
                ],
                [
                    'title' => 'Educated',
                    'author' => 'Tara Westover',
                    'description' => 'A memoir about a woman who grows up in a strict and abusive household in rural Idaho but eventually escapes to learn about the wider world through education.',
                    'image' => 'nonfiction (8).jpg',
                    'categories' => ['Non-Fiction'],
                ],
                [
                    'title' => 'Atomic Habits',
                    'author' => 'James Clear',
                    'description' => 'Practical strategies to form good habits, break bad ones, and master the tiny behaviors that lead to remarkable results.',
                    'image' => 'nonfiction (9).jpg',
                    'categories' => ['Non-Fiction'],
                ],
                [
                    'title' => 'Untamed',
                    'author' => 'Glennon Doyle',
                    'description' => 'A memoir and rallying cry for women to trust themselves and break free from societal expectations.',
                    'image' => 'nonfiction (10).jpg',
                    'categories' => ['Non-Fiction'],
                ],
                [
                    'title' => 'Think Again',
                    'author' => 'Adam Grant',
                    'description' => 'A guide to rethinking and unlearning, teaching us to embrace being wrong and to grow.',
                    'image' => 'nonfiction (11).jpg',
                    'categories' => ['Non-Fiction'],
                ],
                [
                    'title' => 'The Wager',
                    'author' => 'David Grann',
                    'description' => 'A thrilling tale of shipwreck, mutiny, and murder on the high seas.',
                    'image' => 'nonfiction (12).jpg',
                    'categories' => ['Non-Fiction'],
                ],
                [
                    'title' => 'Second Life: Having a Child in the Digital Age',
                    'author' => 'Amanda Hess',
                    'description' => 'A modern look at parenting, technology, and identity in a connected world.',
                    'image' => 'nonfiction (13).jpg',
                    'categories' => ['Non-Fiction'],
                ],
                [
                    'title' => 'Spitfires: The American Women Who Flew in World War II',
                    'author' => 'Penny Airman',
                    'description' => 'The courageous story of female pilots in WWII.',
                    'image' => 'nonfiction (14).jpg',
                    'categories' => ['Non-Fiction'],
                ],
                [
                    'title' => 'Mark Twain',
                    'author' => 'Ron Chernow',
                    'description' => 'An in-depth biography of the iconic American author and humorist.',
                    'image' => 'nonfiction (15).jpg',
                    'categories' => ['Non-Fiction'],
                ],
                [
                    'title' => 'My Next Breath: A Memoir',
                    'author' => 'Jeremy Renner',
                    'description' => 'A memoir chronicling personal challenges and triumphs.',
                    'image' => 'nonfiction (16).jpg',
                    'categories' => ['Non-Fiction'],
                ],
            ],
            [
                [
                    'title' => 'Brave New World',
                    'author' => 'Aldous Huxley',
                    'description' => 'A dystopian future where technology and genetic engineering shape society.',
                    'image' => 'sciencefiction (1).jpg',
                    'categories' => ['Science Fiction'],
                ],
                [
                    'title' => 'Light Bringer',
                    'author' => 'Pierce Brown',
                    'description' => 'An epic space opera of rebellion and hope in a divided galaxy.',
                    'image' => 'sciencefiction (2).jpg',
                    'categories' => ['Science Fiction'],
                ],
                [
                    'title' => 'Project Hail Mary',
                    'author' => 'Andy Weir',
                    'description' => 'A lone astronaut races to save humanity from extinction.',
                    'image' => 'sciencefiction (3).jpg',
                    'categories' => ['Science Fiction'],
                ],
                [
                    'title' => 'Mickey7',
                    'author' => 'Edward Ashton',
                    'description' => 'A disposable crew member on a distant planet faces impossible odds and identity.',
                    'image' => 'sciencefiction (4).jpg',
                    'categories' => ['Science Fiction'],
                ],
                [
                    'title' => 'Sea of Tranquility',
                    'author' => 'Emily St. John Mandel',
                    'description' => 'A beautifully woven tale of time travel and humanity across centuries.',
                    'image' => 'sciencefiction (5).jpg',
                    'categories' => ['Science Fiction'],
                ],
                [
                    'title' => 'Harmattan Season',
                    'author' => 'Tochi Onyebuchi',
                    'description' => 'A speculative narrative exploring climate, migration, and survival.',
                    'image' => 'sciencefiction (6).jpg',
                    'categories' => ['Science Fiction'],
                ],
                [
                    'title' => 'Sky Daddy',
                    'author' => 'Kate Folk',
                    'description' => 'A surreal flight into the absurd and the unknown.',
                    'image' => 'sciencefiction (7).jpg',
                    'categories' => ['Science Fiction'],
                ],
                [
                    'title' => 'Overgrowth',
                    'author' => 'Mira Grant',
                    'description' => 'A bio-thriller where nature takes an unexpected and deadly turn.',
                    'image' => 'sciencefiction (8).jpg',
                    'categories' => ['Science Fiction'],
                ],
                [
                    'title' => 'Awake in the Floating City',
                    'author' => 'Susanna Kwan',
                    'description' => 'A mesmerizing journey through a city suspended above the clouds.',
                    'image' => 'sciencefiction (9).jpg',
                    'categories' => ['Science Fiction'],
                ],
                [
                    'title' => 'Esperance',
                    'author' => 'Adam Oyebanji',
                    'description' => 'A gripping space adventure with themes of hope and survival.',
                    'image' => 'sciencefiction (10).jpg',
                    'categories' => ['Science Fiction'],
                ],
                [
                    'title' => 'It Takes a Psychic',
                    'author' => 'Jayne Ann Krentz',
                    'description' => 'A blend of psychic abilities and futuristic intrigue.',
                    'image' => 'sciencefiction (11).jpg',
                    'categories' => ['Science Fiction'],
                ],
                [
                    'title' => 'The Book of Records',
                    'author' => 'Madeleine Thien',
                    'description' => 'A speculative meditation on memory, time, and identity.',
                    'image' => 'sciencefiction (12).jpg',
                    'categories' => ['Science Fiction'],
                ],
                [
                    'title' => 'The Memory Collectors',
                    'author' => 'Dete Meserve',
                    'description' => 'A mysterious tale where memories hold the key to the future.',
                    'image' => 'sciencefiction (13).jpg',
                    'categories' => ['Science Fiction'],
                ],
                [
                    'title' => 'Dark Dawn',
                    'author' => 'Seth Ring',
                    'description' => 'A thrilling odyssey through space as darkness rises.',
                    'image' => 'sciencefiction (14).jpg',
                    'categories' => ['Science Fiction'],
                ],
                [
                    'title' => 'All Superheroes Need PR',
                    'author' => 'Elizabeth Stephens',
                    'description' => 'A witty and imaginative story where superheroes navigate fame.',
                    'image' => 'sciencefiction (15).jpg',
                    'categories' => ['Science Fiction'],
                ],
                [
                    'title' => 'He Who Fights with Monsters',
                    'author' => 'Shirtaloon',
                    'description' => 'A saga of transformation and adventure in parallel worlds.',
                    'image' => 'sciencefiction (16).jpg',
                    'categories' => ['Science Fiction'],
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
