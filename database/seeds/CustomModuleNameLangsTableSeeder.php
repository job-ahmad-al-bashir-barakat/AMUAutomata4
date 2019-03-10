<?php

use Illuminate\Database\Seeder;

class CustomModuleNameLangsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('custom_module_name_langs')->delete();

        \DB::table('custom_module_name_langs')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'custom_module_id' => 1,
                    'lang_id' => 1,
                    'text' => 'Section Open',
                    'created_at' => '2017-10-16 08:12:49',
                    'updated_at' => '2017-10-16 08:12:49',
                    'deleted_at' => NULL,
                ),
            1 =>
                array (
                    'id' => 2,
                    'custom_module_id' => 1,
                    'lang_id' => 2,
                    'text' => 'Section Open',
                    'created_at' => '2017-10-16 08:12:49',
                    'updated_at' => '2017-10-16 08:12:49',
                    'deleted_at' => NULL,
                ),
            2 =>
                array (
                    'id' => 3,
                    'custom_module_id' => 2,
                    'lang_id' => 1,
                    'text' => 'Section Close',
                    'created_at' => '2017-10-16 08:13:57',
                    'updated_at' => '2017-10-16 08:13:57',
                    'deleted_at' => NULL,
                ),
            3 =>
                array (
                    'id' => 4,
                    'custom_module_id' => 2,
                    'lang_id' => 2,
                    'text' => 'Section Close',
                    'created_at' => '2017-10-16 08:13:57',
                    'updated_at' => '2017-10-16 08:13:57',
                    'deleted_at' => NULL,
                ),
            4 =>
                array (
                    'id' => 5,
                    'custom_module_id' => 3,
                    'lang_id' => 1,
                    'text' => 'Fluid Section Open',
                    'created_at' => '2017-10-16 08:15:19',
                    'updated_at' => '2017-10-16 08:15:19',
                    'deleted_at' => NULL,
                ),
            5 =>
                array (
                    'id' => 6,
                    'custom_module_id' => 3,
                    'lang_id' => 2,
                    'text' => 'Fluid Section Open',
                    'created_at' => '2017-10-16 08:15:19',
                    'updated_at' => '2017-10-16 08:15:19',
                    'deleted_at' => NULL,
                ),
            6 =>
                array (
                    'id' => 7,
                    'custom_module_id' => 4,
                    'lang_id' => 1,
                    'text' => 'Section Intersect Top',
                    'created_at' => '2017-10-16 08:16:10',
                    'updated_at' => '2017-10-16 08:16:10',
                    'deleted_at' => NULL,
                ),
            7 =>
                array (
                    'id' => 8,
                    'custom_module_id' => 4,
                    'lang_id' => 2,
                    'text' => 'Section Intersect Top',
                    'created_at' => '2017-10-16 08:16:10',
                    'updated_at' => '2017-10-16 08:16:10',
                    'deleted_at' => NULL,
                ),
            8 =>
                array (
                    'id' => 9,
                    'custom_module_id' => 5,
                    'lang_id' => 1,
                    'text' => 'Intersect Top Close',
                    'created_at' => '2017-10-16 08:17:13',
                    'updated_at' => '2017-10-16 08:17:13',
                    'deleted_at' => NULL,
                ),
            9 =>
                array (
                    'id' => 10,
                    'custom_module_id' => 5,
                    'lang_id' => 2,
                    'text' => 'Intersect Top Close',
                    'created_at' => '2017-10-16 08:17:13',
                    'updated_at' => '2017-10-16 08:17:13',
                    'deleted_at' => NULL,
                ),
            10 =>
                array (
                    'id' => 11,
                    'custom_module_id' => 6,
                    'lang_id' => 1,
                    'text' => 'Rector1',
                    'created_at' => '2017-10-16 08:28:30',
                    'updated_at' => '2018-10-14 17:24:57',
                    'deleted_at' => NULL,
                ),
            11 =>
                array (
                    'id' => 12,
                    'custom_module_id' => 6,
                    'lang_id' => 2,
                    'text' => 'قالب شرائح رئيس الجامعة1',
                    'created_at' => '2017-10-16 08:28:30',
                    'updated_at' => '2018-10-14 17:24:57',
                    'deleted_at' => NULL,
                ),
            12 =>
                array (
                    'id' => 13,
                    'custom_module_id' => 7,
                    'lang_id' => 1,
                    'text' => 'Faculties Module',
                    'created_at' => '2017-10-16 08:29:16',
                    'updated_at' => '2018-10-03 05:34:20',
                    'deleted_at' => NULL,
                ),
            13 =>
                array (
                    'id' => 14,
                    'custom_module_id' => 7,
                    'lang_id' => 2,
                    'text' => 'كتل الكليات',
                    'created_at' => '2017-10-16 08:29:16',
                    'updated_at' => '2018-10-15 03:38:41',
                    'deleted_at' => NULL,
                ),
            14 =>
                array (
                    'id' => 15,
                    'custom_module_id' => 8,
                    'lang_id' => 1,
                    'text' => 'Contact us',
                    'created_at' => '2017-10-16 09:11:04',
                    'updated_at' => '2019-01-06 13:23:35',
                    'deleted_at' => NULL,
                ),
            15 =>
                array (
                    'id' => 16,
                    'custom_module_id' => 8,
                    'lang_id' => 2,
                    'text' => 'قالب اتصل بنا معلوماتية',
                    'created_at' => '2017-10-16 09:11:04',
                    'updated_at' => '2019-01-06 13:23:35',
                    'deleted_at' => NULL,
                ),
            16 =>
                array (
                    'id' => 21,
                    'custom_module_id' => 11,
                    'lang_id' => 1,
                    'text' => 'Contact Form Text Cards',
                    'created_at' => '2017-10-17 10:22:01',
                    'updated_at' => '2017-10-17 10:22:01',
                    'deleted_at' => NULL,
                ),
            17 =>
                array (
                    'id' => 22,
                    'custom_module_id' => 11,
                    'lang_id' => 2,
                    'text' => 'Contact Form Text Cards',
                    'created_at' => '2017-10-17 10:22:01',
                    'updated_at' => '2017-10-17 10:22:01',
                    'deleted_at' => NULL,
                ),
            18 =>
                array (
                    'id' => 23,
                    'custom_module_id' => 12,
                    'lang_id' => 1,
                    'text' => 'Home Short Info',
                    'created_at' => '2017-10-23 09:01:01',
                    'updated_at' => '2017-10-23 09:01:01',
                    'deleted_at' => NULL,
                ),
            19 =>
                array (
                    'id' => 24,
                    'custom_module_id' => 12,
                    'lang_id' => 2,
                    'text' => 'Home Short Info',
                    'created_at' => '2017-10-23 09:01:01',
                    'updated_at' => '2017-10-23 09:01:01',
                    'deleted_at' => NULL,
                ),
            20 =>
                array (
                    'id' => 25,
                    'custom_module_id' => 13,
                    'lang_id' => 1,
                    'text' => 'home page courses',
                    'created_at' => '2017-10-25 07:18:21',
                    'updated_at' => '2017-10-25 07:18:21',
                    'deleted_at' => NULL,
                ),
            21 =>
                array (
                    'id' => 26,
                    'custom_module_id' => 13,
                    'lang_id' => 2,
                    'text' => 'home page courses',
                    'created_at' => '2017-10-25 07:18:21',
                    'updated_at' => '2017-10-25 07:18:21',
                    'deleted_at' => NULL,
                ),
            22 =>
                array (
                    'id' => 27,
                    'custom_module_id' => 14,
                    'lang_id' => 1,
                    'text' => 'Home Vertical Slider',
                    'created_at' => '2017-10-25 10:27:30',
                    'updated_at' => '2017-10-25 10:27:30',
                    'deleted_at' => NULL,
                ),
            23 =>
                array (
                    'id' => 28,
                    'custom_module_id' => 14,
                    'lang_id' => 2,
                    'text' => 'Home Vertical Slider',
                    'created_at' => '2017-10-25 10:27:30',
                    'updated_at' => '2017-10-25 10:27:30',
                    'deleted_at' => NULL,
                ),
            24 =>
                array (
                    'id' => 29,
                    'custom_module_id' => 15,
                    'lang_id' => 1,
                    'text' => 'Small Gallery',
                    'created_at' => '2017-10-26 23:20:04',
                    'updated_at' => '2017-10-26 23:20:04',
                    'deleted_at' => NULL,
                ),
            25 =>
                array (
                    'id' => 30,
                    'custom_module_id' => 15,
                    'lang_id' => 2,
                    'text' => 'Small Gallery',
                    'created_at' => '2017-10-26 23:20:05',
                    'updated_at' => '2017-10-26 23:20:05',
                    'deleted_at' => NULL,
                ),
            26 =>
                array (
                    'id' => 31,
                    'custom_module_id' => 16,
                    'lang_id' => 1,
                    'text' => 'Services',
                    'created_at' => '2017-10-28 23:07:31',
                    'updated_at' => '2018-10-03 03:55:25',
                    'deleted_at' => NULL,
                ),
            27 =>
                array (
                    'id' => 32,
                    'custom_module_id' => 16,
                    'lang_id' => 2,
                    'text' => 'الإعلانات والخدمات',
                    'created_at' => '2017-10-28 23:07:31',
                    'updated_at' => '2018-10-03 03:55:27',
                    'deleted_at' => NULL,
                ),
            28 =>
                array (
                    'id' => 33,
                    'custom_module_id' => 17,
                    'lang_id' => 1,
                    'text' => 'Instructors',
                    'created_at' => '2017-10-29 14:00:28',
                    'updated_at' => '2017-10-29 14:00:28',
                    'deleted_at' => NULL,
                ),
            29 =>
                array (
                    'id' => 34,
                    'custom_module_id' => 17,
                    'lang_id' => 2,
                    'text' => 'المدرسون',
                    'created_at' => '2017-10-29 14:00:28',
                    'updated_at' => '2017-10-29 14:00:28',
                    'deleted_at' => NULL,
                ),
            30 =>
                array (
                    'id' => 35,
                    'custom_module_id' => 18,
                    'lang_id' => 1,
                    'text' => 'University Message',
                    'created_at' => '2017-10-31 11:27:47',
                    'updated_at' => '2017-10-31 11:27:47',
                    'deleted_at' => NULL,
                ),
            31 =>
                array (
                    'id' => 36,
                    'custom_module_id' => 18,
                    'lang_id' => 2,
                    'text' => 'رسالة الجامعة',
                    'created_at' => '2017-10-31 11:27:47',
                    'updated_at' => '2017-10-31 11:27:47',
                    'deleted_at' => NULL,
                ),
            32 =>
                array (
                    'id' => 37,
                    'custom_module_id' => 19,
                    'lang_id' => 1,
                    'text' => 'University Council',
                    'created_at' => '2017-10-31 13:56:17',
                    'updated_at' => '2017-10-31 13:56:17',
                    'deleted_at' => NULL,
                ),
            33 =>
                array (
                    'id' => 38,
                    'custom_module_id' => 19,
                    'lang_id' => 2,
                    'text' => 'مجلس الجامعة',
                    'created_at' => '2017-10-31 13:56:17',
                    'updated_at' => '2017-10-31 13:56:17',
                    'deleted_at' => NULL,
                ),
            34 =>
                array (
                    'id' => 39,
                    'custom_module_id' => 20,
                    'lang_id' => 1,
                    'text' => 'OUR FEATURES',
                    'created_at' => '2017-10-31 14:06:14',
                    'updated_at' => '2017-10-31 14:06:14',
                    'deleted_at' => NULL,
                ),
            35 =>
                array (
                    'id' => 40,
                    'custom_module_id' => 20,
                    'lang_id' => 2,
                    'text' => 'OUR FEATURES',
                    'created_at' => '2017-10-31 14:06:14',
                    'updated_at' => '2017-10-31 14:06:14',
                    'deleted_at' => NULL,
                ),
            36 =>
                array (
                    'id' => 41,
                    'custom_module_id' => 21,
                    'lang_id' => 1,
                    'text' => 'Trusted Council',
                    'created_at' => '2017-11-02 23:07:56',
                    'updated_at' => '2017-11-02 23:07:56',
                    'deleted_at' => NULL,
                ),
            37 =>
                array (
                    'id' => 42,
                    'custom_module_id' => 21,
                    'lang_id' => 2,
                    'text' => 'مجلس الامناء',
                    'created_at' => '2017-11-02 23:07:56',
                    'updated_at' => '2017-11-02 23:07:56',
                    'deleted_at' => NULL,
                ),
            38 =>
                array (
                    'id' => 43,
                    'custom_module_id' => 22,
                    'lang_id' => 1,
                    'text' => 'university partner',
                    'created_at' => '2017-11-05 13:49:54',
                    'updated_at' => '2017-11-05 13:49:54',
                    'deleted_at' => NULL,
                ),
            39 =>
                array (
                    'id' => 44,
                    'custom_module_id' => 22,
                    'lang_id' => 2,
                    'text' => 'شركاء الجامعة',
                    'created_at' => '2017-11-05 13:49:54',
                    'updated_at' => '2017-11-05 13:49:54',
                    'deleted_at' => NULL,
                ),
            40 =>
                array (
                    'id' => 45,
                    'custom_module_id' => 23,
                    'lang_id' => 1,
                    'text' => 'Person',
                    'created_at' => '2017-11-15 13:04:08',
                    'updated_at' => '2017-11-15 13:04:08',
                    'deleted_at' => NULL,
                ),
            41 =>
                array (
                    'id' => 46,
                    'custom_module_id' => 23,
                    'lang_id' => 2,
                    'text' => 'شخص',
                    'created_at' => '2017-11-15 13:04:08',
                    'updated_at' => '2017-11-15 13:04:08',
                    'deleted_at' => NULL,
                ),
            42 =>
                array (
                    'id' => 49,
                    'custom_module_id' => 25,
                    'lang_id' => 1,
                    'text' => 'Degrees Table',
                    'created_at' => '2017-11-17 12:52:26',
                    'updated_at' => '2017-11-17 12:52:26',
                    'deleted_at' => NULL,
                ),
            43 =>
                array (
                    'id' => 50,
                    'custom_module_id' => 25,
                    'lang_id' => 2,
                    'text' => 'جدول الاختصاصات',
                    'created_at' => '2017-11-17 12:52:26',
                    'updated_at' => '2017-11-17 12:52:26',
                    'deleted_at' => NULL,
                ),
            44 =>
                array (
                    'id' => 51,
                    'custom_module_id' => 26,
                    'lang_id' => 1,
                    'text' => 'Courses Table',
                    'created_at' => '2017-11-22 12:53:28',
                    'updated_at' => '2017-11-22 12:53:28',
                    'deleted_at' => NULL,
                ),
            45 =>
                array (
                    'id' => 52,
                    'custom_module_id' => 26,
                    'lang_id' => 2,
                    'text' => 'جدول المقررات',
                    'created_at' => '2017-11-22 12:53:28',
                    'updated_at' => '2017-11-22 12:53:28',
                    'deleted_at' => NULL,
                ),
            46 =>
                array (
                    'id' => 53,
                    'custom_module_id' => 27,
                    'lang_id' => 1,
                    'text' => 'Study Plan',
                    'created_at' => '2017-12-01 11:52:01',
                    'updated_at' => '2017-12-01 11:52:01',
                    'deleted_at' => NULL,
                ),
            47 =>
                array (
                    'id' => 54,
                    'custom_module_id' => 27,
                    'lang_id' => 2,
                    'text' => 'الخطة الدرسية',
                    'created_at' => '2017-12-01 11:52:01',
                    'updated_at' => '2017-12-01 11:52:01',
                    'deleted_at' => NULL,
                ),
            48 =>
                array (
                    'id' => 55,
                    'custom_module_id' => 28,
                    'lang_id' => 1,
                    'text' => 'Faculty Instructors for law',
                    'created_at' => '2017-12-09 11:46:13',
                    'updated_at' => '2018-12-29 07:21:20',
                    'deleted_at' => NULL,
                ),
            49 =>
                array (
                    'id' => 56,
                    'custom_module_id' => 28,
                    'lang_id' => 2,
                    'text' => 'اعضاء ااهيئة التدريسية لكلية الحقوق',
                    'created_at' => '2017-12-09 11:46:13',
                    'updated_at' => '2018-12-29 07:21:20',
                    'deleted_at' => NULL,
                ),
            50 =>
                array (
                    'id' => 61,
                    'custom_module_id' => 31,
                    'lang_id' => 1,
                    'text' => 'Galleries',
                    'created_at' => '2018-04-18 08:26:36',
                    'updated_at' => '2018-04-18 08:26:36',
                    'deleted_at' => NULL,
                ),
            51 =>
                array (
                    'id' => 62,
                    'custom_module_id' => 31,
                    'lang_id' => 2,
                    'text' => 'معرض',
                    'created_at' => '2018-04-18 08:26:36',
                    'updated_at' => '2018-04-18 08:26:36',
                    'deleted_at' => NULL,
                ),
            52 =>
                array (
                    'id' => 63,
                    'custom_module_id' => 32,
                    'lang_id' => 1,
                    'text' => 'Courses list',
                    'created_at' => '2018-04-18 08:32:32',
                    'updated_at' => '2018-04-18 08:32:32',
                    'deleted_at' => NULL,
                ),
            53 =>
                array (
                    'id' => 64,
                    'custom_module_id' => 32,
                    'lang_id' => 2,
                    'text' => 'قائمة المقررات',
                    'created_at' => '2018-04-18 08:32:32',
                    'updated_at' => '2018-04-18 08:32:32',
                    'deleted_at' => NULL,
                ),
            54 =>
                array (
                    'id' => 65,
                    'custom_module_id' => 33,
                    'lang_id' => 1,
                    'text' => 'University Location',
                    'created_at' => '2018-05-17 20:26:30',
                    'updated_at' => '2018-05-17 20:26:30',
                    'deleted_at' => NULL,
                ),
            55 =>
                array (
                    'id' => 66,
                    'custom_module_id' => 33,
                    'lang_id' => 2,
                    'text' => 'موقع الجامعة',
                    'created_at' => '2018-05-17 20:26:30',
                    'updated_at' => '2018-05-17 20:26:30',
                    'deleted_at' => NULL,
                ),
            56 =>
                array (
                    'id' => 67,
                    'custom_module_id' => 34,
                    'lang_id' => 1,
                    'text' => 'C#',
                    'created_at' => '2018-05-20 06:38:53',
                    'updated_at' => '2018-05-20 06:38:53',
                    'deleted_at' => NULL,
                ),
            57 =>
                array (
                    'id' => 68,
                    'custom_module_id' => 34,
                    'lang_id' => 2,
                    'text' => 'C#',
                    'created_at' => '2018-05-20 06:38:53',
                    'updated_at' => '2018-05-20 06:38:53',
                    'deleted_at' => NULL,
                ),
            58 =>
                array (
                    'id' => 69,
                    'custom_module_id' => 35,
                    'lang_id' => 1,
                    'text' => 'Labs List',
                    'created_at' => '2018-05-26 06:07:54',
                    'updated_at' => '2018-05-26 06:07:54',
                    'deleted_at' => NULL,
                ),
            59 =>
                array (
                    'id' => 70,
                    'custom_module_id' => 35,
                    'lang_id' => 2,
                    'text' => 'قائمة المخابر',
                    'created_at' => '2018-05-26 06:07:55',
                    'updated_at' => '2018-05-26 06:07:55',
                    'deleted_at' => NULL,
                ),
            60 =>
                array (
                    'id' => 71,
                    'custom_module_id' => 36,
                    'lang_id' => 1,
                    'text' => 'Lab Page',
                    'created_at' => '2018-05-26 07:18:47',
                    'updated_at' => '2018-05-26 07:18:47',
                    'deleted_at' => NULL,
                ),
            61 =>
                array (
                    'id' => 72,
                    'custom_module_id' => 36,
                    'lang_id' => 2,
                    'text' => 'صفحة المخبر',
                    'created_at' => '2018-05-26 07:18:47',
                    'updated_at' => '2018-05-26 07:18:47',
                    'deleted_at' => NULL,
                ),
            62 =>
                array (
                    'id' => 73,
                    'custom_module_id' => 37,
                    'lang_id' => 1,
                    'text' => 'Offices List',
                    'created_at' => '2018-05-27 06:38:30',
                    'updated_at' => '2018-05-27 06:55:22',
                    'deleted_at' => NULL,
                ),
            63 =>
                array (
                    'id' => 74,
                    'custom_module_id' => 37,
                    'lang_id' => 2,
                    'text' => 'قائمة المكاتب',
                    'created_at' => '2018-05-27 06:38:30',
                    'updated_at' => '2018-05-27 06:38:30',
                    'deleted_at' => NULL,
                ),
            64 =>
                array (
                    'id' => 75,
                    'custom_module_id' => 38,
                    'lang_id' => 1,
                    'text' => 'News List',
                    'created_at' => '2018-05-29 07:17:45',
                    'updated_at' => '2018-05-29 07:17:45',
                    'deleted_at' => NULL,
                ),
            65 =>
                array (
                    'id' => 76,
                    'custom_module_id' => 38,
                    'lang_id' => 2,
                    'text' => 'قائمة الاخبار',
                    'created_at' => '2018-05-29 07:17:45',
                    'updated_at' => '2018-10-15 05:56:50',
                    'deleted_at' => NULL,
                ),
            66 =>
                array (
                    'id' => 77,
                    'custom_module_id' => 39,
                    'lang_id' => 1,
                    'text' => 'News Page',
                    'created_at' => '2018-05-31 21:54:09',
                    'updated_at' => '2018-05-31 21:54:09',
                    'deleted_at' => NULL,
                ),
            67 =>
                array (
                    'id' => 78,
                    'custom_module_id' => 39,
                    'lang_id' => 2,
                    'text' => 'صفحة الخبر',
                    'created_at' => '2018-05-31 21:54:10',
                    'updated_at' => '2018-05-31 21:54:10',
                    'deleted_at' => NULL,
                ),
            68 =>
                array (
                    'id' => 79,
                    'custom_module_id' => 40,
                    'lang_id' => 1,
                    'text' => 'University Rector',
                    'created_at' => '2018-09-26 14:24:30',
                    'updated_at' => '2018-09-26 14:24:30',
                    'deleted_at' => NULL,
                ),
            69 =>
                array (
                    'id' => 80,
                    'custom_module_id' => 40,
                    'lang_id' => 2,
                    'text' => 'رسالة رئيس الجامعة',
                    'created_at' => '2018-09-26 14:24:30',
                    'updated_at' => '2018-09-26 14:24:30',
                    'deleted_at' => NULL,
                ),
            70 =>
                array (
                    'id' => 81,
                    'custom_module_id' => 41,
                    'lang_id' => 1,
                    'text' => 'Map',
                    'created_at' => '2018-09-26 15:32:34',
                    'updated_at' => '2018-09-26 15:32:34',
                    'deleted_at' => NULL,
                ),
            71 =>
                array (
                    'id' => 82,
                    'custom_module_id' => 41,
                    'lang_id' => 2,
                    'text' => 'خريطة',
                    'created_at' => '2018-09-26 15:32:34',
                    'updated_at' => '2018-09-26 15:32:34',
                    'deleted_at' => NULL,
                ),
            72 =>
                array (
                    'id' => 83,
                    'custom_module_id' => 42,
                    'lang_id' => 1,
                    'text' => 'Mada',
                    'created_at' => '2018-10-03 02:37:08',
                    'updated_at' => '2018-10-22 03:22:10',
                    'deleted_at' => NULL,
                ),
            73 =>
                array (
                    'id' => 84,
                    'custom_module_id' => 42,
                    'lang_id' => 2,
                    'text' => 'محتوى مقرر',
                    'created_at' => '2018-10-03 02:37:08',
                    'updated_at' => '2018-10-22 03:22:10',
                    'deleted_at' => NULL,
                ),
            74 =>
                array (
                    'id' => 85,
                    'custom_module_id' => 43,
                    'lang_id' => 1,
                    'text' => 'informayion Slider',
                    'created_at' => '2018-10-03 02:37:11',
                    'updated_at' => '2018-12-10 09:05:22',
                    'deleted_at' => NULL,
                ),
            75 =>
                array (
                    'id' => 86,
                    'custom_module_id' => 43,
                    'lang_id' => 2,
                    'text' => 'قالب شرائح كلية المعلوماتية',
                    'created_at' => '2018-10-03 02:37:11',
                    'updated_at' => '2018-12-10 09:05:22',
                    'deleted_at' => NULL,
                ),
            76 =>
                array (
                    'id' => 87,
                    'custom_module_id' => 44,
                    'lang_id' => 1,
                    'text' => 'Content contact us',
                    'created_at' => '2018-10-03 02:37:24',
                    'updated_at' => '2018-11-11 09:55:44',
                    'deleted_at' => NULL,
                ),
            77 =>
                array (
                    'id' => 88,
                    'custom_module_id' => 44,
                    'lang_id' => 2,
                    'text' => 'محتوى تواصل معنا',
                    'created_at' => '2018-10-03 02:37:24',
                    'updated_at' => '2018-11-11 09:55:44',
                    'deleted_at' => NULL,
                ),
            78 =>
                array (
                    'id' => 89,
                    'custom_module_id' => 45,
                    'lang_id' => 1,
                    'text' => 'About University',
                    'created_at' => '2018-10-03 02:43:32',
                    'updated_at' => '2018-10-03 02:43:32',
                    'deleted_at' => NULL,
                ),
            79 =>
                array (
                    'id' => 90,
                    'custom_module_id' => 45,
                    'lang_id' => 2,
                    'text' => 'نص حول الجامعة',
                    'created_at' => '2018-10-03 02:43:32',
                    'updated_at' => '2018-10-03 02:43:32',
                    'deleted_at' => NULL,
                ),
            80 =>
                array (
                    'id' => 91,
                    'custom_module_id' => 46,
                    'lang_id' => 1,
                    'text' => 'Activities',
                    'created_at' => '2018-10-03 03:34:58',
                    'updated_at' => '2018-10-14 17:17:20',
                    'deleted_at' => NULL,
                ),
            81 =>
                array (
                    'id' => 92,
                    'custom_module_id' => 46,
                    'lang_id' => 2,
                    'text' => 'فعاليات ومناسبات',
                    'created_at' => '2018-10-03 03:34:58',
                    'updated_at' => '2018-10-03 03:47:45',
                    'deleted_at' => NULL,
                ),
            82 =>
                array (
                    'id' => 93,
                    'custom_module_id' => 47,
                    'lang_id' => 1,
                    'text' => 'Text Card',
                    'created_at' => '2018-10-03 05:44:37',
                    'updated_at' => '2018-10-03 05:44:37',
                    'deleted_at' => NULL,
                ),
            83 =>
                array (
                    'id' => 94,
                    'custom_module_id' => 47,
                    'lang_id' => 2,
                    'text' => 'بطاقة نص',
                    'created_at' => '2018-10-03 05:44:37',
                    'updated_at' => '2018-10-03 05:44:37',
                    'deleted_at' => NULL,
                ),
            84 =>
                array (
                    'id' => 95,
                    'custom_module_id' => 48,
                    'lang_id' => 1,
                    'text' => 'asteps',
                    'created_at' => '2018-10-04 02:49:46',
                    'updated_at' => '2018-10-04 02:49:46',
                    'deleted_at' => NULL,
                ),
            85 =>
                array (
                    'id' => 96,
                    'custom_module_id' => 48,
                    'lang_id' => 2,
                    'text' => 'خطوات جديدة',
                    'created_at' => '2018-10-04 02:49:46',
                    'updated_at' => '2018-10-04 02:49:46',
                    'deleted_at' => NULL,
                ),
            86 =>
                array (
                    'id' => 97,
                    'custom_module_id' => 49,
                    'lang_id' => 1,
                    'text' => 'Gallery',
                    'created_at' => '2018-10-04 02:54:51',
                    'updated_at' => '2018-10-04 02:54:51',
                    'deleted_at' => NULL,
                ),
            87 =>
                array (
                    'id' => 98,
                    'custom_module_id' => 49,
                    'lang_id' => 2,
                    'text' => 'معرض صور جديد',
                    'created_at' => '2018-10-04 02:54:51',
                    'updated_at' => '2018-10-04 02:54:51',
                    'deleted_at' => NULL,
                ),
            88 =>
                array (
                    'id' => 99,
                    'custom_module_id' => 50,
                    'lang_id' => 1,
                    'text' => 'Speech of the University President',
                    'created_at' => '2018-10-04 03:12:03',
                    'updated_at' => '2018-10-21 07:13:34',
                    'deleted_at' => NULL,
                ),
            89 =>
                array (
                    'id' => 100,
                    'custom_module_id' => 50,
                    'lang_id' => 2,
                    'text' => 'كلمة رئيس الجامعة',
                    'created_at' => '2018-10-04 03:12:03',
                    'updated_at' => '2018-10-21 07:13:34',
                    'deleted_at' => NULL,
                ),
            90 =>
                array (
                    'id' => 101,
                    'custom_module_id' => 51,
                    'lang_id' => 1,
                    'text' => 'law slider',
                    'created_at' => '2018-10-04 04:09:18',
                    'updated_at' => '2018-12-10 09:17:04',
                    'deleted_at' => NULL,
                ),
            91 =>
                array (
                    'id' => 102,
                    'custom_module_id' => 51,
                    'lang_id' => 2,
                    'text' => 'قالب شرائح كلية الحقوق',
                    'created_at' => '2018-10-04 04:09:18',
                    'updated_at' => '2018-12-10 09:17:04',
                    'deleted_at' => NULL,
                ),
            92 =>
                array (
                    'id' => 103,
                    'custom_module_id' => 52,
                    'lang_id' => 1,
                    'text' => 'Administrative Sciences slider',
                    'created_at' => '2018-10-06 03:56:22',
                    'updated_at' => '2018-12-10 09:29:18',
                    'deleted_at' => NULL,
                ),
            93 =>
                array (
                    'id' => 104,
                    'custom_module_id' => 52,
                    'lang_id' => 2,
                    'text' => 'قالب شرائح كلية العلوم الادارية',
                    'created_at' => '2018-10-06 03:56:22',
                    'updated_at' => '2018-12-10 09:29:18',
                    'deleted_at' => NULL,
                ),
            94 =>
                array (
                    'id' => 105,
                    'custom_module_id' => 53,
                    'lang_id' => 1,
                    'text' => 'International relations and diplomacy slider',
                    'created_at' => '2018-10-06 03:59:30',
                    'updated_at' => '2018-12-10 10:03:45',
                    'deleted_at' => NULL,
                ),
            95 =>
                array (
                    'id' => 106,
                    'custom_module_id' => 53,
                    'lang_id' => 2,
                    'text' => 'قالب شرائح كلية العلوم الدولية والدبلوماسية',
                    'created_at' => '2018-10-06 03:59:30',
                    'updated_at' => '2018-12-10 10:03:45',
                    'deleted_at' => NULL,
                ),
            96 =>
                array (
                    'id' => 107,
                    'custom_module_id' => 54,
                    'lang_id' => 1,
                    'text' => 'C-Mess-ITE',
                    'created_at' => '2018-10-06 04:08:24',
                    'updated_at' => '2018-12-11 12:22:46',
                    'deleted_at' => NULL,
                ),
            97 =>
                array (
                    'id' => 108,
                    'custom_module_id' => 54,
                    'lang_id' => 2,
                    'text' => 'قالب رسالة كلية الهندسة المعلوماتية',
                    'created_at' => '2018-10-06 04:08:24',
                    'updated_at' => '2018-12-11 12:22:46',
                    'deleted_at' => NULL,
                ),
            98 =>
                array (
                    'id' => 109,
                    'custom_module_id' => 55,
                    'lang_id' => 1,
                    'text' => 'dentistry SLIDER',
                    'created_at' => '2018-10-06 04:18:37',
                    'updated_at' => '2018-12-10 10:14:04',
                    'deleted_at' => NULL,
                ),
            99 =>
                array (
                    'id' => 110,
                    'custom_module_id' => 55,
                    'lang_id' => 2,
                    'text' => 'قالب شرائح طب اسنان',
                    'created_at' => '2018-10-06 04:18:37',
                    'updated_at' => '2018-12-10 10:14:04',
                    'deleted_at' => NULL,
                ),
            100 =>
                array (
                    'id' => 111,
                    'custom_module_id' => 56,
                    'lang_id' => 1,
                    'text' => 'Medicine slider',
                    'created_at' => '2018-10-06 04:39:39',
                    'updated_at' => '2018-12-10 10:37:31',
                    'deleted_at' => NULL,
                ),
            101 =>
                array (
                    'id' => 112,
                    'custom_module_id' => 56,
                    'lang_id' => 2,
                    'text' => 'قالب شرائح كلية الطب البشري',
                    'created_at' => '2018-10-06 04:39:39',
                    'updated_at' => '2018-12-10 10:37:31',
                    'deleted_at' => NULL,
                ),
            102 =>
                array (
                    'id' => 113,
                    'custom_module_id' => 57,
                    'lang_id' => 1,
                    'text' => 'كتل المعلوماتية',
                    'created_at' => '2018-10-06 05:05:09',
                    'updated_at' => '2018-10-06 05:05:09',
                    'deleted_at' => NULL,
                ),
            103 =>
                array (
                    'id' => 114,
                    'custom_module_id' => 57,
                    'lang_id' => 2,
                    'text' => 'كتل المعلوماتية',
                    'created_at' => '2018-10-06 05:05:09',
                    'updated_at' => '2018-10-06 05:05:09',
                    'deleted_at' => NULL,
                ),
            104 =>
                array (
                    'id' => 115,
                    'custom_module_id' => 58,
                    'lang_id' => 1,
                    'text' => 'block of midical',
                    'created_at' => '2018-10-06 05:05:21',
                    'updated_at' => '2018-11-06 06:12:06',
                    'deleted_at' => NULL,
                ),
            105 =>
                array (
                    'id' => 116,
                    'custom_module_id' => 58,
                    'lang_id' => 2,
                    'text' => 'كتل الطب',
                    'created_at' => '2018-10-06 05:05:21',
                    'updated_at' => '2018-11-06 06:12:06',
                    'deleted_at' => NULL,
                ),
            106 =>
                array (
                    'id' => 117,
                    'custom_module_id' => 59,
                    'lang_id' => 1,
                    'text' => 'Pharmacy slider',
                    'created_at' => '2018-10-10 01:11:06',
                    'updated_at' => '2018-12-10 10:41:37',
                    'deleted_at' => NULL,
                ),
            107 =>
                array (
                    'id' => 118,
                    'custom_module_id' => 59,
                    'lang_id' => 2,
                    'text' => 'قالب شرائح كلية الصيدلة',
                    'created_at' => '2018-10-10 01:11:06',
                    'updated_at' => '2018-12-10 10:41:37',
                    'deleted_at' => NULL,
                ),
            108 =>
                array (
                    'id' => 119,
                    'custom_module_id' => 60,
                    'lang_id' => 1,
                    'text' => 'Teaching staff',
                    'created_at' => '2018-10-10 01:13:47',
                    'updated_at' => '2018-10-10 01:13:47',
                    'deleted_at' => NULL,
                ),
            109 =>
                array (
                    'id' => 120,
                    'custom_module_id' => 60,
                    'lang_id' => 2,
                    'text' => 'الكادر التدريسي',
                    'created_at' => '2018-10-10 01:13:47',
                    'updated_at' => '2018-10-10 01:13:47',
                    'deleted_at' => NULL,
                ),
            110 =>
                array (
                    'id' => 121,
                    'custom_module_id' => 61,
                    'lang_id' => 1,
                    'text' => 'list of books',
                    'created_at' => '2018-10-10 01:21:11',
                    'updated_at' => '2018-11-25 08:28:06',
                    'deleted_at' => NULL,
                ),
            111 =>
                array (
                    'id' => 122,
                    'custom_module_id' => 61,
                    'lang_id' => 2,
                    'text' => 'قائمة الكتب',
                    'created_at' => '2018-10-10 01:21:11',
                    'updated_at' => '2018-11-25 08:28:06',
                    'deleted_at' => NULL,
                ),
            112 =>
                array (
                    'id' => 123,
                    'custom_module_id' => 62,
                    'lang_id' => 1,
                    'text' => 'C-Mess-Law',
                    'created_at' => '2018-10-10 05:44:21',
                    'updated_at' => '2018-12-11 13:04:25',
                    'deleted_at' => NULL,
                ),
            113 =>
                array (
                    'id' => 124,
                    'custom_module_id' => 62,
                    'lang_id' => 2,
                    'text' => 'قالب رسالة كلية الحقوق',
                    'created_at' => '2018-10-10 05:44:21',
                    'updated_at' => '2018-12-11 13:04:25',
                    'deleted_at' => NULL,
                ),
            114 =>
                array (
                    'id' => 125,
                    'custom_module_id' => 63,
                    'lang_id' => 1,
                    'text' => 'C-Mess-AM',
                    'created_at' => '2018-10-10 05:47:50',
                    'updated_at' => '2018-12-11 13:56:01',
                    'deleted_at' => NULL,
                ),
            115 =>
                array (
                    'id' => 126,
                    'custom_module_id' => 63,
                    'lang_id' => 2,
                    'text' => 'قالب رسالة كلية العلوم الادارية',
                    'created_at' => '2018-10-10 05:47:50',
                    'updated_at' => '2018-12-11 13:56:01',
                    'deleted_at' => NULL,
                ),
            116 =>
                array (
                    'id' => 127,
                    'custom_module_id' => 64,
                    'lang_id' => 1,
                    'text' => 'C-Mess-Medicine',
                    'created_at' => '2018-10-13 03:22:25',
                    'updated_at' => '2018-12-12 07:38:51',
                    'deleted_at' => NULL,
                ),
            117 =>
                array (
                    'id' => 128,
                    'custom_module_id' => 64,
                    'lang_id' => 2,
                    'text' => 'قالب رسالة كلية الطب',
                    'created_at' => '2018-10-13 03:22:25',
                    'updated_at' => '2018-12-12 07:38:51',
                    'deleted_at' => NULL,
                ),
            118 =>
                array (
                    'id' => 129,
                    'custom_module_id' => 65,
                    'lang_id' => 1,
                    'text' => 'Test',
                    'created_at' => '2018-10-13 07:29:46',
                    'updated_at' => '2018-10-13 07:30:04',
                    'deleted_at' => '2018-10-13 07:30:04',
                ),
            119 =>
                array (
                    'id' => 130,
                    'custom_module_id' => 65,
                    'lang_id' => 2,
                    'text' => 'تجريبي',
                    'created_at' => '2018-10-13 07:29:46',
                    'updated_at' => '2018-10-13 07:30:04',
                    'deleted_at' => '2018-10-13 07:30:04',
                ),
            120 =>
                array (
                    'id' => 131,
                    'custom_module_id' => 66,
                    'lang_id' => 1,
                    'text' => 'slider for students',
                    'created_at' => '2018-10-13 07:35:25',
                    'updated_at' => '2018-10-22 05:06:04',
                    'deleted_at' => NULL,
                ),
            121 =>
                array (
                    'id' => 132,
                    'custom_module_id' => 66,
                    'lang_id' => 2,
                    'text' => 'شرائح صفحة شؤون الطلاب',
                    'created_at' => '2018-10-13 07:35:25',
                    'updated_at' => '2018-10-22 05:06:04',
                    'deleted_at' => NULL,
                ),
            122 =>
                array (
                    'id' => 133,
                    'custom_module_id' => 67,
                    'lang_id' => 1,
                    'text' => 'text for Admission requirements',
                    'created_at' => '2018-10-14 04:31:24',
                    'updated_at' => '2018-10-14 04:31:24',
                    'deleted_at' => NULL,
                ),
            123 =>
                array (
                    'id' => 134,
                    'custom_module_id' => 67,
                    'lang_id' => 2,
                    'text' => 'نص لصفحة شروط القبول',
                    'created_at' => '2018-10-14 04:31:24',
                    'updated_at' => '2018-10-14 04:31:24',
                    'deleted_at' => NULL,
                ),
            124 =>
                array (
                    'id' => 135,
                    'custom_module_id' => 68,
                    'lang_id' => 1,
                    'text' => 'E1',
                    'created_at' => '2018-10-17 06:51:39',
                    'updated_at' => '2018-10-20 06:54:31',
                    'deleted_at' => NULL,
                ),
            125 =>
                array (
                    'id' => 136,
                    'custom_module_id' => 68,
                    'lang_id' => 2,
                    'text' => 'اللغة الاجنبية1',
                    'created_at' => '2018-10-17 06:51:40',
                    'updated_at' => '2018-10-20 06:54:31',
                    'deleted_at' => NULL,
                ),
            126 =>
                array (
                    'id' => 137,
                    'custom_module_id' => 69,
                    'lang_id' => 1,
                    'text' => 'Slide for Home',
                    'created_at' => '2018-10-21 08:19:04',
                    'updated_at' => '2018-10-21 08:19:04',
                    'deleted_at' => NULL,
                ),
            127 =>
                array (
                    'id' => 138,
                    'custom_module_id' => 69,
                    'lang_id' => 2,
                    'text' => 'شرائح الصفحة الرئيسية',
                    'created_at' => '2018-10-21 08:19:04',
                    'updated_at' => '2018-12-08 17:33:36',
                    'deleted_at' => NULL,
                ),
            128 =>
                array (
                    'id' => 139,
                    'custom_module_id' => 70,
                    'lang_id' => 1,
                    'text' => 'The content of the acceptance method page',
                    'created_at' => '2018-10-21 08:23:44',
                    'updated_at' => '2018-10-22 05:02:26',
                    'deleted_at' => NULL,
                ),
            129 =>
                array (
                    'id' => 140,
                    'custom_module_id' => 70,
                    'lang_id' => 2,
                    'text' => 'محتوى صفحة طريقة القبول',
                    'created_at' => '2018-10-21 08:23:44',
                    'updated_at' => '2018-10-22 05:02:48',
                    'deleted_at' => NULL,
                ),
            130 =>
                array (
                    'id' => 141,
                    'custom_module_id' => 24,
                    'lang_id' => 1,
                    'text' => 'Text for Grants & Discounts',
                    'created_at' => '2018-10-22 05:12:02',
                    'updated_at' => '2018-10-22 05:12:02',
                    'deleted_at' => NULL,
                ),
            131 =>
                array (
                    'id' => 142,
                    'custom_module_id' => 24,
                    'lang_id' => 2,
                    'text' => 'محتوى صفحة المنح والحسومات',
                    'created_at' => '2018-10-22 05:12:02',
                    'updated_at' => '2018-10-22 05:12:02',
                    'deleted_at' => NULL,
                ),
            132 =>
                array (
                    'id' => 143,
                    'custom_module_id' => 71,
                    'lang_id' => 1,
                    'text' => 'C-Mess-Dentistry',
                    'created_at' => '2018-10-31 09:47:12',
                    'updated_at' => '2018-12-12 08:12:57',
                    'deleted_at' => NULL,
                ),
            133 =>
                array (
                    'id' => 144,
                    'custom_module_id' => 71,
                    'lang_id' => 2,
                    'text' => 'قالب رسالة كلية طب اسنان',
                    'created_at' => '2018-10-31 09:47:12',
                    'updated_at' => '2018-12-12 08:12:57',
                    'deleted_at' => NULL,
                ),
            134 =>
                array (
                    'id' => 145,
                    'custom_module_id' => 72,
                    'lang_id' => 1,
                    'text' => 'C-Mess-Pharmacy',
                    'created_at' => '2018-11-25 06:55:00',
                    'updated_at' => '2018-12-12 08:26:55',
                    'deleted_at' => NULL,
                ),
            135 =>
                array (
                    'id' => 146,
                    'custom_module_id' => 72,
                    'lang_id' => 2,
                    'text' => 'قالب رسالة كلية الصيدلة',
                    'created_at' => '2018-11-25 06:55:00',
                    'updated_at' => '2018-12-12 08:26:55',
                    'deleted_at' => NULL,
                ),
            136 =>
                array (
                    'id' => 147,
                    'custom_module_id' => 73,
                    'lang_id' => 1,
                    'text' => 'C-Mess-IRD',
                    'created_at' => '2018-12-08 18:24:36',
                    'updated_at' => '2018-12-12 08:56:37',
                    'deleted_at' => NULL,
                ),
            137 =>
                array (
                    'id' => 148,
                    'custom_module_id' => 73,
                    'lang_id' => 2,
                    'text' => 'قالب رسالة العلاقات الدولية والدبلوماسية',
                    'created_at' => '2018-12-08 18:24:36',
                    'updated_at' => '2018-12-12 08:56:37',
                    'deleted_at' => NULL,
                ),
            138 =>
                array (
                    'id' => 149,
                    'custom_module_id' => 74,
                    'lang_id' => 1,
                    'text' => 'Study-Plan-ITE',
                    'created_at' => '2018-12-12 10:48:31',
                    'updated_at' => '2018-12-12 10:48:31',
                    'deleted_at' => NULL,
                ),
            139 =>
                array (
                    'id' => 150,
                    'custom_module_id' => 74,
                    'lang_id' => 2,
                    'text' => 'قالب الخطة الدراسية لكلية الهندسة المعلوماتية',
                    'created_at' => '2018-12-12 10:48:31',
                    'updated_at' => '2018-12-12 10:53:52',
                    'deleted_at' => NULL,
                ),
            140 =>
                array (
                    'id' => 151,
                    'custom_module_id' => 75,
                    'lang_id' => 1,
                    'text' => 'Study-Plan-law',
                    'created_at' => '2018-12-12 11:10:41',
                    'updated_at' => '2018-12-12 11:10:41',
                    'deleted_at' => NULL,
                ),
            141 =>
                array (
                    'id' => 152,
                    'custom_module_id' => 75,
                    'lang_id' => 2,
                    'text' => 'قالب الخطة الدرسية لكلية الحقوق',
                    'created_at' => '2018-12-12 11:10:41',
                    'updated_at' => '2018-12-12 11:10:41',
                    'deleted_at' => NULL,
                ),
            142 =>
                array (
                    'id' => 153,
                    'custom_module_id' => 76,
                    'lang_id' => 1,
                    'text' => 'Study-plan-AS',
                    'created_at' => '2018-12-12 11:22:52',
                    'updated_at' => '2018-12-12 11:22:52',
                    'deleted_at' => NULL,
                ),
            143 =>
                array (
                    'id' => 154,
                    'custom_module_id' => 76,
                    'lang_id' => 2,
                    'text' => 'قالب الخطة الدرسية لكلية العلوم الادارية',
                    'created_at' => '2018-12-12 11:22:52',
                    'updated_at' => '2018-12-12 11:22:52',
                    'deleted_at' => NULL,
                ),
            144 =>
                array (
                    'id' => 155,
                    'custom_module_id' => 77,
                    'lang_id' => 1,
                    'text' => 'Study-Plan-IRD',
                    'created_at' => '2018-12-12 11:38:28',
                    'updated_at' => '2018-12-12 11:38:28',
                    'deleted_at' => NULL,
                ),
            145 =>
                array (
                    'id' => 156,
                    'custom_module_id' => 77,
                    'lang_id' => 2,
                    'text' => 'قالب الخطة الدرسية لكلية العلاقات الدولية والدبلوماسية',
                    'created_at' => '2018-12-12 11:38:28',
                    'updated_at' => '2018-12-12 11:38:28',
                    'deleted_at' => NULL,
                ),
            146 =>
                array (
                    'id' => 157,
                    'custom_module_id' => 78,
                    'lang_id' => 1,
                    'text' => 'Study-Plan-pharmacy',
                    'created_at' => '2018-12-12 12:30:10',
                    'updated_at' => '2018-12-12 12:30:10',
                    'deleted_at' => NULL,
                ),
            147 =>
                array (
                    'id' => 158,
                    'custom_module_id' => 78,
                    'lang_id' => 2,
                    'text' => 'قالب الخطة الدرسية لكلية الصيدلة',
                    'created_at' => '2018-12-12 12:30:10',
                    'updated_at' => '2018-12-12 12:30:10',
                    'deleted_at' => NULL,
                ),
            148 =>
                array (
                    'id' => 159,
                    'custom_module_id' => 79,
                    'lang_id' => 1,
                    'text' => 'Study-Plan-Dentistry',
                    'created_at' => '2018-12-12 12:37:28',
                    'updated_at' => '2018-12-12 12:37:28',
                    'deleted_at' => NULL,
                ),
            149 =>
                array (
                    'id' => 160,
                    'custom_module_id' => 79,
                    'lang_id' => 2,
                    'text' => 'قالب الخطة الدرسية لكلية طب الاسنان',
                    'created_at' => '2018-12-12 12:37:28',
                    'updated_at' => '2018-12-12 12:37:28',
                    'deleted_at' => NULL,
                ),
            150 =>
                array (
                    'id' => 161,
                    'custom_module_id' => 80,
                    'lang_id' => 1,
                    'text' => 'Scientific agreements',
                    'created_at' => '2018-12-16 11:42:56',
                    'updated_at' => '2018-12-16 11:42:56',
                    'deleted_at' => NULL,
                ),
            151 =>
                array (
                    'id' => 162,
                    'custom_module_id' => 80,
                    'lang_id' => 2,
                    'text' => 'قالب الإتفاقيات العلمية',
                    'created_at' => '2018-12-16 11:42:56',
                    'updated_at' => '2018-12-16 11:42:56',
                    'deleted_at' => NULL,
                ),
            152 =>
                array (
                    'id' => 163,
                    'custom_module_id' => 81,
                    'lang_id' => 1,
                    'text' => 'gan',
                    'created_at' => '2018-12-22 11:38:08',
                    'updated_at' => '2018-12-22 11:38:08',
                    'deleted_at' => NULL,
                ),
            153 =>
                array (
                    'id' => 164,
                    'custom_module_id' => 81,
                    'lang_id' => 2,
                    'text' => 'جان',
                    'created_at' => '2018-12-22 11:38:08',
                    'updated_at' => '2018-12-22 11:38:08',
                    'deleted_at' => NULL,
                ),
            154 =>
                array (
                    'id' => 165,
                    'custom_module_id' => 82,
                    'lang_id' => 1,
                    'text' => 'Empty Block',
                    'created_at' => '2018-12-25 09:18:03',
                    'updated_at' => '2018-12-25 09:18:03',
                    'deleted_at' => NULL,
                ),
            155 =>
                array (
                    'id' => 166,
                    'custom_module_id' => 82,
                    'lang_id' => 2,
                    'text' => 'كتل فارغة',
                    'created_at' => '2018-12-25 09:18:03',
                    'updated_at' => '2018-12-25 09:18:03',
                    'deleted_at' => NULL,
                ),
            156 =>
                array (
                    'id' => 167,
                    'custom_module_id' => 83,
                    'lang_id' => 1,
                    'text' => 'latest News',
                    'created_at' => '2018-12-25 09:33:20',
                    'updated_at' => '2018-12-25 09:33:20',
                    'deleted_at' => NULL,
                ),
            157 =>
                array (
                    'id' => 168,
                    'custom_module_id' => 83,
                    'lang_id' => 2,
                    'text' => 'آخر الأخبار',
                    'created_at' => '2018-12-25 09:33:20',
                    'updated_at' => '2018-12-25 09:33:20',
                    'deleted_at' => NULL,
                ),
            158 =>
                array (
                    'id' => 169,
                    'custom_module_id' => 84,
                    'lang_id' => 1,
                    'text' => 'Faculty Instructors for ite',
                    'created_at' => '2018-12-29 11:04:54',
                    'updated_at' => '2018-12-29 11:04:54',
                    'deleted_at' => NULL,
                ),
            159 =>
                array (
                    'id' => 170,
                    'custom_module_id' => 84,
                    'lang_id' => 2,
                    'text' => 'اعضاء الهيئة التدريسية لكلية المعلوماتية-دمشق',
                    'created_at' => '2018-12-29 11:04:54',
                    'updated_at' => '2018-12-29 11:04:54',
                    'deleted_at' => NULL,
                ),
            160 =>
                array (
                    'id' => 171,
                    'custom_module_id' => 85,
                    'lang_id' => 1,
                    'text' => 'Faculty Instructors for AS',
                    'created_at' => '2018-12-29 11:08:53',
                    'updated_at' => '2018-12-29 11:08:53',
                    'deleted_at' => NULL,
                ),
            161 =>
                array (
                    'id' => 172,
                    'custom_module_id' => 85,
                    'lang_id' => 2,
                    'text' => 'قالب اعضاء الهيئة التدريسية لكلية العلوم الادارية',
                    'created_at' => '2018-12-29 11:08:53',
                    'updated_at' => '2018-12-29 11:08:53',
                    'deleted_at' => NULL,
                ),
            162 =>
                array (
                    'id' => 173,
                    'custom_module_id' => 86,
                    'lang_id' => 1,
                    'text' => 'Faculty Instructors for IRD',
                    'created_at' => '2018-12-29 11:09:51',
                    'updated_at' => '2018-12-29 11:09:51',
                    'deleted_at' => NULL,
                ),
            163 =>
                array (
                    'id' => 174,
                    'custom_module_id' => 86,
                    'lang_id' => 2,
                    'text' => 'قالب اعضاء الهيئة التدريسية لكلية العلاقات الدولية والدبلوماسية',
                    'created_at' => '2018-12-29 11:09:51',
                    'updated_at' => '2018-12-29 11:09:51',
                    'deleted_at' => NULL,
                ),
            164 =>
                array (
                    'id' => 175,
                    'custom_module_id' => 87,
                    'lang_id' => 1,
                    'text' => 'Faculty Instructors for Medicine',
                    'created_at' => '2018-12-29 11:17:09',
                    'updated_at' => '2018-12-29 11:17:09',
                    'deleted_at' => NULL,
                ),
            165 =>
                array (
                    'id' => 176,
                    'custom_module_id' => 87,
                    'lang_id' => 2,
                    'text' => 'قالب اعضاء الهيئة التدريسية لكلية طب بشري',
                    'created_at' => '2018-12-29 11:17:09',
                    'updated_at' => '2018-12-29 11:17:09',
                    'deleted_at' => NULL,
                ),
            166 =>
                array (
                    'id' => 177,
                    'custom_module_id' => 88,
                    'lang_id' => 1,
                    'text' => 'Faculty Instructors for dentis',
                    'created_at' => '2018-12-29 11:20:15',
                    'updated_at' => '2018-12-29 11:20:15',
                    'deleted_at' => NULL,
                ),
            167 =>
                array (
                    'id' => 178,
                    'custom_module_id' => 88,
                    'lang_id' => 2,
                    'text' => 'قالب اعضاء الهيئة التدريسية لكلية طب اسنان',
                    'created_at' => '2018-12-29 11:20:15',
                    'updated_at' => '2018-12-29 11:20:15',
                    'deleted_at' => NULL,
                ),
            168 =>
                array (
                    'id' => 179,
                    'custom_module_id' => 89,
                    'lang_id' => 1,
                    'text' => 'Faculty Instructors for pharmacy',
                    'created_at' => '2018-12-29 11:21:30',
                    'updated_at' => '2018-12-29 11:21:30',
                    'deleted_at' => NULL,
                ),
            169 =>
                array (
                    'id' => 180,
                    'custom_module_id' => 89,
                    'lang_id' => 2,
                    'text' => 'قالب اعضاء الهيئة التدريسية لكلية الصيدلة',
                    'created_at' => '2018-12-29 11:21:30',
                    'updated_at' => '2018-12-29 11:21:30',
                    'deleted_at' => NULL,
                ),
            170 =>
                array (
                    'id' => 181,
                    'custom_module_id' => 90,
                    'lang_id' => 1,
                    'text' => 'Test',
                    'created_at' => '2018-12-30 07:16:23',
                    'updated_at' => '2018-12-30 07:16:23',
                    'deleted_at' => NULL,
                ),
            171 =>
                array (
                    'id' => 182,
                    'custom_module_id' => 90,
                    'lang_id' => 2,
                    'text' => 'أبحاث الكليات',
                    'created_at' => '2018-12-30 07:16:23',
                    'updated_at' => '2018-12-30 07:16:23',
                    'deleted_at' => NULL,
                ),
            172 =>
                array (
                    'id' => 183,
                    'custom_module_id' => 91,
                    'lang_id' => 1,
                    'text' => 'Dean of Faculty of Dentistry',
                    'created_at' => '2018-12-30 09:43:58',
                    'updated_at' => '2018-12-30 09:43:58',
                    'deleted_at' => NULL,
                ),
            173 =>
                array (
                    'id' => 184,
                    'custom_module_id' => 91,
                    'lang_id' => 2,
                    'text' => 'قالب كلمة عميد طب اسنان-دمشق',
                    'created_at' => '2018-12-30 09:43:58',
                    'updated_at' => '2018-12-30 09:43:58',
                    'deleted_at' => NULL,
                ),
            174 =>
                array (
                    'id' => 185,
                    'custom_module_id' => 92,
                    'lang_id' => 1,
                    'text' => 'call us',
                    'created_at' => '2018-12-30 10:19:55',
                    'updated_at' => '2018-12-30 10:19:55',
                    'deleted_at' => NULL,
                ),
            175 =>
                array (
                    'id' => 186,
                    'custom_module_id' => 92,
                    'lang_id' => 2,
                    'text' => 'قالب اتصل بنا-اسنان-دمشق',
                    'created_at' => '2018-12-30 10:19:55',
                    'updated_at' => '2018-12-30 10:19:55',
                    'deleted_at' => NULL,
                ),
            176 =>
                array (
                    'id' => 187,
                    'custom_module_id' => 93,
                    'lang_id' => 1,
                    'text' => 'dean',
                    'created_at' => '2018-12-30 10:52:11',
                    'updated_at' => '2018-12-30 10:52:11',
                    'deleted_at' => NULL,
                ),
            177 =>
                array (
                    'id' => 188,
                    'custom_module_id' => 93,
                    'lang_id' => 2,
                    'text' => 'قالب عميد الصيدلة-لازقية',
                    'created_at' => '2018-12-30 10:52:11',
                    'updated_at' => '2018-12-30 10:52:11',
                    'deleted_at' => NULL,
                ),
            178 =>
                array (
                    'id' => 189,
                    'custom_module_id' => 94,
                    'lang_id' => 1,
                    'text' => 'Faculty Instructors',
                    'created_at' => '2018-12-30 11:51:50',
                    'updated_at' => '2018-12-30 11:51:50',
                    'deleted_at' => NULL,
                ),
            179 =>
                array (
                    'id' => 190,
                    'custom_module_id' => 94,
                    'lang_id' => 2,
                    'text' => 'قالب اعضاء الهيئة التدريسية صيدلة-لازقية',
                    'created_at' => '2018-12-30 11:51:50',
                    'updated_at' => '2018-12-30 11:51:50',
                    'deleted_at' => NULL,
                ),
            180 =>
                array (
                    'id' => 191,
                    'custom_module_id' => 95,
                    'lang_id' => 1,
                    'text' => 'Faculty Instructo',
                    'created_at' => '2018-12-30 11:52:43',
                    'updated_at' => '2018-12-30 11:52:43',
                    'deleted_at' => NULL,
                ),
            181 =>
                array (
                    'id' => 192,
                    'custom_module_id' => 95,
                    'lang_id' => 2,
                    'text' => 'قالب اعضاء الهيئة التدريسية طب اسنان-لازقية',
                    'created_at' => '2018-12-30 11:52:43',
                    'updated_at' => '2018-12-30 11:52:43',
                    'deleted_at' => NULL,
                ),
            182 =>
                array (
                    'id' => 193,
                    'custom_module_id' => 96,
                    'lang_id' => 1,
                    'text' => 'Faculty Instructors',
                    'created_at' => '2018-12-30 11:53:30',
                    'updated_at' => '2018-12-30 11:53:30',
                    'deleted_at' => NULL,
                ),
            183 =>
                array (
                    'id' => 194,
                    'custom_module_id' => 96,
                    'lang_id' => 2,
                    'text' => 'قالب اعضاء الهيئة التدريسية حقوق-لازقية',
                    'created_at' => '2018-12-30 11:53:30',
                    'updated_at' => '2018-12-30 11:53:30',
                    'deleted_at' => NULL,
                ),
            184 =>
                array (
                    'id' => 195,
                    'custom_module_id' => 97,
                    'lang_id' => 1,
                    'text' => 'Faculty Instructors',
                    'created_at' => '2018-12-30 11:54:23',
                    'updated_at' => '2018-12-30 11:54:23',
                    'deleted_at' => NULL,
                ),
            185 =>
                array (
                    'id' => 196,
                    'custom_module_id' => 97,
                    'lang_id' => 2,
                    'text' => 'قالب اعضاء الهيئة التدريسية علوم ادارية-لازقية',
                    'created_at' => '2018-12-30 11:54:23',
                    'updated_at' => '2018-12-30 11:54:23',
                    'deleted_at' => NULL,
                ),
            186 =>
                array (
                    'id' => 197,
                    'custom_module_id' => 98,
                    'lang_id' => 1,
                    'text' => 'degrees',
                    'created_at' => '2018-12-31 08:04:14',
                    'updated_at' => '2018-12-31 08:04:14',
                    'deleted_at' => NULL,
                ),
            187 =>
                array (
                    'id' => 198,
                    'custom_module_id' => 98,
                    'lang_id' => 2,
                    'text' => 'قالب اختصاصات الصيدلة-اللازقية',
                    'created_at' => '2018-12-31 08:04:14',
                    'updated_at' => '2018-12-31 08:04:14',
                    'deleted_at' => NULL,
                ),
            188 =>
                array (
                    'id' => 199,
                    'custom_module_id' => 99,
                    'lang_id' => 1,
                    'text' => 'تقويم تجريبي',
                    'created_at' => '2018-12-31 08:23:34',
                    'updated_at' => '2018-12-31 08:23:34',
                    'deleted_at' => NULL,
                ),
            189 =>
                array (
                    'id' => 200,
                    'custom_module_id' => 99,
                    'lang_id' => 2,
                    'text' => 'تقويم تجريبي',
                    'created_at' => '2018-12-31 08:23:34',
                    'updated_at' => '2018-12-31 08:23:34',
                    'deleted_at' => NULL,
                ),
            190 =>
                array (
                    'id' => 201,
                    'custom_module_id' => 100,
                    'lang_id' => 1,
                    'text' => 'contact us',
                    'created_at' => '2018-12-31 08:26:55',
                    'updated_at' => '2018-12-31 08:26:55',
                    'deleted_at' => NULL,
                ),
            191 =>
                array (
                    'id' => 202,
                    'custom_module_id' => 100,
                    'lang_id' => 2,
                    'text' => 'قالب اتصل بنا صيدلة-لازقية',
                    'created_at' => '2018-12-31 08:26:55',
                    'updated_at' => '2018-12-31 08:26:55',
                    'deleted_at' => NULL,
                ),
            192 =>
                array (
                    'id' => 203,
                    'custom_module_id' => 101,
                    'lang_id' => 1,
                    'text' => 'Dean',
                    'created_at' => '2018-12-31 09:00:03',
                    'updated_at' => '2018-12-31 09:00:03',
                    'deleted_at' => NULL,
                ),
            193 =>
                array (
                    'id' => 204,
                    'custom_module_id' => 101,
                    'lang_id' => 2,
                    'text' => 'قالب عميد حقوق-لازقية',
                    'created_at' => '2018-12-31 09:00:03',
                    'updated_at' => '2018-12-31 09:00:03',
                    'deleted_at' => NULL,
                ),
            194 =>
                array (
                    'id' => 205,
                    'custom_module_id' => 102,
                    'lang_id' => 1,
                    'text' => 'Home Calendar',
                    'created_at' => '2018-12-31 09:10:35',
                    'updated_at' => '2018-12-31 09:10:35',
                    'deleted_at' => NULL,
                ),
            195 =>
                array (
                    'id' => 206,
                    'custom_module_id' => 102,
                    'lang_id' => 2,
                    'text' => 'قالب تقويم الصفحة الرئيسية',
                    'created_at' => '2018-12-31 09:10:35',
                    'updated_at' => '2018-12-31 09:14:00',
                    'deleted_at' => NULL,
                ),
            196 =>
                array (
                    'id' => 207,
                    'custom_module_id' => 103,
                    'lang_id' => 1,
                    'text' => 'contact us',
                    'created_at' => '2018-12-31 10:14:46',
                    'updated_at' => '2018-12-31 10:14:46',
                    'deleted_at' => NULL,
                ),
            197 =>
                array (
                    'id' => 208,
                    'custom_module_id' => 103,
                    'lang_id' => 2,
                    'text' => 'قالب اتصل بنا حقوق-دمشق',
                    'created_at' => '2018-12-31 10:14:46',
                    'updated_at' => '2018-12-31 10:14:46',
                    'deleted_at' => NULL,
                ),
            198 =>
                array (
                    'id' => 209,
                    'custom_module_id' => 104,
                    'lang_id' => 1,
                    'text' => 'contact us',
                    'created_at' => '2018-12-31 11:02:08',
                    'updated_at' => '2018-12-31 11:02:08',
                    'deleted_at' => NULL,
                ),
            199 =>
                array (
                    'id' => 210,
                    'custom_module_id' => 104,
                    'lang_id' => 2,
                    'text' => 'قالب اتصل بنا حقوق -لازقية',
                    'created_at' => '2018-12-31 11:02:08',
                    'updated_at' => '2018-12-31 11:02:08',
                    'deleted_at' => NULL,
                ),
            200 =>
                array (
                    'id' => 211,
                    'custom_module_id' => 105,
                    'lang_id' => 1,
                    'text' => 'Degrees',
                    'created_at' => '2018-12-31 11:19:35',
                    'updated_at' => '2018-12-31 11:19:35',
                    'deleted_at' => NULL,
                ),
            201 =>
                array (
                    'id' => 212,
                    'custom_module_id' => 105,
                    'lang_id' => 2,
                    'text' => 'قالب الاختصاصات حقوق-لازقية',
                    'created_at' => '2018-12-31 11:19:35',
                    'updated_at' => '2018-12-31 11:19:35',
                    'deleted_at' => NULL,
                ),
            202 =>
                array (
                    'id' => 213,
                    'custom_module_id' => 106,
                    'lang_id' => 1,
                    'text' => 'Dean',
                    'created_at' => '2019-01-06 07:36:13',
                    'updated_at' => '2019-01-06 07:36:13',
                    'deleted_at' => NULL,
                ),
            203 =>
                array (
                    'id' => 214,
                    'custom_module_id' => 106,
                    'lang_id' => 2,
                    'text' => 'قالب كلمة عميد العلوم الادارية-اللازقية',
                    'created_at' => '2019-01-06 07:36:13',
                    'updated_at' => '2019-01-06 07:36:13',
                    'deleted_at' => NULL,
                ),
            204 =>
                array (
                    'id' => 215,
                    'custom_module_id' => 107,
                    'lang_id' => 1,
                    'text' => 'C-Mess-AS',
                    'created_at' => '2019-01-06 07:55:29',
                    'updated_at' => '2019-01-06 07:55:29',
                    'deleted_at' => NULL,
                ),
            205 =>
                array (
                    'id' => 216,
                    'custom_module_id' => 107,
                    'lang_id' => 2,
                    'text' => 'قالب رسالة العلوم الادارية-اللازقية',
                    'created_at' => '2019-01-06 07:55:29',
                    'updated_at' => '2019-01-06 07:55:29',
                    'deleted_at' => NULL,
                ),
            206 =>
                array (
                    'id' => 217,
                    'custom_module_id' => 108,
                    'lang_id' => 1,
                    'text' => 'degrees',
                    'created_at' => '2019-01-06 08:51:59',
                    'updated_at' => '2019-01-06 08:51:59',
                    'deleted_at' => NULL,
                ),
            207 =>
                array (
                    'id' => 218,
                    'custom_module_id' => 108,
                    'lang_id' => 2,
                    'text' => 'قالب اختصاصات العلوم الادارية-اللازقية',
                    'created_at' => '2019-01-06 08:51:59',
                    'updated_at' => '2019-01-06 08:51:59',
                    'deleted_at' => NULL,
                ),
            208 =>
                array (
                    'id' => 219,
                    'custom_module_id' => 109,
                    'lang_id' => 1,
                    'text' => 'contact us',
                    'created_at' => '2019-01-06 09:17:52',
                    'updated_at' => '2019-01-06 09:17:52',
                    'deleted_at' => NULL,
                ),
            209 =>
                array (
                    'id' => 220,
                    'custom_module_id' => 109,
                    'lang_id' => 2,
                    'text' => 'قالب اتصل بنا علوم ادارية-اللازقية',
                    'created_at' => '2019-01-06 09:17:52',
                    'updated_at' => '2019-01-06 09:17:52',
                    'deleted_at' => NULL,
                ),
            210 =>
                array (
                    'id' => 221,
                    'custom_module_id' => 110,
                    'lang_id' => 1,
                    'text' => 'degrees',
                    'created_at' => '2019-01-08 08:22:21',
                    'updated_at' => '2019-01-08 08:22:21',
                    'deleted_at' => NULL,
                ),
            211 =>
                array (
                    'id' => 222,
                    'custom_module_id' => 110,
                    'lang_id' => 2,
                    'text' => 'قالب الاختصاصات طب اسنان-دمشق',
                    'created_at' => '2019-01-08 08:22:21',
                    'updated_at' => '2019-01-08 08:22:21',
                    'deleted_at' => NULL,
                ),
            212 =>
                array (
                    'id' => 223,
                    'custom_module_id' => 111,
                    'lang_id' => 1,
                    'text' => 'contact us',
                    'created_at' => '2019-01-08 09:06:55',
                    'updated_at' => '2019-01-08 09:06:55',
                    'deleted_at' => NULL,
                ),
            213 =>
                array (
                    'id' => 224,
                    'custom_module_id' => 111,
                    'lang_id' => 2,
                    'text' => 'قالب اتصل بنا صيدلة-دمشق',
                    'created_at' => '2019-01-08 09:06:55',
                    'updated_at' => '2019-01-08 09:06:55',
                    'deleted_at' => NULL,
                ),
            214 =>
                array (
                    'id' => 225,
                    'custom_module_id' => 112,
                    'lang_id' => 1,
                    'text' => 'contact us',
                    'created_at' => '2019-01-08 09:17:50',
                    'updated_at' => '2019-01-08 09:17:50',
                    'deleted_at' => NULL,
                ),
            215 =>
                array (
                    'id' => 226,
                    'custom_module_id' => 112,
                    'lang_id' => 2,
                    'text' => 'قالب اتصل بنا طب بشري -دمشق',
                    'created_at' => '2019-01-08 09:17:50',
                    'updated_at' => '2019-01-08 09:17:50',
                    'deleted_at' => NULL,
                ),
            216 =>
                array (
                    'id' => 227,
                    'custom_module_id' => 113,
                    'lang_id' => 1,
                    'text' => 'contact us',
                    'created_at' => '2019-01-08 09:42:49',
                    'updated_at' => '2019-01-08 09:42:49',
                    'deleted_at' => NULL,
                ),
            217 =>
                array (
                    'id' => 228,
                    'custom_module_id' => 113,
                    'lang_id' => 2,
                    'text' => 'قالب اتصل بنا علاقات دولية-دمشق',
                    'created_at' => '2019-01-08 09:42:49',
                    'updated_at' => '2019-01-08 09:42:49',
                    'deleted_at' => NULL,
                ),
            218 =>
                array (
                    'id' => 229,
                    'custom_module_id' => 114,
                    'lang_id' => 1,
                    'text' => 'contact us',
                    'created_at' => '2019-01-08 09:53:22',
                    'updated_at' => '2019-01-08 09:53:22',
                    'deleted_at' => NULL,
                ),
            219 =>
                array (
                    'id' => 230,
                    'custom_module_id' => 114,
                    'lang_id' => 2,
                    'text' => 'قالب اتصل بنا علوم ادارية-دمشق',
                    'created_at' => '2019-01-08 09:53:22',
                    'updated_at' => '2019-01-08 09:53:22',
                    'deleted_at' => NULL,
                ),
            220 =>
                array (
                    'id' => 231,
                    'custom_module_id' => 115,
                    'lang_id' => 1,
                    'text' => 'بحث',
                    'created_at' => '2019-01-08 12:01:34',
                    'updated_at' => '2019-01-08 12:01:34',
                    'deleted_at' => NULL,
                ),
            221 =>
                array (
                    'id' => 232,
                    'custom_module_id' => 115,
                    'lang_id' => 2,
                    'text' => 'ابحاث',
                    'created_at' => '2019-01-08 12:01:34',
                    'updated_at' => '2019-01-08 12:01:34',
                    'deleted_at' => NULL,
                ),
            222 =>
                array (
                    'id' => 233,
                    'custom_module_id' => 116,
                    'lang_id' => 1,
                    'text' => 'dean',
                    'created_at' => '2019-01-08 13:06:28',
                    'updated_at' => '2019-01-08 13:06:28',
                    'deleted_at' => NULL,
                ),
            223 =>
                array (
                    'id' => 234,
                    'custom_module_id' => 116,
                    'lang_id' => 2,
                    'text' => 'قالب عميد الحقوق-دمشق',
                    'created_at' => '2019-01-08 13:06:28',
                    'updated_at' => '2019-01-08 13:06:28',
                    'deleted_at' => NULL,
                ),
            224 =>
                array (
                    'id' => 235,
                    'custom_module_id' => 117,
                    'lang_id' => 1,
                    'text' => 'degrees',
                    'created_at' => '2019-01-08 13:19:51',
                    'updated_at' => '2019-01-08 13:19:51',
                    'deleted_at' => NULL,
                ),
            225 =>
                array (
                    'id' => 236,
                    'custom_module_id' => 117,
                    'lang_id' => 2,
                    'text' => 'قالب الاختصاصات حقوق-دمشق',
                    'created_at' => '2019-01-08 13:19:51',
                    'updated_at' => '2019-01-08 13:19:51',
                    'deleted_at' => NULL,
                ),
            226 =>
                array (
                    'id' => 237,
                    'custom_module_id' => 118,
                    'lang_id' => 1,
                    'text' => 'degrees',
                    'created_at' => '2019-01-09 09:49:24',
                    'updated_at' => '2019-01-09 09:49:24',
                    'deleted_at' => NULL,
                ),
            227 =>
                array (
                    'id' => 238,
                    'custom_module_id' => 118,
                    'lang_id' => 2,
                    'text' => 'قالب الاختصاصات علاقات-دمشق',
                    'created_at' => '2019-01-09 09:49:24',
                    'updated_at' => '2019-01-09 09:49:24',
                    'deleted_at' => NULL,
                ),
            228 =>
                array (
                    'id' => 239,
                    'custom_module_id' => 119,
                    'lang_id' => 1,
                    'text' => 'Dean',
                    'created_at' => '2019-01-12 11:20:23',
                    'updated_at' => '2019-01-12 11:20:23',
                    'deleted_at' => NULL,
                ),
            229 =>
                array (
                    'id' => 240,
                    'custom_module_id' => 119,
                    'lang_id' => 2,
                    'text' => 'قالب كلمة عميد صيدلة-دمشق',
                    'created_at' => '2019-01-12 11:20:23',
                    'updated_at' => '2019-01-12 11:20:23',
                    'deleted_at' => NULL,
                ),
            230 =>
                array (
                    'id' => 241,
                    'custom_module_id' => 120,
                    'lang_id' => 1,
                    'text' => 'ss',
                    'created_at' => '2019-01-15 11:32:09',
                    'updated_at' => '2019-01-15 11:39:20',
                    'deleted_at' => '2019-01-15 11:39:20',
                ),
            231 =>
                array (
                    'id' => 242,
                    'custom_module_id' => 120,
                    'lang_id' => 2,
                    'text' => 'شخص3',
                    'created_at' => '2019-01-15 11:32:09',
                    'updated_at' => '2019-01-15 11:39:20',
                    'deleted_at' => '2019-01-15 11:39:20',
                ),
            232 =>
                array (
                    'id' => 243,
                    'custom_module_id' => 121,
                    'lang_id' => 1,
                    'text' => 'Dean',
                    'created_at' => '2019-01-20 11:49:19',
                    'updated_at' => '2019-01-20 11:49:19',
                    'deleted_at' => NULL,
                ),
            233 =>
                array (
                    'id' => 244,
                    'custom_module_id' => 121,
                    'lang_id' => 2,
                    'text' => 'كلمة عميد المعلوماتية-دمشق',
                    'created_at' => '2019-01-20 11:49:19',
                    'updated_at' => '2019-01-20 11:49:19',
                    'deleted_at' => NULL,
                ),
            234 =>
                array (
                    'id' => 245,
                    'custom_module_id' => 122,
                    'lang_id' => 1,
                    'text' => 'Umpcoming Events',
                    'created_at' => '2019-01-21 11:49:14',
                    'updated_at' => '2019-01-21 11:49:14',
                    'deleted_at' => NULL,
                ),
            235 =>
                array (
                    'id' => 246,
                    'custom_module_id' => 122,
                    'lang_id' => 2,
                    'text' => 'الاخداث القادمة',
                    'created_at' => '2019-01-21 11:49:14',
                    'updated_at' => '2019-01-21 11:49:14',
                    'deleted_at' => NULL,
                ),
            236 =>
                array (
                    'id' => 247,
                    'custom_module_id' => 123,
                    'lang_id' => 1,
                    'text' => 'Card Test 1',
                    'created_at' => '2019-01-22 08:24:03',
                    'updated_at' => '2019-01-22 08:24:03',
                    'deleted_at' => NULL,
                ),
            237 =>
                array (
                    'id' => 248,
                    'custom_module_id' => 123,
                    'lang_id' => 2,
                    'text' => 'Card Test 1',
                    'created_at' => '2019-01-22 08:24:03',
                    'updated_at' => '2019-01-22 08:24:03',
                    'deleted_at' => NULL,
                ),
            238 =>
                array (
                    'id' => 249,
                    'custom_module_id' => 124,
                    'lang_id' => 1,
                    'text' => 'Tenders',
                    'created_at' => '2019-01-26 13:18:04',
                    'updated_at' => '2019-01-26 13:18:04',
                    'deleted_at' => NULL,
                ),
            239 =>
                array (
                    'id' => 250,
                    'custom_module_id' => 124,
                    'lang_id' => 2,
                    'text' => 'المناقصات',
                    'created_at' => '2019-01-26 13:18:04',
                    'updated_at' => '2019-01-26 13:18:04',
                    'deleted_at' => NULL,
                ),
            240 =>
                array (
                    'id' => 251,
                    'custom_module_id' => 125,
                    'lang_id' => 1,
                    'text' => 'Side Menu',
                    'created_at' => '2019-01-28 11:22:13',
                    'updated_at' => '2019-01-28 11:22:13',
                    'deleted_at' => NULL,
                ),
            241 =>
                array (
                    'id' => 252,
                    'custom_module_id' => 125,
                    'lang_id' => 2,
                    'text' => 'قائمة جانبية',
                    'created_at' => '2019-01-28 11:22:13',
                    'updated_at' => '2019-01-28 11:22:13',
                    'deleted_at' => NULL,
                ),
        ));


    }
}