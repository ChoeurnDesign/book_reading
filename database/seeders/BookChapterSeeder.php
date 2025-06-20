<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Chapter;

class BookChapterSeeder extends Seeder
{
    public function run(): void
    {
        $booksByCategory = [
            'Thriller' => [
                [
                    'book_id' => 1,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1: Owl Post',
                            'content' => "Harry Potter’s thirteenth birthday dawns with the familiar gloom of Number Four, Privet Drive. The Dursleys, never fond of Harry, are more dismissive than ever, and Harry dreads another tedious summer away from the magical world he loves. Yet, as the clock strikes midnight, three owls arrive simultaneously, each bearing gifts and news from the wizarding world. Hagrid sends a monstrous book, the Monster Book of Monsters, which promptly attempts to bite Harry’s fingers. Hermione’s gift is a beautiful broomstick servicing kit, while Ron’s letter is full of warmth and news about his family’s recent trip to Egypt, including a photograph of the Weasley family. As Harry savors these tokens of friendship, he feels connected again to his real life—the life where he is more than just the unwanted nephew. That morning, Harry reads a mysterious article about Sirius Black, an infamous wizard who has escaped from Azkaban, the wizard prison. The story hints at Black’s dangerous nature, but Harry is more intrigued than frightened. Despite the Dursleys’ attempts to dampen his spirits, the arrival of the owls, the gifts, and the news remind Harry that he is part of a much larger, magical world. The chapter sets the tone for a year that promises to be anything but ordinary, foreshadowing the danger and adventure to come.",
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2: Aunt Marge\'s Big Mistake',
                            'content' => "Harry’s anticipation for the approaching school year is interrupted by the unwelcome arrival of Aunt Marge, Uncle Vernon’s formidable sister. Known for her harsh opinions and deep dislike of Harry, Aunt Marge wastes no time in making her presence felt. Uncle Vernon strikes a bargain with Harry: if he can keep his temper and behave impeccably during Marge’s stay, Vernon will sign Harry’s permission slip for Hogsmeade visits—a privilege Harry desperately wants. Throughout her visit, Aunt Marge insults Harry at every turn, reveling in stories of her dogs and making disparaging comments about Harry’s parents. Harry does his best to endure the ridicule, repeating to himself that it’s all for the Hogsmeade signature. But Marge’s cruelty escalates. At dinner, she launches into a tirade, blaming Harry’s deceased parents for his so-called shortcomings, calling his father a drunk and his mother a bad influence. Harry’s anger boils over, and, unable to control his magic, he causes Aunt Marge to inflate like a giant balloon. She floats to the ceiling, still ranting, as chaos erupts in the Dursley household. Realizing he has crossed a line and fearing the consequences, Harry storms out, grabbing his belongings and vowing never to return. The chapter captures the tension of Harry’s double life—his struggle to fit in with the Dursleys and his yearning for acceptance and justice. It also marks the beginning of Harry’s independence and courage, setting him on a path that will define the rest of his journey.",
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3: The Knight Bus',
                            'content' => "Stumbling out into the night, Harry is filled with a mix of dread, freedom, and uncertainty. With his trunk and Hedwig’s cage in tow, he contemplates his status as an underage wizard who has just performed accidental magic. He knows the Ministry of Magic has strict rules against this and fears he will be expelled from Hogwarts for sure. As he lingers in the darkness, trying to decide what to do, he senses movement in the bushes—a large, black, dog-like shape that unnerves him. Before he can react, he inadvertently signals the Knight Bus, a magical triple-decker that careens across the country picking up stranded witches and wizards. Stan Shunpike, the young conductor, welcomes Harry aboard, and Harry hastily gives the alias “Neville Longbottom” to avoid being recognized. The bus ride is a whirlwind of beds zooming about, hot chocolate being served, and news bulletins about the escaped Sirius Black. Harry learns that Black is considered extremely dangerous and is at large. The bus deposits Harry at the Leaky Cauldron in London, where, to his surprise, he is not punished by the Minister of Magic, Cornelius Fudge. Instead, Fudge is oddly lenient, providing Harry with a room and warning him to stay inside. Relieved but confused, Harry senses that there’s more to Black’s escape and his own safety than anyone is letting on. The chapter is rich in magical detail, humor, and suspense, introducing elements that will play crucial roles throughout the story and deepening the mystery surrounding Sirius Black.",
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 2,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1: An Unexpected Party',
                            'content' => "Bilbo Baggins lives a quiet and contented life in his comfortable hobbit hole, favoring food, peace, and routine above all else. One day, his world is turned upside down when the wizard Gandalf appears at his door, followed by a company of thirteen dwarves led by Thorin Oakenshield. The dwarves are on a quest to reclaim their ancestral home, the Lonely Mountain, and its vast treasure, which has been taken over by the fearsome dragon Smaug. Gandalf has recommended Bilbo as their burglar, much to Bilbo's surprise and protest. The chapter is filled with lively songs, raucous laughter, and a hearty feast that leaves Bilbo both overwhelmed and secretly excited. Despite his reluctance and the dwarves’ doubts about his abilities, Bilbo is swept into the adventure by the promise of gold and the subtle persuasion of Gandalf. As the night ends, Bilbo’s home is left in chaos, but a seed of curiosity and courage has been planted within him. This chapter sets the tone for the journey: one of unexpected friendships, personal growth, and the transformative power of stepping outside one’s comfort zone.",
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2: Roast Mutton',
                            'content' => "Bilbo and the dwarves set off on their journey, quickly realizing that adventures are far less comfortable than anticipated. As they travel through the wild, they are caught in a cold and rainy night and forced to seek shelter. Bilbo, eager to prove his worth as a burglar, is sent to scout out a mysterious fire. He stumbles upon three large trolls—Tom, Bert, and William—arguing over their meal. Bilbo’s attempt to pickpocket one of them goes awry, and he is captured. The dwarves, coming to his rescue, are also seized one by one. The trolls debate how best to cook their captives, but Gandalf arrives just in time. Using clever ventriloquism and wit, Gandalf tricks the trolls into talking until sunrise, when the light turns them to stone. The company finds and raids the trolls’ hoard, discovering food, gold, and several valuable weapons, including swords that will play a significant role later in their adventure. This chapter emphasizes the dangers of the wider world and the importance of cleverness, cooperation, and a bit of luck.",
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3: A Short Rest',
                            'content' => "After their harrowing escape from the trolls, the company journeys to Rivendell, the hidden valley of the elves. The valley is a place of beauty, music, and wisdom, providing a stark contrast to the perils they have faced so far. Bilbo is enchanted by the elves’ singing and hospitality, and the group enjoys much-needed rest and comfort. Their host, Elrond, is a wise and ancient elf lord who examines their map and the swords they found in the trolls’ lair. Elrond reveals the true names and origins of the weapons, Glamdring and Orcrist, and points out hidden runes on Thorin’s map, indicating the secret entrance to the Lonely Mountain. The time in Rivendell is brief but significant, as it provides the company with critical information and a sense of hope before they continue their journey into more dangerous lands. Bilbo, in particular, feels recharged and more confident, though he still harbors doubts about his role in the quest.",
                            'order' => 3,
                        ],
                        [
                            'title' => 'Chapter 4: Over Hill and Under Hill',
                            'content' => "Leaving the comforts of Rivendell behind, Bilbo and the dwarves begin their trek through the treacherous Misty Mountains. They face brutal weather and difficult terrain, and an ill-advised attempt to find shelter in a cave leads to disaster. While they sleep, goblins emerge from a hidden passage and capture the entire group, dragging them deep into the heart of the mountain. The goblins are cruel and menacing, mocking the company and preparing to punish them for trespassing. Gandalf manages a dramatic rescue using his magic sword, Glamdring, slaying the Great Goblin and helping the company escape. In the chaos, Bilbo is separated from the others and knocked unconscious. The chapter highlights the constant danger of the journey and Bilbo's growing sense of vulnerability, while also foreshadowing a crucial turning point in his personal development.",
                            'order' => 4,
                        ],
                        [
                            'title' => 'Chapter 5: Riddles in the Dark',
                            'content' => "Alone and disoriented in the dark tunnels beneath the Misty Mountains, Bilbo stumbles upon a strange golden ring and pockets it. He soon encounters Gollum, a mysterious, pitiable creature whose life has been twisted by the ring’s power. Gollum proposes a game of riddles, with Bilbo’s life at stake. The contest is tense and clever, with both parties exchanging riddles that reveal much about their characters. Bilbo ultimately stumps Gollum with a question born of desperation: 'What have I got in my pocket?' Realizing he has lost, Gollum becomes enraged and tries to attack Bilbo, who discovers that the ring makes him invisible. Using this newfound power, Bilbo narrowly escapes Gollum and the goblin tunnels, rejoining his friends. This chapter is a masterpiece of suspense and character development, marking the moment when Bilbo’s courage and resourcefulness truly emerge. The ring, innocuous at first, will go on to shape the fate of Middle-earth.",
                            'order' => 5,
                        ],
                    ],
                ],
                [
                    'book_id' => 3,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1: The Worst Birthday',
                            'content' => "Harry Potter’s twelfth birthday is shaping up to be the worst he’s ever experienced. Back at Privet Drive for the summer, he is once again treated as little more than a nuisance by the Dursleys. Aunt Petunia and Uncle Vernon go to great lengths to ignore the day entirely; there are no presents, no cards, and certainly no cake. To make matters worse, Harry is forbidden to mention anything about magic, and his treasured school things are locked away in the cupboard under the stairs. The only solace Harry finds is in the memories of his first year at Hogwarts and the hope that he might soon return. The Dursleys, meanwhile, are consumed with preparations for an important dinner with Mr. Mason, a potential client of Uncle Vernon. Harry is told to remain in his room, pretend he doesn’t exist, and absolutely not to ruin the evening. The sense of isolation is palpable: Harry has had no word from his friends Ron or Hermione all summer, and he can’t help but fear they’ve forgotten him. The chapter sets the tone for the coming adventure, highlighting Harry’s loneliness and the stark contrast between the mundane cruelty of the Dursleys and the magic awaiting him elsewhere. The tension and hopelessness are only heightened by the mysterious events that follow, heralding a year that will be anything but ordinary.",
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2: Dobby’s Warning',
                            'content' => "Harry’s bleak birthday takes a bizarre turn when he discovers a peculiar creature sitting on his bed – Dobby, a house-elf. Dobby, with his large, bat-like ears and tennis-ball eyes, is endearingly odd but deeply anxious. The house-elf warns Harry not to return to Hogwarts, insisting that terrible things are going to happen there. Dobby’s devotion to his masters and his fear of punishment are clear as he repeatedly punishes himself for disobedience. Despite Harry’s attempts to get answers, Dobby remains cryptic about the nature of the threat at Hogwarts. In a desperate effort to keep Harry away from school, Dobby enchants a pudding intended for the Masons’ dinner party, causing it to crash spectacularly in the kitchen. The Dursleys are furious, blaming Harry for the disaster and locking him in his room with bars on the window, determined to keep him away from the magical world for good. Dobby’s visit is both comic and tragic, introducing a new magical creature and the concept of house-elf servitude, while also setting in motion the central mystery of the year: what danger awaits at Hogwarts, and why is Dobby so desperate to protect Harry from it? The chapter masterfully blends humor, suspense, and pathos, leaving Harry more isolated than ever and the reader eager for answers.",
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3: The Burrow',
                            'content' => "Just as Harry begins to lose hope of rescue or reprieve, salvation arrives in the form of a flying turquoise car piloted by none other than Ron Weasley and his twin brothers, Fred and George. The Weasleys orchestrate a daring midnight jailbreak, pulling the bars off Harry’s window and whisking him away from Privet Drive in their father’s enchanted Ford Anglia. Harry’s arrival at the Burrow, the Weasley family home, is a revelation: the house is chaotic, magical, and bursting with warmth and love. Mrs. Weasley’s initial anger at her sons’ reckless adventure is quickly replaced by her motherly kindness toward Harry, who is overwhelmed by the sense of belonging he’s never felt at the Dursleys. The Burrow is a place where dishes wash themselves, gnomes are thrown out of the garden, and every corner is filled with quirky wizarding inventions. Harry is enchanted by it all, and his spirits rise as he is welcomed as one of the family. This chapter not only provides a glimpse into everyday wizarding life but also deepens the bond between Harry and the Weasleys, setting the stage for the loyalty, bravery, and friendship that will be crucial throughout the year. The sense of wonder, relief, and anticipation is palpable as Harry finds himself truly at home for the first time.",
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 4,
                    'chapters' => [
                        [
                            'title' => 'Part One: The House of Beasts',
                            'content' => "Feyre Archeron has survived the horrors Under the Mountain, but at a tremendous personal cost. Though she has returned to the Spring Court with Tamlin, the trauma of her ordeal haunts her relentlessly. Nightmares of Amarantha’s cruelty and the innocent fae she was forced to kill plague her sleep, leaving her exhausted, guilt-ridden, and physically ill. The vibrant court that once felt like home becomes a gilded cage as Tamlin, desperate to protect Feyre, becomes overbearing and controlling, restricting her freedom and isolating her from the world. Feyre’s powers, gifts from each of the High Lords, begin to manifest in unpredictable and sometimes dangerous ways, further alienating her from Tamlin and herself.

Her relationship with Tamlin, once rooted in passion and mutual rescue, begins to fray under the weight of unspoken trauma and mounting expectations. The preparations for their wedding, instead of bringing joy, become a source of anxiety for Feyre, who feels increasingly suffocated and lost. As the day approaches, Feyre’s panic grows, until, during the ceremony, she desperately calls out in her mind for someone—anyone—to save her. At that crucial moment, Rhysand, High Lord of the Night Court, arrives to fulfill the bargain they struck Under the Mountain, whisking Feyre away from the Spring Court for a week. This rescue is both a blessing and a shock, offering Feyre her first taste of freedom and the possibility of healing. In the Night Court, Feyre experiences a world utterly unlike the Spring Court—one filled with darkness, beauty, and unexpected kindness. Rhysand treats her as an equal, challenging her to confront her pain and reclaim her strength. This section of the novel is a devastating and hopeful exploration of trauma, recovery, and the courage it takes to choose oneself, setting the stage for Feyre’s transformation and the unraveling of the Spring Court’s illusions.",
                            'order' => 1,
                        ],
                        [
                            'title' => 'Part Two: The House of Wind',
                            'content' => "Feyre’s time in the Night Court marks the beginning of profound change. Rhysand offers not only sanctuary but acceptance—he expects nothing from Feyre except honesty and effort in her own healing. She is introduced to Velaris, the City of Starlight, a secret haven untouched by war and darkness. There, she meets Rhysand’s inner circle: Morrigan, Cassian, Azriel, and Amren, each with their own scars and strengths, and each accepting Feyre as she is. They become her found family, supporting her as she learns to control her new powers and reclaim agency over her life.

In the House of Wind, Feyre is encouraged to train both her mind and body, discovering her abilities as a High Fae and learning to fight alongside Cassian and Azriel. The emotional intimacy between Feyre and Rhysand grows, founded on trust, honesty, and shared vulnerability. Together, they uncover a looming threat: the King of Hybern is plotting to shatter the wall separating the mortal and fae realms and conquer all of Prythian. Feyre’s skills and knowledge become crucial in the coming war. During this time, Feyre confronts her trauma, finding strength in herself and her new friends. The contrast between her treatment in the Spring Court and the Night Court becomes increasingly clear: where Tamlin’s love was suffocating, Rhysand’s is liberating.

Romance simmers as Feyre and Rhysand’s bond deepens, culminating in the revelation that they are mates—a soul-deep connection in fae lore. This discovery is both exhilarating and terrifying for Feyre, who must choose between the safety of her past and the freedom of her future. The House of Wind is a sanctuary for Feyre’s rebirth, a place where she learns that true love is not about possession but about empowering each other to be whole. This section explores healing, friendship, and the transformative power of choice, as Feyre prepares to face the darkness threatening her world.",
                            'order' => 2,
                        ],
                        [
                            'title' => 'Part Three: The House of Mist',
                            'content' => "The final act of Feyre's journey is filled with daring, heartbreak, and the forging of a new destiny. As the threat from Hybern escalates, Feyre and the Night Court inner circle embark on a quest to gather allies, decipher ancient lore, and prevent the destruction of the wall separating the mortal and fae worlds. Feyre, now embracing her powers and her role as Rhysand’s mate and High Lady, becomes both a political and magical force to be reckoned with. She navigates court intrigue, betrayal, and the lingering wounds of her past, determined to protect those she loves.

The conflict with Tamlin reaches a fever pitch as he allies with Hybern, driven by his own pain and desperation to reclaim Feyre. In a daring infiltration of Hybern’s court, Feyre and her friends are betrayed, leading to a harrowing confrontation. Feyre endures torture and heartbreak, but her resilience and cunning allow her to turn the tide. In a breathtaking twist, Feyre fakes a reconciliation with Tamlin, returning to the Spring Court as a spy to undermine Hybern from within. The love between Feyre and Rhysand is tested but ultimately proves unbreakable, rooted in mutual respect, trust, and a shared vision for a better world.

This section is marked by epic battles, personal sacrifice, and the forging of new alliances. Feyre’s growth from a traumatized survivor to a powerful leader is the heart of the story. She learns that true strength lies not in denying pain but in transforming it into purpose. The House of Mist—metaphorically and literally—represents Feyre’s mastery over her own destiny, as she steps into her role as High Lady of the Night Court, ready to fight for the future of Prythian. The novel ends with the promise of war, but also with hope, as Feyre and Rhysand stand together, united and unbreakable.",
                            'order' => 3,
                        ],
                        [
                            'title' => 'Epilogue',
                            'content' => "In the quiet aftermath of chaos and sacrifice, Feyre reflects on the journey that has changed her forever. She has loved and lost, fought and healed, and become something stronger than even she could have imagined. As High Lady of the Night Court, Feyre is not only a survivor but a leader, partner, and protector. The love she shares with Rhysand is a beacon in the darkness, built on equality, understanding, and the freedom to choose their own path.

The epilogue is a moment of peace before the storm: Feyre and Rhysand, surrounded by their chosen family, look toward the uncertain future with courage and determination. They know that war is coming, that sacrifices will be required, but together they are ready to face whatever may come. Feyre’s journey is far from over, but she faces it with open eyes and a full heart, resolved to fight for love, justice, and a world where everyone can be free. The story closes on a note of resilience and hope, promising that, even in the face of overwhelming darkness, the smallest spark of light can ignite change.",
                            'order' => 4,
                        ],
                    ],
                ],
                [
                    'book_id' => 5,
                    'chapters' => [
                        [
                            'title' => 'Part One: The Mentor (Chapters 1–10)',
                            'content' => "The novel opens in the Capitol on the morning of the 10th Hunger Games, introducing Coriolanus Snow, a once-privileged teenager now living in poverty after the war. His family’s survival depends on his academic success, and he is desperate to restore their lost status. Snow is selected as a mentor for the Games, an unprecedented opportunity for Capitol students. To his dismay, he is assigned the tribute with the worst odds: Lucy Gray Baird from impoverished District 12.

As the tributes are paraded before the Capitol, Lucy Gray's defiant charisma and singing capture the public's attention, and Snow sees a way to gain acclaim for himself through her. He coaches her in showmanship and survival, forming an unlikely partnership. Snow grapples with the Capitol’s increasing cruelty as he witnesses the tributes’ mistreatment and the Games’ brutality behind the scenes.

He bends the rules to support Lucy Gray, sneaking her food and advice, and orchestrates events to make her more sympathetic to sponsors. The pressure builds as Snow faces academic rivals, a demanding head gamemaker in Dr. Gaul, and the ever-present threat of disgrace. Throughout these chapters, Snow’s ambition and moral ambiguity become clear—he wants to help Lucy Gray, but only because her success benefits him. The Capitol itself is shown as both glamorous and corrupt, and Snow’s world is one where survival means sacrificing ideals. By the end of Part One, the Games begin, and the line between mentor and tribute, predator and prey, is blurred.",
                            'order' => 1,
                        ],
                        [
                            'title' => 'Part Two: The Prize (Chapters 11–20)',
                            'content' => "As the 10th Hunger Games unfold, Coriolanus Snow is forced to confront the true horror of the Capitol’s creation. The Games are held in a crumbling arena, with little food or medical care for the tributes. Lucy Gray’s performance and resourcefulness—her ability to make alliances, her cunning, and her charisma—draw both sympathy and danger. Snow’s covert assistance becomes increasingly risky as he sneaks her supplies and information, risking expulsion or worse if discovered.

The Games themselves are marked by chaos and violence. Tributes die in brutal ways, and the Capitol audience is both fascinated and appalled. Snow’s relationship with Lucy Gray deepens, evolving from a calculated mentorship to a genuine emotional bond, though it is always tinged with self-interest. As tributes are killed and alliances shift, Snow must navigate not just the Games, but the shifting allegiances of his classmates and the growing scrutiny of Dr. Gaul and Dean Highbottom.

When Snow’s cheating is exposed, he is offered a choice: face punishment or join the Peacekeepers, the Capitol’s enforcers, in District 12. He chooses exile, escaping punishment but losing his last chance at glory. Before leaving, he helps Lucy Gray win the Games through a final act of cunning and violence, cementing his reputation as resourceful but ruthless. The Games end, but Snow’s journey is far from over—he is sent to District 12, separated from the Capitol and everything he hoped to reclaim.",
                            'order' => 2,
                        ],
                        [
                            'title' => 'Part Three: The Peacekeeper (Chapters 21–30)',
                            'content' => "Banished to District 12 as a Peacekeeper, Coriolanus Snow faces a world of deprivation and hard labor, far from the Capitol’s opulence. He is reunited with Lucy Gray, but their relationship becomes fraught with suspicion, secrets, and the ever-present danger of discovery. Snow tries to adapt, finding small ways to assert control, but the loss of privilege gnaws at him. Lucy Gray dreams of escape, freedom, and a life without the Capitol’s shadow, while Snow’s ambitions begin to resurface in darker ways.

The district is rife with rebellion and unrest. As Snow tries to protect Lucy Gray and himself, he becomes involved in a murder, setting off a chain of events that exposes his true nature. His relationship with Lucy fractures as trust erodes; she realizes he is capable of betrayal and violence to achieve his ends. When the chance to return to the Capitol presents itself, Snow seizes it, sacrificing the girl he once called his own. Lucy Gray vanishes, her fate ambiguous, and Snow returns to the Capitol, forever altered by what he has done.

The novel concludes with Snow’s return to power. He manipulates events to destroy his rivals, earns Dr. Gaul’s approval, and sets his sights on shaping the future of Panem. Haunted by Lucy Gray’s disappearance and his own moral decay, he rationalizes his actions as necessary for survival. The seeds of the tyrant he will become are sown—ambitious, ruthless, and convinced that control is the only way to avoid chaos. Part Three is a study in the making of a villain: a young man’s transformation from desperate survivor to architect of oppression, leaving readers with a chilling portrait of power’s corrosive effect.",
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 6,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => "Evangeline Fox’s world is shattered when she learns that Luc, the boy she loves, is set to marry her stepsister, Marisol. Consumed by heartbreak, Evangeline is desperate to stop the wedding, convinced that Luc is under some kind of enchantment. She seeks help in the most forbidden place: the temple of the Prince of Hearts, Jacks—a Fate notorious for dangerous bargains. The temple is both beautiful and intimidating, filled with whispers of past wishes gone wrong. Evangeline’s desperation outweighs her sense of caution, and she offers up her own blood to gain an audience with Jacks. The Prince of Hearts is as enigmatic as he is deadly, and the terms he proposes are chilling. For a chance to stop the wedding, Evangeline must agree to kiss three people of Jacks’s choosing, with no hint as to when or who these kisses will be. With little left to lose, she strikes the bargain, sealing her fate. Jacks fulfills his end immediately, and chaos erupts at the wedding, turning Luc and Marisol to stone. The chapter ends with Evangeline reeling from the consequences of her decision, both terrified and awed by the magic she has unleashed. The tone is one of longing, betrayal, and the first taste of how far Evangeline is willing to go for love.",
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => "In the aftermath of the disastrous wedding, Evangeline is branded a criminal for her role in the chaos. She is imprisoned, her dreams of love and belonging turned to nightmares of isolation. Months pass in a cold cell, and Evangeline clings to hope, replaying her memories of Luc and the betrayal she feels from Marisol. Her only visitors are whispers of Jacks’s magic, reminding her of the bargain she made. When she is finally released, it is not out of mercy but because the North—an icy, magical kingdom ruled by a powerful empress—is seeking a 'legendary girl' to participate in a mysterious competition called the Nocte Neverending. Evangeline, still reeling from the loss of Luc and her new status as an outcast, is swept into a world of royalty, Fates, and dangerous games. The North is enchanting and perilous, its court filled with secrets and shifting alliances. Evangeline’s beauty, reputation, and connection to Jacks make her both a curiosity and a threat to those in power. She soon discovers that her story is only beginning, and that bargains with Fates always come with a price. The chapter is rich with themes of hope, survival, and the intoxicating lure of magic and destiny.",
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => "Evangeline’s introduction to the North’s court is dazzling and overwhelming. She is thrust into a world of opulent balls, masked strangers, and whispered intrigue. The Empress welcomes her with calculated warmth, seeing both potential and danger in the girl who stopped a wedding with a Fate’s magic. Evangeline is assigned a guardian who is equal parts protector and spy, and she quickly learns that every gesture, every word, is layered with meaning. As she navigates this unfamiliar landscape, she is haunted by the consequences of her bargain with Jacks, who remains an enigmatic presence—sometimes helpful, sometimes menacing. The other competitors in the Nocte Neverending are equally determined and secretive, and Evangeline’s heart is torn between longing for Luc and the strange pull she feels toward Jacks. The court is alive with rumors that Evangeline herself might be cursed, and she faces suspicion and fascination in equal measure. The chapter culminates in a harrowing test, the first of many, where Evangeline must use her wits and courage to survive. She begins to suspect that the true nature of her quest is far more dangerous, and more magical, than she ever imagined. Themes of trust, resilience, and the search for belonging are at the forefront as Evangeline steps further into the unknown.",
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 7,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => "Evangeline Fox is still reeling from the discovery that her story is far from over. The heartbreak and chaos she endured in the Magnificent North have left lasting scars, but she clings to hope that her fate is not sealed. The chapter opens with Evangeline waking in a world that feels both familiar and newly dangerous. The Prince of Hearts, Jacks, is ever-present—an enigmatic figure whose motives are as mysterious as his magic. Evangeline’s feelings for Jacks are tangled, a blend of longing, resentment, and fascination. Rumors swirl about a legendary curse, and Evangeline is drawn once more into a tangled web of prophecies and impossible choices. The court is alive with intrigue, and every glance is laced with suspicion. Jacks offers a cryptic warning: the path to breaking the curse requires Evangeline to risk everything, including her heart. As the day unfolds, Evangeline navigates courtly politics, magical bargains, and the ghosts of her past. The chapter is rich with atmosphere, setting the stage for a journey that will test Evangeline’s courage and challenge her understanding of love, destiny, and trust.",
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => "Pulled deeper into the North’s magical world, Evangeline finds herself caught between allies and enemies. The consequences of her previous bargains with Jacks start to unfold in unexpected ways. She is summoned to a mysterious masquerade ball, a dazzling event where identities are hidden and secrets are currency. Among the swirling dancers, Evangeline searches for clues about the fabled Valory Arch and the key to freeing herself from the curse. Jacks remains evasive, offering riddles instead of answers. The chemistry between them crackles, but Evangeline is wary—she knows every kiss and promise can carry a hidden cost. At the ball, she encounters old friends and new rivals, each with their own agendas. Whispers about a forbidden magic reach her ears; some say it can grant true love, others warn it leads only to ruin. The night ends with a chilling omen, leaving Evangeline more determined than ever to uncover the truth. She resolves to carve her own destiny, even if it means defying the Fates and risking her fragile heart.",
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => "After the masquerade, Evangeline’s world becomes even more precarious. The line between friend and foe blurs as she is drawn into an alliance with unexpected partners, including a cunning thief and a powerful witch. Together, they embark on a quest to find the Valory Arch, a mythical gateway said to hold the answer to Evangeline’s curse. The journey is fraught with peril: enchanted forests that shift and deceive, riddles that test their resolve, and magical traps set by the Fates themselves. Along the way, Evangeline must confront the pain of past betrayals and the fear that her choices could doom not just herself but everyone she cares about. As dangers mount, so does the tension between her and Jacks. Their connection deepens with each shared secret and narrow escape, but Evangeline is haunted by the knowledge that Jacks is as likely to break her heart as save her. The chapter closes with a revelation about the nature of the curse, forcing Evangeline to make an impossible decision. Themes of sacrifice, self-discovery, and the complexity of love are woven throughout, propelling the story toward even greater stakes.",
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 8,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => "Evangeline Fox awakens to a world that feels both familiar and hauntingly altered. She cannot remember the extraordinary adventures she once lived through in the North, nor the bargains, betrayals, and heartbreaks that defined her recent past. Instead, she finds herself surrounded by people who claim to be her family and friends, but whose warmth and affection seem tinged with a strange sense of urgency. The North is alive with whispers of curses and fairy tales, and Evangeline is at the center of them all—though she has no idea why. As she tries to piece together the fragments of her lost memories, she senses an emptiness in her heart, a void where something precious used to be. The Prince of Hearts, Jacks, lingers on the margins of her world, enigmatic and alluring, but Evangeline cannot recall why his presence unsettles her so. The magical court buzzes with preparations for a grand festival, and Evangeline is swept up in the pageantry and expectations of those around her. Yet, a persistent feeling that something is wrong gnaws at her, and she begins to question the reality she’s been given. This chapter sets the tone for a journey of self-discovery, as Evangeline embarks on a quest not only to recover her memories but to reclaim her destiny, even if it means challenging the very magic that binds her.",
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => "Evangeline’s days in the North are filled with a strange blend of comfort and confusion. She is celebrated as a figure of legend, but behind every smile and congratulation is a shadow of worry. Her stepsister Marisol is ever-present, offering sisterly advice but keeping secrets of her own. The festival preparations intensify, giving Evangeline little time to dwell on her growing unease. Yet, every so often, she glimpses flashes of a life she cannot remember—fleeting images of enchanted forests, blood-red doors, and a silver-haired boy with a heart full of sorrow. Jacks continues to haunt her dreams and waking hours, sometimes kind, sometimes distant. He seems to know her better than she knows herself, but he refuses to answer her most pressing questions. When a mysterious guest arrives at court, bringing tales of curses and lost loves, Evangeline’s curiosity is piqued. She resolves to find the truth behind her fractured memories, even as those around her urge caution. The chapter explores themes of trust, identity, and the power of longing, as Evangeline’s search for answers draws her ever closer to the secrets that will define her fate.",
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => "The festival is a dazzling spectacle, filled with music, magic, and the promise of new beginnings. Evangeline is thrust into the spotlight as a symbol of hope and happiness for the North, but beneath her radiant smile lies a growing sense of dread. As she dances with would-be suitors and navigates the intricate politics of court life, she cannot shake the persistent feeling that something is fundamentally wrong. Jacks lurks in the shadows, watching her with an intensity she cannot understand. When he finally approaches her, their conversation is charged with hidden meaning and unspoken emotion. Jacks hints at a shared past, at sacrifices made and promises broken, but refuses to reveal the full story. Evangeline is left more confused than ever, her longing for truth battling with her fear of what she might discover. As the festival reaches its climax, a magical mishap threatens to expose the secrets everyone has tried so hard to keep. Evangeline finds herself at a crossroads, forced to choose between the safety of ignorance and the perilous pursuit of her true self. The chapter is rich with atmosphere, tension, and the ever-present possibility of both love and loss.",
                            'order' => 3,
                        ],
                    ],
                ],
                [
                    'book_id' => 9,
                    'chapters' => [
                        [
                            'title' => 'Chapter 1',
                            'content' => "Rune, a witch living in the shadows, has survived in the city of Iseldis by hiding her magical abilities. In this world, witches are hunted and executed by the ruthless order of Witchhunters. Rune’s daily life is a delicate balance of fear and resilience—she blends into the city’s underbelly, relying on her wits and her knowledge of potions to remain unnoticed. The chapter opens with Rune narrowly escaping a witch raid in her district. The Witchhunters, led by the infamous Gideon Sharpe, are relentless and methodical, executing their duties with chilling efficiency. Rune’s heart pounds as she watches people she once knew dragged away to an uncertain fate. The oppressive atmosphere of Iseldis is palpable: posters warning against witchcraft hang on every corner, and trust is a rare commodity. Rune’s only solace is her network of fellow outcasts, though even among them, secrets fester. The chapter slowly reveals the emotional scars Rune carries from witnessing her mother’s execution years earlier—a trauma that motivates her secrecy and caution. Late at night, Rune clandestinely helps heal an injured friend with forbidden magic, risking exposure to save a life. Her actions do not go unnoticed, and a shadowy figure begins to follow her through the city’s labyrinthine streets. As dawn breaks, Rune realizes her life is about to change forever. The tension of her double existence is reaching a breaking point, and the first encounter between Rune and Gideon is inevitable—a collision that will alter the course of both their lives.",
                            'order' => 1,
                        ],
                        [
                            'title' => 'Chapter 2',
                            'content' => "The second chapter shifts perspective to Gideon Sharpe, the city’s most feared Witchhunter. Gideon is haunted by memories of his own family’s destruction at the hands of witches, fueling both his relentless drive and his inner conflict. He is respected and feared by his peers, but his private moments reveal a man struggling with doubts about the rigid doctrines he enforces. Gideon’s investigation into the recent magical disturbance leads him to the site where Rune helped her friend. He examines the faint traces of magic left behind, piecing together clues with an almost supernatural intuition. Meanwhile, Rune tries to lay low, but the city is on edge after the raid and her safe havens are dwindling. The narrative explores how the machinery of oppression works through routine, surveillance, and the complicity of ordinary citizens. Rune and Gideon’s paths intersect briefly—enough for each to sense the other’s presence, but not enough for direct confrontation. Tensions rise as rumors of a brewing rebellion begin to circulate among the city’s outcasts. Rune is approached by a secretive resistance group, who believe her powers could turn the tide against the Witchhunters. Torn between the safety of anonymity and the call to defiance, Rune realizes she must make difficult choices. The chapter ends with a sense of impending collision: as Gideon closes in, and the city’s unrest grows, every decision could mean life or death.",
                            'order' => 2,
                        ],
                        [
                            'title' => 'Chapter 3',
                            'content' => "In this chapter, Rune is forced to flee when a neighbor betrays her to the authorities in exchange for a reward. The betrayal stings deeply, reinforcing her belief that trust is dangerous. Rune’s escape through the city’s maze of alleys is a breathless, tense journey, filled with close calls and moments of raw fear. She receives unexpected help from a mysterious stranger—a member of the resistance—who guides her to a hidden sanctuary beneath the old city. There, she meets other witches and outcasts, each with their own stories of survival and loss. The resistance leader urges Rune to join their cause, arguing that hiding is no longer an option if they hope to survive. Meanwhile, Gideon intensifies his search, growing more obsessed with the elusive witch he has begun to sense is different from the rest. Flashbacks reveal more about Gideon’s past, his upbringing, and the conflicting emotions that drive his actions. Rune must decide whether to embrace her power and fight, or to run once more. The chapter ends with Rune standing at a crossroads, knowing that whichever path she chooses will define not only her fate, but perhaps the fate of all witches in Iseldis.",
                            'order' => 3,
                        ],
                        // Continue in this style for all 35 chapters as needed.
                    ],
                ],
                'book_id' => 10,
                'chapters' => [
                    [
                        'title' => 'Chapter 1',
                        'content' => "Reed, a fiercely independent young woman, wakes in the slums of the city-state of Meris, where power is determined by strength and cunning. Raised on the edge of survival, Reed is a skilled fighter and thief, hardened by a lifetime of betrayal and loss. Her world is governed by the annual Reckoning—a brutal competition where the city’s outcasts vie for a coveted spot in the ruling class. The game’s rules are simple: survive, or die trying. Reed’s motivation is personal: she seeks vengeance for her brother, who died under mysterious circumstances in a previous Reckoning, and dreams of freedom from the system that keeps her people oppressed. The chapter plunges readers into the gritty realities of Meris, from its corrupt officials to its treacherous back alleys. Reed’s sharp wit and physical prowess are on full display as she navigates dangerous encounters and plots her entry into the tournament. The chapter introduces a cast of supporting characters—rivals, allies, and potential traitors—each with their own agendas. As Reed secures her place in the Reckoning, she is haunted by memories of her brother and the moral lines she may have to cross. The chapter ends with Reed stepping onto the arena floor, heart pounding, ready to prove herself in a world that has always been stacked against her.",
                        'order' => 1,
                    ],
                    [
                        'title' => 'Chapter 2',
                        'content' => "As the Reckoning begins, Reed is thrust into a deadly contest where alliances shift as quickly as the tides. The arena is a labyrinth of traps, obstacles, and hidden dangers, designed to test not only physical strength but cunning and adaptability. Reed quickly learns that brute force alone will not guarantee survival—trust is a weapon, and betrayal can come from any direction. She forms a tenuous alliance with another contender, a mysterious stranger with secrets of their own. Together, they navigate the first round’s challenges, dodging lethal traps and outmaneuvering their opponents. The narrative delves into Reed’s internal struggles: the tension between her desire for revenge and her instinct to protect those weaker than herself. Flashbacks reveal glimpses of Reed’s past, her upbringing in the slums, and the relationships that shaped her into a survivor. Meanwhile, the tournament’s overseers watch from above, manipulating circumstances for their own amusement and political gain. Reed emerges from the first round battered but unbeaten, her resolve hardened. The chapter closes with the realization that the Reckoning is as much a battle of wits and will as it is of strength—and that Reed’s greatest enemies may not be those she faces in the arena, but the demons she carries within.",
                        'order' => 2,
                    ],
                    [
                        'title' => 'Chapter 3',
                        'content' => "The second round of the Reckoning ups the stakes, introducing new challenges that force Reed to confront her deepest fears. The arena morphs into a psychological battleground, filled with illusions and traps designed to break the contestants’ spirits. Reed’s alliance is tested as hidden motives come to light and trust is stretched to its breaking point. She faces moral dilemmas—save an innocent at her own risk, or abandon them to secure her own survival? Outside the arena, political intrigue brews as the ruling elite manipulate the outcome for their benefit, and Reed discovers that she is a pawn in a larger game. The chapter explores her growing awareness of the system’s corruption and her emerging sense of responsibility to challenge it. Reed draws on her brother’s memory and her own resilience, refusing to let fear dictate her actions. She outsmarts the arena’s traps and survives another round, but at a cost—an ally’s betrayal leaves her wounded and wary. The chapter ends on a note of grim determination: Reed knows that to win the Reckoning, she must not only survive the arena but outthink those pulling the strings behind the scenes.",
                        'order' => 3,
                    ],
                ]
            ],

            'Fantasy' => [
                [
                    [
                        'book_id' => 15,
                        'title' => 'Angels & Demons',
                        'chapters' => [
                            [
                                'title' => 'Chapter 1',
                                'content' => "Robert Langdon, a symbologist at Harvard, is urgently summoned to CERN in Switzerland after the shocking murder of physicist Leonardo Vetra. The victim’s chest is branded with the word 'Illuminati,' suggesting the resurgence of a secret society long thought extinct. At CERN, Langdon meets Vittoria Vetra, Leonardo’s adopted daughter and a brilliant scientist. Together, they discover that antimatter—an incredibly powerful and dangerous substance—has been stolen. The opening chapter sets a tone of intrigue, blending advanced science with ancient conspiracy, and establishes the stakes: the Illuminati may have returned, threatening not just CERN but the Vatican itself.",
                                'order' => 1,
                            ],
                            [
                                'title' => 'Chapter 2',
                                'content' => "Langdon and Vittoria begin investigating the murder, examining Leonardo’s lab for clues. They find evidence that the Illuminati ambigram on the victim was burned with rare precision, only achievable with advanced technology. Vittoria reveals her father was working on antimatter for peaceful energy, but the device is now missing. Security footage shows the theft, and they realize the antimatter has been hidden somewhere dangerous. The tension mounts as the Vatican prepares for conclave, unaware of the threat beneath their feet. Langdon and Vittoria must race against time to prevent a catastrophe.",
                                'order' => 2,
                            ],
                            [
                                'title' => 'Chapter 3',
                                'content' => "The investigation leads Langdon and Vittoria to Rome, following a trail of ancient symbols and secret passages. Langdon uses his expertise in symbology to interpret clues from the Illuminati’s Path of Illumination, a hidden route through the city’s landmarks. The Vatican is thrown into turmoil as cardinals begin to disappear, and the antimatter countdown ticks closer to disaster. The city’s history and secrets come alive as Langdon and Vittoria risk everything to unmask the Illuminati and save countless lives.",
                                'order' => 3,
                            ],
                        ]
                    ],
                    [
                        'book_id' => 16,
                        'title' => 'The Girl Who Played with Fire',
                        'chapters' => [
                            [
                                'title' => 'Chapter 1',
                                'content' => "Lisbeth Salander, seeking a quiet escape, lives anonymously in the Caribbean, trying to leave her troubled past behind. Meanwhile, in Stockholm, journalist Mikael Blomkvist prepares to publish an exposé on sex trafficking with the help of Dag and Mia, a young couple investigating the criminal underworld. Tension mounts as the couple uncovers connections to powerful figures. Salander’s peace is shattered by news from Sweden, drawing her back into a world of violence, secrets, and danger.",
                                'order' => 1,
                            ],
                            [
                                'title' => 'Chapter 2',
                                'content' => "Dag and Mia are brutally murdered just as their story is about to break. Salander becomes the primary suspect due to her fingerprints found at the scene. The media frenzy paints her as a dangerous sociopath, and a nationwide manhunt begins. Blomkvist, convinced of Salander’s innocence, starts his own investigation, determined to uncover the truth behind the murders and the sex trafficking ring.",
                                'order' => 2,
                            ],
                            [
                                'title' => 'Chapter 3',
                                'content' => "Salander, using her hacking skills and resourcefulness, goes on the run. She uncovers links between the murders and a shadowy figure known as Zala, a name from her past. As Blomkvist and Salander’s paths begin to converge, both must navigate a web of corruption, betrayal, and danger. The stakes are raised as Salander realizes that exposing the truth may cost her not only her freedom, but her life.",
                                'order' => 3,
                            ],
                        ]
                    ],
                    [
                        'book_id' => 17,
                        'title' => 'Sharp Objects',
                        'chapters' => [
                            [
                                'title' => 'Chapter 1',
                                'content' => "Journalist Camille Preaker is sent from Chicago to her hometown of Wind Gap, Missouri, to cover the murder of a young girl and the disappearance of another. Camille, who suffers from self-harm and trauma, is reluctant to return to her dysfunctional family—her controlling mother Adora and half-sister Amma. The oppressive atmosphere of Wind Gap is palpable, and Camille’s return stirs old wounds and suspicion.",
                                'order' => 1,
                            ],
                            [
                                'title' => 'Chapter 2',
                                'content' => "Camille begins her investigation, interviewing townspeople who are quick to gossip but slow to trust an outsider, even one of their own. She reconnects with old acquaintances and tries to navigate the town’s secrets. Flashbacks reveal Camille’s troubled history, her sister Marian’s death, and her strained relationship with her mother. As she digs deeper, Camille senses that the violence in Wind Gap is rooted in the town’s psyche.",
                                'order' => 2,
                            ],
                            [
                                'title' => 'Chapter 3',
                                'content' => "The tension intensifies as another girl’s body is discovered, sending the town into a panic. Camille struggles with her mental health, haunted by memories and self-doubt. Her reporting puts her at odds with local authorities and her family, but she is determined to uncover the truth. The chapter closes with Camille resolving to confront the darkness of Wind Gap, no matter the personal cost.",
                                'order' => 3,
                            ],
                        ]
                    ],
                    [
                        'book_id' => 18,
                        'title' => 'Gone Girl',
                        'chapters' => [
                            [
                                'title' => 'Chapter 1',
                                'content' => "Nick and Amy Dunne’s marriage appears picture-perfect, but on the morning of their fifth wedding anniversary, Amy vanishes. The police find signs of a struggle in their Missouri home and uncover Amy’s cryptic treasure hunt for Nick, a tradition on their anniversaries. Media scrutiny intensifies as Nick’s odd behavior and secrets come to light, casting suspicion on him.",
                                'order' => 1,
                            ],
                            [
                                'title' => 'Chapter 2',
                                'content' => "Amy’s diary entries reveal the couple’s early romance and the gradual unraveling of their relationship. She describes her growing fear of Nick’s temper and financial troubles. Meanwhile, Nick struggles with the investigation, facing the police’s probing questions and the prying eyes of the media. Clues from Amy’s treasure hunt only deepen the mystery.",
                                'order' => 2,
                            ],
                            [
                                'title' => 'Chapter 3',
                                'content' => "Nick’s lies and omissions make him look increasingly guilty as new evidence surfaces. Amy’s parents and the public turn against him. Nick becomes obsessed with finding out what really happened to Amy, convinced that the truth is more complex than it seems. The chapter ends with a shocking twist, setting the stage for a psychological battle between husband and wife.",
                                'order' => 3,
                            ],
                        ]
                    ],
                    [
                        'book_id' => 19,
                        'title' => 'The Girl on the Train',
                        'chapters' => [
                            [
                                'title' => 'Chapter 1',
                                'content' => "Rachel Watson rides the same commuter train every day, passing the house she once shared with her ex-husband, Tom. She obsesses over a couple she sees from the window, naming them Jess and Jason, and imagines their perfect life. Rachel’s struggles with alcoholism and loneliness are evident, and her fixation grows when she witnesses something shocking from the train.",
                                'order' => 1,
                            ],
                            [
                                'title' => 'Chapter 2',
                                'content' => "Rachel learns that the woman she’s been watching, Megan, has gone missing. Feeling a personal connection, Rachel inserts herself into the investigation, contacting the police and Megan’s husband. But her unreliable memory and drinking problem make her a dubious witness. She becomes entangled in the lives of the people she’s been watching, blurring the line between observer and participant.",
                                'order' => 2,
                            ],
                            [
                                'title' => 'Chapter 3',
                                'content' => "Rachel’s attempts to help are met with suspicion, and she begins to doubt her own recollections of the night Megan disappeared. Flashbacks and alternate perspectives reveal secrets in both Rachel’s and Megan’s lives. The chapter ends with Rachel determined to uncover the truth, even as her own life starts to unravel.",
                                'order' => 3,
                            ],
                        ]
                    ],
                    [
                        'book_id' => 20,
                        'title' => 'The Silent Patient',
                        'chapters' => [
                            [
                                'title' => 'Chapter 1',
                                'content' => "Alicia Berenson, a celebrated painter, is found standing next to her murdered husband, Gabriel. She refuses to speak a word from that moment on. The case captures public fascination, and Alicia’s silence turns her into a myth—the silent patient. Psychotherapist Theo Faber becomes obsessed with her case, determined to uncover the truth behind her silence.",
                                'order' => 1,
                            ],
                            [
                                'title' => 'Chapter 2',
                                'content' => "Theo secures a job at the Grove, the secure psychiatric facility where Alicia is confined. He interviews staff and explores Alicia’s past, uncovering a history of trauma and secrets. Through Theo’s investigation and Alicia’s art, clues emerge about the night of the murder. The challenge of breaking Alicia’s silence becomes both a professional and personal quest for Theo.",
                                'order' => 2,
                            ],
                            [
                                'title' => 'Chapter 3',
                                'content' => "Theo’s probing brings him closer to Alicia, but also puts his own marriage and mental health at risk. As he delves deeper, he uncovers surprising connections between Alicia, Gabriel, and himself. The chapter ends with Alicia finally communicating, but her message raises more questions than answers, driving the psychological tension even higher.",
                                'order' => 3,
                            ],
                        ]
                    ],
                    [
                        'book_id' => 21,
                        'title' => 'The Guest List',
                        'chapters' => [
                            [
                                'title' => 'Chapter 1',
                                'content' => "On a remote Irish island, guests arrive for the wedding of magazine publisher Jules Keegan and TV star Will Slater. The island’s beauty is matched by its isolation, and tensions run high among the wedding party. The story is told from multiple perspectives, each guest bringing their own secrets, grudges, and obsessions to the celebration.",
                                'order' => 1,
                            ],
                            [
                                'title' => 'Chapter 2',
                                'content' => "Old resentments and hidden connections emerge as the wedding festivities begin. The best man’s wild stag party, the bridesmaid’s jealousy, and the groom’s mysterious past all add to the sense of unease. A storm approaches, trapping everyone on the island just as tempers start to flare and alliances shift.",
                                'order' => 2,
                            ],
                            [
                                'title' => 'Chapter 3',
                                'content' => "A body is discovered, and the joyous occasion descends into chaos. Flashbacks and shifting perspectives reveal the events leading up to the murder. Each guest becomes both suspect and detective, as secrets are exposed and motives come to light. The chapter ends with the realization that everyone on the island has something to hide.",
                                'order' => 3,
                            ],
                        ]
                    ],
                    [
                        'book_id' => 22,
                        'title' => 'Verity',
                        'chapters' => [
                            [
                                'title' => 'Chapter 1',
                                'content' => "Lowen Ashleigh, a struggling author, is hired to finish a bestselling series by Verity Crawford, who is incapacitated after an accident. Lowen moves into the Crawford home to examine Verity’s notes and is immediately unsettled by the eerie atmosphere and the intensity of Jeremy, Verity’s husband. The opportunity is life-changing, but Lowen senses danger beneath the surface.",
                                'order' => 1,
                            ],
                            [
                                'title' => 'Chapter 2',
                                'content' => "While sorting through Verity’s office, Lowen discovers an unfinished autobiography filled with dark confessions about Verity’s marriage and the tragic deaths of her twin daughters. The manuscript is shocking, revealing Verity’s twisted thoughts and actions. Lowen is torn between her growing feelings for Jeremy and the disturbing secrets she uncovers.",
                                'order' => 2,
                            ],
                            [
                                'title' => 'Chapter 3',
                                'content' => "Lowen’s paranoia grows as she finds evidence that Verity may not be as incapacitated as she seems. Strange noises and unsettling encounters convince Lowen that she is being watched. The line between reality and fiction blurs as she tries to decide who—and what—to believe. The chapter ends with Lowen facing a terrifying choice about what to do with the truth she’s uncovered.",
                                'order' => 3,
                            ],
                        ]
                    ],
                    [
                        'book_id' => 23,
                        'title' => 'Listen for the Lie',
                        'chapters' => [
                            [
                                'title' => 'Chapter 1',
                                'content' => "Lucy Chase returns to her hometown, haunted by the unsolved murder of her best friend, for which she was the prime suspect. The town remains divided about her innocence, and Lucy struggles with memories of that night. True-crime podcaster Ben arrives, determined to uncover the truth and expose the real killer.",
                                'order' => 1,
                            ],
                            [
                                'title' => 'Chapter 2',
                                'content' => "Ben’s investigation stirs up old resentments and buried secrets. Lucy is forced to confront people from her past, each with their own version of events. As the podcast gains traction, the pressure on Lucy intensifies. She begins to remember details she had repressed, suspecting that someone close to her is hiding a crucial piece of the puzzle.",
                                'order' => 2,
                            ],
                            [
                                'title' => 'Chapter 3',
                                'content' => "Suspense mounts as new evidence comes to light, casting doubt on Lucy’s memories and motives. She is harassed by anonymous messages and feels increasingly isolated. The podcast’s popularity puts her life under a microscope, and Lucy must decide whether to keep running from the truth or confront her own darkest fears.",
                                'order' => 3,
                            ],
                        ]
                    ],
                    [
                        'book_id' => 24,
                        'title' => 'The Boyfriend',
                        'chapters' => [
                            [
                                'title' => 'Chapter 1',
                                'content' => "The protagonist, desperate for love, falls for a seemingly perfect new boyfriend. He is attentive and charming, but subtle red flags begin to appear—strange phone calls, secretive behavior, and a reluctance to talk about his past. Her friends grow worried, but she is blinded by hope for a happy future.",
                                'order' => 1,
                            ],
                            [
                                'title' => 'Chapter 2',
                                'content' => "As she becomes more involved in her boyfriend’s life, the protagonist discovers inconsistencies and lies. She tries to rationalize his actions, even as her unease grows. A confrontation leads to a disturbing revelation, and she begins to suspect that she is in serious danger.",
                                'order' => 2,
                            ],
                            [
                                'title' => 'Chapter 3',
                                'content' => "Her efforts to uncover the truth put her at odds with her boyfriend, who becomes increasingly controlling and threatening. The protagonist must rely on her instincts and the support of her friends to escape his grasp. The chapter ends with a tense showdown, as she fights for her freedom and her life.",
                                'order' => 3,
                            ],
                        ]
                    ],
                    [
                        'book_id' => 25,
                        'title' => 'Ward D',
                        'chapters' => [
                            [
                                'title' => 'Chapter 1',
                                'content' => "A young medical student starts her night shift on the infamous Ward D, known for its dangerous psychiatric patients and mysterious incidents. The atmosphere is tense, with staff and patients alike on edge. She quickly senses that something is wrong and that she is being watched.",
                                'order' => 1,
                            ],
                            [
                                'title' => 'Chapter 2',
                                'content' => "As the night progresses, strange events unfold: alarms blare, doors lock unexpectedly, and a patient goes missing. The protagonist’s anxiety mounts as she tries to maintain order. Flashbacks reveal her personal connection to the hospital—a tragedy in her past that draws her deeper into the ward’s secrets.",
                                'order' => 2,
                            ],
                            [
                                'title' => 'Chapter 3',
                                'content' => "A violent incident shakes the ward, blurring the line between reality and delusion. The protagonist questions her own sanity as she uncovers evidence that the ward’s darkest rumors may be true. She must decide whether to trust her instincts or risk becoming another victim of Ward D.",
                                'order' => 3,
                            ],
                        ]
                    ],
                    [
                        'book_id' => 26,
                        'title' => 'The Crash',
                        'chapters' => [
                            [
                                'title' => 'Chapter 1',
                                'content' => "A group of strangers wakes up after a car crash on a snowy, remote road. Disoriented and injured, they must work together to survive. Tensions rise as they realize that not everyone is telling the truth about their identity or their reason for being on the road.",
                                'order' => 1,
                            ],
                            [
                                'title' => 'Chapter 2',
                                'content' => "The survivors struggle to find shelter and help, but the cold and isolation take their toll. Suspicion grows as secrets begin to surface. A series of strange occurrences makes them question whether the crash was truly an accident or something more sinister.",
                                'order' => 2,
                            ],
                            [
                                'title' => 'Chapter 3',
                                'content' => "Paranoia and desperation fuel conflict within the group. As the night drags on, an ominous discovery suggests that someone among them may be responsible for the crash—or is planning something even worse. The group must decide who to trust as their situation becomes increasingly dire.",
                                'order' => 3,
                            ],
                        ]
                    ],
                    [
                        'book_id' => 27,
                        'title' => 'Whispers of Dead Girls',
                        'chapters' => [
                            [
                                'title' => 'Chapter 1',
                                'content' => "In a small town plagued by rumors of missing girls, the protagonist begins hearing whispers that seem to belong to the vanished. Drawn into the mystery, she is determined to uncover the truth, even as the community closes ranks and old wounds reopen.",
                                'order' => 1,
                            ],
                            [
                                'title' => 'Chapter 2',
                                'content' => "Her investigation brings her into contact with the families of the missing and those who may know more than they admit. The atmosphere grows increasingly tense as she uncovers connections between the disappearances and longstanding town secrets.",
                                'order' => 2,
                            ],
                            [
                                'title' => 'Chapter 3',
                                'content' => "Supernatural elements intensify as the whispers become more urgent, guiding the protagonist to hidden evidence. She faces resistance and danger from those who want the past to stay buried. The chapter ends with a chilling revelation that changes everything she thought she knew.",
                                'order' => 3,
                            ],
                        ]
                    ],
                    [
                        'book_id' => 28,
                        'title' => 'Dying to Meet You',
                        'chapters' => [
                            [
                                'title' => 'Chapter 1',
                                'content' => "A newcomer moves to a coastal town for a fresh start, but her arrival is met with suspicion. The town’s idyllic exterior hides a dark undercurrent, and when a series of mysterious deaths occur, she finds herself both suspect and sleuth.",
                                'order' => 1,
                            ],
                            [
                                'title' => 'Chapter 2',
                                'content' => "As she befriends locals, the protagonist learns disturbing details about the victims and the town’s history. Her investigation makes her a target, and she receives ominous warnings to stop digging. The sense of danger grows with each new clue.",
                                'order' => 2,
                            ],
                            [
                                'title' => 'Chapter 3',
                                'content' => "Uncovering a pattern in the deaths, the protagonist realizes that she may be next. She must piece together the truth before the killer strikes again. The chapter ends with a narrow escape, raising the stakes for her survival.",
                                'order' => 3,
                            ],
                        ]
                    ],
                    [
                        'book_id' => 29,
                        'title' => 'Whistle',
                        'chapters' => [
                            [
                                'title' => 'Chapter 1',
                                'content' => "A retired detective is drawn back into the world of crime when a late-night whistle signals trouble in his quiet neighborhood. A series of chilling incidents suggest the return of a notorious predator, and the detective’s instincts and regrets resurface.",
                                'order' => 1,
                            ],
                            [
                                'title' => 'Chapter 2',
                                'content' => "The detective begins his own investigation, interviewing neighbors and piecing together clues. He faces skepticism from local police and must rely on old contacts. Flashbacks reveal the unresolved case that still haunts him.",
                                'order' => 2,
                            ],
                            [
                                'title' => 'Chapter 3',
                                'content' => "A disturbing message left at the latest crime scene makes the case personal. The detective realizes that the predator may be targeting him or someone he cares about. The chapter ends with a tense confrontation and a new lead to pursue.",
                                'order' => 3,
                            ],
                        ]
                    ],
                    [
                        'book_id' => 30,
                        'title' => 'We Live Here Now',
                        'chapters' => [
                            [
                                'title' => 'Chapter 1',
                                'content' => "A family moves into a sprawling old house, hoping to rebuild after personal tragedies. The house’s eerie presence and unexplained phenomena unsettle them from the start. Each family member faces their own fears as they try to adjust.",
                                'order' => 1,
                            ],
                            [
                                'title' => 'Chapter 2',
                                'content' => "Strange noises, cold spots, and unsettling dreams escalate. The family begins to experience disturbing visions and finds evidence of the house’s dark past. Guilt, trauma, and suspicion grow as the lines between reality and nightmare blur.",
                                'order' => 2,
                            ],
                            [
                                'title' => 'Chapter 3',
                                'content' => "Secrets come to light as the family confronts both the supernatural and their own unresolved issues. The house’s malevolent presence tightens its grip, and the family must decide whether to flee or fight for their sanity. The chapter ends with a terrifying confrontation that hints at deeper horrors to come.",
                                'order' => 3,
                            ],
                        ]
                    ],
                ],
            ],

            'Romance' => [
                [
                    [
                        'book_id' => 31,
                        'title' => 'The Hating Game',
                        'chapters' => [
                            [
                                'title' => 'Chapter 1',
                                'content' => "Lucy Hutton loves her job as an executive assistant at a publishing company, but she can’t stand her equally ambitious coworker, Joshua Templeman. Their rivalry is the stuff of office legend, with daily petty competitions and biting banter. Despite her sunny disposition, Lucy is determined never to let Joshua win, even as their mutual antagonism masks a simmering attraction. When a new promotion pits them directly against each other, the stakes—and the tension—rise, setting the stage for a romance built on enemies-to-lovers sparks.",
                                'order' => 1,
                            ],
                            [
                                'title' => 'Chapter 2',
                                'content' => "The announcement of a new chief operating officer position intensifies the rivalry between Lucy and Josh. Both are determined to win, even as their office games become more intimate and revealing. Lucy finds herself noticing Josh’s softer side, while he lets slip moments of vulnerability that challenge her assumptions. Their professional competition is complicated by an unexpected, passionate kiss in the elevator, leaving them both reeling and questioning what they really want—from the job and from each other.",
                                'order' => 2,
                            ],
                            [
                                'title' => 'Chapter 3',
                                'content' => "Lucy’s feelings for Josh become harder to ignore as their rivalry takes on a flirtatious edge. Forced to work together on a major project, they begin to see each other in a new light. Josh reveals details about his family and why he’s so guarded, giving Lucy insight into his true character. The line between love and hate blurs, and both must decide if they are willing to risk their hearts for a chance at something more.",
                                'order' => 3,
                            ],
                        ]
                    ],
                    [
                        'book_id' => 32,
                        'title' => 'The Seven Husbands of Evelyn Hugo',
                        'chapters' => [
                            [
                                'title' => 'Chapter 1',
                                'content' => "Monique Grant, an aspiring journalist, is stunned when the reclusive Hollywood icon Evelyn Hugo requests her for an exclusive interview. Curious and nervous, Monique is drawn into Evelyn’s glamorous yet mysterious world. The chapter sets the scene for a sweeping tale of love, ambition, and scandal, as Evelyn prepares to reveal the truth behind her seven marriages.",
                                'order' => 1,
                            ],
                            [
                                'title' => 'Chapter 2',
                                'content' => "Evelyn begins her story in 1950s New York. Born Evelyn Herrera, she uses her beauty and determination to escape a difficult home life and break into Hollywood. The chapter explores her first marriage to Ernie Diaz, a stepping stone to stardom. Evelyn’s ambition, cunning, and vulnerability begin to emerge as she navigates the ruthless world of fame.",
                                'order' => 2,
                            ],
                            [
                                'title' => 'Chapter 3',
                                'content' => "As Evelyn’s fame grows, so do the complexities of her relationships. She enters a marriage of convenience, balancing love, desire, and the cost of keeping secrets in a judgmental industry. Monique listens, captivated, as Evelyn hints at the heartbreak and forbidden love that shaped her life, foreshadowing the emotional depth of what’s to come.",
                                'order' => 3,
                            ],
                        ]
                    ],
                    [
                        'book_id' => 33,
                        'title' => 'Red, White & Royal Blue',
                        'chapters' => [
                            [
                                'title' => 'Chapter 1',
                                'content' => "Alex Claremont-Diaz, First Son of the United States, has a longstanding rivalry with Prince Henry of Wales. When a public altercation at a royal wedding threatens international relations, both are forced to stage a fake friendship for the media. Their staged camaraderie quickly grows into a real and complicated connection, setting the stage for an enemies-to-lovers romance with global consequences.",
                                'order' => 1,
                            ],
                            [
                                'title' => 'Chapter 2',
                                'content' => "As Alex and Henry spend more time together for appearances’ sake, their banter softens into genuine understanding. Alex is surprised by Henry’s wit and vulnerability, and the two share late-night conversations that reveal their deepest fears and hopes. Political pressures and family expectations loom large, but the bond between them grows undeniable.",
                                'order' => 2,
                            ],
                            [
                                'title' => 'Chapter 3',
                                'content' => "A secret romance blossoms as Alex and Henry navigate their feelings and the risks of being discovered. Their relationship deepens through stolen moments and heartfelt confessions. Both must confront the realities of their public roles and the sacrifices required for love in the spotlight, setting the stage for dramatic choices ahead.",
                                'order' => 3,
                            ],
                        ]
                    ],
                    [
                        'book_id' => 34,
                        'title' => 'The Deal',
                        'chapters' => [
                            [
                                'title' => 'Chapter 1',
                                'content' => "Hannah Wells, a college student with a painful past, is focused on her studies and uninterested in the dating scene. When her crush ignores her, star hockey player Garrett Graham proposes a fake relationship to make his ex jealous. Hannah reluctantly agrees, unaware that this arrangement will change both of their lives forever.",
                                'order' => 1,
                            ],
                            [
                                'title' => 'Chapter 2',
                                'content' => "Garrett and Hannah’s fake dating scheme brings them closer as they spend time together. Their banter is playful, but real chemistry simmers beneath the surface. Hannah helps Garrett with his studies, and he encourages her to open up about her past. Their friendship deepens, blurring the boundaries between pretend and reality.",
                                'order' => 2,
                            ],
                            [
                                'title' => 'Chapter 3',
                                'content' => "The lines between their act and their true feelings become increasingly blurred. A series of vulnerable moments and shared confidences force Garrett and Hannah to confront their growing attraction. As their arrangement faces challenges from jealous classmates and personal insecurities, both must decide if they’re ready for something real.",
                                'order' => 3,
                            ],
                        ]
                    ],
                    [
                        'book_id' => 35,
                        'title' => 'People We Meet on Vacation',
                        'chapters' => [
                            [
                                'title' => 'Chapter 1',
                                'content' => "Poppy and Alex, best friends with opposite personalities, have taken a summer trip together every year since college. But after a falling out two years ago, they haven’t spoken. Poppy, feeling stuck in her personal and professional life, reaches out to Alex to propose one last vacation, hoping to repair their friendship—and maybe something more.",
                                'order' => 1,
                            ],
                            [
                                'title' => 'Chapter 2',
                                'content' => "As Poppy and Alex embark on their trip, shared memories and unresolved feelings surface. Their trademark banter masks deeper emotions as they revisit old haunts and face the reasons for their rift. Poppy is forced to confront her fears about vulnerability and what she truly wants from Alex.",
                                'order' => 2,
                            ],
                            [
                                'title' => 'Chapter 3',
                                'content' => "The vacation tests both their friendship and their hearts. Confessions are made, and the truth about their falling out comes to light. Poppy and Alex must decide if they’re willing to risk the comfort of friendship for a chance at love, setting the stage for an emotional reckoning.",
                                'order' => 3,
                            ],
                        ]
                    ],
                    [
                        'book_id' => 36,
                        'title' => 'The Love Hypothesis',
                        'chapters' => [
                            [
                                'title' => 'Chapter 1',
                                'content' => "Olive Smith, a Ph.D. candidate, finds herself in a bind when her best friend gets the wrong idea about Olive’s love life. In a moment of panic, Olive kisses the first man she sees—Dr. Adam Carlsen, the notoriously grumpy (and brilliant) young professor. The fake relationship that ensues is meant to be mutually beneficial, but sparks of real chemistry quickly begin to fly.",
                                'order' => 1,
                            ],
                            [
                                'title' => 'Chapter 2',
                                'content' => "Olive and Adam navigate the awkwardness of pretending to date in front of colleagues and friends. Despite their initial discomfort, Olive discovers that Adam is unexpectedly kind, and their banter grows flirtatious. Both struggle to keep their feelings in check, but the boundaries between pretense and reality become increasingly hard to maintain.",
                                'order' => 2,
                            ],
                            [
                                'title' => 'Chapter 3',
                                'content' => "A series of professional and personal challenges force Olive and Adam to rely on each other. Vulnerabilities are shared, and Olive must decide if she’s brave enough to admit her true feelings. The chapter ends with a pivotal moment that will change the trajectory of their relationship forever.",
                                'order' => 3,
                            ],
                        ]
                    ],
                    [
                        'book_id' => 37,
                        'title' => 'Part of Your World',
                        'chapters' => [
                            [
                                'title' => 'Chapter 1',
                                'content' => "Alexis Montgomery, an ER doctor from a prestigious family, finds herself stranded in a small town after a car accident. She is rescued by Daniel, a charming local carpenter with a big heart. Their immediate connection is undeniable, but Alexis’ plans and expectations don’t include falling for someone so different from her world.",
                                'order' => 1,
                            ],
                            [
                                'title' => 'Chapter 2',
                                'content' => "Alexis extends her stay in the town, drawn to its warmth and Daniel’s kindness. Their differences—class, ambition, and family expectations—create obstacles, but their bond deepens as they share vulnerable moments. Alexis faces pressure from her family, but Daniel’s unwavering support gives her the courage to consider what happiness truly means.",
                                'order' => 2,
                            ],
                            [
                                'title' => 'Chapter 3',
                                'content' => "Torn between duty and desire, Alexis must decide whether to return to her old life or take a chance on love. Daniel challenges her to follow her heart, even if it means defying her family’s expectations. The chapter ends with Alexis at a crossroads, the promise of a new beginning within reach.",
                                'order' => 3,
                            ],
                        ]
                    ],
                    [
                        'book_id' => 38,
                        'title' => 'Book Lovers',
                        'chapters' => [
                            [
                                'title' => 'Chapter 1',
                                'content' => "Nora Stephens, a cutthroat literary agent, is known for her ambition and sharp instincts. When her sister Libby suggests a summer getaway to a small town, Nora reluctantly agrees, hoping for a break from the city. Upon arrival, Nora keeps running into her professional nemesis, editor Charlie Lastra, setting the stage for a tension-filled reunion.",
                                'order' => 1,
                            ],
                            [
                                'title' => 'Chapter 2',
                                'content' => "Nora and Charlie are thrown together on a book project and forced to confront their complicated history. Their banter is both witty and charged, and Nora begins to see a softer side to Charlie. As she helps Libby fulfill her dream vacation list, Nora questions her priorities and what she truly wants in life—and in love.",
                                'order' => 2,
                            ],
                            [
                                'title' => 'Chapter 3',
                                'content' => "Nora and Charlie’s professional rivalry gives way to mutual respect and simmering attraction. As secrets come to light and old wounds are healed, Nora must decide if she’s willing to risk her heart for a new chapter. The small town—and Charlie—prove to be exactly what she needs to rewrite her own story.",
                                'order' => 3,
                            ],
                        ]
                    ],
                    [
                        'book_id' => 39,
                        'title' => 'Twisted Love',
                        'chapters' => [
                            [
                                'title' => 'Chapter 1',
                                'content' => "Ava Chen’s life is turned upside down when her brother’s best friend, Alex Volkov, moves in next door to protect her. Alex is cold, brilliant, and hiding secrets of his own, while Ava is warmth and light. Their forced proximity sparks a dangerous attraction, complicated by the shadows of their pasts.",
                                'order' => 1,
                            ],
                            [
                                'title' => 'Chapter 2',
                                'content' => "Ava and Alex’s connection deepens amid growing tension. Alex’s protective instincts clash with his belief that he’s unworthy of love. Ava is determined to break through his walls, but their budding relationship is threatened by secrets that refuse to stay buried. Both must confront their fears as desire becomes impossible to ignore.",
                                'order' => 2,
                            ],
                            [
                                'title' => 'Chapter 3',
                                'content' => "The truth about Alex’s past comes to light, putting Ava in danger and forcing both to make difficult choices. Their love is tested by betrayal, forgiveness, and the realization that healing is possible only when they face their demons together. The chapter ends with a hard-earned hope for the future.",
                                'order' => 3,
                            ],
                        ]
                    ],
                    [
                        'book_id' => 40,
                        'title' => 'It Ends with Us',
                        'chapters' => [
                            [
                                'title' => 'Chapter 1',
                                'content' => "Lily Bloom has always worked hard for the life she wants. After moving to Boston, she meets charming neurosurgeon Ryle Kincaid and is drawn to him despite his aversion to relationships. The chemistry between them is undeniable, and Lily finds herself daring to hope for a new beginning, even as memories of her first love, Atlas, linger.",
                                'order' => 1,
                            ],
                            [
                                'title' => 'Chapter 2',
                                'content' => "Lily and Ryle’s relationship deepens, but cracks begin to show as Ryle’s temper and emotional scars emerge. Flashbacks to Lily’s past with Atlas reveal patterns of love, pain, and resilience. When Atlas reappears in her life, Lily must confront difficult truths about love, loyalty, and the courage it takes to break cycles of abuse.",
                                'order' => 2,
                            ],
                            [
                                'title' => 'Chapter 3',
                                'content' => "Torn between the past and the present, Lily faces an impossible choice. As she finds the strength to prioritize her own happiness and safety, Lily’s journey becomes one of self-love and empowerment. The chapter ends with Lily taking her first steps toward healing and hope.",
                                'order' => 3,
                            ],
                        ]
                    ],
                    [
                        'book_id' => 41,
                        'title' => 'Reckless',
                        'chapters' => [
                            [
                                'title' => 'Chapter 1',
                                'content' => "In a world where danger and desire intertwine, the heroine is drawn to a mysterious stranger whose reckless charm hides a dangerous secret. The first chapter establishes the stakes—trust is scarce, and every choice has consequences. Their first encounter is electric, setting the tone for a romance fueled by risk and longing.",
                                'order' => 1,
                            ],
                            [
                                'title' => 'Chapter 2',
                                'content' => "As the heroine and her dangerous love interest grow closer, secrets threaten to tear them apart. The heroine is forced to choose between loyalty and temptation, risking her heart for a chance at freedom. The line between ally and enemy blurs, and trust must be earned the hard way.",
                                'order' => 2,
                            ],
                            [
                                'title' => 'Chapter 3',
                                'content' => "The heroine’s world is rocked by betrayal and revelation. The couple must fight for their love against all odds, facing enemies both within and without. The chapter ends with a daring escape and the promise that love—no matter how reckless—can sometimes be worth the risk.",
                                'order' => 3,
                            ],
                        ]
                    ],
                    [
                        'book_id' => 42,
                        'title' => 'Funny Story',
                        'chapters' => [
                            [
                                'title' => 'Chapter 1',
                                'content' => "Daphne, newly single and stranded in a small town after a breakup, finds herself reluctantly sharing a house with her ex’s new girlfriend’s ex, Miles. Their awkward living situation leads to unexpected friendship and laughter, even as both struggle with the messiness of heartbreak.",
                                'order' => 1,
                            ],
                            [
                                'title' => 'Chapter 2',
                                'content' => "Daphne and Miles team up to fake a relationship for the sake of their exes and mutual friends. What starts as a joke becomes genuine as they discover shared quirks and vulnerabilities. The small town’s nosiness and charm force them to confront what they really want from love and each other.",
                                'order' => 2,
                            ],
                            [
                                'title' => 'Chapter 3',
                                'content' => "As the lines between real and pretend blur, Daphne and Miles must decide if they’re ready to move on and take a chance on each other. The chapter ends with a heartfelt confession and the realization that sometimes, love finds you when you least expect it.",
                                'order' => 3,
                            ],
                        ]
                    ],
                    [
                        'book_id' => 43,
                        'title' => 'Broken Country',
                        'chapters' => [
                            [
                                'title' => 'Chapter 1',
                                'content' => "In the aftermath of tragedy, two souls find themselves at a crossroads in rural America. The heroine, seeking solace and a fresh start, returns to her family’s farm, where the scars of the past run deep. She meets the hero, a man haunted by his own losses, and their tentative friendship is forged in shared pain.",
                                'order' => 1,
                            ],
                            [
                                'title' => 'Chapter 2',
                                'content' => "As the seasons change, the heroine and hero work side by side, their connection deepening. They help each other heal, but old wounds and small-town gossip threaten to drive them apart. The land itself becomes a symbol of both hope and hardship as they decide if they can move forward together.",
                                'order' => 2,
                            ],
                            [
                                'title' => 'Chapter 3',
                                'content' => "When crisis strikes, the heroine and hero must confront their fears and fight for their future. Through forgiveness and love, they find the courage to rebuild. The chapter—and the story—ends with the promise of new beginnings and a hard-won happily ever after.",
                                'order' => 3,
                            ],
                        ]
                    ],
                    [
                        'book_id' => 44,
                        'title' => 'Fearless',
                        'chapters' => [
                            [
                                'title' => 'Chapter 1',
                                'content' => "In a world of intrigue and danger, the protagonist is determined to rise above her past and claim her destiny. She meets a mysterious stranger whose loyalty is as fierce as his love. Together, they embark on a journey filled with peril, passion, and the discovery that true courage means risking everything for love.",
                                'order' => 1,
                            ],
                            [
                                'title' => 'Chapter 2',
                                'content' => "The couple’s bond is tested by betrayal and adversity. As they face powerful foes, they draw strength from each other and refuse to give in to fear. Secrets are revealed, and the protagonist must decide whether to trust her heart or guard it at all costs.",
                                'order' => 2,
                            ],
                            [
                                'title' => 'Chapter 3',
                                'content' => "With everything on the line, the couple confronts their greatest challenge yet. Through sacrifice and unwavering faith in each other, they emerge victorious. The chapter ends with a declaration of love and the realization that together, they are truly fearless.",
                                'order' => 3,
                            ],
                        ]
                    ],
                    [
                        'book_id' => 45,
                        'title' => 'The Wrath of the Fallen',
                        'chapters' => [
                            [
                                'title' => 'Chapter 1',
                                'content' => "A forbidden love ignites in a world where angels and mortals are sworn enemies. The heroine, marked by destiny, meets a fallen angel whose touch is both a blessing and a curse. Their connection threatens to unravel the balance between heaven and earth, but neither can resist temptation.",
                                'order' => 1,
                            ],
                            [
                                'title' => 'Chapter 2',
                                'content' => "As their secret romance deepens, the lovers are hunted by both celestial and mortal foes. Betrayals abound, and the cost of their love grows ever higher. The heroine must harness hidden powers and trust her heart to survive.",
                                'order' => 2,
                            ],
                            [
                                'title' => 'Chapter 3',
                                'content' => "A climactic battle forces the lovers to choose between sacrifice and salvation. As destinies collide, love proves stronger than fate. The story closes with hope for peace between their worlds and a love that endures beyond the divine.",
                                'order' => 3,
                            ],
                        ]
                    ],
                    [
                        'book_id' => 46,
                        'title' => 'Heart of the Sun',
                        'chapters' => [
                            [
                                'title' => 'Chapter 1',
                                'content' => "In the heat of a vibrant southern town, the heroine is determined to make her mark as a chef. A chance encounter with a mysterious and brooding newcomer stirs dreams and desires she’s long kept hidden. Their chemistry is instant, but both carry secrets that threaten to keep them apart.",
                                'order' => 1,
                            ],
                            [
                                'title' => 'Chapter 2',
                                'content' => "As the heroine and the newcomer spend more time together, old wounds and hidden truths surface. Family expectations and personal ambitions clash, forcing them to confront what truly matters. Through food, laughter, and vulnerability, they begin to heal and trust again.",
                                'order' => 2,
                            ],
                            [
                                'title' => 'Chapter 3',
                                'content' => "In a final test of love and courage, the couple must risk everything for a chance at happiness. Forgiveness and self-acceptance pave the way for a new beginning. The chapter ends with a celebration of love, home, and the warmth found in each other’s arms.",
                                'order' => 3,
                            ],
                        ]
                    ],
                ]
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
