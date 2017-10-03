<?php

use Illuminate\Database\Seeder;

class IconsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('icons')->delete();
        
        \DB::table('icons')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'icon-user',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'icon-people',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'icon-user-female',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 'icon-user-follow',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'code' => 'icon-user-following',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'code' => 'icon-user-unfollow',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'code' => 'icon-login',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'code' => 'icon-logout',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'code' => 'icon-emotsmile',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'code' => 'icon-phone',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'code' => 'icon-call-end',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'code' => 'icon-call-in',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'code' => 'icon-call-out',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'code' => 'icon-map',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'code' => 'icon-location-pin',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'code' => 'icon-direction',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'code' => 'icon-directions',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'code' => 'icon-compass',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'code' => 'icon-layers',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'code' => 'icon-menu',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'code' => 'icon-list',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'code' => 'icon-options-vertical',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'code' => 'icon-options',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'code' => 'icon-arrow-down',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'code' => 'icon-arrow-left',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'code' => 'icon-arrow-right',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'code' => 'icon-arrow-up',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'code' => 'icon-arrow-up-circle',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'code' => 'icon-arrow-left-circle',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'code' => 'icon-arrow-right-circle',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'code' => 'icon-arrow-down-circle',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'code' => 'icon-check',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'code' => 'icon-clock',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'code' => 'icon-plus',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'code' => 'icon-close',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'code' => 'icon-trophy',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'code' => 'icon-screen-smartphone',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'code' => 'icon-screen-desktop',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'code' => 'icon-plane',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'code' => 'icon-notebook',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'code' => 'icon-mustache',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'code' => 'icon-mouse',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'code' => 'icon-magnet',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'code' => 'icon-energy',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'code' => 'icon-disc',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'code' => 'icon-cursor',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'code' => 'icon-cursor-move',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'code' => 'icon-crop',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'code' => 'icon-chemistry',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'code' => 'icon-speedometer',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'code' => 'icon-shield',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'code' => 'icon-screen-tablet',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'code' => 'icon-magic-wand',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'code' => 'icon-hourglass',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'code' => 'icon-graduation',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'code' => 'icon-ghost',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'code' => 'icon-game-controller',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'code' => 'icon-fire',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'code' => 'icon-eyeglass',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'code' => 'icon-envelope-open',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'code' => 'icon-envelope-letter',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'code' => 'icon-bell',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'code' => 'icon-badge',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'code' => 'icon-anchor',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'code' => 'icon-wallet',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'code' => 'icon-vector',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'code' => 'icon-speech',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'code' => 'icon-puzzle',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'code' => 'icon-printer',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'code' => 'icon-present',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'code' => 'icon-playlist',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'code' => 'icon-pin',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'code' => 'icon-picture',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'code' => 'icon-handbag',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'code' => 'icon-globe-alt',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'code' => 'icon-globe',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'code' => 'icon-folder-alt',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'code' => 'icon-folder',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'code' => 'icon-film',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'code' => 'icon-feed',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'code' => 'icon-drop',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'code' => 'icon-drawar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'code' => 'icon-docs',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'code' => 'icon-doc',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'code' => 'icon-diamond',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'code' => 'icon-cup',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'code' => 'icon-calculator',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'code' => 'icon-bubbles',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'code' => 'icon-briefcase',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'code' => 'icon-book-open',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'code' => 'icon-basket-loaded',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'code' => 'icon-basket',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'code' => 'icon-bag',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'code' => 'icon-action-undo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'code' => 'icon-action-redo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'code' => 'icon-wrench',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'code' => 'icon-umbrella',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'code' => 'icon-trash',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'code' => 'icon-tag',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'code' => 'icon-support',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'code' => 'icon-frame',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'code' => 'icon-size-fullscreen',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'code' => 'icon-size-actual',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'code' => 'icon-shuffle',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'code' => 'icon-share-alt',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'code' => 'icon-share',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'code' => 'icon-rocket',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'code' => 'icon-question',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'code' => 'icon-pie-chart',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'code' => 'icon-pencil',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'code' => 'icon-note',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'code' => 'icon-loop',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'code' => 'icon-home',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'code' => 'icon-grid',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'code' => 'icon-graph',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'code' => 'icon-microphone',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'code' => 'icon-music-tone-alt',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'code' => 'icon-music-tone',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'code' => 'icon-earphones-alt',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'code' => 'icon-earphones',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'code' => 'icon-equalizer',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'code' => 'icon-like',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'code' => 'icon-dislike',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'code' => 'icon-control-start',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'code' => 'icon-control-rewind',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'code' => 'icon-control-play',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'code' => 'icon-control-pause',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'code' => 'icon-control-forward',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'code' => 'icon-control-end',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'code' => 'icon-volume-1',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'code' => 'icon-volume-2',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'code' => 'icon-volume-off',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'code' => 'icon-calendar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'code' => 'icon-bulb',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'code' => 'icon-chart',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'code' => 'icon-ban',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'code' => 'icon-bubble',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'code' => 'icon-camrecorder',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'code' => 'icon-camera',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'code' => 'icon-cloud-download',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'code' => 'icon-cloud-upload',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'code' => 'icon-envelope',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'code' => 'icon-eye',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'code' => 'icon-flag',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'code' => 'icon-heart',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'code' => 'icon-info',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'code' => 'icon-key',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
                'code' => 'icon-link',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'code' => 'icon-lock',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
                'code' => 'icon-lock-open',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'code' => 'icon-magnifier',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'code' => 'icon-magnifier-add',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
                'code' => 'icon-magnifier-remove',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
                'code' => 'icon-paper-clip',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'code' => 'icon-paper-plane',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'code' => 'icon-power',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'code' => 'icon-refresh',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'code' => 'icon-reload',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'code' => 'icon-settings',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
                'code' => 'icon-star',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'id' => 161,
                'code' => 'icon-symble-female',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'id' => 162,
                'code' => 'icon-symbol-male',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'id' => 163,
                'code' => 'icon-target',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'id' => 164,
                'code' => 'icon-credit-card',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'id' => 165,
                'code' => 'icon-paypal',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'id' => 166,
                'code' => 'icon-social-tumblr',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'id' => 167,
                'code' => 'icon-social-twitter',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'id' => 168,
                'code' => 'icon-social-facebook',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
                'code' => 'icon-social-instagram',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'id' => 170,
                'code' => 'icon-social-linkedin',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'id' => 171,
                'code' => 'icon-social-pinterest',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
                'code' => 'icon-social-github',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'id' => 173,
                'code' => 'icon-social-gplus',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'id' => 174,
                'code' => 'icon-social-reddit',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'id' => 175,
                'code' => 'icon-social-skype',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'id' => 176,
                'code' => 'icon-social-dribbble',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'id' => 177,
                'code' => 'icon-social-behance',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'id' => 178,
                'code' => 'icon-social-foursqare',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'id' => 179,
                'code' => 'icon-social-soundcloud',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'id' => 180,
                'code' => 'icon-social-spotify',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'id' => 181,
                'code' => 'icon-social-stumbleupon',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'id' => 182,
                'code' => 'icon-social-youtube',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'id' => 183,
                'code' => 'icon-social-dropbox',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'id' => 184,
                'code' => 'fa fa-adjust',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'id' => 185,
                'code' => 'fa fa-anchor',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'id' => 186,
                'code' => 'fa fa-archive',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'id' => 187,
                'code' => 'fa fa-area-chart',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'id' => 188,
                'code' => 'fa fa-arrows',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'id' => 189,
                'code' => 'fa fa-arrows-h',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'id' => 190,
                'code' => 'fa fa-arrows-v',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'id' => 191,
                'code' => 'fa fa-asterisk',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'id' => 192,
                'code' => 'fa fa-at',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'id' => 193,
                'code' => 'fa fa-automobile',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'id' => 194,
                'code' => 'fa fa-ban',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'id' => 195,
                'code' => 'fa fa-bank',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'id' => 196,
                'code' => 'fa fa-bar-chart',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'id' => 197,
                'code' => 'fa fa-bar-chart-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'id' => 198,
                'code' => 'fa fa-barcode',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'id' => 199,
                'code' => 'fa fa-bars',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'id' => 200,
                'code' => 'fa fa-beer',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'id' => 201,
                'code' => 'fa fa-bell',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'id' => 202,
                'code' => 'fa fa-bell-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'id' => 203,
                'code' => 'fa fa-bell-slash',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'id' => 204,
                'code' => 'fa fa-bell-slash-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'id' => 205,
                'code' => 'fa fa-bicycle',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'id' => 206,
                'code' => 'fa fa-binoculars',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'id' => 207,
                'code' => 'fa fa-birthday-cake',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'id' => 208,
                'code' => 'fa fa-bolt',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'id' => 209,
                'code' => 'fa fa-bomb',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'id' => 210,
                'code' => 'fa fa-book',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'id' => 211,
                'code' => 'fa fa-bookmark',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'id' => 212,
                'code' => 'fa fa-bookmark-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'id' => 213,
                'code' => 'fa fa-briefcase',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'id' => 214,
                'code' => 'fa fa-bug',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'id' => 215,
                'code' => 'fa fa-building',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'id' => 216,
                'code' => 'fa fa-building-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'id' => 217,
                'code' => 'fa fa-bullhorn',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'id' => 218,
                'code' => 'fa fa-bullseye',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'id' => 219,
                'code' => 'fa fa-bus',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'id' => 220,
                'code' => 'fa fa-cab',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            220 => 
            array (
                'id' => 221,
                'code' => 'fa fa-calculator',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            221 => 
            array (
                'id' => 222,
                'code' => 'fa fa-calendar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            222 => 
            array (
                'id' => 223,
                'code' => 'fa fa-calendar-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            223 => 
            array (
                'id' => 224,
                'code' => 'fa fa-camera',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            224 => 
            array (
                'id' => 225,
                'code' => 'fa fa-camera-retro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            225 => 
            array (
                'id' => 226,
                'code' => 'fa fa-car',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            226 => 
            array (
                'id' => 227,
                'code' => 'fa fa-caret-square-o-down',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            227 => 
            array (
                'id' => 228,
                'code' => 'fa fa-caret-square-o-left',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            228 => 
            array (
                'id' => 229,
                'code' => 'fa fa-caret-square-o-right',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            229 => 
            array (
                'id' => 230,
                'code' => 'fa fa-caret-square-o-up',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            230 => 
            array (
                'id' => 231,
                'code' => 'fa fa-cc',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            231 => 
            array (
                'id' => 232,
                'code' => 'fa fa-certificate',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            232 => 
            array (
                'id' => 233,
                'code' => 'fa fa-check',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            233 => 
            array (
                'id' => 234,
                'code' => 'fa fa-check-circle',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            234 => 
            array (
                'id' => 235,
                'code' => 'fa fa-check-circle-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            235 => 
            array (
                'id' => 236,
                'code' => 'fa fa-check-square',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            236 => 
            array (
                'id' => 237,
                'code' => 'fa fa-check-square-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            237 => 
            array (
                'id' => 238,
                'code' => 'fa fa-child',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            238 => 
            array (
                'id' => 239,
                'code' => 'fa fa-circle',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            239 => 
            array (
                'id' => 240,
                'code' => 'fa fa-circle-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            240 => 
            array (
                'id' => 241,
                'code' => 'fa fa-circle-o-notch',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            241 => 
            array (
                'id' => 242,
                'code' => 'fa fa-circle-thin',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            242 => 
            array (
                'id' => 243,
                'code' => 'fa fa-clock-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            243 => 
            array (
                'id' => 244,
                'code' => 'fa fa-close',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            244 => 
            array (
                'id' => 245,
                'code' => 'fa fa-cloud',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            245 => 
            array (
                'id' => 246,
                'code' => 'fa fa-cloud-download',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            246 => 
            array (
                'id' => 247,
                'code' => 'fa fa-cloud-upload',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            247 => 
            array (
                'id' => 248,
                'code' => 'fa fa-code',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            248 => 
            array (
                'id' => 249,
                'code' => 'fa fa-code-fork',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            249 => 
            array (
                'id' => 250,
                'code' => 'fa fa-coffee',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            250 => 
            array (
                'id' => 251,
                'code' => 'fa fa-cog',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            251 => 
            array (
                'id' => 252,
                'code' => 'fa fa-cogs',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            252 => 
            array (
                'id' => 253,
                'code' => 'fa fa-comment',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            253 => 
            array (
                'id' => 254,
                'code' => 'fa fa-comment-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            254 => 
            array (
                'id' => 255,
                'code' => 'fa fa-comments',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            255 => 
            array (
                'id' => 256,
                'code' => 'fa fa-comments-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            256 => 
            array (
                'id' => 257,
                'code' => 'fa fa-compass',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            257 => 
            array (
                'id' => 258,
                'code' => 'fa fa-copyright',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            258 => 
            array (
                'id' => 259,
                'code' => 'fa fa-credit-card',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            259 => 
            array (
                'id' => 260,
                'code' => 'fa fa-crop',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            260 => 
            array (
                'id' => 261,
                'code' => 'fa fa-crosshairs',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            261 => 
            array (
                'id' => 262,
                'code' => 'fa fa-cube',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            262 => 
            array (
                'id' => 263,
                'code' => 'fa fa-cubes',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            263 => 
            array (
                'id' => 264,
                'code' => 'fa fa-cutlery',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            264 => 
            array (
                'id' => 265,
                'code' => 'fa fa-dashboard',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            265 => 
            array (
                'id' => 266,
                'code' => 'fa fa-database',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            266 => 
            array (
                'id' => 267,
                'code' => 'fa fa-desktop',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            267 => 
            array (
                'id' => 268,
                'code' => 'fa fa-dot-circle-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            268 => 
            array (
                'id' => 269,
                'code' => 'fa fa-download',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            269 => 
            array (
                'id' => 270,
                'code' => 'fa fa-edit',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            270 => 
            array (
                'id' => 271,
                'code' => 'fa fa-ellipsis-h',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            271 => 
            array (
                'id' => 272,
                'code' => 'fa fa-ellipsis-v',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            272 => 
            array (
                'id' => 273,
                'code' => 'fa fa-envelope',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            273 => 
            array (
                'id' => 274,
                'code' => 'fa fa-envelope-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            274 => 
            array (
                'id' => 275,
                'code' => 'fa fa-envelope-square',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            275 => 
            array (
                'id' => 276,
                'code' => 'fa fa-eraser',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            276 => 
            array (
                'id' => 277,
                'code' => 'fa fa-exchange',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            277 => 
            array (
                'id' => 278,
                'code' => 'fa fa-exclamation',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            278 => 
            array (
                'id' => 279,
                'code' => 'fa fa-exclamation-circle',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            279 => 
            array (
                'id' => 280,
                'code' => 'fa fa-exclamation-triangle',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            280 => 
            array (
                'id' => 281,
                'code' => 'fa fa-external-link',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            281 => 
            array (
                'id' => 282,
                'code' => 'fa fa-external-link-square',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            282 => 
            array (
                'id' => 283,
                'code' => 'fa fa-eye',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            283 => 
            array (
                'id' => 284,
                'code' => 'fa fa-eye-slash',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            284 => 
            array (
                'id' => 285,
                'code' => 'fa fa-eyedropper',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            285 => 
            array (
                'id' => 286,
                'code' => 'fa fa-fax',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            286 => 
            array (
                'id' => 287,
                'code' => 'fa fa-female',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            287 => 
            array (
                'id' => 288,
                'code' => 'fa fa-fighter-jet',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            288 => 
            array (
                'id' => 289,
                'code' => 'fa fa-file-archive-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            289 => 
            array (
                'id' => 290,
                'code' => 'fa fa-file-audio-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            290 => 
            array (
                'id' => 291,
                'code' => 'fa fa-file-code-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            291 => 
            array (
                'id' => 292,
                'code' => 'fa fa-file-excel-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            292 => 
            array (
                'id' => 293,
                'code' => 'fa fa-file-image-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            293 => 
            array (
                'id' => 294,
                'code' => 'fa fa-file-movie-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            294 => 
            array (
                'id' => 295,
                'code' => 'fa fa-file-pdf-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            295 => 
            array (
                'id' => 296,
                'code' => 'fa fa-file-photo-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            296 => 
            array (
                'id' => 297,
                'code' => 'fa fa-file-picture-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            297 => 
            array (
                'id' => 298,
                'code' => 'fa fa-file-powerpoint-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            298 => 
            array (
                'id' => 299,
                'code' => 'fa fa-file-sound-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            299 => 
            array (
                'id' => 300,
                'code' => 'fa fa-file-video-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            300 => 
            array (
                'id' => 301,
                'code' => 'fa fa-file-word-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            301 => 
            array (
                'id' => 302,
                'code' => 'fa fa-file-zip-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            302 => 
            array (
                'id' => 303,
                'code' => 'fa fa-film',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            303 => 
            array (
                'id' => 304,
                'code' => 'fa fa-filter',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            304 => 
            array (
                'id' => 305,
                'code' => 'fa fa-fire',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            305 => 
            array (
                'id' => 306,
                'code' => 'fa fa-fire-extinguisher',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            306 => 
            array (
                'id' => 307,
                'code' => 'fa fa-flag',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            307 => 
            array (
                'id' => 308,
                'code' => 'fa fa-flag-checkered',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            308 => 
            array (
                'id' => 309,
                'code' => 'fa fa-flag-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            309 => 
            array (
                'id' => 310,
                'code' => 'fa fa-flash',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            310 => 
            array (
                'id' => 311,
                'code' => 'fa fa-flask',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            311 => 
            array (
                'id' => 312,
                'code' => 'fa fa-folder',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            312 => 
            array (
                'id' => 313,
                'code' => 'fa fa-folder-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            313 => 
            array (
                'id' => 314,
                'code' => 'fa fa-folder-open',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            314 => 
            array (
                'id' => 315,
                'code' => 'fa fa-folder-open-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            315 => 
            array (
                'id' => 316,
                'code' => 'fa fa-frown-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            316 => 
            array (
                'id' => 317,
                'code' => 'fa fa-futbol-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            317 => 
            array (
                'id' => 318,
                'code' => 'fa fa-gamepad',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            318 => 
            array (
                'id' => 319,
                'code' => 'fa fa-gavel',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            319 => 
            array (
                'id' => 320,
                'code' => 'fa fa-gear',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            320 => 
            array (
                'id' => 321,
                'code' => 'fa fa-gears',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            321 => 
            array (
                'id' => 322,
                'code' => 'fa fa-gift',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            322 => 
            array (
                'id' => 323,
                'code' => 'fa fa-glass',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            323 => 
            array (
                'id' => 324,
                'code' => 'fa fa-globe',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            324 => 
            array (
                'id' => 325,
                'code' => 'fa fa-graduation-cap',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            325 => 
            array (
                'id' => 326,
                'code' => 'fa fa-group',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            326 => 
            array (
                'id' => 327,
                'code' => 'fa fa-hdd-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            327 => 
            array (
                'id' => 328,
                'code' => 'fa fa-headphones',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            328 => 
            array (
                'id' => 329,
                'code' => 'fa fa-heart',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            329 => 
            array (
                'id' => 330,
                'code' => 'fa fa-heart-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            330 => 
            array (
                'id' => 331,
                'code' => 'fa fa-history',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            331 => 
            array (
                'id' => 332,
                'code' => 'fa fa-home',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            332 => 
            array (
                'id' => 333,
                'code' => 'fa fa-image',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            333 => 
            array (
                'id' => 334,
                'code' => 'fa fa-inbox',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            334 => 
            array (
                'id' => 335,
                'code' => 'fa fa-info',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            335 => 
            array (
                'id' => 336,
                'code' => 'fa fa-info-circle',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            336 => 
            array (
                'id' => 337,
                'code' => 'fa fa-institution',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            337 => 
            array (
                'id' => 338,
                'code' => 'fa fa-key',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            338 => 
            array (
                'id' => 339,
                'code' => 'fa fa-keyboard-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            339 => 
            array (
                'id' => 340,
                'code' => 'fa fa-language',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            340 => 
            array (
                'id' => 341,
                'code' => 'fa fa-laptop',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            341 => 
            array (
                'id' => 342,
                'code' => 'fa fa-leaf',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            342 => 
            array (
                'id' => 343,
                'code' => 'fa fa-legal',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            343 => 
            array (
                'id' => 344,
                'code' => 'fa fa-lemon-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            344 => 
            array (
                'id' => 345,
                'code' => 'fa fa-level-down',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            345 => 
            array (
                'id' => 346,
                'code' => 'fa fa-level-up',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            346 => 
            array (
                'id' => 347,
                'code' => 'fa fa-life-bouy',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            347 => 
            array (
                'id' => 348,
                'code' => 'fa fa-life-buoy',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            348 => 
            array (
                'id' => 349,
                'code' => 'fa fa-life-ring',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            349 => 
            array (
                'id' => 350,
                'code' => 'fa fa-life-saver',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            350 => 
            array (
                'id' => 351,
                'code' => 'fa fa-lightbulb-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            351 => 
            array (
                'id' => 352,
                'code' => 'fa fa-line-chart',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            352 => 
            array (
                'id' => 353,
                'code' => 'fa fa-location-arrow',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            353 => 
            array (
                'id' => 354,
                'code' => 'fa fa-lock',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            354 => 
            array (
                'id' => 355,
                'code' => 'fa fa-magic',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            355 => 
            array (
                'id' => 356,
                'code' => 'fa fa-magnet',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            356 => 
            array (
                'id' => 357,
                'code' => 'fa fa-mail-forward',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            357 => 
            array (
                'id' => 358,
                'code' => 'fa fa-mail-reply',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            358 => 
            array (
                'id' => 359,
                'code' => 'fa fa-mail-reply-all',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            359 => 
            array (
                'id' => 360,
                'code' => 'fa fa-male',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            360 => 
            array (
                'id' => 361,
                'code' => 'fa fa-map-marker',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            361 => 
            array (
                'id' => 362,
                'code' => 'fa fa-meh-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            362 => 
            array (
                'id' => 363,
                'code' => 'fa fa-microphone',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            363 => 
            array (
                'id' => 364,
                'code' => 'fa fa-microphone-slash',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            364 => 
            array (
                'id' => 365,
                'code' => 'fa fa-minus',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            365 => 
            array (
                'id' => 366,
                'code' => 'fa fa-minus-circle',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            366 => 
            array (
                'id' => 367,
                'code' => 'fa fa-minus-square',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            367 => 
            array (
                'id' => 368,
                'code' => 'fa fa-minus-square-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            368 => 
            array (
                'id' => 369,
                'code' => 'fa fa-mobile',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            369 => 
            array (
                'id' => 370,
                'code' => 'fa fa-mobile-phone',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            370 => 
            array (
                'id' => 371,
                'code' => 'fa fa-money',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            371 => 
            array (
                'id' => 372,
                'code' => 'fa fa-moon-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            372 => 
            array (
                'id' => 373,
                'code' => 'fa fa-mortar-board',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            373 => 
            array (
                'id' => 374,
                'code' => 'fa fa-music',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            374 => 
            array (
                'id' => 375,
                'code' => 'fa fa-navicon',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            375 => 
            array (
                'id' => 376,
                'code' => 'fa fa-newspaper-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            376 => 
            array (
                'id' => 377,
                'code' => 'fa fa-paint-brush',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            377 => 
            array (
                'id' => 378,
                'code' => 'fa fa-paper-plane',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            378 => 
            array (
                'id' => 379,
                'code' => 'fa fa-paper-plane-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            379 => 
            array (
                'id' => 380,
                'code' => 'fa fa-paw',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            380 => 
            array (
                'id' => 381,
                'code' => 'fa fa-pencil',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            381 => 
            array (
                'id' => 382,
                'code' => 'fa fa-pencil-square',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            382 => 
            array (
                'id' => 383,
                'code' => 'fa fa-pencil-square-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            383 => 
            array (
                'id' => 384,
                'code' => 'fa fa-phone',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            384 => 
            array (
                'id' => 385,
                'code' => 'fa fa-phone-square',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            385 => 
            array (
                'id' => 386,
                'code' => 'fa fa-photo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            386 => 
            array (
                'id' => 387,
                'code' => 'fa fa-picture-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            387 => 
            array (
                'id' => 388,
                'code' => 'fa fa-pie-chart',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            388 => 
            array (
                'id' => 389,
                'code' => 'fa fa-plane',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            389 => 
            array (
                'id' => 390,
                'code' => 'fa fa-plug',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            390 => 
            array (
                'id' => 391,
                'code' => 'fa fa-plus',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            391 => 
            array (
                'id' => 392,
                'code' => 'fa fa-plus-circle',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            392 => 
            array (
                'id' => 393,
                'code' => 'fa fa-plus-square',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            393 => 
            array (
                'id' => 394,
                'code' => 'fa fa-plus-square-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            394 => 
            array (
                'id' => 395,
                'code' => 'fa fa-power-off',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            395 => 
            array (
                'id' => 396,
                'code' => 'fa fa-print',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            396 => 
            array (
                'id' => 397,
                'code' => 'fa fa-puzzle-piece',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            397 => 
            array (
                'id' => 398,
                'code' => 'fa fa-qrcode',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            398 => 
            array (
                'id' => 399,
                'code' => 'fa fa-question',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            399 => 
            array (
                'id' => 400,
                'code' => 'fa fa-question-circle',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            400 => 
            array (
                'id' => 401,
                'code' => 'fa fa-quote-left',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            401 => 
            array (
                'id' => 402,
                'code' => 'fa fa-quote-right',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            402 => 
            array (
                'id' => 403,
                'code' => 'fa fa-random',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            403 => 
            array (
                'id' => 404,
                'code' => 'fa fa-recycle',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            404 => 
            array (
                'id' => 405,
                'code' => 'fa fa-refresh',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            405 => 
            array (
                'id' => 406,
                'code' => 'fa fa-remove',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            406 => 
            array (
                'id' => 407,
                'code' => 'fa fa-reorder',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            407 => 
            array (
                'id' => 408,
                'code' => 'fa fa-reply',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            408 => 
            array (
                'id' => 409,
                'code' => 'fa fa-reply-all',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            409 => 
            array (
                'id' => 410,
                'code' => 'fa fa-retweet',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            410 => 
            array (
                'id' => 411,
                'code' => 'fa fa-road',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            411 => 
            array (
                'id' => 412,
                'code' => 'fa fa-rocket',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            412 => 
            array (
                'id' => 413,
                'code' => 'fa fa-rss',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            413 => 
            array (
                'id' => 414,
                'code' => 'fa fa-rss-square',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            414 => 
            array (
                'id' => 415,
                'code' => 'fa fa-search',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            415 => 
            array (
                'id' => 416,
                'code' => 'fa fa-search-minus',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            416 => 
            array (
                'id' => 417,
                'code' => 'fa fa-search-plus',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            417 => 
            array (
                'id' => 418,
                'code' => 'fa fa-send',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            418 => 
            array (
                'id' => 419,
                'code' => 'fa fa-send-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            419 => 
            array (
                'id' => 420,
                'code' => 'fa fa-share',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            420 => 
            array (
                'id' => 421,
                'code' => 'fa fa-share-alt',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            421 => 
            array (
                'id' => 422,
                'code' => 'fa fa-share-alt-square',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            422 => 
            array (
                'id' => 423,
                'code' => 'fa fa-share-square',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            423 => 
            array (
                'id' => 424,
                'code' => 'fa fa-share-square-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            424 => 
            array (
                'id' => 425,
                'code' => 'fa fa-shield',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            425 => 
            array (
                'id' => 426,
                'code' => 'fa fa-shopping-cart',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            426 => 
            array (
                'id' => 427,
                'code' => 'fa fa-sign-in',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            427 => 
            array (
                'id' => 428,
                'code' => 'fa fa-sign-out',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            428 => 
            array (
                'id' => 429,
                'code' => 'fa fa-signal',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            429 => 
            array (
                'id' => 430,
                'code' => 'fa fa-sitemap',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            430 => 
            array (
                'id' => 431,
                'code' => 'fa fa-sliders',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            431 => 
            array (
                'id' => 432,
                'code' => 'fa fa-smile-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            432 => 
            array (
                'id' => 433,
                'code' => 'fa fa-soccer-ball-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            433 => 
            array (
                'id' => 434,
                'code' => 'fa fa-sort',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            434 => 
            array (
                'id' => 435,
                'code' => 'fa fa-sort-alpha-asc',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            435 => 
            array (
                'id' => 436,
                'code' => 'fa fa-sort-alpha-desc',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            436 => 
            array (
                'id' => 437,
                'code' => 'fa fa-sort-amount-asc',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            437 => 
            array (
                'id' => 438,
                'code' => 'fa fa-sort-amount-desc',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            438 => 
            array (
                'id' => 439,
                'code' => 'fa fa-sort-asc',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            439 => 
            array (
                'id' => 440,
                'code' => 'fa fa-sort-desc',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            440 => 
            array (
                'id' => 441,
                'code' => 'fa fa-sort-down',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            441 => 
            array (
                'id' => 442,
                'code' => 'fa fa-sort-numeric-asc',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            442 => 
            array (
                'id' => 443,
                'code' => 'fa fa-sort-numeric-desc',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            443 => 
            array (
                'id' => 444,
                'code' => 'fa fa-sort-up',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            444 => 
            array (
                'id' => 445,
                'code' => 'fa fa-space-shuttle',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            445 => 
            array (
                'id' => 446,
                'code' => 'fa fa-spinner',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            446 => 
            array (
                'id' => 447,
                'code' => 'fa fa-spoon',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            447 => 
            array (
                'id' => 448,
                'code' => 'fa fa-square',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            448 => 
            array (
                'id' => 449,
                'code' => 'fa fa-square-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            449 => 
            array (
                'id' => 450,
                'code' => 'fa fa-star',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            450 => 
            array (
                'id' => 451,
                'code' => 'fa fa-star-half',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            451 => 
            array (
                'id' => 452,
                'code' => 'fa fa-star-half-empty',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            452 => 
            array (
                'id' => 453,
                'code' => 'fa fa-star-half-full',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            453 => 
            array (
                'id' => 454,
                'code' => 'fa fa-star-half-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            454 => 
            array (
                'id' => 455,
                'code' => 'fa fa-star-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            455 => 
            array (
                'id' => 456,
                'code' => 'fa fa-suitcase',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            456 => 
            array (
                'id' => 457,
                'code' => 'fa fa-sun-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            457 => 
            array (
                'id' => 458,
                'code' => 'fa fa-support',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            458 => 
            array (
                'id' => 459,
                'code' => 'fa fa-tablet',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            459 => 
            array (
                'id' => 460,
                'code' => 'fa fa-tachometer',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            460 => 
            array (
                'id' => 461,
                'code' => 'fa fa-tag',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            461 => 
            array (
                'id' => 462,
                'code' => 'fa fa-tags',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            462 => 
            array (
                'id' => 463,
                'code' => 'fa fa-tasks',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            463 => 
            array (
                'id' => 464,
                'code' => 'fa fa-taxi',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            464 => 
            array (
                'id' => 465,
                'code' => 'fa fa-terminal',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            465 => 
            array (
                'id' => 466,
                'code' => 'fa fa-thumb-tack',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            466 => 
            array (
                'id' => 467,
                'code' => 'fa fa-thumbs-down',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            467 => 
            array (
                'id' => 468,
                'code' => 'fa fa-thumbs-o-down',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            468 => 
            array (
                'id' => 469,
                'code' => 'fa fa-thumbs-o-up',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            469 => 
            array (
                'id' => 470,
                'code' => 'fa fa-thumbs-up',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            470 => 
            array (
                'id' => 471,
                'code' => 'fa fa-ticket',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            471 => 
            array (
                'id' => 472,
                'code' => 'fa fa-times',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            472 => 
            array (
                'id' => 473,
                'code' => 'fa fa-times-circle',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            473 => 
            array (
                'id' => 474,
                'code' => 'fa fa-times-circle-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            474 => 
            array (
                'id' => 475,
                'code' => 'fa fa-tint',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            475 => 
            array (
                'id' => 476,
                'code' => 'fa fa-toggle-down',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            476 => 
            array (
                'id' => 477,
                'code' => 'fa fa-toggle-left',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            477 => 
            array (
                'id' => 478,
                'code' => 'fa fa-toggle-off',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            478 => 
            array (
                'id' => 479,
                'code' => 'fa fa-toggle-on',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            479 => 
            array (
                'id' => 480,
                'code' => 'fa fa-toggle-right',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            480 => 
            array (
                'id' => 481,
                'code' => 'fa fa-toggle-up',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            481 => 
            array (
                'id' => 482,
                'code' => 'fa fa-trash',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            482 => 
            array (
                'id' => 483,
                'code' => 'fa fa-trash-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            483 => 
            array (
                'id' => 484,
                'code' => 'fa fa-tree',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            484 => 
            array (
                'id' => 485,
                'code' => 'fa fa-trophy',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            485 => 
            array (
                'id' => 486,
                'code' => 'fa fa-truck',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            486 => 
            array (
                'id' => 487,
                'code' => 'fa fa-tty',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            487 => 
            array (
                'id' => 488,
                'code' => 'fa fa-umbrella',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            488 => 
            array (
                'id' => 489,
                'code' => 'fa fa-university',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            489 => 
            array (
                'id' => 490,
                'code' => 'fa fa-unlock',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            490 => 
            array (
                'id' => 491,
                'code' => 'fa fa-unlock-alt',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            491 => 
            array (
                'id' => 492,
                'code' => 'fa fa-unsorted',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            492 => 
            array (
                'id' => 493,
                'code' => 'fa fa-upload',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            493 => 
            array (
                'id' => 494,
                'code' => 'fa fa-user',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            494 => 
            array (
                'id' => 495,
                'code' => 'fa fa-users',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            495 => 
            array (
                'id' => 496,
                'code' => 'fa fa-video-camera',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            496 => 
            array (
                'id' => 497,
                'code' => 'fa fa-volume-down',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            497 => 
            array (
                'id' => 498,
                'code' => 'fa fa-volume-off',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            498 => 
            array (
                'id' => 499,
                'code' => 'fa fa-volume-up',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            499 => 
            array (
                'id' => 500,
                'code' => 'fa fa-warning',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        \DB::table('icons')->insert(array (
            0 => 
            array (
                'id' => 501,
                'code' => 'fa fa-wheelchair',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 502,
                'code' => 'fa fa-wifi',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 503,
                'code' => 'fa fa-wrench',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 504,
                'code' => 'fa fa-file',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 505,
                'code' => 'fa fa-file-archive-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 506,
                'code' => 'fa fa-file-audio-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 507,
                'code' => 'fa fa-file-code-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 508,
                'code' => 'fa fa-file-excel-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 509,
                'code' => 'fa fa-file-image-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 510,
                'code' => 'fa fa-file-movie-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 511,
                'code' => 'fa fa-file-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 512,
                'code' => 'fa fa-file-pdf-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 513,
                'code' => 'fa fa-file-photo-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 514,
                'code' => 'fa fa-file-picture-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 515,
                'code' => 'fa fa-file-powerpoint-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 516,
                'code' => 'fa fa-file-sound-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 517,
                'code' => 'fa fa-file-text',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 518,
                'code' => 'fa fa-file-text-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 519,
                'code' => 'fa fa-file-video-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 520,
                'code' => 'fa fa-file-word-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 521,
                'code' => 'fa fa-file-zip-o',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}