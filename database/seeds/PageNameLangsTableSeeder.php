<?php

use Illuminate\Database\Seeder;

class PageNameLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('page_name_langs')->delete();
        
        \DB::table('page_name_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'page_id' => 1,
                'lang_id' => 1,
                'text' => 'Home',
                'created_at' => '2017-08-23 18:20:57',
                'updated_at' => '2017-08-23 18:20:57',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'page_id' => 1,
                'lang_id' => 2,
                'text' => 'الرئيسية',
                'created_at' => '2017-08-23 18:20:57',
                'updated_at' => '2017-08-23 18:20:57',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'page_id' => 2,
                'lang_id' => 1,
                'text' => 'About us',
                'created_at' => '2017-08-31 18:34:17',
                'updated_at' => '2017-08-31 18:34:17',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'page_id' => 2,
                'lang_id' => 2,
                'text' => 'عن الجامعة',
                'created_at' => '2017-08-31 18:34:17',
                'updated_at' => '2017-08-31 18:34:17',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'page_id' => 3,
                'lang_id' => 1,
                'text' => 'University Message',
                'created_at' => '2017-10-14 17:58:05',
                'updated_at' => '2017-10-14 17:58:05',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'page_id' => 3,
                'lang_id' => 2,
                'text' => 'رسالة الجامعة',
                'created_at' => '2017-10-14 17:58:05',
                'updated_at' => '2017-10-14 17:58:05',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'page_id' => 4,
                'lang_id' => 1,
                'text' => 'University in glance',
                'created_at' => '2017-10-14 17:59:01',
                'updated_at' => '2017-10-14 17:59:01',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'page_id' => 4,
                'lang_id' => 2,
                'text' => 'لمحة عن الجامعة',
                'created_at' => '2017-10-14 17:59:01',
                'updated_at' => '2017-10-14 17:59:01',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'page_id' => 5,
                'lang_id' => 1,
                'text' => 'University Council',
                'created_at' => '2017-10-14 18:03:13',
                'updated_at' => '2017-10-14 18:03:13',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'page_id' => 5,
                'lang_id' => 2,
                'text' => 'مجلس الجامعة',
                'created_at' => '2017-10-14 18:03:13',
                'updated_at' => '2017-10-14 18:03:13',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'page_id' => 6,
                'lang_id' => 1,
                'text' => 'Trusted Council',
                'created_at' => '2017-10-14 18:04:01',
                'updated_at' => '2017-10-14 18:04:01',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'page_id' => 6,
                'lang_id' => 2,
                'text' => 'مجلس الامناء',
                'created_at' => '2017-10-14 18:04:01',
                'updated_at' => '2017-10-14 18:04:01',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'page_id' => 7,
                'lang_id' => 1,
                'text' => 'university partner',
                'created_at' => '2017-10-14 18:05:24',
                'updated_at' => '2017-10-14 18:05:24',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'page_id' => 7,
                'lang_id' => 2,
                'text' => 'الشركاء',
                'created_at' => '2017-10-14 18:05:24',
                'updated_at' => '2017-10-14 18:05:24',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'page_id' => 8,
                'lang_id' => 1,
                'text' => 'Location',
                'created_at' => '2017-10-14 18:06:10',
                'updated_at' => '2017-10-14 18:06:10',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'page_id' => 8,
                'lang_id' => 2,
                'text' => 'موقع الجامعة',
                'created_at' => '2017-10-14 18:06:10',
                'updated_at' => '2017-10-14 18:06:10',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'page_id' => 9,
                'lang_id' => 1,
                'text' => 'Location',
                'created_at' => '2017-10-14 18:06:12',
                'updated_at' => '2017-10-14 18:08:34',
                'deleted_at' => '2017-10-14 18:08:34',
            ),
            17 => 
            array (
                'id' => 18,
                'page_id' => 9,
                'lang_id' => 2,
                'text' => 'موقع الجامعة',
                'created_at' => '2017-10-14 18:06:12',
                'updated_at' => '2017-10-14 18:08:34',
                'deleted_at' => '2017-10-14 18:08:34',
            ),
            18 => 
            array (
                'id' => 19,
                'page_id' => 10,
                'lang_id' => 1,
                'text' => 'university offices',
                'created_at' => '2017-10-14 18:06:46',
                'updated_at' => '2017-10-14 18:06:46',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'page_id' => 10,
                'lang_id' => 2,
                'text' => 'مكاتب الجامعة',
                'created_at' => '2017-10-14 18:06:47',
                'updated_at' => '2017-10-14 18:06:47',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'page_id' => 11,
                'lang_id' => 1,
                'text' => 'Degrees',
                'created_at' => '2017-10-14 18:16:05',
                'updated_at' => '2017-10-14 18:16:05',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'page_id' => 11,
                'lang_id' => 2,
                'text' => 'الاختصاصات',
                'created_at' => '2017-10-14 18:16:05',
                'updated_at' => '2017-10-14 18:16:05',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'page_id' => 12,
                'lang_id' => 1,
                'text' => 'Courses',
                'created_at' => '2017-10-14 18:16:26',
                'updated_at' => '2017-10-14 18:16:26',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'page_id' => 12,
                'lang_id' => 2,
                'text' => 'المقررات',
                'created_at' => '2017-10-14 18:16:26',
                'updated_at' => '2017-10-14 18:16:26',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'page_id' => 13,
                'lang_id' => 1,
                'text' => 'Study Plan',
                'created_at' => '2017-10-14 18:17:00',
                'updated_at' => '2017-10-14 18:17:00',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'page_id' => 13,
                'lang_id' => 2,
                'text' => 'الخطة الدرسية',
                'created_at' => '2017-10-14 18:17:00',
                'updated_at' => '2017-10-14 18:17:00',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'page_id' => 14,
                'lang_id' => 1,
                'text' => 'Message & Goals',
                'created_at' => '2017-10-14 18:20:17',
                'updated_at' => '2017-10-14 18:20:17',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'page_id' => 14,
                'lang_id' => 2,
                'text' => 'رسالة الجامعة',
                'created_at' => '2017-10-14 18:20:17',
                'updated_at' => '2017-10-14 18:20:17',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'page_id' => 15,
                'lang_id' => 1,
                'text' => 'Instructors',
                'created_at' => '2017-10-14 18:20:41',
                'updated_at' => '2017-10-14 18:20:41',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'page_id' => 15,
                'lang_id' => 2,
                'text' => 'المدرسون',
                'created_at' => '2017-10-14 18:20:41',
                'updated_at' => '2017-10-14 18:20:41',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'page_id' => 16,
                'lang_id' => 1,
                'text' => 'Labs',
                'created_at' => '2017-10-14 18:21:01',
                'updated_at' => '2017-10-14 18:21:01',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'page_id' => 16,
                'lang_id' => 2,
                'text' => 'المخابر',
                'created_at' => '2017-10-14 18:21:01',
                'updated_at' => '2017-10-14 18:21:01',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'page_id' => 17,
                'lang_id' => 1,
                'text' => 'Contact Us',
                'created_at' => '2017-10-14 18:25:08',
                'updated_at' => '2017-10-14 18:25:08',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'page_id' => 17,
                'lang_id' => 2,
                'text' => 'تواصل معنا',
                'created_at' => '2017-10-14 18:25:08',
                'updated_at' => '2017-10-14 18:25:08',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'page_id' => 18,
                'lang_id' => 1,
                'text' => 'News',
                'created_at' => '2017-10-14 18:25:21',
                'updated_at' => '2017-10-14 18:25:21',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'page_id' => 18,
                'lang_id' => 2,
                'text' => 'اخبار',
                'created_at' => '2017-10-14 18:25:21',
                'updated_at' => '2017-10-14 18:25:21',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'page_id' => 19,
                'lang_id' => 1,
                'text' => 'Gallery',
                'created_at' => '2017-10-14 18:25:39',
                'updated_at' => '2017-10-14 18:25:39',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'page_id' => 19,
                'lang_id' => 2,
                'text' => 'معرض صور',
                'created_at' => '2017-10-14 18:25:39',
                'updated_at' => '2017-10-14 18:25:39',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'page_id' => 20,
                'lang_id' => 1,
                'text' => 'admission rules',
                'created_at' => '2017-10-14 18:47:09',
                'updated_at' => '2017-10-14 18:47:09',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'page_id' => 20,
                'lang_id' => 2,
                'text' => 'شروط القبول',
                'created_at' => '2017-10-14 18:47:09',
                'updated_at' => '2017-10-14 18:47:09',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'page_id' => 21,
                'lang_id' => 1,
                'text' => 'admission way',
                'created_at' => '2017-10-14 18:47:59',
                'updated_at' => '2017-10-14 18:47:59',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'page_id' => 21,
                'lang_id' => 2,
                'text' => 'طريقة القبول',
                'created_at' => '2017-10-14 18:47:59',
                'updated_at' => '2017-10-14 18:47:59',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'page_id' => 22,
                'lang_id' => 1,
                'text' => 'Fees',
                'created_at' => '2017-10-14 18:48:22',
                'updated_at' => '2017-10-14 18:48:22',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'page_id' => 22,
                'lang_id' => 2,
                'text' => 'الرسوم',
                'created_at' => '2017-10-14 18:48:22',
                'updated_at' => '2017-10-14 18:48:22',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'page_id' => 23,
                'lang_id' => 1,
                'text' => 'scholarship',
                'created_at' => '2017-10-14 18:48:43',
                'updated_at' => '2017-10-14 18:48:43',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'page_id' => 23,
                'lang_id' => 2,
                'text' => 'المنح',
                'created_at' => '2017-10-14 18:48:43',
                'updated_at' => '2017-10-14 18:48:43',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'page_id' => 24,
                'lang_id' => 1,
                'text' => 'university calendar',
                'created_at' => '2017-10-14 18:49:43',
                'updated_at' => '2017-10-14 18:49:43',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'page_id' => 24,
                'lang_id' => 2,
                'text' => 'التقويم الجامعي',
                'created_at' => '2017-10-14 18:49:43',
                'updated_at' => '2017-10-14 18:49:43',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'page_id' => 25,
                'lang_id' => 1,
                'text' => 'Courses List',
                'created_at' => '2017-10-14 18:50:13',
                'updated_at' => '2017-10-14 18:50:13',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'page_id' => 25,
                'lang_id' => 2,
                'text' => 'قائمة المقررات',
                'created_at' => '2017-10-14 18:50:13',
                'updated_at' => '2017-10-14 18:50:13',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'page_id' => 26,
                'lang_id' => 1,
                'text' => 'Exams',
                'created_at' => '2017-10-14 18:50:34',
                'updated_at' => '2017-10-14 18:50:34',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'page_id' => 26,
                'lang_id' => 2,
                'text' => 'الامتحانات',
                'created_at' => '2017-10-14 18:50:34',
                'updated_at' => '2017-10-14 18:50:34',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}