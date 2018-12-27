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
                'created_at' => '2017-08-23 09:20:57',
                'updated_at' => '2017-08-23 09:20:57',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'page_id' => 1,
                'lang_id' => 2,
                'text' => 'الرئيسية',
                'created_at' => '2017-08-23 09:20:57',
                'updated_at' => '2017-08-23 09:20:57',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'page_id' => 2,
                'lang_id' => 1,
                'text' => 'About us',
                'created_at' => '2017-08-31 09:34:17',
                'updated_at' => '2017-08-31 09:34:17',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'page_id' => 2,
                'lang_id' => 2,
                'text' => 'عن الجامعة',
                'created_at' => '2017-08-31 09:34:17',
                'updated_at' => '2017-08-31 09:34:17',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'page_id' => 3,
                'lang_id' => 1,
                'text' => 'University Message',
                'created_at' => '2017-10-14 08:58:05',
                'updated_at' => '2018-11-07 05:19:32',
                'deleted_at' => '2018-11-07 05:19:32',
            ),
            5 => 
            array (
                'id' => 6,
                'page_id' => 3,
                'lang_id' => 2,
                'text' => 'رسالة الجامعة',
                'created_at' => '2017-10-14 08:58:05',
                'updated_at' => '2018-11-07 05:19:32',
                'deleted_at' => '2018-11-07 05:19:32',
            ),
            6 => 
            array (
                'id' => 7,
                'page_id' => 4,
                'lang_id' => 1,
                'text' => 'ASPU',
                'created_at' => '2017-10-14 08:59:01',
                'updated_at' => '2018-07-23 14:13:25',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'page_id' => 4,
                'lang_id' => 2,
                'text' => 'حول الجامعة',
                'created_at' => '2017-10-14 08:59:01',
                'updated_at' => '2018-07-23 14:13:25',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'page_id' => 5,
                'lang_id' => 1,
                'text' => 'University Council',
                'created_at' => '2017-10-14 09:03:13',
                'updated_at' => '2017-10-14 09:03:13',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'page_id' => 5,
                'lang_id' => 2,
                'text' => 'مجلس الجامعة',
                'created_at' => '2017-10-14 09:03:13',
                'updated_at' => '2017-10-14 09:03:13',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'page_id' => 6,
                'lang_id' => 1,
                'text' => 'Trusted Council',
                'created_at' => '2017-10-14 09:04:01',
                'updated_at' => '2017-10-14 09:04:01',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'page_id' => 6,
                'lang_id' => 2,
                'text' => 'مجلس الامناء',
                'created_at' => '2017-10-14 09:04:01',
                'updated_at' => '2017-10-14 09:04:01',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'page_id' => 7,
                'lang_id' => 1,
                'text' => 'Tenders',
                'created_at' => '2017-10-14 09:05:24',
                'updated_at' => '2018-10-03 03:07:03',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'page_id' => 7,
                'lang_id' => 2,
                'text' => 'مناقصات',
                'created_at' => '2017-10-14 09:05:24',
                'updated_at' => '2018-10-03 03:07:03',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'page_id' => 8,
                'lang_id' => 1,
                'text' => 'Location',
                'created_at' => '2017-10-14 09:06:10',
                'updated_at' => '2017-10-14 09:06:10',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'page_id' => 8,
                'lang_id' => 2,
                'text' => 'موقع الجامعة',
                'created_at' => '2017-10-14 09:06:10',
                'updated_at' => '2017-10-14 09:06:10',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'page_id' => 9,
                'lang_id' => 1,
                'text' => 'Location',
                'created_at' => '2017-10-14 09:06:12',
                'updated_at' => '2017-10-14 09:08:34',
                'deleted_at' => '2017-10-14 09:08:34',
            ),
            17 => 
            array (
                'id' => 18,
                'page_id' => 9,
                'lang_id' => 2,
                'text' => 'موقع الجامعة',
                'created_at' => '2017-10-14 09:06:12',
                'updated_at' => '2017-10-14 09:08:34',
                'deleted_at' => '2017-10-14 09:08:34',
            ),
            18 => 
            array (
                'id' => 19,
                'page_id' => 10,
                'lang_id' => 1,
                'text' => 'University Departments',
                'created_at' => '2017-10-14 09:06:46',
                'updated_at' => '2018-10-03 06:31:22',
                'deleted_at' => '2018-10-03 06:31:22',
            ),
            19 => 
            array (
                'id' => 20,
                'page_id' => 10,
                'lang_id' => 2,
                'text' => 'مديريات الجامعة',
                'created_at' => '2017-10-14 09:06:47',
                'updated_at' => '2018-10-03 06:31:22',
                'deleted_at' => '2018-10-03 06:31:22',
            ),
            20 => 
            array (
                'id' => 21,
                'page_id' => 11,
                'lang_id' => 1,
                'text' => 'Degrees',
                'created_at' => '2017-10-14 09:16:05',
                'updated_at' => '2017-10-14 09:16:05',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'page_id' => 11,
                'lang_id' => 2,
                'text' => 'الاختصاصات',
                'created_at' => '2017-10-14 09:16:05',
                'updated_at' => '2017-10-14 09:16:05',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'page_id' => 12,
                'lang_id' => 1,
                'text' => 'Courses',
                'created_at' => '2017-10-14 09:16:26',
                'updated_at' => '2018-11-11 08:14:27',
                'deleted_at' => '2018-11-11 08:14:27',
            ),
            23 => 
            array (
                'id' => 24,
                'page_id' => 12,
                'lang_id' => 2,
                'text' => 'المقررات',
                'created_at' => '2017-10-14 09:16:26',
                'updated_at' => '2018-11-11 08:14:27',
                'deleted_at' => '2018-11-11 08:14:27',
            ),
            24 => 
            array (
                'id' => 25,
                'page_id' => 13,
                'lang_id' => 1,
                'text' => 'Study Plan',
                'created_at' => '2017-10-14 09:17:00',
                'updated_at' => '2017-10-14 09:17:00',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'page_id' => 13,
                'lang_id' => 2,
                'text' => 'الخطة الدرسية',
                'created_at' => '2017-10-14 09:17:00',
                'updated_at' => '2017-10-14 09:17:00',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'page_id' => 14,
                'lang_id' => 1,
                'text' => 'Message & Goals',
                'created_at' => '2017-10-14 09:20:17',
                'updated_at' => '2017-10-14 09:20:17',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'page_id' => 14,
                'lang_id' => 2,
                'text' => 'رسالة الجامعة',
                'created_at' => '2017-10-14 09:20:17',
                'updated_at' => '2017-10-14 09:20:17',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'page_id' => 15,
                'lang_id' => 1,
                'text' => 'Instructors',
                'created_at' => '2017-10-14 09:20:41',
                'updated_at' => '2017-10-14 09:20:41',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'page_id' => 15,
                'lang_id' => 2,
                'text' => 'المدرسون',
                'created_at' => '2017-10-14 09:20:41',
                'updated_at' => '2017-10-14 09:20:41',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'page_id' => 16,
                'lang_id' => 1,
                'text' => 'Labs',
                'created_at' => '2017-10-14 09:21:01',
                'updated_at' => '2017-10-14 09:21:01',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'page_id' => 16,
                'lang_id' => 2,
                'text' => 'المخابر',
                'created_at' => '2017-10-14 09:21:01',
                'updated_at' => '2017-10-14 09:21:01',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'page_id' => 17,
                'lang_id' => 1,
                'text' => 'Contact Us',
                'created_at' => '2017-10-14 09:25:08',
                'updated_at' => '2017-10-14 09:25:08',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'page_id' => 17,
                'lang_id' => 2,
                'text' => 'اتصل بنا',
                'created_at' => '2017-10-14 09:25:08',
                'updated_at' => '2018-07-23 14:41:53',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'page_id' => 18,
                'lang_id' => 1,
                'text' => 'News',
                'created_at' => '2017-10-14 09:25:21',
                'updated_at' => '2017-10-14 09:25:21',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'page_id' => 18,
                'lang_id' => 2,
                'text' => 'الأخبار',
                'created_at' => '2017-10-14 09:25:21',
                'updated_at' => '2018-08-01 02:51:53',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'page_id' => 19,
                'lang_id' => 1,
                'text' => 'Gallery',
                'created_at' => '2017-10-14 09:25:39',
                'updated_at' => '2017-10-14 09:25:39',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'page_id' => 19,
                'lang_id' => 2,
                'text' => 'معرض صور',
                'created_at' => '2017-10-14 09:25:39',
                'updated_at' => '2017-10-14 09:25:39',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'page_id' => 20,
                'lang_id' => 1,
                'text' => 'Admission Rules',
                'created_at' => '2017-10-14 09:47:09',
                'updated_at' => '2017-12-09 12:11:00',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'page_id' => 20,
                'lang_id' => 2,
                'text' => 'شروط القبول',
                'created_at' => '2017-10-14 09:47:09',
                'updated_at' => '2017-10-14 09:47:09',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'page_id' => 21,
                'lang_id' => 1,
                'text' => 'Admission Way',
                'created_at' => '2017-10-14 09:47:59',
                'updated_at' => '2017-12-09 12:11:18',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'page_id' => 21,
                'lang_id' => 2,
                'text' => 'طريقة القبول',
                'created_at' => '2017-10-14 09:47:59',
                'updated_at' => '2017-10-14 09:47:59',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'page_id' => 22,
                'lang_id' => 1,
                'text' => 'Fees',
                'created_at' => '2017-10-14 09:48:22',
                'updated_at' => '2017-10-14 09:48:22',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'page_id' => 22,
                'lang_id' => 2,
                'text' => 'الرسوم',
                'created_at' => '2017-10-14 09:48:22',
                'updated_at' => '2017-10-14 09:48:22',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'page_id' => 23,
                'lang_id' => 1,
                'text' => 'Grants & Discounts',
                'created_at' => '2017-10-14 09:48:43',
                'updated_at' => '2018-07-23 13:57:07',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'page_id' => 23,
                'lang_id' => 2,
                'text' => 'المنح والحسومات',
                'created_at' => '2017-10-14 09:48:43',
                'updated_at' => '2018-07-23 13:57:07',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'page_id' => 24,
                'lang_id' => 1,
                'text' => 'University Calendar',
                'created_at' => '2017-10-14 09:49:43',
                'updated_at' => '2017-12-09 12:11:59',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'page_id' => 24,
                'lang_id' => 2,
                'text' => 'التقويم الجامعي',
                'created_at' => '2017-10-14 09:49:43',
                'updated_at' => '2017-10-14 09:49:43',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'page_id' => 25,
                'lang_id' => 1,
                'text' => 'Courses List',
                'created_at' => '2017-10-14 09:50:13',
                'updated_at' => '2017-10-14 09:50:13',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'page_id' => 25,
                'lang_id' => 2,
                'text' => 'قائمة المقررات',
                'created_at' => '2017-10-14 09:50:13',
                'updated_at' => '2017-10-14 09:50:13',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'page_id' => 26,
                'lang_id' => 1,
                'text' => 'Exams',
                'created_at' => '2017-10-14 09:50:34',
                'updated_at' => '2017-10-14 09:50:34',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'page_id' => 26,
                'lang_id' => 2,
                'text' => 'الامتحانات',
                'created_at' => '2017-10-14 09:50:34',
                'updated_at' => '2017-10-14 09:50:34',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'page_id' => 27,
                'lang_id' => 1,
                'text' => 'Person',
                'created_at' => '2017-11-15 12:10:31',
                'updated_at' => '2017-11-15 12:10:31',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'page_id' => 27,
                'lang_id' => 2,
                'text' => 'شخص',
                'created_at' => '2017-11-15 12:10:31',
                'updated_at' => '2017-11-15 12:10:31',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 57,
                'page_id' => 29,
                'lang_id' => 1,
                'text' => 'Hierarchy',
                'created_at' => '2018-03-26 11:34:15',
                'updated_at' => '2018-03-26 11:34:15',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 58,
                'page_id' => 29,
                'lang_id' => 2,
                'text' => 'الهيكلية',
                'created_at' => '2018-03-26 11:34:15',
                'updated_at' => '2018-03-26 11:34:15',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 59,
                'page_id' => 30,
                'lang_id' => 1,
                'text' => 'ٍSpeech of the University President',
                'created_at' => '2018-07-16 01:10:23',
                'updated_at' => '2018-10-21 07:12:08',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 60,
                'page_id' => 30,
                'lang_id' => 2,
                'text' => 'كلمة رئيس الجامعة',
                'created_at' => '2018-07-16 01:10:23',
                'updated_at' => '2018-10-21 07:12:08',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 61,
                'page_id' => 31,
                'lang_id' => 1,
                'text' => 'Scientific Agreements',
                'created_at' => '2018-07-23 14:17:32',
                'updated_at' => '2018-07-23 14:17:32',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 62,
                'page_id' => 31,
                'lang_id' => 2,
                'text' => 'الاتفاقيات العلمية',
                'created_at' => '2018-07-23 14:17:32',
                'updated_at' => '2018-07-23 14:17:32',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 63,
                'page_id' => 32,
                'lang_id' => 1,
                'text' => 'Courses',
                'created_at' => '2018-10-04 04:02:59',
                'updated_at' => '2018-11-11 08:09:36',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 64,
                'page_id' => 32,
                'lang_id' => 2,
                'text' => 'المقررات',
                'created_at' => '2018-10-04 04:02:59',
                'updated_at' => '2018-11-11 08:09:36',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 65,
                'page_id' => 33,
                'lang_id' => 1,
                'text' => 'information',
                'created_at' => '2018-10-06 03:49:47',
                'updated_at' => '2018-10-10 02:02:09',
                'deleted_at' => '2018-10-10 02:02:09',
            ),
            63 => 
            array (
                'id' => 66,
                'page_id' => 33,
                'lang_id' => 2,
                'text' => 'معلوماتيه',
                'created_at' => '2018-10-06 03:49:47',
                'updated_at' => '2018-10-10 02:02:09',
                'deleted_at' => '2018-10-10 02:02:09',
            ),
            64 => 
            array (
                'id' => 67,
                'page_id' => 34,
                'lang_id' => 1,
                'text' => 'Damascos-Albramkeh',
                'created_at' => '2018-10-08 02:03:01',
                'updated_at' => '2018-11-04 09:33:06',
                'deleted_at' => '2018-11-04 09:33:06',
            ),
            65 => 
            array (
                'id' => 68,
                'page_id' => 34,
                'lang_id' => 2,
                'text' => 'دمشق البرامكة',
                'created_at' => '2018-10-08 02:03:01',
                'updated_at' => '2018-11-04 09:33:06',
                'deleted_at' => '2018-11-04 09:33:06',
            ),
            66 => 
            array (
                'id' => 69,
                'page_id' => 35,
                'lang_id' => 1,
                'text' => 'Damacsus-Mazraa',
                'created_at' => '2018-10-08 02:04:58',
                'updated_at' => '2018-11-04 09:32:53',
                'deleted_at' => '2018-11-04 09:32:53',
            ),
            67 => 
            array (
                'id' => 70,
                'page_id' => 35,
                'lang_id' => 2,
                'text' => 'دمشق المزرعة',
                'created_at' => '2018-10-08 02:04:58',
                'updated_at' => '2018-11-04 09:32:53',
                'deleted_at' => '2018-11-04 09:32:53',
            ),
            68 => 
            array (
                'id' => 71,
                'page_id' => 36,
                'lang_id' => 1,
                'text' => 'Damascus Suburb',
                'created_at' => '2018-10-08 02:06:35',
                'updated_at' => '2018-11-04 09:32:46',
                'deleted_at' => '2018-11-04 09:32:46',
            ),
            69 => 
            array (
                'id' => 72,
                'page_id' => 36,
                'lang_id' => 2,
                'text' => 'ريف دمشق - التل',
                'created_at' => '2018-10-08 02:06:35',
                'updated_at' => '2018-11-04 09:32:46',
                'deleted_at' => '2018-11-04 09:32:46',
            ),
            70 => 
            array (
                'id' => 73,
                'page_id' => 37,
                'lang_id' => 1,
                'text' => 'Lattakia-Southern Cornish',
                'created_at' => '2018-10-08 02:09:51',
                'updated_at' => '2018-11-04 09:32:39',
                'deleted_at' => '2018-11-04 09:32:39',
            ),
            71 => 
            array (
                'id' => 74,
                'page_id' => 37,
                'lang_id' => 2,
                'text' => 'اللاذقية الكورنيش الجنوبي',
                'created_at' => '2018-10-08 02:09:51',
                'updated_at' => '2018-11-04 09:32:39',
                'deleted_at' => '2018-11-04 09:32:39',
            ),
            72 => 
            array (
                'id' => 75,
                'page_id' => 38,
                'lang_id' => 1,
                'text' => 'Lattakia-Alsalibeh',
                'created_at' => '2018-10-08 02:11:04',
                'updated_at' => '2018-11-04 09:32:33',
                'deleted_at' => '2018-11-04 09:32:33',
            ),
            73 => 
            array (
                'id' => 76,
                'page_id' => 38,
                'lang_id' => 2,
                'text' => 'اللاذقية الصليبة',
                'created_at' => '2018-10-08 02:11:04',
                'updated_at' => '2018-11-04 09:32:33',
                'deleted_at' => '2018-11-04 09:32:33',
            ),
            74 => 
            array (
                'id' => 77,
                'page_id' => 39,
                'lang_id' => 1,
                'text' => 'law faculty',
                'created_at' => '2018-10-31 09:32:58',
                'updated_at' => '2018-11-04 09:32:28',
                'deleted_at' => '2018-11-04 09:32:28',
            ),
            75 => 
            array (
                'id' => 78,
                'page_id' => 39,
                'lang_id' => 2,
                'text' => 'كلية الحقوق',
                'created_at' => '2018-10-31 09:32:58',
                'updated_at' => '2018-11-04 09:32:28',
                'deleted_at' => '2018-11-04 09:32:28',
            ),
            76 => 
            array (
                'id' => 79,
                'page_id' => 40,
                'lang_id' => 1,
                'text' => 'Dean',
                'created_at' => '2018-11-07 05:22:08',
                'updated_at' => '2018-11-11 08:03:18',
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 80,
                'page_id' => 40,
                'lang_id' => 2,
                'text' => 'عميد الكلية',
                'created_at' => '2018-11-07 05:22:08',
                'updated_at' => '2018-11-11 08:03:18',
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 81,
                'page_id' => 41,
                'lang_id' => 1,
                'text' => 'Scientific Research',
                'created_at' => '2018-11-07 05:25:34',
                'updated_at' => '2018-11-07 05:25:34',
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 82,
                'page_id' => 41,
                'lang_id' => 2,
                'text' => 'الأبحاث العلمية',
                'created_at' => '2018-11-07 05:25:34',
                'updated_at' => '2018-11-07 05:25:34',
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 83,
                'page_id' => 42,
                'lang_id' => 1,
                'text' => 'College Message',
                'created_at' => '2018-11-11 08:05:39',
                'updated_at' => '2018-11-11 08:05:39',
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 84,
                'page_id' => 42,
                'lang_id' => 2,
                'text' => 'رسالة الكلية',
                'created_at' => '2018-11-11 08:05:39',
                'updated_at' => '2018-11-11 08:05:39',
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 85,
                'page_id' => 43,
                'lang_id' => 1,
                'text' => 'Faculty Members',
                'created_at' => '2018-11-11 08:15:58',
                'updated_at' => '2018-11-11 08:15:58',
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 86,
                'page_id' => 43,
                'lang_id' => 2,
                'text' => 'اعضاء الهيئة التدريسية',
                'created_at' => '2018-11-11 08:15:58',
                'updated_at' => '2018-11-11 08:15:58',
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 87,
                'page_id' => 44,
                'lang_id' => 1,
                'text' => 'Dean',
                'created_at' => '2018-12-04 13:34:43',
                'updated_at' => '2018-12-04 13:34:43',
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 88,
                'page_id' => 44,
                'lang_id' => 2,
                'text' => 'عميد',
                'created_at' => '2018-12-04 13:34:43',
                'updated_at' => '2018-12-04 13:34:43',
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 89,
                'page_id' => 45,
                'lang_id' => 1,
                'text' => 'Contact Us',
                'created_at' => '2018-12-08 08:49:59',
                'updated_at' => '2018-12-08 08:49:59',
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 90,
                'page_id' => 45,
                'lang_id' => 2,
                'text' => 'اتصل بنا',
                'created_at' => '2018-12-08 08:49:59',
                'updated_at' => '2018-12-08 08:49:59',
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 91,
                'page_id' => 46,
                'lang_id' => 1,
                'text' => 'Dean',
                'created_at' => '2018-12-09 09:08:24',
                'updated_at' => '2018-12-09 09:08:24',
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 92,
                'page_id' => 46,
                'lang_id' => 2,
                'text' => 'عميد الكلية',
                'created_at' => '2018-12-09 09:08:24',
                'updated_at' => '2018-12-09 09:08:24',
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 93,
                'page_id' => 47,
                'lang_id' => 1,
                'text' => 'College Message',
                'created_at' => '2018-12-09 09:09:35',
                'updated_at' => '2018-12-09 09:09:35',
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 94,
                'page_id' => 47,
                'lang_id' => 2,
                'text' => 'رسالة الكلية',
                'created_at' => '2018-12-09 09:09:35',
                'updated_at' => '2018-12-09 09:09:35',
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 95,
                'page_id' => 48,
                'lang_id' => 1,
                'text' => 'Degrees',
                'created_at' => '2018-12-09 09:11:07',
                'updated_at' => '2018-12-09 09:11:07',
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 96,
                'page_id' => 48,
                'lang_id' => 2,
                'text' => 'الاختصاصات',
                'created_at' => '2018-12-09 09:11:07',
                'updated_at' => '2018-12-09 09:11:07',
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 97,
                'page_id' => 49,
                'lang_id' => 1,
                'text' => 'Study Plan',
                'created_at' => '2018-12-09 09:13:12',
                'updated_at' => '2018-12-09 09:13:12',
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 98,
                'page_id' => 49,
                'lang_id' => 2,
                'text' => 'الخطة الدرسية',
                'created_at' => '2018-12-09 09:13:12',
                'updated_at' => '2018-12-09 09:13:12',
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 99,
                'page_id' => 50,
                'lang_id' => 1,
                'text' => 'Faculty Members',
                'created_at' => '2018-12-09 09:15:09',
                'updated_at' => '2018-12-09 09:15:09',
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 100,
                'page_id' => 50,
                'lang_id' => 2,
                'text' => 'أعضاء الهيئة التدريسية',
                'created_at' => '2018-12-09 09:15:09',
                'updated_at' => '2018-12-09 09:15:09',
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 101,
                'page_id' => 51,
                'lang_id' => 1,
                'text' => 'Contact Us',
                'created_at' => '2018-12-09 09:19:47',
                'updated_at' => '2018-12-09 09:19:47',
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 102,
                'page_id' => 51,
                'lang_id' => 2,
                'text' => 'اتصل بنا',
                'created_at' => '2018-12-09 09:19:47',
                'updated_at' => '2018-12-09 09:19:47',
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 103,
                'page_id' => 52,
                'lang_id' => 1,
                'text' => 'Dean',
                'created_at' => '2018-12-09 12:20:56',
                'updated_at' => '2018-12-09 12:20:56',
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 104,
                'page_id' => 52,
                'lang_id' => 2,
                'text' => 'عميد الكلية',
                'created_at' => '2018-12-09 12:20:56',
                'updated_at' => '2018-12-09 12:20:56',
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 105,
                'page_id' => 53,
                'lang_id' => 1,
                'text' => 'College Message',
                'created_at' => '2018-12-09 12:22:17',
                'updated_at' => '2018-12-09 12:22:17',
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 106,
                'page_id' => 53,
                'lang_id' => 2,
                'text' => 'رسالة الكلية',
                'created_at' => '2018-12-09 12:22:17',
                'updated_at' => '2018-12-09 12:22:17',
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 107,
                'page_id' => 54,
                'lang_id' => 1,
                'text' => 'Degrees',
                'created_at' => '2018-12-09 12:23:03',
                'updated_at' => '2018-12-09 12:23:03',
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 108,
                'page_id' => 54,
                'lang_id' => 2,
                'text' => 'الاختصاصات',
                'created_at' => '2018-12-09 12:23:03',
                'updated_at' => '2018-12-09 12:23:03',
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 109,
                'page_id' => 55,
                'lang_id' => 1,
                'text' => 'Study Plan',
                'created_at' => '2018-12-09 12:23:57',
                'updated_at' => '2018-12-09 12:23:57',
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 110,
                'page_id' => 55,
                'lang_id' => 2,
                'text' => 'الخطة الدرسية',
                'created_at' => '2018-12-09 12:23:57',
                'updated_at' => '2018-12-09 12:23:57',
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 111,
                'page_id' => 56,
                'lang_id' => 1,
                'text' => 'Faculty Members',
                'created_at' => '2018-12-09 12:25:03',
                'updated_at' => '2018-12-09 12:25:03',
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 112,
                'page_id' => 56,
                'lang_id' => 2,
                'text' => 'اعضاء الهيئة التدريسية',
                'created_at' => '2018-12-09 12:25:03',
                'updated_at' => '2018-12-09 12:25:03',
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 113,
                'page_id' => 57,
                'lang_id' => 1,
                'text' => 'Contact Us',
                'created_at' => '2018-12-09 12:25:48',
                'updated_at' => '2018-12-09 12:25:48',
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 114,
                'page_id' => 57,
                'lang_id' => 2,
                'text' => 'اتصل بنا',
                'created_at' => '2018-12-09 12:25:48',
                'updated_at' => '2018-12-09 12:25:48',
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 115,
                'page_id' => 58,
                'lang_id' => 1,
                'text' => 'Dean',
                'created_at' => '2018-12-09 13:23:54',
                'updated_at' => '2018-12-09 13:23:54',
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 116,
                'page_id' => 58,
                'lang_id' => 2,
                'text' => 'عميد الكلية',
                'created_at' => '2018-12-09 13:23:54',
                'updated_at' => '2018-12-09 13:23:54',
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 117,
                'page_id' => 59,
                'lang_id' => 1,
                'text' => 'College Message',
                'created_at' => '2018-12-09 13:24:48',
                'updated_at' => '2018-12-09 13:24:48',
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 118,
                'page_id' => 59,
                'lang_id' => 2,
                'text' => 'رسالة الكلية',
                'created_at' => '2018-12-09 13:24:48',
                'updated_at' => '2018-12-09 13:24:48',
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 119,
                'page_id' => 60,
                'lang_id' => 1,
                'text' => 'Degrees',
                'created_at' => '2018-12-09 13:25:43',
                'updated_at' => '2018-12-09 13:25:43',
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 120,
                'page_id' => 60,
                'lang_id' => 2,
                'text' => 'الاختصاصات',
                'created_at' => '2018-12-09 13:25:43',
                'updated_at' => '2018-12-09 13:25:43',
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 121,
                'page_id' => 61,
                'lang_id' => 1,
                'text' => 'Study Plan',
                'created_at' => '2018-12-09 13:26:36',
                'updated_at' => '2018-12-09 13:26:36',
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 122,
                'page_id' => 61,
                'lang_id' => 2,
                'text' => 'الخطة الدرسية',
                'created_at' => '2018-12-09 13:26:36',
                'updated_at' => '2018-12-09 13:26:36',
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 123,
                'page_id' => 62,
                'lang_id' => 1,
                'text' => 'Faculty Members',
                'created_at' => '2018-12-09 13:28:02',
                'updated_at' => '2018-12-09 13:28:02',
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 124,
                'page_id' => 62,
                'lang_id' => 2,
                'text' => 'اعضاء الهيئة التدريسية',
                'created_at' => '2018-12-09 13:28:02',
                'updated_at' => '2018-12-09 13:28:02',
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 125,
                'page_id' => 63,
                'lang_id' => 1,
                'text' => 'Contact Us',
                'created_at' => '2018-12-09 13:28:44',
                'updated_at' => '2018-12-09 13:28:44',
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 126,
                'page_id' => 63,
                'lang_id' => 2,
                'text' => 'اتصل بنا',
                'created_at' => '2018-12-09 13:28:44',
                'updated_at' => '2018-12-09 13:28:44',
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 127,
                'page_id' => 64,
                'lang_id' => 1,
                'text' => 'Dean',
                'created_at' => '2018-12-09 13:40:51',
                'updated_at' => '2018-12-09 13:40:51',
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'id' => 128,
                'page_id' => 64,
                'lang_id' => 2,
                'text' => 'عميد الكلية',
                'created_at' => '2018-12-09 13:40:51',
                'updated_at' => '2018-12-09 13:40:51',
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'id' => 129,
                'page_id' => 65,
                'lang_id' => 1,
                'text' => 'College Message',
                'created_at' => '2018-12-09 13:41:53',
                'updated_at' => '2018-12-09 13:41:53',
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'id' => 130,
                'page_id' => 65,
                'lang_id' => 2,
                'text' => 'رسالة الكلية',
                'created_at' => '2018-12-09 13:41:53',
                'updated_at' => '2018-12-09 13:41:53',
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'id' => 131,
                'page_id' => 66,
                'lang_id' => 1,
                'text' => 'Degrees',
                'created_at' => '2018-12-09 13:42:32',
                'updated_at' => '2018-12-09 13:42:32',
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'id' => 132,
                'page_id' => 66,
                'lang_id' => 2,
                'text' => 'الاختصاصات',
                'created_at' => '2018-12-09 13:42:32',
                'updated_at' => '2018-12-09 13:42:32',
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'id' => 133,
                'page_id' => 67,
                'lang_id' => 1,
                'text' => 'Study Plan',
                'created_at' => '2018-12-09 13:43:14',
                'updated_at' => '2018-12-09 13:43:14',
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'id' => 134,
                'page_id' => 67,
                'lang_id' => 2,
                'text' => 'الخطة الدرسية',
                'created_at' => '2018-12-09 13:43:14',
                'updated_at' => '2018-12-09 13:43:14',
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'id' => 135,
                'page_id' => 68,
                'lang_id' => 1,
                'text' => 'Faculty Members',
                'created_at' => '2018-12-09 13:44:16',
                'updated_at' => '2018-12-09 13:44:16',
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'id' => 136,
                'page_id' => 68,
                'lang_id' => 2,
                'text' => 'اعضاء الهيئة التدريسية',
                'created_at' => '2018-12-09 13:44:16',
                'updated_at' => '2018-12-09 13:44:16',
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'id' => 137,
                'page_id' => 69,
                'lang_id' => 1,
                'text' => 'Contact Us',
                'created_at' => '2018-12-09 13:45:19',
                'updated_at' => '2018-12-09 13:45:19',
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'id' => 138,
                'page_id' => 69,
                'lang_id' => 2,
                'text' => 'اتصل بنا',
                'created_at' => '2018-12-09 13:45:19',
                'updated_at' => '2018-12-09 13:45:19',
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'id' => 139,
                'page_id' => 70,
                'lang_id' => 1,
                'text' => 'Dean',
                'created_at' => '2018-12-10 07:37:06',
                'updated_at' => '2018-12-10 07:37:06',
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'id' => 140,
                'page_id' => 70,
                'lang_id' => 2,
                'text' => 'عميد الكلية',
                'created_at' => '2018-12-10 07:37:06',
                'updated_at' => '2018-12-10 07:37:06',
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'id' => 141,
                'page_id' => 71,
                'lang_id' => 1,
                'text' => 'College Message',
                'created_at' => '2018-12-10 07:37:55',
                'updated_at' => '2018-12-10 07:37:55',
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'id' => 142,
                'page_id' => 71,
                'lang_id' => 2,
                'text' => 'رسالة الكلية',
                'created_at' => '2018-12-10 07:37:55',
                'updated_at' => '2018-12-10 07:37:55',
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'id' => 143,
                'page_id' => 72,
                'lang_id' => 1,
                'text' => 'Degrees',
                'created_at' => '2018-12-10 07:38:46',
                'updated_at' => '2018-12-10 07:38:46',
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'id' => 144,
                'page_id' => 72,
                'lang_id' => 2,
                'text' => 'الاختصاصات',
                'created_at' => '2018-12-10 07:38:46',
                'updated_at' => '2018-12-10 07:38:46',
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'id' => 145,
                'page_id' => 73,
                'lang_id' => 1,
                'text' => 'Study Plan',
                'created_at' => '2018-12-10 07:53:44',
                'updated_at' => '2018-12-10 07:53:44',
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'id' => 146,
                'page_id' => 73,
                'lang_id' => 2,
                'text' => 'الخطة الدرسية',
                'created_at' => '2018-12-10 07:53:44',
                'updated_at' => '2018-12-10 07:53:44',
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'id' => 147,
                'page_id' => 74,
                'lang_id' => 1,
                'text' => 'Faculty Members',
                'created_at' => '2018-12-10 07:55:48',
                'updated_at' => '2018-12-10 07:55:48',
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'id' => 148,
                'page_id' => 74,
                'lang_id' => 2,
                'text' => 'اعضاء الهيئة التدريسية',
                'created_at' => '2018-12-10 07:55:48',
                'updated_at' => '2018-12-10 07:55:48',
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'id' => 149,
                'page_id' => 75,
                'lang_id' => 1,
                'text' => 'Contact Us',
                'created_at' => '2018-12-10 07:56:30',
                'updated_at' => '2018-12-10 07:56:30',
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'id' => 150,
                'page_id' => 75,
                'lang_id' => 2,
                'text' => 'اتصل بنا',
                'created_at' => '2018-12-10 07:56:30',
                'updated_at' => '2018-12-10 07:56:30',
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'id' => 151,
                'page_id' => 76,
                'lang_id' => 1,
                'text' => 'Dean',
                'created_at' => '2018-12-10 08:12:39',
                'updated_at' => '2018-12-10 08:12:39',
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'id' => 152,
                'page_id' => 76,
                'lang_id' => 2,
                'text' => 'عميد الكلية',
                'created_at' => '2018-12-10 08:12:39',
                'updated_at' => '2018-12-10 08:12:39',
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'id' => 153,
                'page_id' => 77,
                'lang_id' => 1,
                'text' => 'College Message',
                'created_at' => '2018-12-10 08:13:27',
                'updated_at' => '2018-12-10 08:13:27',
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'id' => 154,
                'page_id' => 77,
                'lang_id' => 2,
                'text' => 'رسالة الكلية',
                'created_at' => '2018-12-10 08:13:27',
                'updated_at' => '2018-12-10 08:13:27',
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'id' => 155,
                'page_id' => 78,
                'lang_id' => 1,
                'text' => 'Degrees',
                'created_at' => '2018-12-10 08:14:05',
                'updated_at' => '2018-12-10 08:14:05',
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'id' => 156,
                'page_id' => 78,
                'lang_id' => 2,
                'text' => 'الاختصاصات',
                'created_at' => '2018-12-10 08:14:05',
                'updated_at' => '2018-12-10 08:14:05',
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'id' => 157,
                'page_id' => 79,
                'lang_id' => 1,
                'text' => 'Study Plan',
                'created_at' => '2018-12-10 08:14:54',
                'updated_at' => '2018-12-10 08:14:54',
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'id' => 158,
                'page_id' => 79,
                'lang_id' => 2,
                'text' => 'الخطة الدرسية',
                'created_at' => '2018-12-10 08:14:54',
                'updated_at' => '2018-12-10 08:14:54',
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'id' => 159,
                'page_id' => 80,
                'lang_id' => 1,
                'text' => 'Faculty Members',
                'created_at' => '2018-12-10 08:16:31',
                'updated_at' => '2018-12-10 08:16:31',
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'id' => 160,
                'page_id' => 80,
                'lang_id' => 2,
                'text' => 'اعضاء الهيئة التدريسية',
                'created_at' => '2018-12-10 08:16:31',
                'updated_at' => '2018-12-10 08:16:31',
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'id' => 161,
                'page_id' => 81,
                'lang_id' => 1,
                'text' => 'Contact Us',
                'created_at' => '2018-12-10 08:17:24',
                'updated_at' => '2018-12-10 08:17:24',
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'id' => 162,
                'page_id' => 81,
                'lang_id' => 2,
                'text' => 'اتصل بنا',
                'created_at' => '2018-12-10 08:17:24',
                'updated_at' => '2018-12-10 08:17:24',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}