<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Episode;
use App\Models\Season;

class EpisodeSeeder extends Seeder
{
    public function run(): void
    {
        $episodesBySeason = [

            /* =========================
             * SEASON 1
             * ========================= */
            1 => [
                [
                    'number' => 1,
                    'title' => 'The One Where Monica Gets a Roommate (Pilot)',
                    'synopsis' => "Rachel runs from her wedding and meets the friends in the coffee place. Ross is depressed about his divorce but he still has a crush on Rachel.",
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-1/1_zgYwjjNV-.jpg?updatedAt=1680245686551',
                ],
                [
                    'number' => 2,
                    'title' => 'The One with the Sonogram at the End',
                    'synopsis' => "Ross's lesbian ex-wife is pregnant with his child, and he doesn't like her choice of a last name for the baby.",
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-1/2_YbP9s0d3L.jpg?updatedAt=1680245686457',
                ],
                [
                    'number' => 3,
                    'title' => 'The One with the Thumb',
                    'synopsis' => 'A soda company gives Phoebe $7,000 after she finds a dismembered thumb in a can of soda.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-1/3_lgsdT4-1j.jpg?updatedAt=1680245686460',
                ],
                [
                    'number' => 4,
                    'title' => 'The One with George Stephanopoulos',
                    'synopsis' => 'A pizza meant for George Stephanopoulos is accidentally delivered to the girls’ apartment.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-1/4__0MNLl0mCh.jpg?updatedAt=1680245686500',
                ],
                [
                    'number' => 5,
                    'title' => 'The One with the East German Laundry Detergent',
                    'synopsis' => 'Ross helps Rachel do laundry and considers the evening a first date.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-1/5_f3kEWUmaC.jpg?updatedAt=1680245686497',
                ],
                [
                    'number' => 6,
                    'title' => 'The One with the Butt',
                    'synopsis' => "Joey gets his big film break when he's hired to be Al Pacino's stunt butt.",
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-1/6_UAxW8rygd.jpg?updatedAt=1680245686550',
                ],
                [
                    'number' => 7,
                    'title' => 'The One with the Blackout',
                    'synopsis' => 'During a citywide blackout, Ross tries to tell Rachel that he likes her.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-1/7_00_4_tKSd.jpg?updatedAt=1680245686524',
                ],
                [
                    'number' => 8,
                    'title' => 'The One Where Nana Dies Twice',
                    'synopsis' => 'Monica and Ross mourn the death of their grandmother.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-1/8_ezBbMN7k7S.jpg?updatedAt=1680245686462',
                ],
                [
                    'number' => 9,
                    'title' => 'The One Where Underdog Gets Away',
                    'synopsis' => 'Thanksgiving plans go horribly wrong for the friends.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-1/9_OG9h6nbrf.jpg?updatedAt=1680245686573',
                ],
                [
                    'number' => 10,
                    'title' => 'The One with the Monkey',
                    'synopsis' => 'Ross adopts a monkey named Marcel.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-1/10_DJkOZCco4.jpg?updatedAt=1680245686486',
                ],
                [
                    'number' => 11,
                    'title' => 'The One with Mrs. Bing',
                    'synopsis' => "Chandler's romance novelist mother visits.",
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-1/11_cR1l0xSRme.jpg?updatedAt=1680245686538',
                ],
                [
                    'number' => 12,
                    'title' => 'The One with the Dozen Lasagnas',
                    'synopsis' => 'Monica makes twelve lasagnas for her aunt.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-1/12_WakG-Q3y5g.jpg?updatedAt=1680245686487',
                ],
                [
                    'number' => 13,
                    'title' => 'The One with the Boobies',
                    'synopsis' => 'Chandler accidentally sees Rachel topless.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-1/13_av32s8f6i.jpg?updatedAt=1680245686535',
                ],
                [
                    'number' => 14,
                    'title' => 'The One with the Candy Hearts',
                    'synopsis' => "Valentine's Day causes chaos for the friends.",
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-1/14_UbqESmtB2.jpg?updatedAt=1680245686509',
                ],
                [
                    'number' => 15,
                    'title' => 'The One with the Stoned Guy',
                    'synopsis' => 'Monica cooks a gourmet meal for a stoned restaurateur.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-1/15_R7cox2-uRs.jpg?updatedAt=1680245686520',
                ],
                [
                    'number' => 16,
                    'title' => 'The One with the Two Parts: Part 1',
                    'synopsis' => "Joey falls for Phoebe's twin sister.",
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-1/16_apoMNBun0.jpg?updatedAt=1680245686548',
                ],
                [
                    'number' => 17,
                    'title' => 'The One with the Two Parts: Part 2',
                    'synopsis' => 'Rachel sprains her ankle and switches identities with Monica.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-1/17_aZL44fYGSv.jpg?updatedAt=1680245686572',
                ],
                [
                    'number' => 18,
                    'title' => 'The One with All the Poker',
                    'synopsis' => 'The girls challenge the guys to a game of poker.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-1/18_xEYfhbHbF.jpg?updatedAt=1680245686448',
                ],
                [
                    'number' => 19,
                    'title' => 'The One Where the Monkey Gets Away',
                    'synopsis' => 'Marcel runs away.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-1/19_w3pyV21h_G.jpg?updatedAt=1680245686570',
                ],
                [
                    'number' => 20,
                    'title' => 'The One with the Evil Orthodontist',
                    'synopsis' => 'Rachel dates her ex-fiancé Barry again.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-1/20_nf7ZIMYbc.jpg?updatedAt=1680245686522',
                ],
                [
                    'number' => 21,
                    'title' => 'The One with the Fake Monica',
                    'synopsis' => "Monica befriends the woman who stole her credit card.",
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-1/21_wJFOCgMg1.jpg?updatedAt=1680245686456',
                ],
                [
                    'number' => 22,
                    'title' => 'The One with the Ick Factor',
                    'synopsis' => 'Monica learns her boyfriend is a high school senior.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-1/22_WKuqOt-alE.jpg?updatedAt=1680245686468',
                ],
                [
                    'number' => 23,
                    'title' => 'The One with the Birth',
                    'synopsis' => 'Carol goes into labor.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-1/23_gjqJNlZ3A.jpg?updatedAt=1680245686507',
                ],
                [
                    'number' => 24,
                    'title' => 'The One Where Rachel Finds Out',
                    'synopsis' => "Ross's feelings for Rachel are revealed.",
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-1/24_V4S-GNXynF.jpg?updatedAt=1680245686549',
                ],
            ],

            /* =========================
             * SEASON 2
             * ========================= */
            2 => [
                [
                    'number' => 1,
                    'title' => "The One with Ross's New Girlfriend",
                    'synopsis' => 'Rachel is shocked when Ross returns with a new girlfriend.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-2/1_Eq3jl2Cne.jpg?updatedAt=1680245677157',
                ],
                [
                    'number' => 2,
                    'title' => 'The One with the Breast Milk',
                    'synopsis' => "The guys are uncomfortable with Carol's breast milk.",
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-2/2_kH9EmLkRWd.jpg?updatedAt=1680245677197',
                ],
                [
                    'number' => 3,
                    'title' => 'The One Where Heckles Dies',
                    'synopsis' => 'Mr. Heckles leaves his possessions to Monica and Rachel.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-2/3_pjMBeNMxe.jpg?updatedAt=1680245676959',
                ],
                [
                    'number' => 4,
                    'title' => "The One with Phoebe's Husband",
                    'synopsis' => 'Phoebe reveals she is married.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-2/4_wzYThPhWs.jpg?updatedAt=1680245677023',
                ],
                [
                    'number' => 5,
                    'title' => 'The One with Five Steaks and an Eggplant',
                    'synopsis' => 'Money issues divide the group.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-2/5_QBhYt_NK3.jpg?updatedAt=1680245677021',
                ],
                [
                    'number' => 6,
                    'title' => 'The One with the Baby on the Bus',
                    'synopsis' => 'Chandler and Joey lose a baby on a bus.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-2/6_2ZOIw8EPj.jpg?updatedAt=1680245677218',
                ],
                [
                    'number' => 7,
                    'title' => 'The One Where Ross Finds Out',
                    'synopsis' => 'Rachel leaves a drunken confession on Ross’s answering machine.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-2/7_t6w_N0m61.jpg?updatedAt=1680245677255',
                ],
                [
                    'number' => 8,
                    'title' => 'The One with the List',
                    'synopsis' => 'Ross makes a list comparing Julie and Rachel.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-2/8_CTbs3-gI8.jpg?updatedAt=1680245677281',
                ],
                [
                    'number' => 9,
                    'title' => "The One with Phoebe's Dad",
                    'synopsis' => 'Phoebe searches for her biological father.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-2/9_KbTaJnjUl.jpg?updatedAt=1680245677063',
                ],
                [
                    'number' => 10,
                    'title' => 'The One with Russ',
                    'synopsis' => 'Rachel dates a man identical to Ross.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-2/10_ujI0X9FZy.jpg?updatedAt=1680245677115',
                ],
                [
                    'number' => 11,
                    'title' => 'The One with the Lesbian Wedding',
                    'synopsis' => 'Ross’s ex-wife gets married.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-2/11_m6xjoGymI.jpg?updatedAt=1680245677167',
                ],
                [
                    'number' => 12,
                    'title' => 'The One After the Super Bowl: Part 1',
                    'synopsis' => 'Ross visits Marcel in San Diego.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-2/12_CIGCMpsn9.jpg?updatedAt=1680245677139',
                ],
                [
                    'number' => 13,
                    'title' => 'The One After the Super Bowl: Part 2',
                    'synopsis' => 'Monica and Rachel compete for Jean-Claude Van Damme.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-2/13_53hBKE5VA.jpg?updatedAt=1680245677169',
                ],
                [
                    'number' => 14,
                    'title' => 'The One with the Prom Video',
                    'synopsis' => 'An old prom video reveals Ross’s true feelings.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-2/14_WBZO78sQx.jpg?updatedAt=1680245677101',
                ],
                [
                    'number' => 15,
                    'title' => 'The One Where Ross and Rachel...You Know',
                    'synopsis' => 'Ross and Rachel sleep together.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-2/15_zIddAENHRz.jpg?updatedAt=1680245677216',
                ],
                [
                    'number' => 16,
                    'title' => 'The One Where Joey Moves Out',
                    'synopsis' => 'Joey moves out.',
                    'image_url' => 'httpsik.imagekit.io/dmtrxw/friends-thumbnails/season-2/16_42E6JluaHW.jpg?updatedAt=1680245677079',
                ],
                [
                    'number' => 17,
                    'title' => 'The One Where Eddie Moves In',
                    'synopsis' => 'Chandler lives with a strange new roommate.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-2/17_Ba2IJWs_8M.jpg?updatedAt=1680245677190',
                ],
                [
                    'number' => 18,
                    'title' => 'The One Where Dr. Ramoray Dies',
                    'synopsis' => 'Joey’s soap character is killed off.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-2/18_Poq52Ipv5.jpg?updatedAt=1680245677361',
                ],
                [
                    'number' => 19,
                    'title' => "The One Where Eddie Won't Go",
                    'synopsis' => 'Eddie refuses to move out.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-2/19_P-SUwUrB0.jpg?updatedAt=1680245677332',
                ],
                [
                    'number' => 20,
                    'title' => 'The One Where Old Yeller Dies',
                    'synopsis' => 'Phoebe learns the truth about Old Yeller.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-2/20_LqIJfcE74.jpg?updatedAt=1680245677185',
                ],
                [
                    'number' => 21,
                    'title' => 'The One with the Bullies',
                    'synopsis' => 'Chandler and Ross are bullied.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-2/21_ah9f0tAif.jpg?updatedAt=1680245677131',
                ],
                [
                    'number' => 22,
                    'title' => 'The One with the Two Parties',
                    'synopsis' => 'Rachel’s parents throw competing parties.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-2/22_EHwwPFcz9.jpg?updatedAt=1680245677224',
                ],
                [
                    'number' => 23,
                    'title' => 'The One with the Chicken Pox',
                    'synopsis' => 'Phoebe gets chicken pox.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-2/23_LrOO91FnjG.jpg?updatedAt=1680245677198',
                ],
                [
                    'number' => 24,
                    'title' => "The One with Barry and Mindy's Wedding",
                    'synopsis' => 'Rachel agrees to be maid of honor.',
                    'image_url' => 'https://ik.imagekit.io/dmtrxw/friends-thumbnails/season-2/24_dqUl3VZTq.jpg?updatedAt=1680245677201',
                ],
            ],
        ];

        foreach ($episodesBySeason as $seasonNumber => $episodes) {
            $season = Season::where('number', $seasonNumber)->first();

            foreach ($episodes as $episode) {
                Episode::firstOrCreate(
                    [
                        'season_id' => $season->id,
                        'number' => $episode['number'],
                    ],
                    [
                        'title' => $episode['title'],
                        'synopsis' => $episode['synopsis'],
                        'image_url' => $episode['image_url'],
                    ]
                );
            }
        }
    }
}
