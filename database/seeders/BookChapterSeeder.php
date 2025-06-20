<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Chapter;

class BookChapterSeeder extends Seeder
{
    public function run(): void
    {
        // Drop old data
        // DB::table('chapters')->truncate();

        // Organized by category: Fantasy, Thriller, Romance
        $booksByCategory = [
            'Fantasy' => [
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
                [
                    'book_id' => 2,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A young orphan discovers a hidden portal in the city library.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'The orphan travels to a magical world and befriends a talking animal.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'An ancient evil rises, forcing the group to seek a legendary artifact.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 3,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A prince is cursed by a jealous sorcerer on his coronation day.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'He embarks on a quest to find the cure, accompanied by a loyal knight.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'They face trials in the enchanted forest, learning hard truths about friendship.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 4,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'Twin sisters discover they are heirs to a throne in a distant land.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'They must outwit court rivals and decipher cryptic family secrets.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'A magical duel reveals their true powers and unites the kingdom.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 5,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A dragon egg is stolen from a mountain village.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'The villagers enlist a retired hero to retrieve it.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'They confront a band of thieves and reclaim the egg after a fierce battle.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 6,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A forbidden spellbook is found in a school for young wizards.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'Students accidentally unleash a shadow creature.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'They work together to banish the entity and restore peace.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 7,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A reclusive alchemist receives a message from a lost love.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'He journeys across deserts and mountains to find her.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'They are reunited after the alchemist breaks a powerful enchantment.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 8,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A mysterious tower appears overnight in the capital city.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'Adventurers compete to reach its summit and claim the promised reward.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'Only those who show true bravery and compassion succeed.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 9,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A young witch is exiled for practicing forbidden magic.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'She discovers others like her in a hidden sanctuary.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'Together, they defend their home from a witch-hunter invasion.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 10,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'An apprentice learns of a plot to overthrow the kingdom.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'She seeks help from a wise old sage.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'A climactic battle in the castle’s halls determines the fate of the land.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 11,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A port city is threatened by a sea monster.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'A team of sailors sets out to hunt the beast.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'They discover the monster is the guardian of a long-lost treasure.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 12,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A magical illness sweeps through a remote mountain village.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'A healer searches for a rare flower to craft a cure.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'The healer’s selfless act breaks the curse and saves the village.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 13,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A legendary sword is discovered in the ruins of an ancient city.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'Rival factions race to claim the artifact.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'The sword chooses a new wielder who unites the warring clans.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 14,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A prophecy foretells the return of an ancient dragon.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'A group of heroes gathers to prevent the world’s destruction.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'Through sacrifice and unity, they seal the dragon away once more.',
                            'order' => 3,
                        ],
                    ],
                ],
            ],


            'Thriller' => [
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
                [
                    'book_id' => 16,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A renowned journalist vanishes after receiving an ominous tip about a high-profile corruption case.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'The investigation leads to a string of suspicious deaths, and the main detective faces mounting pressure as the media frenzy grows.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'A desperate race against time forces the detective to trust an unlikely ally, uncovering the mastermind behind the conspiracy.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 17,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A new neighbor moves in, and soon after, a series of break-ins plague the neighborhood.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'Suspicion falls on the newcomer, but the truth proves far more complicated.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'The real culprit is revealed in a tense confrontation that tests loyalties.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 18,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'An anonymous threat is sent to a popular podcast host.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'As the host digs into her own past, old enemies resurface.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'A live broadcast traps the host and her stalker in a dangerous game.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 19,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A commuter witnesses a crime from a train window, but no one believes her.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'Determined to prove what she saw, she launches her own investigation.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'The truth is more shocking than she imagined, putting her life in danger.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 20,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A celebrated painter is accused of a shocking crime and refuses to speak.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'A psychotherapist becomes obsessed with unlocking her silence.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'A hidden diary reveals the truth behind the crime.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 21,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'Guests gather for a wedding on a remote island as a storm approaches.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'Old grudges and secrets come to light among the wedding party.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'A murder occurs, and everyone is a suspect.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 22,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A struggling writer is hired to finish a bestselling series for a reclusive author.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'She finds a disturbing manuscript that hints at dark family secrets.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'The discovery puts her in grave danger as fiction and reality blur.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 23,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A woman returns to her hometown, haunted by a murder she was accused of years ago.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'A true crime podcaster arrives, determined to uncover the truth.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'New evidence comes to light, changing everything.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 24,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A woman falls for a charming new boyfriend, but something feels off.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'She uncovers a web of lies and deceit.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'A dangerous confrontation forces her to fight for her life.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 25,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A medical student is assigned to a night shift on a notorious psychiatric ward.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'Unexplained events and patient disappearances escalate.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'A shocking incident blurs the line between reality and delusion.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 26,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A group of strangers wakes up after a car crash on a remote road.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'Paranoia grows as secrets are revealed among the group.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'They realize the crash was not an accident as danger closes in.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 27,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A small town is haunted by whispers of dead girls and unsolved disappearances.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'The protagonist investigates, uncovering hidden connections.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'A chilling discovery reveals the truth behind the whispers.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 28,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A newcomer in a coastal town is met with suspicion after a series of deaths.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'She uncovers a pattern linking the deaths to her own past.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'A race against time to stop the killer ends in a dramatic showdown.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 29,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A retired detective is drawn back into action after a late-night whistle signals a new threat.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'Old cases and new clues collide as the detective investigates.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'The detective faces the predator in a tense final confrontation.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 30,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A family moves into a house with a dark history, hoping for a fresh start.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'Unsettling events escalate as secrets from the past surface.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'The family must confront the house’s evil presence to survive.',
                            'order' => 3,
                        ],
                    ],
                ],
            ],


            'Romance' => [
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
                [
                    'book_id' => 32,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A reclusive actress shares her life story with a young journalist.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'Secrets of past loves and heartbreaks are revealed.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'A bold confession changes the journalist’s life forever.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 33,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A First Son and a British prince begin as political rivals.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'Their public rivalry turns into a secret friendship.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'Love blooms, but they must decide if it’s worth the risk for both families.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 34,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A hockey star proposes a fake relationship to improve his grades.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'Their arrangement starts to feel real as they spend more time together.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'They must confront their feelings and decide if they want more than just a deal.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 35,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'Two best friends reconnect on a summer vacation after years apart.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'Old feelings resurface as they visit nostalgic places.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'A heartfelt confession leads to a new chapter in their relationship.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 36,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A fake-dating scheme between a grad student and a professor begins with a kiss.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'Their arrangement brings unexpected closeness and vulnerability.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'They must decide if their love is more than just a hypothesis.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 37,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A city doctor finds herself stranded in a small town.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'She bonds with a local carpenter over shared struggles.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'She must choose between her old life and new love.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 38,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A literary agent and an editor find themselves in a small town together.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'They are forced to work together on an important project.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'Their rivalry turns to romance as they discover what truly matters.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 39,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A woman’s brother’s best friend moves in to protect her.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'Their forced proximity leads to growing attraction.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'Dark secrets threaten their budding romance.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 40,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A young woman falls for a charming doctor while haunted by her past.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'Her first love returns, forcing her to confront difficult truths.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'She must choose between breaking the cycle or staying in a painful relationship.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 41,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A heroine is drawn to a mysterious and reckless stranger.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'Secrets and betrayals test their trust.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'They must fight for their love against all odds.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 42,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'Two heartbroken people become unlikely housemates.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'They agree to fake-date for the sake of their exes.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'Their fake relationship turns real as they heal each other.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 43,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A grieving woman returns to her family’s farm.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'She finds comfort and hope with a man haunted by his own losses.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'Together, they find the courage to rebuild their lives.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 44,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A determined heroine meets a mysterious stranger with a hidden past.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'Danger and betrayal test their bond.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'They learn to trust and love fearlessly.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 45,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A forbidden love grows between a mortal and a fallen angel.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'They are hunted by enemies from both worlds.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'They make the ultimate sacrifice for a chance at peace.',
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 46,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => 'A chef dreams of success and meets a brooding newcomer.',
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => 'Family drama and ambition threaten to keep them apart.',
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => 'They find happiness by embracing love and forgiveness.',
                            'order' => 3,
                        ],
                    ],
                ],
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
