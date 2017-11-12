<?php

use Illuminate\Database\Seeder;

class ControlPagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('control_pages')->delete();
        
        \DB::table('control_pages')->insert(array (
            0 => 
            array (
                'id' => 5,
                'control_page_code' => 'home',
                'created_at' => '2017-07-21 22:26:26',
                'updated_at' => '2017-07-22 09:14:30',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 9,
                'control_page_code' => 'global',
                'created_at' => '2017-07-22 07:01:21',
                'updated_at' => '2017-07-22 07:01:21',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 10,
                'control_page_code' => 'langs',
                'created_at' => '2017-07-22 07:53:18',
                'updated_at' => '2017-07-22 07:53:18',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 11,
                'control_page_code' => 'users',
                'created_at' => '2017-07-22 07:54:54',
                'updated_at' => '2017-07-22 07:54:54',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 12,
                'control_page_code' => 'attributes',
                'created_at' => '2017-07-22 07:55:51',
                'updated_at' => '2017-07-22 07:55:51',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 13,
                'control_page_code' => 'modules',
                'created_at' => '2017-07-22 07:56:17',
                'updated_at' => '2017-07-22 07:56:17',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 14,
                'control_page_code' => 'custom_modules',
                'created_at' => '2017-07-22 07:57:51',
                'updated_at' => '2017-07-22 07:57:51',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 15,
                'control_page_code' => 'menus',
                'created_at' => '2017-07-22 07:58:31',
                'updated_at' => '2017-07-22 07:58:31',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 16,
                'control_page_code' => 'general',
                'created_at' => '2017-07-22 07:59:01',
                'updated_at' => '2017-08-09 00:11:20',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 17,
                'control_page_code' => 'control',
                'created_at' => '2017-07-22 07:59:44',
                'updated_at' => '2017-07-22 07:59:44',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 18,
                'control_page_code' => 'univercity',
                'created_at' => '2017-07-22 08:00:35',
                'updated_at' => '2017-07-26 20:06:08',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 19,
                'control_page_code' => 'faculties',
                'created_at' => '2017-07-22 08:01:48',
                'updated_at' => '2017-07-22 08:01:48',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 20,
                'control_page_code' => 'departments',
                'created_at' => '2017-07-22 08:27:04',
                'updated_at' => '2017-07-26 20:11:30',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 21,
                'control_page_code' => 'degrees',
                'created_at' => '2017-07-22 08:27:28',
                'updated_at' => '2017-07-22 08:27:28',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 22,
                'control_page_code' => 'labs',
                'created_at' => '2017-07-22 08:30:26',
                'updated_at' => '2017-07-26 20:11:17',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 23,
                'control_page_code' => 'courses',
                'created_at' => '2017-07-22 08:30:54',
                'updated_at' => '2017-07-22 08:30:54',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 24,
                'control_page_code' => 'person',
                'created_at' => '2017-07-22 08:33:33',
                'updated_at' => '2017-07-26 20:09:12',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 25,
                'control_page_code' => 'university_council',
                'created_at' => '2017-07-22 08:34:39',
                'updated_at' => '2017-07-22 08:34:39',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 26,
                'control_page_code' => 'board_of_trustees',
                'created_at' => '2017-07-22 08:35:20',
                'updated_at' => '2017-07-22 08:35:20',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 27,
                'control_page_code' => 'blog',
                'created_at' => '2017-07-22 08:37:21',
                'updated_at' => '2017-07-22 08:37:21',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 28,
                'control_page_code' => 'setting',
                'created_at' => '2017-07-22 08:48:38',
                'updated_at' => '2017-07-22 08:48:38',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 29,
                'control_page_code' => 'general_setting',
                'created_at' => '2017-07-22 08:51:01',
                'updated_at' => '2017-07-22 08:51:01',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 30,
                'control_page_code' => 'social_network',
                'created_at' => '2017-07-22 08:52:18',
                'updated_at' => '2017-07-22 08:52:18',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 31,
                'control_page_code' => 'gender',
                'created_at' => '2017-07-22 08:54:53',
                'updated_at' => '2017-07-31 20:59:12',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 32,
                'control_page_code' => 'study_year',
                'created_at' => '2017-07-22 09:01:25',
                'updated_at' => '2017-07-22 09:01:25',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 33,
                'control_page_code' => 'semester',
                'created_at' => '2017-07-22 09:06:34',
                'updated_at' => '2017-07-26 19:38:36',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 34,
                'control_page_code' => 'position',
                'created_at' => '2017-07-31 20:58:01',
                'updated_at' => '2017-07-31 20:58:01',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 35,
                'control_page_code' => 'job-title',
                'created_at' => '2017-07-31 20:58:52',
                'updated_at' => '2017-07-31 20:58:52',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 75,
                'control_page_code' => 'home',
                'created_at' => '2017-11-10 17:44:56',
                'updated_at' => '2017-11-10 17:44:56',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 76,
                'control_page_code' => 'langs',
                'created_at' => '2017-11-10 17:45:15',
                'updated_at' => '2017-11-10 17:45:15',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 77,
                'control_page_code' => 'icons',
                'created_at' => '2017-11-10 17:45:35',
                'updated_at' => '2017-11-10 17:45:35',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 78,
                'control_page_code' => 'global',
                'created_at' => '2017-11-10 17:45:52',
                'updated_at' => '2017-11-10 17:45:52',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 79,
                'control_page_code' => 'users',
                'created_at' => '2017-11-10 17:46:29',
                'updated_at' => '2017-11-10 17:46:29',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 80,
                'control_page_code' => 'attributes',
                'created_at' => '2017-11-10 17:47:30',
                'updated_at' => '2017-11-10 17:47:30',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 81,
                'control_page_code' => 'modules',
                'created_at' => '2017-11-10 17:47:50',
                'updated_at' => '2017-11-10 17:47:50',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 82,
                'control_page_code' => 'pages',
                'created_at' => '2017-11-10 17:48:07',
                'updated_at' => '2017-11-10 17:48:07',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 83,
                'control_page_code' => 'general',
                'created_at' => '2017-11-10 17:48:38',
                'updated_at' => '2017-11-10 17:48:38',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 84,
                'control_page_code' => 'menus',
                'created_at' => '2017-11-10 17:48:54',
                'updated_at' => '2017-11-10 17:48:54',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 85,
                'control_page_code' => 'control',
                'created_at' => '2017-11-10 17:49:39',
                'updated_at' => '2017-11-10 17:49:39',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 86,
                'control_page_code' => 'menu_tables',
                'created_at' => '2017-11-10 17:50:06',
                'updated_at' => '2017-11-10 17:50:06',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 87,
                'control_page_code' => 'university',
                'created_at' => '2017-11-10 17:50:41',
                'updated_at' => '2017-11-10 17:50:41',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 88,
                'control_page_code' => 'faculties',
                'created_at' => '2017-11-10 17:50:58',
                'updated_at' => '2017-11-10 17:50:58',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 89,
                'control_page_code' => 'departments',
                'created_at' => '2017-11-10 17:51:12',
                'updated_at' => '2017-11-10 17:51:12',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 90,
                'control_page_code' => 'degrees',
                'created_at' => '2017-11-10 17:51:26',
                'updated_at' => '2017-11-10 17:51:26',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 91,
                'control_page_code' => 'study_plan',
                'created_at' => '2017-11-10 17:51:44',
                'updated_at' => '2017-11-10 17:51:44',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 92,
                'control_page_code' => 'hierarchy',
                'created_at' => '2017-11-10 17:52:11',
                'updated_at' => '2017-11-10 17:52:11',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 93,
                'control_page_code' => 'offices',
                'created_at' => '2017-11-10 17:52:29',
                'updated_at' => '2017-11-10 17:52:29',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 94,
                'control_page_code' => 'partners',
                'created_at' => '2017-11-10 17:52:44',
                'updated_at' => '2017-11-10 17:52:44',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 95,
                'control_page_code' => 'person',
                'created_at' => '2017-11-10 17:53:08',
                'updated_at' => '2017-11-10 17:53:08',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 96,
                'control_page_code' => 'university_council',
                'created_at' => '2017-11-10 17:53:33',
                'updated_at' => '2017-11-10 17:53:33',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 97,
                'control_page_code' => 'board_of_trustees',
                'created_at' => '2017-11-10 17:54:14',
                'updated_at' => '2017-11-10 17:54:14',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 98,
                'control_page_code' => 'staff',
                'created_at' => '2017-11-10 17:54:29',
                'updated_at' => '2017-11-10 17:54:29',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 99,
                'control_page_code' => 'blog',
                'created_at' => '2017-11-10 17:54:44',
                'updated_at' => '2017-11-10 17:54:44',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 100,
                'control_page_code' => 'setting',
                'created_at' => '2017-11-10 18:32:23',
                'updated_at' => '2017-11-10 18:32:23',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 101,
                'control_page_code' => 'general_setting',
                'created_at' => '2017-11-10 18:32:55',
                'updated_at' => '2017-11-10 18:32:55',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 102,
                'control_page_code' => 'social_network',
                'created_at' => '2017-11-10 18:33:18',
                'updated_at' => '2017-11-10 18:33:18',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 103,
                'control_page_code' => 'gender',
                'created_at' => '2017-11-10 18:33:39',
                'updated_at' => '2017-11-10 18:33:39',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 104,
                'control_page_code' => 'position',
                'created_at' => '2017-11-10 18:33:58',
                'updated_at' => '2017-11-10 18:33:58',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 105,
                'control_page_code' => 'job_title',
                'created_at' => '2017-11-10 18:34:22',
                'updated_at' => '2017-11-10 18:34:22',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 106,
                'control_page_code' => 'study_year',
                'created_at' => '2017-11-10 18:36:18',
                'updated_at' => '2017-11-10 18:36:18',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 107,
                'control_page_code' => 'semester',
                'created_at' => '2017-11-10 18:36:42',
                'updated_at' => '2017-11-10 18:36:42',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 108,
                'control_page_code' => 'hierarchy_type',
                'created_at' => '2017-11-10 18:37:05',
                'updated_at' => '2017-11-10 18:37:05',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 109,
                'control_page_code' => 'courses',
                'created_at' => '2017-11-10 19:34:42',
                'updated_at' => '2017-11-10 19:34:42',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 110,
                'control_page_code' => 'labs',
                'created_at' => '2017-11-10 19:36:03',
                'updated_at' => '2017-11-10 19:36:03',
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 111,
                'control_page_code' => 'builder',
                'created_at' => '2017-11-10 20:13:18',
                'updated_at' => '2017-11-10 20:13:18',
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 112,
                'control_page_code' => 'sliders',
                'created_at' => '2017-11-10 20:13:56',
                'updated_at' => '2017-11-10 20:13:56',
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 113,
                'control_page_code' => 'slider_detail',
                'created_at' => '2017-11-10 20:20:51',
                'updated_at' => '2017-11-10 20:20:51',
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 114,
                'control_page_code' => 'vertical_sliders',
                'created_at' => '2017-11-10 20:22:50',
                'updated_at' => '2017-11-10 20:22:50',
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 115,
                'control_page_code' => 'vertical_slider_detail',
                'created_at' => '2017-11-10 20:23:50',
                'updated_at' => '2017-11-10 20:25:59',
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 116,
                'control_page_code' => 'blocks',
                'created_at' => '2017-11-10 20:24:29',
                'updated_at' => '2017-11-10 20:24:29',
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 117,
                'control_page_code' => 'block_detail',
                'created_at' => '2017-11-10 20:25:01',
                'updated_at' => '2017-11-10 20:25:50',
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 118,
                'control_page_code' => 'steps',
                'created_at' => '2017-11-10 20:25:20',
                'updated_at' => '2017-11-10 20:25:20',
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 119,
                'control_page_code' => 'text_cards',
                'created_at' => '2017-11-10 20:25:42',
                'updated_at' => '2017-11-10 20:25:42',
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 120,
                'control_page_code' => 'custom_modules',
                'created_at' => '2017-11-10 20:26:48',
                'updated_at' => '2017-11-10 20:26:48',
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 121,
                'control_page_code' => 'pages',
                'created_at' => '2017-11-10 20:27:07',
                'updated_at' => '2017-11-10 20:27:07',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}