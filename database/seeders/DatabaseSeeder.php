<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'admin',
            'username' => 'admin1',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'user',
            'username' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::factory(2)->create();

        Category::create([
            'name' => 'Art',
            'slug' => 'art'
        ]);

        Category::create([
            'name' => 'Fiction',
            'slug' => 'fiction'
        ]);

        Category::create([
            'name' => 'Business',
            'slug' => 'Business'
        ]);

        Category::create([
            'name' => 'Horror',
            'slug' => 'horror'
        ]);

        Category::create([
            'name' => 'History',
            'slug' => 'history'
        ]);

        Category::create([
            'name' => 'Sports',
            'slug' => 'sports'
        ]);

        //Post::factory(40)->create();

        Post::create([
            'title' => 'The Venice Sketchbook ',
            'penulis' => 'Rhys Bowen',
            'tanggal_rilis' => '2021-4-12',
            'halaman' => 412,
            'bahasa' => 'English',
            'rating' => '4.2',
            'image' => 'post-images/1.jpg',
            'slug' => 'the-venice-sketchbook',
            'excerpt' => 'Caroline Grant is struggling to accept the end of her marriage when she receives an unexpected bequest. Her beloved great-aunt Lettie leaves her a sketchbook, three keys, and',
            'body' => 'Caroline Grant is struggling to accept the end of her marriage when she receives an unexpected bequest. Her beloved great-aunt Lettie leaves her a sketchbook, three keys, and a final whisper…Venice. Caroline’s quest: to scatter Juliet “Lettie” Browning’s ashes in the city she loved and to unlock the mysteries stored away for more than sixty years.

            It’s 1938 when art teacher Juliet Browning arrives in romantic Venice. For her students, it’s a wealth of history, art, and beauty. For Juliet, it’s poignant memories and a chance to reconnect with Leonardo Da Rossi, the man she loves whose future is already determined by his noble family. However star-crossed, nothing can come between them. Until the threat of war closes in on Venice and they’re forced to fight, survive, and protect a secret that will bind them forever.
            
            Key by key, Lettie’s life of impossible love, loss, and courage unfolds. It’s one that Caroline can now make right again as her own journey of self-discovery begins',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'The Singing Trees',
            'penulis' => 'Boo Walker',
            'tanggal_rilis' => '2021-8-3',
            'halaman' => 429,
            'bahasa' => 'English',
            'rating' => '4.2',
            'image' => 'post-images/2.jpg',
            'slug' => 'the-singing-trees',
            'excerpt' => 'Maine, 1969. After losing her parents in a car accident, aspiring artist Annalisa Mancuso lives with her grandmother and their large Italian family in the stifling factory town of Payton Mills. Inspir',
            'body' => 'Maine, 1969. After losing her parents in a car accident, aspiring artist Annalisa Mancuso lives with her grandmother and their large Italian family in the stifling factory town of Payton Mills. Inspired by her mother, whose own artistic dreams disappeared in a damaged marriage, Annalisa is dedicated only to painting. Closed off to love, and driven as much by her innate talent as she is the disillusionment of her past, Annalisa just wants to come into her own.

            The first step is leaving Payton Mills and everything it represents. The next, the inspiring opportunities in the city of Portland and a thriving New England art scene where Annalisa hopes to find her voice. But she meets Thomas, an Ivy League student whose attentions—and troubled family—upend her pursuits in ways she never imagined possible. As their relationship deepens, Annalisa must balance her dreams against an unexpected love. Until the unraveling of an unforgivable lie.
            
            For Annalisa, opening herself up to life and to love is a risk. It might also be the chance she needs to finally become the person and the artist she’s meant to be.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'The Magnolia Palace ',
            'penulis' => 'Fiona Davis ',
            'tanggal_rilis' => '2021-4-12',
            'halaman' => 340,
            'bahasa' => 'English',
            'rating' => '3.9',
            'image' => 'post-images/3.jpg',
            'slug' => 'the-magnolia-palace',
            'excerpt' => 'Fiona Davis, New York Times bestselling author of The Lions of Fifth Avenue, returns with a tantalizing novel about the secrets, betrayal, and murder within one of New York City’s most impressive Gilded Age mansions.

            Eight months since losing her mother in the Spanish flu outbreak of 1919, twenty-one-year-old Lillian Carter’s life has completely fallen apart. For the past s',
            'body' => 'Eight months since losing her mother in the Spanish flu outbreak of 1919, twenty-one-year-old Lillian Carter’s life has completely fallen apart. For the past six years, under the moniker Angelica, Lillian was one of the most sought-after artists’ models in New York City, with statues based on her figure gracing landmarks from the Plaza Hotel to the Brooklyn Bridge. But with her mother gone, a grieving Lillian is rudderless and desperate—the work has dried up and a looming scandal has left her entirely without a safe haven. So when she stumbles upon an employment opportunity at the Frick mansion—a building that, ironically, bears her own visage—Lillian jumps at the chance. But the longer she works as a private secretary to the imperious and demanding Helen Frick, the daughter and heiress of industrialist and art patron Henry Clay Frick, the more deeply her life gets intertwined with that of the family—pulling her into a tangled web of romantic trysts, stolen jewels, and family drama that runs so deep, the stakes just may be life or death.

            Nearly fifty years later, mod English model Veronica Weber has her own chance to make her career—and with it, earn the money she needs to support her family back home—within the walls of the former Frick residence, now converted into one of New York City’s most impressive museums. But when she—along with a charming intern/budding art curator named Joshua—is dismissed from the Vogue shoot taking place at the Frick Collection, she chances upon a series of hidden messages in the museum: messages that will lead her and Joshua on a hunt that could not only solve Veronica’s financial woes, but could finally reveal the truth behind a decades-old murder in the infamous Frick family.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Still Life',
            'penulis' => 'Sarah Winman',
            'tanggal_rilis' => '2021-11-2',
            'halaman' => 464,
            'bahasa' => 'English',
            'rating' => '4.1',
            'image' => 'post-images/4.jpg',
            'slug' => 'still-life',
            'excerpt' => 'Tuscany, 1944: As Allied troops advance and bombs fall around deserted villages, a young English soldier, Ulysses Temper, finds himself in the wine cellar of a deserted villa. There, he has a chance encounter with Evelyn Skinner, a middle-aged art historian who has come to Italy to salvage paintings from the ruins and recall long-forgotten memories of her own youth. In eac',
            'body' => 'Tuscany, 1944: As Allied troops advance and bombs fall around deserted villages, a young English soldier, Ulysses Temper, finds himself in the wine cellar of a deserted villa. There, he has a chance encounter with Evelyn Skinner, a middle-aged art historian who has come to Italy to salvage paintings from the ruins and recall long-forgotten memories of her own youth. In each other, Ulysses and Evelyn find a kindred spirit amongst the rubble of war-torn Italy, and set off on a course of events that will shape Ulysses s life for the next four decades.

            As Ulysses returns home to London, reimmersing himself in his crew at The Stoat and Parrot -- a motley mix of pub crawlers and eccentrics -- he carries his time in Italy with him. And when an unexpected inheritance brings him back to where it all began, Ulysses knows better than to tempt fate, and returns to the Tuscan hills.
            
            With beautiful prose, extraordinary tenderness, and bursts of humor and light, Still Life is a sweeping portrait of unforgettable individuals who come together to make a family, and a richly drawn celebration of beauty and love in all its forms.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Write My Name Across the Sky',
            'penulis' => 'Barbara O Neal',
            'tanggal_rilis' => '2021-8-10',
            'halaman' => 361,
            'bahasa' => 'English',
            'rating' => '4.3',
            'image' => 'post-images/5.jpg',
            'slug' => 'write-my-name-across-the-sky',
            'excerpt' => 'Life’s beautiful for seventysomething influencer Gloria Rose, in her Upper West Side loft with rooftop garden and scores of Instagram followers—until she gets word that her old flame has been arrested for art theft and',
            'body' => 'Life’s beautiful for seventysomething influencer Gloria Rose, in her Upper West Side loft with rooftop garden and scores of Instagram followers—until she gets word that her old flame has been arrested for art theft and forgery. Knowing her own involvement in his misdeeds decades earlier, Gloria realizes she could be the next arrest and must flee. But first, she needs to make sure her nieces are protected from any fallout.

            The sisters, though in their thirties, are still constantly at odds with each other. Willow, struggling to live up to their mother’s fame as a singer-songwriter, is recovering from a failed album and yet another heartbreak, while Sam is desperate to revive her floundering video game company.
            
            When circumstances out of their control bring the three women back together, they will each have to reckon with and reconcile their interwoven traumas, past loves, and the looming consequences that could either destroy their futures or bring them closer than ever.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Portrait of a Thief',
            'penulis' => 'Grace D. Li',
            'tanggal_rilis' => '2022-4-5',
            'halaman' => 384,
            'bahasa' => 'English',
            'rating' => '3.6',
            'image' => 'post-images/6.jpg',
            'slug' => 'portrait-of-a-thief',
            'excerpt' => 'A senior at Harvard, Will fits comfortably in his carefully curated roles: a perfect student, an art history major and sometimes artist, the eldest',
            'body' => 'A senior at Harvard, Will fits comfortably in his carefully curated roles: a perfect student, an art history major and sometimes artist, the eldest son who has always been his parents’ American Dream. But when a mysterious Chinese benefactor reaches out with an impossible—and illegal—job offer, Will finds himself something else as well: the leader of a heist to steal back five priceless Chinese sculptures, looted from Beijing centuries ago.

            His crew is every heist archetype one can imag­ine—or at least, the closest he can get. A con artist: Irene Chen, a public policy major at Duke who can talk her way out of anything. A thief: Daniel Liang, a premed student with steady hands just as capable of lockpicking as suturing. A getaway driver: Lily Wu, an engineering major who races cars in her free time. A hacker: Alex Huang, an MIT dropout turned Silicon Valley software engineer. Each member of his crew has their own complicated relationship with China and the identity they’ve cultivated as Chinese Americans, but when Will asks, none of them can turn him down.
            
            Because if they succeed? They earn fifty million dollars—and a chance to make history. But if they fail, it will mean not just the loss of everything they’ve dreamed for themselves but yet another thwarted at­tempt to take back what colonialism has stolen.
            
            Equal parts beautiful, thoughtful, and thrilling, Portrait of a Thief is a cultural heist and an examination of Chinese American identity, as well as a necessary cri­tique of the lingering effects of colonialism.
            
            Ocean’s Eleven meets The Farewell in Portrait of a Thief, a lush, lyrical heist novel inspired by the true story of Chinese art vanishing from Western museums; about diaspora, the colonization of art, and the complexity of the Chinese American identity.',
            'category_id' => 1,
            'user_id' => 1
        ]);


        // DATA BUKU KATEGORI FICTION
        Post::create([
            'title' => 'Sea of Tranquility',
            'penulis' => 'Emily St. John Mandel',
            'tanggal_rilis' => '2022-4-5',
            'halaman' => 320,
            'bahasa' => 'English',
            'rating' => '4.2',
            'image' => 'post-images/7.jpg',
            'slug' => 'sea-of-tranquility',
            'excerpt' => 'Edwin St. Andrew is eighteen years old when he crosses the Atlantic by steamship',
            'body' => 'Edwin St. Andrew is eighteen years old when he crosses the Atlantic by steamship, exiled from polite society following an ill-conceived diatribe at a dinner party. He enters the forest, spellbound by the beauty of the Canadian wilderness, and suddenly hears the notes of a violin echoing in an airship terminal--an experience that shocks him to his core.

            Two centuries later a famous writer named Olive Llewellyn is on a book tour. Shes traveling all over Earth, but her home is the second moon colony, a place of white stone, spired towers, and artificial beauty. Within the text of Olive s bestselling pandemic novel lies a strange passage: a man plays his violin for change in the echoing corridor of an airship terminal as the trees of a forest rise around him.
            
            When Gaspery-Jacques Roberts, a detective in the Night City, is hired to investigate an anomaly in the North American wilderness, he uncovers a series of lives upended: The exiled son of an earl driven to madness, a writer trapped far from home as a pandemic ravages Earth, and a childhood friend from the Night City who, like Gaspery himself, has glimpsed the chance to do something extraordinary that will disrupt the timeline of the universe.
            
            A virtuoso performance that is as human and tender as it is intellectually playful, Sea of Tranquility is a novel of time travel and metaphysics that precisely captures the reality of our current moment.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'The No-Show ',
            'penulis' => 'Beth O Leary',
            'tanggal_rilis' => '2022-4-12',
            'halaman' => 352,
            'bahasa' => 'English',
            'rating' => '4.0',
            'image' => 'post-images/8.jpg',
            'slug' => 'the-no-show',
            'excerpt' => 'Siobhan is a quick-tempered life coach with way too much on her plate. Miranda is a tree surgeon used to being treated as just one of the guys on the job. Jane is a soft-spoken volunteer for the local c',
            'body' => 'Siobhan is a quick-tempered life coach with way too much on her plate. Miranda is a tree surgeon used to being treated as just one of the guys on the job. Jane is a soft-spoken volunteer for the local charity shop with zero sense of self-worth.

            These three women are strangers who have only one thing in common: They ve all been stood up on the same day, the very worst day to be stood up--Valentine s Day. And, unbeknownst to them, they ve all been stood up by the same man.
            
            Once they ve each forgiven him for standing them up, they let him back into their lives and are in serious danger of falling in love with a man who seems to have not just one or two but three women on the go....
            
            Is there more to him than meets the eye? And will they each untangle the truth before they all get their hearts broken?',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'The Candy House',
            'penulis' => 'Jennifer Egan',
            'tanggal_rilis' => '2022-4-5',
            'halaman' => 334,
            'bahasa' => 'English',
            'rating' => '4.8',
            'image' => 'post-images/9.jpg',
            'slug' => 'the-candy-house',
            'excerpt' => 'It’s 2010. Staggeringly successful and brilliant tech entrepreneur Bix Bouton is d',
            'body' => 'It’s 2010. Staggeringly successful and brilliant tech entrepreneur Bix Bouton is desperate for a new idea. He’s forty, with four kids, and restless when he stumbles into a conversation with mostly Columbia professors, one of whom is experimenting with downloading or “externalizing” memory. Within a decade, Bix’s new technology, Own Your Unconscious—that allows you access to every memory you’ve ever had, and to share every memory in exchange for access to the memories of others—has seduced multitudes. But not everyone.

            In spellbinding linked narratives, Egan spins out the consequences of Own Your Unconscious through the lives of multiple characters whose paths intersect over several decades. Egan introduces these characters in an astonishing array of styles—from omniscient to first person plural to a duet of voices, an epistolary chapter, and a chapter of tweets. In the world of Egan’s spectacular imagination, there are “counters” who track and exploit desires and there are “eluders,” those who understand the price of taking a bite of the Candy House.
            
            Intellectually dazzling and extraordinarily moving, The Candy House is a bold, brilliant imagining of a world that is moments away. With a focus on social media, gaming, and alternate worlds, you can almost experience moving among dimensions in a role-playing game.​ Egan delivers a fierce and exhilarating testament to the tenacity and transcendence of human longing for real connection, love, family, privacy and redemption.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'The Children on the Hill',
            'penulis' => 'Jennifer McMahon',
            'tanggal_rilis' => '2022-4-26',
            'halaman' => 342,
            'bahasa' => 'English',
            'rating' => '4.0',
            'image' => 'post-images/10.jpg',
            'slug' => 'the-children-on-the-hill',
            'excerpt' => '1978: at her renowned treatment center in picturesque Vermont, the brilliant psychiatrist, Dr. Helen Hildreth, is acclaimed for her compassionate work with the mentally ill. But when s',
            'body' => '1978: at her renowned treatment center in picturesque Vermont, the brilliant psychiatrist, Dr. Helen Hildreth, is acclaimed for her compassionate work with the mentally ill. But when she’s home with her cherished grandchildren, Vi and Eric, she’s just Gran—teaching them how to take care of their pets, preparing them home-cooked meals, providing them with care and attention and love.

            Then one day Gran brings home a child to stay with the family. Iris—silent, hollow-eyed, skittish, and feral—does not behave like a normal girl.
            
            Still, Violet is thrilled to have a new playmate. She and Eric invite Iris to join their Monster Club, where they catalogue all kinds of monsters and dream up ways to defeat them. Before long, Iris begins to come out of her shell. She and Vi and Eric do everything together: ride their bicycles, go to the drive-in, meet at their clubhouse in secret to hunt monsters. Because, as Vi explains, monsters are everywhere.
            
            2019: Lizzy Shelley, the host of the popular podcast Monsters Among Us, is traveling to Vermont, where a young girl has been abducted, and a monster sighting has the town in an uproar. She’s determined to hunt it down, because Lizzy knows better than anyone that monsters are real—and one of them is her very own sister.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Unlikely Animals',
            'penulis' => 'Annie Hartnett',
            'tanggal_rilis' => '2022-4-12',
            'halaman' => 368,
            'bahasa' => 'English',
            'rating' => '4.2',
            'image' => 'post-images/11.jpg',
            'slug' => 'unlikely-animals',
            'excerpt' => 'Natural-born healer Emma Starling once had big plans for her life, but she’s lost her way.',
            'body' => 'Natural-born healer Emma Starling once had big plans for her life, but she’s lost her way. A med school dropout, she’s come back to small-town Everton, New Hampshire to care for her father, dying from a mysterious brain disease. Clive Starling has been hallucinating small animals, as well as visions of the ghost of a long-dead naturalist, Ernest Harold Baynes, once known for letting wild animals live in his house. This ghost has been giving Clive some ideas on how to spend his final days.

            Emma arrives home knowing she must face her dad’s illness, her mom’s judgement, and her younger brother’s recent stint in rehab, but she’s unprepared to find that her former best friend from high school is missing, with no one bothering to look for her. The police say they don’t spend much time looking for drug addicts. Emma’s dad is the only one convinced the young woman might still be alive, and Emma is hopeful he could be right. Someone should look for her, at least. Emma isn’t really trying to be a hero—but somehow she and her father set in motion just the kind of miracle the town needs.
            
            Set against the backdrop of a small town in the throes of a very real opioid crisis, Unlikely Animals is a tragicomic novel about familial expectations, imperfect friendships, and the possibility of resurrecting that which had been thought irrevocably lost.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Insomnia',
            'penulis' => 'Sarah Pinborough',
            'tanggal_rilis' => '2022-4-12',
            'halaman' => 322,
            'bahasa' => 'English',
            'rating' => '3.6',
            'image' => 'post-images/12.jpg',
            'slug' => 'insomnia',
            'excerpt' => 'Emma Averell loves her life—her high-powered legal career, her two beautiful children, and her wonderful stay-at-home husband—but it wasn’t a',
            'body' => 'Emma Averell loves her life—her high-powered legal career, her two beautiful children, and her wonderful stay-at-home husband—but it wasn’t always so perfect. When she was just five years old, Emma and her older sister went into foster care because of a horrific incident with their mother. Her sister can remember a time when their mother was loving and “normal,” but Emma can only remember her as one thing—a monster. And that monster emerged right around their mother’s fortieth birthday, the same age Emma is approaching now.

            Emma desperately wants to keep her successful life separate from her past, so she has always hidden her childhood trauma. But then she’s unable to sleep, and now losing time during the day, also one of the first symptoms her mother showed. Is the madness in her blood, just as her mother predicted? Could she end up hurting her family in her foggy, frenetic state? Or is she truly beginning to lose her mind?',
            'category_id' => 2,
            'user_id' => 1
        ]);

        // DATA BUKU CATEGORY BUSINEESS
        Post::create([
            'title' => 'Atomic Habits: An Easy & Proven Way to Build Good Habits & Break Bad Ones',
            'penulis' => 'James Clear',
            'tanggal_rilis' => '2018-10-16',
            'halaman' => 319,
            'bahasa' => 'English',
            'rating' => '4.3',
            'image' => 'post-images/13.jpg',
            'slug' => 'atomic-habitsan',
            'excerpt' => 'If you’re having trouble changing your habits, the problem ',
            'body' => 'If you’re having trouble changing your habits, the problem isn’t you. The problem is your system. Bad habits repeat themselves again and again not because you don’t want to change, but because you have the wrong system for change. You do not rise to the level of your goals. You fall to the level of your systems. Here, you’ll get a proven system that can take you to new heights.

            Clear is known for his ability to distill complex topics into simple behaviors that can be easily applied to daily life and work. Here, he draws on the most proven ideas from biology, psychology, and neuroscience to create an easy-to-understand guide for making good habits inevitable and bad habits impossible. Along the way, readers will be inspired and entertained with true stories from Olympic gold medalists, award-winning artists, business leaders, life-saving physicians, and star comedians who have used the science of small habits to master their craft and vault to the top of their field.
            
            Learn how to:
            *  make time for new habits (even when life gets crazy);
            *  overcome a lack of motivation and willpower;
            *  design your environment to make success easier;
            *  get back on track when you fall off course;
            ...and much more.
            
            Atomic Habits will reshape the way you think about progress and success, and give you the tools and strategies you need to transform your habits--whether you are a team looking to win a championship, an organization hoping to redefine an industry, or simply an individual who wishes to quit smoking, lose weight, reduce stress, or achieve any other goal.',
            'category_id' => 3,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Bad Blood: Secrets and Lies in a Silicon Valley Startup',
            'penulis' => 'John Carreyrou',
            'tanggal_rilis' => '2018-5-21',
            'halaman' => 339,
            'bahasa' => 'English',
            'rating' => '4.4',
            'image' => 'post-images/14.jpg',
            'slug' => 'bad-blood-Secrets',
            'excerpt' => 'In 2014, Theranos founder and CEO Elizabeth Holmes was widely seen as the female Steve Jobs: a brilliant Stanford dropout w',
            'body' => 'In 2014, Theranos founder and CEO Elizabeth Holmes was widely seen as the female Steve Jobs: a brilliant Stanford dropout whose startup "unicorn" promised to revolutionize the medical industry with a machine that would make blood tests significantly faster and easier. Backed by investors such as Larry Ellison and Tim Draper, Theranos sold shares in a fundraising round that valued the company at $9 billion, putting Holmes’s worth at an estimated $4.7 billion. There was just one problem: The technology didn’t work.

            For years, Holmes had been misleading investors, FDA officials, and her own employees. When Carreyrou, working at The Wall Street Journal, got a tip from a former Theranos employee and started asking questions, both Carreyrou and the Journal were threatened with lawsuits. Undaunted, the newspaper ran the first of dozens of Theranos articles in late 2015. By early 2017, the company’s value was zero and Holmes faced potential legal action from the government and her investors. Here is the riveting story of the biggest corporate fraud since Enron, a disturbing cautionary tale set amid the bold promises and gold-rush frenzy of Silicon Valley.',
            'category_id' => 3,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Can’t Hurt Me: Master Your Mind and Defy the Odds ',
            'penulis' => 'David Goggins',
            'tanggal_rilis' => '2018-12-4',
            'halaman' => 366,
            'bahasa' => 'English',
            'rating' => '4.3',
            'image' => 'post-images/15.jpg',
            'slug' => 'can’t-Hurt-Me',
            'excerpt' => 'For David Goggins, childhood was a nightmare - poverty, prejudice, and physical abuse colored his days and haunted his nights. But through self-discipline, mental toughness, and ',
            'body' => 'For David Goggins, childhood was a nightmare - poverty, prejudice, and physical abuse colored his days and haunted his nights. But through self-discipline, mental toughness, and hard work, Goggins transformed himself from a depressed, overweight young man with no future into a U.S. Armed Forces icon and one of the world’s top endurance athletes. The only man in history to complete elite training as a Navy SEAL, Army Ranger, and Air Force Tactical Air Controller, he went on to set records in numerous endurance events, inspiring Outside magazine to name him "The Fittest (Real) Man in America."

            In Can’t Hurt Me, he shares his astonishing life story and reveals that most of us tap into only 40% of our capabilities. Goggins calls this The 40% Rule, and his story illuminates a path that anyone can follow to push past pain, demolish fear, and reach their full potential.',
            'category_id' => 3,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Stolen Focus: Why You Can’t Pay Attention- and How to Think Deeply Again ',
            'penulis' => 'Johann Hari',
            'tanggal_rilis' => '2022-1-25',
            'halaman' => 283,
            'bahasa' => 'English',
            'rating' => '4.3',
            'image' => 'post-images/16.jpg',
            'slug' => 'stolen-focus',
            'excerpt' => 'In the United States, teenagers can focus on one task for only sixty-five seconds at a time, and office workers average only three minutes. Like so m  ',
            'body' => 'In the United States, teenagers can focus on one task for only sixty-five seconds at a time, and office workers average only three minutes. Like so many of us, Johann Hari was finding that constantly switching from device to device and tab to tab was a diminishing and depressing way to live. He tried all sorts of self-help solutions--even abandoning his phone for three months--but nothing seemed to work. So Hari went on an epic journey across the world to interview the leading experts on human attention--and he discovered that everything we think we know about this crisis is wrong.

            We think our inability to focus is a personal failure to exert enough willpower over our devices. The truth is even more disturbing: our focus has been stolen by powerful external forces that have left us uniquely vulnerable to corporations determined to raid our attention for profit. Hari found that there are twelve deep causes of this crisis, from the decline of mind-wandering to rising pollution, all of which have robbed some of our attention. In Stolen Focus, he introduces readers to Silicon Valley dissidents who learned to hack human attention, and veterinarians who diagnose dogs with ADHD. He explores a favela in Rio de Janeiro where everyone lost their attention in a particularly surreal way, and an office in New Zealand that discovered a remarkable technique to restore workers’ productivity.
            
            Crucially, Hari learned how we can reclaim our focus--as individuals, and as a society--if we are determined to fight for it. Stolen Focus will transform the debate about attention and finally show us how to get it back.',
            'category_id' => 3,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Talking to Strangers: What We Should Know About the People We Don’t Know ',
            'penulis' => 'Malcolm Gladwell',
            'tanggal_rilis' => '2019-9-10',
            'halaman' => 388,
            'bahasa' => 'English',
            'rating' => '4.0',
            'image' => 'post-images/17.jpg',
            'slug' => 'talking-to-strangers',
            'excerpt' => 'How did Fidel Castro fool the CIA for a generation? Why did Neville Chamberlain think he could trust Adolf Hitler? Why are campus sexual assaults on the rise? Do te',
            'body' => 'How did Fidel Castro fool the CIA for a generation? Why did Neville Chamberlain think he could trust Adolf Hitler? Why are campus sexual assaults on the rise? Do television sitcoms teach us something about the way we relate to each other that isn’t true?
            
            While tackling these questions, Malcolm Gladwell was not solely writing a book for the page. He was also producing for the ear. In the audiobook version of Talking to Strangers, you’ll hear the voices of people he interviewed--scientists, criminologists, military psychologists. Court transcripts are brought to life with re-enactments. You actually hear the contentious arrest of Sandra Bland by the side of the road in Texas. As Gladwell revisits the deceptions of Bernie Madoff, the trial of Amanda Knox, and the suicide of Sylvia Plath, you hear directly from many of the players in these real-life tragedies. There’s even a theme song - Janelle Monae’s "Hell You Talmbout."
            
            Something is very wrong, Gladwell argues, with the tools and strategies we use to make sense of people we don’t know. And because we don’t know how to talk to strangers, we are inviting conflict and misunderstanding in ways that have a profound effect on our lives and our world. ',
            'category_id' => 3,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Burnout: The Secret to Unlocking the Stress Cycle',
            'penulis' => 'Emily Nagoski',
            'tanggal_rilis' => '2019-3-26',
            'halaman' => 277,
            'bahasa' => 'English',
            'rating' => '4.0',
            'image' => 'post-images/18.jpg',
            'slug' => 'the-secret-to-unlocking',
            'excerpt' => 'Burnout. Many women in America have experienced it. What’s expected of women and what it’s really like to be a woman in today’s world are two very different things—and women',
            'body' => 'Burnout. Many women in America have experienced it. What’s expected of women and what it’s really like to be a woman in today’s world are two very different things—and women exhaust themselves trying to close the gap between them. How can you “love your body” when every magazine cover has ten diet tips for becoming “your best self”? How do you “lean in” at work when you’re already operating at 110 percent and aren’t recognized for it? How can you live happily and healthily in a sexist world that is constantly telling you you’re too fat, too needy, too noisy, and too selfish?

            Sisters Emily Nagoski, PhD, and Amelia Nagoski, DMA, are here to help end the cycle of feeling overwhelmed and exhausted. Instead of asking us to ignore the very real obstacles and societal pressures that stand between women and well-being, they explain with compassion and optimism what we’re up against—and show us how to fight back. In these pages you’ll learn
            
            • what you can do to complete the biological stress cycle—and return your body to a state of relaxation
            • how to manage the “monitor” in your brain that regulates the emotion of frustration
            • how the Bikini Industrial Complex makes it difficult for women to love their bodies—and how to defend yourself against it
            • why rest, human connection, and befriending your inner critic are keys to recovering and preventing burnout
            
            With the help of eye-opening science, prescriptive advice, and helpful worksheets and exercises, all women will find something transformative in these pages—and will be empowered to create positive change. Emily and Amelia aren’t here to preach the broad platitudes of expensive self-care or insist that we strive for the impossible goal of “having it all.” Instead, they tell us that we are enough, just as we are—and that wellness, true wellness, is within our reach.',
            'category_id' => 3,
            'user_id' => 1
        ]);



        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque, asperiores iste accusamus qui natus deleniti. Error, neque iusto, eos modi ab aspernatur minima dolorem expedita ea',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque, asperiores iste accusamus qui natus deleniti. Error, neque iusto, eos modi ab aspernatur minima dolorem expedita ea officia dignissimos beatae fugiat consequatur? Laboriosam unde voluptates quisquam temporibus qui ab, eos ipsum aliquid voluptas inventore. Doloribus nobis asperiores reprehenderit numquam perferendis similique eius, eligendi quasi consectetur aut nemo inventore voluptates provident voluptatum magni. Iusto, voluptates maxime voluptas sint dolores iure reprehenderit maiores sit et quam dolore cumque necessitatibus? Dolorem ad quidem ut inventore veniam in deleniti qui eveniet nam, commodi, provident porro eos minus est? Nisi autem ut amet distinctio pariatur aperiam?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
    }
}
