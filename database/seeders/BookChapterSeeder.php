<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Chapter;

class BookChapterSeeder extends Seeder
{
    public function run(): void
    {
        // === BOOK 87: Angels & Demons (Dan Brown) ===
        $bookId = 87;
        $chapters = [
            [
                'title' => 'Chapter 1',
                'content' => <<<MD
Symbologist Robert Langdon is summoned to a Swiss research facility to analyze a cryptic symbol burned into a murdered physicist’s chest. Soon after, he discovers a plot that threatens Vatican City, launching a desperate race against time.
MD,
                'order' => 1,
            ],
            [
                'title' => 'Chapter 2',
                'content' => <<<MD
Langdon and scientist Vittoria Vetra follow a trail of ancient clues through Rome’s churches and catacombs. As they unravel the Illuminati’s secrets, they must outwit assassins and confront the power of faith and science colliding.
MD,
                'order' => 2,
            ],
            [
                'title' => 'Chapter 3',
                'content' => <<<MD
In a dramatic final confrontation, the true villain is revealed and a catastrophic disaster is narrowly averted. Langdon and Vittoria emerge forever changed by the mysteries they’ve uncovered.
MD,
                'order' => 3,
            ],
        ];
        foreach ($chapters as $chapter) {
            Chapter::create([
                'book_id' => $bookId,
                'title' => $chapter['title'],
                'content' => $chapter['content'],
                'order' => $chapter['order'],
            ]);
        }

        // === BOOK 88: The Girl Who Played with Fire (Stieg Larsson) ===
        $bookId = 88;
        $chapters = [
            [
                'title' => 'Chapter 1',
                'content' => <<<MD
Lisbeth Salander becomes the prime suspect in a triple murder. Journalist Mikael Blomkvist races to clear her name, uncovering a web of corruption, trafficking, and buried secrets.
MD,
                'order' => 1,
            ],
            [
                'title' => 'Chapter 2',
                'content' => <<<MD
As Lisbeth fights for survival, her traumatic past resurfaces. The investigation leads both her and Mikael into danger, as powerful enemies close in.
MD,
                'order' => 2,
            ],
            [
                'title' => 'Chapter 3',
                'content' => <<<MD
The truth about Lisbeth’s past and the sinister forces at work is finally revealed. The ordeal cements her reputation as a survivor and exposes the darkness at the heart of the conspiracy.
MD,
                'order' => 3,
            ],
        ];
        foreach ($chapters as $chapter) {
            Chapter::create([
                'book_id' => $bookId,
                'title' => $chapter['title'],
                'content' => $chapter['content'],
                'order' => $chapter['order'],
            ]);
        }

        // === BOOK 89: Sharp Objects (Gillian Flynn) ===
        $bookId = 89;
        $chapters = [
            [
                'title' => 'Chapter 1',
                'content' => <<<MD
Reporter Camille Preaker returns to her hometown to cover the murders of two young girls. Haunted by her own childhood trauma, she struggles to reconnect with her estranged family and the town’s disturbing secrets.
MD,
                'order' => 1,
            ],
            [
                'title' => 'Chapter 2',
                'content' => <<<MD
Camille’s investigation reveals twisted relationships and hidden motives among Wind Gap’s residents. As she delves deeper, her own demons threaten to overwhelm her.
MD,
                'order' => 2,
            ],
            [
                'title' => 'Chapter 3',
                'content' => <<<MD
The shocking truth comes to light, forcing Camille to confront the legacy of abuse and the cost of uncovering the darkness within her family.
MD,
                'order' => 3,
            ],
        ];
        foreach ($chapters as $chapter) {
            Chapter::create([
                'book_id' => $bookId,
                'title' => $chapter['title'],
                'content' => $chapter['content'],
                'order' => $chapter['order'],
            ]);
        }

        // === BOOK 90: Gone Girl (Gillian Flynn) ===
        $bookId = 90;
        $chapters = [
            [
                'title' => 'Chapter 1',
                'content' => <<<MD
On their fifth wedding anniversary, Amy Dunne disappears, and her husband Nick quickly becomes the prime suspect. The investigation peels back layers of secrets, lies, and marital tension.
MD,
                'order' => 1,
            ],
            [
                'title' => 'Chapter 2',
                'content' => <<<MD
Through alternating perspectives, the truth about their troubled marriage is revealed. Amy’s diary and Nick’s actions create a maze of suspicion and manipulation.
MD,
                'order' => 2,
            ],
            [
                'title' => 'Chapter 3',
                'content' => <<<MD
The story concludes with a chilling twist as the real mastermind is exposed. Both Nick and Amy are left trapped in a toxic, unforgettable partnership.
MD,
                'order' => 3,
            ],
        ];
        foreach ($chapters as $chapter) {
            Chapter::create([
                'book_id' => $bookId,
                'title' => $chapter['title'],
                'content' => $chapter['content'],
                'order' => $chapter['order'],
            ]);
        }

        // === BOOK 91: The Girl on the Train (Paula Hawkins) ===
        $bookId = 91;
        $chapters = [
            [
                'title' => 'Chapter 1',
                'content' => <<<MD
Rachel, struggling with alcoholism and heartbreak, becomes obsessed with a couple she observes daily from the train. When the woman goes missing, Rachel inserts herself into the investigation, blurring truth and fantasy.
MD,
                'order' => 1,
            ],
            [
                'title' => 'Chapter 2',
                'content' => <<<MD
As Rachel uncovers disturbing connections between her own life and the missing woman, unreliable memories and dangerous secrets come to light.
MD,
                'order' => 2,
            ],
            [
                'title' => 'Chapter 3',
                'content' => <<<MD
The real culprit is revealed in a tense climax, forcing Rachel to confront her past and find the strength to reclaim her life.
MD,
                'order' => 3,
            ],
        ];
        foreach ($chapters as $chapter) {
            Chapter::create([
                'book_id' => $bookId,
                'title' => $chapter['title'],
                'content' => $chapter['content'],
                'order' => $chapter['order'],
            ]);
        }

        // === BOOK 92: The Silent Patient (Alex Michaelides) ===
        $bookId = 92;
        $chapters = [
            [
                'title' => 'Chapter 1',
                'content' => <<<MD
Alicia Berenson, a famous painter, shoots her husband and then stops speaking. Forensic psychotherapist Theo Faber is determined to unravel the mystery behind her silence.
MD,
                'order' => 1,
            ],
            [
                'title' => 'Chapter 2',
                'content' => <<<MD
Theo delves into Alicia’s past, uncovering secrets, betrayals, and hidden trauma. His obsession grows as he gets closer to the truth.
MD,
                'order' => 2,
            ],
            [
                'title' => 'Chapter 3',
                'content' => <<<MD
A shocking revelation upends everything Theo thought he knew, exposing the real motive behind Alicia’s silence and the darkness within them both.
MD,
                'order' => 3,
            ],
        ];
        foreach ($chapters as $chapter) {
            Chapter::create([
                'book_id' => $bookId,
                'title' => $chapter['title'],
                'content' => $chapter['content'],
                'order' => $chapter['order'],
            ]);
        }

        // === BOOK 93: The Guest List (Lucy Foley) ===
        $bookId = 93;
        $chapters = [
            [
                'title' => 'Chapter 1',
                'content' => <<<MD
A glamorous wedding on a remote Irish island turns deadly when a storm traps the guests. Old grudges and dark secrets bubble to the surface as the celebration spirals into chaos.
MD,
                'order' => 1,
            ],
            [
                'title' => 'Chapter 2',
                'content' => <<<MD
Multiple perspectives reveal hidden motives and festering resentments. The tension mounts as the body count rises and the killer’s identity remains elusive.
MD,
                'order' => 2,
            ],
            [
                'title' => 'Chapter 3',
                'content' => <<<MD
The murderer is finally unmasked in a dramatic finale, and the survivors must reckon with the choices that led to tragedy.
MD,
                'order' => 3,
            ],
        ];
        foreach ($chapters as $chapter) {
            Chapter::create([
                'book_id' => $bookId,
                'title' => $chapter['title'],
                'content' => $chapter['content'],
                'order' => $chapter['order'],
            ]);
        }

        // === BOOK 94: Verity (Colleen Hoover) ===
        $bookId = 94;
        $chapters = [
            [
                'title' => 'Chapter 1',
                'content' => <<<MD
Struggling writer Lowen Ashleigh is hired to complete the bestselling series of injured author Verity Crawford. In Verity’s home, Lowen finds an unfinished autobiography revealing disturbing confessions.
MD,
                'order' => 1,
            ],
            [
                'title' => 'Chapter 2',
                'content' => <<<MD
As Lowen becomes entangled with Verity’s husband and the secrets of the Crawford family, she must decide what is real and whom to trust.
MD,
                'order' => 2,
            ],
            [
                'title' => 'Chapter 3',
                'content' => <<<MD
A shocking discovery leads to a final confrontation. Lowen must choose between exposing the truth and protecting herself from the consequences.
MD,
                'order' => 3,
            ],
        ];
        foreach ($chapters as $chapter) {
            Chapter::create([
                'book_id' => $bookId,
                'title' => $chapter['title'],
                'content' => $chapter['content'],
                'order' => $chapter['order'],
            ]);
        }

        // === BOOK 95: Listen for the Lie (Amy Tintera) ===
        $bookId = 95;
        $chapters = [
            [
                'title' => 'Chapter 1',
                'content' => <<<MD
Lucy returns to her hometown years after being accused of her best friend’s murder—a crime she can’t remember. A true-crime podcast brings renewed scrutiny, forcing Lucy to reexamine the past.
MD,
                'order' => 1,
            ],
            [
                'title' => 'Chapter 2',
                'content' => <<<MD
Interviews, secrets, and small-town tensions raise new suspicions. Lucy’s search for answers leads her to question everyone, including herself.
MD,
                'order' => 2,
            ],
            [
                'title' => 'Chapter 3',
                'content' => <<<MD
The truth is finally revealed in a tense showdown, and Lucy must decide whether to forgive or seek justice.
MD,
                'order' => 3,
            ],
        ];
        foreach ($chapters as $chapter) {
            Chapter::create([
                'book_id' => $bookId,
                'title' => $chapter['title'],
                'content' => $chapter['content'],
                'order' => $chapter['order'],
            ]);
        }

        // === BOOK 96: The Boyfriend (Freida McFadden) ===
        $bookId = 96;
        $chapters = [
            [
                'title' => 'Chapter 1',
                'content' => <<<MD
A seemingly perfect boyfriend hides a sinister side. As secrets unravel, the protagonist finds herself caught in a web of manipulation and danger.
MD,
                'order' => 1,
            ],
            [
                'title' => 'Chapter 2',
                'content' => <<<MD
The protagonist uncovers the truth about her boyfriend’s past. She must gather the courage to escape his grip as the stakes grow ever higher.
MD,
                'order' => 2,
            ],
            [
                'title' => 'Chapter 3',
                'content' => <<<MD
A final confrontation brings justice, but not without sacrifice. The protagonist emerges stronger, but forever changed by the ordeal.
MD,
                'order' => 3,
            ],
        ];
        foreach ($chapters as $chapter) {
            Chapter::create([
                'book_id' => $bookId,
                'title' => $chapter['title'],
                'content' => $chapter['content'],
                'order' => $chapter['order'],
            ]);
        }

        // === BOOK 97: Ward D (Freida McFadden) ===
        $bookId = 97;
        $chapters = [
            [
                'title' => 'Chapter 1',
                'content' => <<<MD
Medical student Amy volunteers for a shift in the infamous Ward D, only to find herself trapped with patients and staff as a violent storm hits. Tensions rise and someone is murdered.
MD,
                'order' => 1,
            ],
            [
                'title' => 'Chapter 2',
                'content' => <<<MD
Amy races to solve the mystery as suspicion mounts. Secrets and lies among the group blur the line between sanity and madness.
MD,
                'order' => 2,
            ],
            [
                'title' => 'Chapter 3',
                'content' => <<<MD
The killer’s identity is revealed in a shocking twist. Amy must fight for her life and sanity as Ward D’s doors finally open.
MD,
                'order' => 3,
            ],
        ];
        foreach ($chapters as $chapter) {
            Chapter::create([
                'book_id' => $bookId,
                'title' => $chapter['title'],
                'content' => $chapter['content'],
                'order' => $chapter['order'],
            ]);
        }

        // === BOOK 98: The Crash (Freida McFadden) ===
        $bookId = 98;
        $chapters = [
            [
                'title' => 'Chapter 1',
                'content' => <<<MD
A tragic car crash leaves survivors stranded in a remote location. As they wait for rescue, paranoia grows and dark secrets are revealed.
MD,
                'order' => 1,
            ],
            [
                'title' => 'Chapter 2',
                'content' => <<<MD
Tensions mount as trust erodes among the group. Someone is hiding a deadly secret, and the fight for survival turns deadly.
MD,
                'order' => 2,
            ],
            [
                'title' => 'Chapter 3',
                'content' => <<<MD
The true cause of the crash and the identity of the saboteur are unveiled. The survivors must band together or risk losing everything.
MD,
                'order' => 3,
            ],
        ];
        foreach ($chapters as $chapter) {
            Chapter::create([
                'book_id' => $bookId,
                'title' => $chapter['title'],
                'content' => $chapter['content'],
                'order' => $chapter['order'],
            ]);
        }

        // === BOOK 99: Whispers of Dead Girls (Marlee Bush) ===
        $bookId = 99;
        $chapters = [
            [
                'title' => 'Chapter 1',
                'content' => <<<MD
A detective haunted by past failures investigates a series of murders linked by cryptic messages. The voices of the victims seem to call out, guiding her toward the truth.
MD,
                'order' => 1,
            ],
            [
                'title' => 'Chapter 2',
                'content' => <<<MD
With time running out, the detective uncovers connections between the cases and her own dark history. The closer she gets, the more dangerous the killer becomes.
MD,
                'order' => 2,
            ],
            [
                'title' => 'Chapter 3',
                'content' => <<<MD
A final confrontation brings closure for the victims and the detective, but not without a heavy cost. Justice is served, but scars remain.
MD,
                'order' => 3,
            ],
        ];
        foreach ($chapters as $chapter) {
            Chapter::create([
                'book_id' => $bookId,
                'title' => $chapter['title'],
                'content' => $chapter['content'],
                'order' => $chapter['order'],
            ]);
        }

        // === BOOK 100: Dying to Meet You (Sarina Bowen) ===
        $bookId = 100;
        $chapters = [
            [
                'title' => 'Chapter 1',
                'content' => <<<MD
A woman’s search for love leads her into the sights of a serial killer. As she navigates the world of online dating, she realizes someone is watching her every move.
MD,
                'order' => 1,
            ],
            [
                'title' => 'Chapter 2',
                'content' => <<<MD
With the help of a determined detective, she pieces together clues and confronts her own fears. The killer’s motives and identity remain elusive.
MD,
                'order' => 2,
            ],
            [
                'title' => 'Chapter 3',
                'content' => <<<MD
In a suspenseful climax, the woman faces her stalker and fights for her life. The case is closed, but the experience leaves her forever changed.
MD,
                'order' => 3,
            ],
        ];
        foreach ($chapters as $chapter) {
            Chapter::create([
                'book_id' => $bookId,
                'title' => $chapter['title'],
                'content' => $chapter['content'],
                'order' => $chapter['order'],
            ]);
        }

        // === BOOK 101: The Whistle (Linwood Barclay) ===
        $bookId = 101;
        $chapters = [
            [
                'title' => 'Chapter 1',
                'content' => <<<MD
A small town is rocked by a whistleblower’s revelation of corruption and murder. The protagonist, drawn into the conspiracy, must decide who to trust as bodies begin to pile up.
MD,
                'order' => 1,
            ],
            [
                'title' => 'Chapter 2',
                'content' => <<<MD
Danger escalates as the protagonist races to expose the truth. Paranoia and betrayal lurk at every turn, and nowhere is safe.
MD,
                'order' => 2,
            ],
            [
                'title' => 'Chapter 3',
                'content' => <<<MD
In a final act of bravery, the protagonist brings the truth to light. Justice is served, but not without personal loss and sacrifice.
MD,
                'order' => 3,
            ],
        ];
        foreach ($chapters as $chapter) {
            Chapter::create([
                'book_id' => $bookId,
                'title' => $chapter['title'],
                'content' => $chapter['content'],
                'order' => $chapter['order'],
            ]);
        }

        // === BOOK 102: We Live Here Now (Sarah Pinborough) ===
        $bookId = 102;
        $chapters = [
            [
                'title' => 'Chapter 1',
                'content' => <<<MD
A family relocates to an isolated community, hoping for a fresh start. Strange events and mysterious neighbors quickly shatter their peace, hinting at secrets buried beneath the surface.
MD,
                'order' => 1,
            ],
            [
                'title' => 'Chapter 2',
                'content' => <<<MD
As paranoia grows, the family becomes entangled in the community’s sinister rituals. The line between reality and nightmare blurs, and escape seems impossible.
MD,
                'order' => 2,
            ],
            [
                'title' => 'Chapter 3',
                'content' => <<<MD
In a heart-pounding conclusion, the family confronts the truth behind the town’s façade. Survival depends on their courage to resist and reveal the darkness within.
MD,
                'order' => 3,
            ],
        ];
        foreach ($chapters as $chapter) {
            Chapter::create([
                'book_id' => $bookId,
                'title' => $chapter['title'],
                'content' => $chapter['content'],
                'order' => $chapter['order'],
            ]);
        }
    }
}
