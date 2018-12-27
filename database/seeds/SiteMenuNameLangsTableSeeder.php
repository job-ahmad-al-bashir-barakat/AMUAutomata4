<?php

use Illuminate\Database\Seeder;

class SiteMenuNameLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('site_menu_name_langs')->delete();
        
        \DB::table('site_menu_name_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'site_menu_id' => 2,
                'lang_id' => 1,
                'text' => 'About ASPU',
                'created_at' => '2017-10-14 08:56:06',
                'updated_at' => '2018-07-16 00:56:28',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'site_menu_id' => 2,
                'lang_id' => 2,
                'text' => 'عن الجامعة',
                'created_at' => '2017-10-14 08:56:06',
                'updated_at' => '2018-07-16 00:56:28',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'site_menu_id' => 5,
                'lang_id' => 1,
                'text' => 'Hierarchy',
                'created_at' => '2017-10-14 09:01:05',
                'updated_at' => '2018-03-26 11:34:57',
                'deleted_at' => '2018-03-26 11:34:57',
            ),
            3 => 
            array (
                'id' => 4,
                'site_menu_id' => 5,
                'lang_id' => 2,
                'text' => 'الهيكلية',
                'created_at' => '2017-10-14 09:01:05',
                'updated_at' => '2018-03-26 11:34:57',
                'deleted_at' => '2018-03-26 11:34:57',
            ),
            4 => 
            array (
                'id' => 5,
                'site_menu_id' => 13,
                'lang_id' => 1,
                'text' => 'Medical',
                'created_at' => '2017-10-14 09:11:23',
                'updated_at' => '2017-11-12 13:48:19',
                'deleted_at' => '2017-11-12 13:48:19',
            ),
            5 => 
            array (
                'id' => 6,
                'site_menu_id' => 13,
                'lang_id' => 2,
                'text' => 'طبي',
                'created_at' => '2017-10-14 09:11:23',
                'updated_at' => '2017-11-12 13:48:19',
                'deleted_at' => '2017-11-12 13:48:19',
            ),
            6 => 
            array (
                'id' => 7,
                'site_menu_id' => 14,
                'lang_id' => 1,
                'text' => 'Faculties',
                'created_at' => '2017-10-14 09:12:30',
                'updated_at' => '2017-11-12 13:50:47',
                'deleted_at' => '2017-11-12 13:50:47',
            ),
            7 => 
            array (
                'id' => 8,
                'site_menu_id' => 14,
                'lang_id' => 2,
                'text' => 'الكليات',
                'created_at' => '2017-10-14 09:12:30',
                'updated_at' => '2017-11-12 13:50:47',
                'deleted_at' => '2017-11-12 13:50:47',
            ),
            8 => 
            array (
                'id' => 9,
                'site_menu_id' => 15,
                'lang_id' => 1,
                'text' => 'Engineering',
                'created_at' => '2017-10-14 09:13:31',
                'updated_at' => '2017-11-12 13:50:08',
                'deleted_at' => '2017-11-12 13:50:08',
            ),
            9 => 
            array (
                'id' => 10,
                'site_menu_id' => 15,
                'lang_id' => 2,
                'text' => 'الهندسة',
                'created_at' => '2017-10-14 09:13:31',
                'updated_at' => '2017-11-12 13:50:08',
                'deleted_at' => '2017-11-12 13:50:08',
            ),
            10 => 
            array (
                'id' => 11,
                'site_menu_id' => 33,
                'lang_id' => 1,
                'text' => 'Students Affairs',
                'created_at' => '2017-10-14 09:27:33',
                'updated_at' => '2018-07-23 14:05:24',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'site_menu_id' => 33,
                'lang_id' => 2,
                'text' => 'شؤون الطلاب',
                'created_at' => '2017-10-14 09:27:33',
                'updated_at' => '2018-07-23 14:05:24',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'site_menu_id' => 34,
                'lang_id' => 1,
                'text' => 'Study and Exams',
                'created_at' => '2017-10-14 09:28:04',
                'updated_at' => '2018-10-03 03:19:43',
                'deleted_at' => '2018-10-03 03:19:43',
            ),
            13 => 
            array (
                'id' => 14,
                'site_menu_id' => 34,
                'lang_id' => 2,
                'text' => 'الدراسات والامتحانات',
                'created_at' => '2017-10-14 09:28:04',
                'updated_at' => '2018-10-03 03:19:43',
                'deleted_at' => '2018-10-03 03:19:43',
            ),
            14 => 
            array (
                'id' => 15,
                'site_menu_id' => 48,
                'lang_id' => 1,
                'text' => 'Students Affairs',
                'created_at' => '2018-07-23 13:45:29',
                'updated_at' => '2018-07-23 13:45:29',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'site_menu_id' => 48,
                'lang_id' => 2,
                'text' => 'شؤون الطلاب',
                'created_at' => '2018-07-23 13:45:29',
                'updated_at' => '2018-07-23 13:45:29',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'site_menu_id' => 49,
                'lang_id' => 1,
                'text' => 'UNIVERSITY ACTIVITY',
                'created_at' => '2018-07-23 14:03:27',
                'updated_at' => '2018-08-01 04:49:45',
                'deleted_at' => '2018-08-01 04:49:45',
            ),
            17 => 
            array (
                'id' => 18,
                'site_menu_id' => 49,
                'lang_id' => 2,
                'text' => 'نشاطات وفعاليات الجامعة',
                'created_at' => '2018-07-23 14:03:27',
                'updated_at' => '2018-08-01 04:49:45',
                'deleted_at' => '2018-08-01 04:49:45',
            ),
            18 => 
            array (
                'id' => 19,
                'site_menu_id' => 52,
                'lang_id' => 1,
                'text' => 'University Councils',
                'created_at' => '2018-07-23 14:21:08',
                'updated_at' => '2018-07-23 14:21:08',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'site_menu_id' => 52,
                'lang_id' => 2,
                'text' => 'المجالس الجامعية',
                'created_at' => '2018-07-23 14:21:08',
                'updated_at' => '2018-07-23 14:21:08',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'site_menu_id' => 54,
                'lang_id' => 1,
                'text' => 'Check Certificate',
                'created_at' => '2018-10-03 03:24:30',
                'updated_at' => '2018-10-03 03:24:30',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'site_menu_id' => 54,
                'lang_id' => 2,
                'text' => 'التحقق من الشهادات',
                'created_at' => '2018-10-03 03:24:30',
                'updated_at' => '2018-10-03 03:24:30',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'site_menu_id' => 56,
                'lang_id' => 1,
                'text' => 'TEst',
                'created_at' => '2018-10-04 02:09:07',
                'updated_at' => '2018-10-04 02:10:20',
                'deleted_at' => '2018-10-04 02:10:20',
            ),
            23 => 
            array (
                'id' => 24,
                'site_menu_id' => 56,
                'lang_id' => 2,
                'text' => 'تجريبي',
                'created_at' => '2018-10-04 02:09:07',
                'updated_at' => '2018-10-04 02:10:20',
                'deleted_at' => '2018-10-04 02:10:20',
            ),
            24 => 
            array (
                'id' => 25,
                'site_menu_id' => 58,
                'lang_id' => 1,
                'text' => 'test',
                'created_at' => '2018-10-04 04:13:04',
                'updated_at' => '2018-10-08 00:56:49',
                'deleted_at' => '2018-10-08 00:56:49',
            ),
            25 => 
            array (
                'id' => 26,
                'site_menu_id' => 58,
                'lang_id' => 2,
                'text' => 'تجريبي',
                'created_at' => '2018-10-04 04:13:04',
                'updated_at' => '2018-10-08 00:56:49',
                'deleted_at' => '2018-10-08 00:56:49',
            ),
            26 => 
            array (
                'id' => 27,
                'site_menu_id' => 61,
                'lang_id' => 1,
                'text' => 'information u',
                'created_at' => '2018-10-06 04:31:11',
                'updated_at' => '2018-10-10 01:59:49',
                'deleted_at' => '2018-10-10 01:59:49',
            ),
            27 => 
            array (
                'id' => 28,
                'site_menu_id' => 61,
                'lang_id' => 2,
                'text' => 'مجلس المعلوماتية',
                'created_at' => '2018-10-06 04:31:11',
                'updated_at' => '2018-10-10 01:59:49',
                'deleted_at' => '2018-10-10 01:59:49',
            ),
            28 => 
            array (
                'id' => 29,
                'site_menu_id' => 63,
                'lang_id' => 1,
                'text' => 'University Branches',
                'created_at' => '2018-10-08 00:55:05',
                'updated_at' => '2018-11-04 07:53:21',
                'deleted_at' => '2018-11-04 07:53:21',
            ),
            29 => 
            array (
                'id' => 30,
                'site_menu_id' => 63,
                'lang_id' => 2,
                'text' => 'فروع الجامعة',
                'created_at' => '2018-10-08 00:55:05',
                'updated_at' => '2018-11-04 07:53:21',
                'deleted_at' => '2018-11-04 07:53:21',
            ),
            30 => 
            array (
                'id' => 31,
                'site_menu_id' => 64,
                'lang_id' => 1,
                'text' => 'E-Library',
                'created_at' => '2018-10-08 01:59:01',
                'updated_at' => '2018-10-08 01:59:01',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'site_menu_id' => 64,
                'lang_id' => 2,
                'text' => 'المكتبة الإلكترونية',
                'created_at' => '2018-10-08 01:59:01',
                'updated_at' => '2018-10-08 01:59:01',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'site_menu_id' => 71,
                'lang_id' => 1,
                'text' => 'Damascos-Albramkeh',
                'created_at' => '2018-10-08 02:31:18',
                'updated_at' => '2018-10-08 02:31:18',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'site_menu_id' => 71,
                'lang_id' => 2,
                'text' => 'دمشق البرامكة',
                'created_at' => '2018-10-08 02:31:18',
                'updated_at' => '2018-10-08 02:31:18',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'site_menu_id' => 72,
                'lang_id' => 1,
                'text' => 'Damacsus-Mazraa',
                'created_at' => '2018-10-08 02:32:59',
                'updated_at' => '2018-10-08 02:32:59',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'site_menu_id' => 72,
                'lang_id' => 2,
                'text' => 'دمشق المزرعة',
                'created_at' => '2018-10-08 02:32:59',
                'updated_at' => '2018-10-08 02:32:59',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'site_menu_id' => 73,
                'lang_id' => 1,
                'text' => 'Damascus Suburb',
                'created_at' => '2018-10-08 02:34:17',
                'updated_at' => '2018-10-08 02:34:17',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'site_menu_id' => 73,
                'lang_id' => 2,
                'text' => 'ريف دمشق - التل',
                'created_at' => '2018-10-08 02:34:17',
                'updated_at' => '2018-10-08 02:34:17',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'site_menu_id' => 74,
                'lang_id' => 1,
                'text' => 'Lattakia-Alsalibeh',
                'created_at' => '2018-10-08 02:35:18',
                'updated_at' => '2018-10-08 02:35:18',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'site_menu_id' => 74,
                'lang_id' => 2,
                'text' => 'اللاذقية الصليبة',
                'created_at' => '2018-10-08 02:35:18',
                'updated_at' => '2018-10-08 02:35:18',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'site_menu_id' => 75,
                'lang_id' => 1,
                'text' => 'Lattakia-Southern Cornish',
                'created_at' => '2018-10-08 02:35:54',
                'updated_at' => '2018-11-04 07:53:14',
                'deleted_at' => '2018-11-04 07:53:14',
            ),
            41 => 
            array (
                'id' => 42,
                'site_menu_id' => 75,
                'lang_id' => 2,
                'text' => 'اللاذقية الكورنيش الجنوبي',
                'created_at' => '2018-10-08 02:35:54',
                'updated_at' => '2018-11-04 07:53:14',
                'deleted_at' => '2018-11-04 07:53:14',
            ),
            42 => 
            array (
                'id' => 43,
                'site_menu_id' => 89,
                'lang_id' => 1,
                'text' => 'University Branches',
                'created_at' => '2018-11-04 07:55:15',
                'updated_at' => '2018-11-04 07:55:46',
                'deleted_at' => '2018-11-04 07:55:46',
            ),
            43 => 
            array (
                'id' => 44,
                'site_menu_id' => 89,
                'lang_id' => 2,
                'text' => 'فروع الجامعة',
                'created_at' => '2018-11-04 07:55:15',
                'updated_at' => '2018-11-04 07:55:46',
                'deleted_at' => '2018-11-04 07:55:46',
            ),
            44 => 
            array (
                'id' => 45,
                'site_menu_id' => 90,
                'lang_id' => 1,
                'text' => 'University Branches',
                'created_at' => '2018-11-04 08:06:34',
                'updated_at' => '2018-11-04 08:18:09',
                'deleted_at' => '2018-11-04 08:18:09',
            ),
            45 => 
            array (
                'id' => 46,
                'site_menu_id' => 90,
                'lang_id' => 2,
                'text' => 'فروع الجامعة',
                'created_at' => '2018-11-04 08:06:34',
                'updated_at' => '2018-11-04 08:18:09',
                'deleted_at' => '2018-11-04 08:18:09',
            ),
            46 => 
            array (
                'id' => 47,
                'site_menu_id' => 91,
                'lang_id' => 1,
                'text' => 'Damascus Branch',
                'created_at' => '2018-11-04 08:09:25',
                'updated_at' => '2018-11-04 08:18:04',
                'deleted_at' => '2018-11-04 08:18:04',
            ),
            47 => 
            array (
                'id' => 48,
                'site_menu_id' => 91,
                'lang_id' => 2,
                'text' => 'فرع دمشق',
                'created_at' => '2018-11-04 08:09:25',
                'updated_at' => '2018-11-04 08:18:04',
                'deleted_at' => '2018-11-04 08:18:04',
            ),
            48 => 
            array (
                'id' => 49,
                'site_menu_id' => 92,
                'lang_id' => 1,
                'text' => 'University Branches',
                'created_at' => '2018-11-04 08:19:32',
                'updated_at' => '2018-11-04 08:19:32',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'site_menu_id' => 92,
                'lang_id' => 2,
                'text' => 'فروع الجامعة',
                'created_at' => '2018-11-04 08:19:32',
                'updated_at' => '2018-11-04 08:19:32',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'site_menu_id' => 93,
                'lang_id' => 1,
                'text' => 'Damascus _Al Mazraa',
                'created_at' => '2018-11-04 08:20:37',
                'updated_at' => '2018-11-07 05:58:27',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'site_menu_id' => 93,
                'lang_id' => 2,
                'text' => 'دمشق _ المزرعة',
                'created_at' => '2018-11-04 08:20:37',
                'updated_at' => '2018-11-07 05:58:27',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'site_menu_id' => 101,
                'lang_id' => 1,
                'text' => 'Lattakia _Al Sleibeh',
                'created_at' => '2018-11-04 08:26:03',
                'updated_at' => '2018-11-07 05:59:17',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'site_menu_id' => 101,
                'lang_id' => 2,
                'text' => 'اللاذقية _ الصليبة',
                'created_at' => '2018-11-04 08:26:03',
                'updated_at' => '2018-11-07 05:59:17',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'site_menu_id' => 120,
                'lang_id' => 1,
                'text' => 'Damascus _Al Bramkeh',
                'created_at' => '2018-11-07 06:01:39',
                'updated_at' => '2018-11-07 06:01:39',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'site_menu_id' => 120,
                'lang_id' => 2,
                'text' => 'دمشق _ البرامكة',
                'created_at' => '2018-11-07 06:01:39',
                'updated_at' => '2018-11-07 06:01:39',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'site_menu_id' => 121,
                'lang_id' => 1,
                'text' => 'Damascus _ Al Tal',
                'created_at' => '2018-11-07 06:02:46',
                'updated_at' => '2018-11-07 06:02:46',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'site_menu_id' => 121,
                'lang_id' => 2,
                'text' => 'دمشق _ التل',
                'created_at' => '2018-11-07 06:02:46',
                'updated_at' => '2018-11-07 06:02:46',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'site_menu_id' => 122,
                'lang_id' => 1,
                'text' => 'Lattakia _Southern Corniche',
                'created_at' => '2018-11-07 06:03:35',
                'updated_at' => '2018-11-07 06:03:35',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'site_menu_id' => 122,
                'lang_id' => 2,
                'text' => 'اللاذقية _ الكورنيش الجنوبي',
                'created_at' => '2018-11-07 06:03:35',
                'updated_at' => '2018-11-07 06:03:35',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}