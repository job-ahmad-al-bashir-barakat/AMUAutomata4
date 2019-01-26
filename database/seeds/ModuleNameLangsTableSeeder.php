<?php

use Illuminate\Database\Seeder;

class ModuleNameLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('module_name_langs')->delete();
        
        \DB::table('module_name_langs')->insert(array (
            0 => 
            array (
                'id' => 3,
                'module_id' => 1,
                'lang_id' => 1,
                'text' => 'Text Editor',
                'created_at' => '2017-07-22 08:56:29',
                'updated_at' => '2017-07-22 08:56:29',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'module_id' => 1,
                'lang_id' => 2,
                'text' => 'محرر نصوص',
                'created_at' => '2017-07-22 08:56:29',
                'updated_at' => '2017-07-22 08:56:29',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 9,
                'module_id' => 3,
                'lang_id' => 1,
                'text' => 'Section Start',
                'created_at' => '2017-09-06 17:20:58',
                'updated_at' => '2017-09-06 17:20:58',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 10,
                'module_id' => 3,
                'lang_id' => 2,
                'text' => 'Section Start',
                'created_at' => '2017-09-06 17:20:58',
                'updated_at' => '2017-09-06 17:20:58',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 11,
                'module_id' => 4,
                'lang_id' => 1,
                'text' => 'Section End',
                'created_at' => '2017-09-06 17:21:13',
                'updated_at' => '2017-09-06 17:21:13',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 12,
                'module_id' => 4,
                'lang_id' => 2,
                'text' => 'Section End',
                'created_at' => '2017-09-06 17:21:13',
                'updated_at' => '2017-09-06 17:21:13',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 13,
                'module_id' => 5,
                'lang_id' => 1,
                'text' => 'Sliders',
                'created_at' => '2017-09-09 16:10:32',
                'updated_at' => '2017-09-09 16:10:32',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 14,
                'module_id' => 5,
                'lang_id' => 2,
                'text' => 'عارض شرائح',
                'created_at' => '2017-09-09 16:10:32',
                'updated_at' => '2017-09-09 16:10:32',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 15,
                'module_id' => 6,
                'lang_id' => 1,
                'text' => 'Blocks',
                'created_at' => '2017-09-10 16:22:44',
                'updated_at' => '2017-09-10 16:22:44',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 16,
                'module_id' => 6,
                'lang_id' => 2,
                'text' => 'الكتل',
                'created_at' => '2017-09-10 16:22:44',
                'updated_at' => '2017-09-10 16:22:44',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 17,
                'module_id' => 7,
                'lang_id' => 1,
                'text' => 'Courses Card #1',
                'created_at' => '2017-09-13 18:31:27',
                'updated_at' => '2017-09-13 18:31:27',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 18,
                'module_id' => 7,
                'lang_id' => 2,
                'text' => 'طباقة مقررات #1',
                'created_at' => '2017-09-13 18:31:27',
                'updated_at' => '2017-09-13 18:31:27',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 19,
                'module_id' => 8,
                'lang_id' => 1,
                'text' => 'Persons Card #1',
                'created_at' => '2017-09-20 18:10:49',
                'updated_at' => '2017-09-20 18:10:49',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 20,
                'module_id' => 8,
                'lang_id' => 2,
                'text' => 'بطاقة اشخاص #1',
                'created_at' => '2017-09-20 18:10:49',
                'updated_at' => '2017-09-20 18:10:49',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 21,
                'module_id' => 9,
                'lang_id' => 1,
                'text' => 'Vertical Sliders',
                'created_at' => '2017-09-24 18:39:16',
                'updated_at' => '2017-09-24 18:39:16',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 22,
                'module_id' => 9,
                'lang_id' => 2,
                'text' => 'شرائح عمودية',
                'created_at' => '2017-09-24 18:39:16',
                'updated_at' => '2019-01-06 07:27:42',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 23,
                'module_id' => 10,
                'lang_id' => 1,
                'text' => 'Gallery',
                'created_at' => '2017-09-29 05:12:27',
                'updated_at' => '2017-09-29 05:12:27',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 24,
                'module_id' => 10,
                'lang_id' => 2,
                'text' => 'معرض صور',
                'created_at' => '2017-09-29 05:12:27',
                'updated_at' => '2017-09-29 05:12:27',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 25,
                'module_id' => 2,
                'lang_id' => 1,
                'text' => 'Short Info',
                'created_at' => '2017-09-30 16:48:37',
                'updated_at' => '2017-09-30 16:48:37',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 26,
                'module_id' => 2,
                'lang_id' => 2,
                'text' => 'معلومات قصير',
                'created_at' => '2017-09-30 16:48:37',
                'updated_at' => '2017-09-30 16:48:37',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 41,
                'module_id' => 11,
                'lang_id' => 1,
                'text' => 'section Fluid Start',
                'created_at' => '2017-10-16 16:43:49',
                'updated_at' => '2017-10-16 16:43:49',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 42,
                'module_id' => 11,
                'lang_id' => 2,
                'text' => 'section Fluid Start',
                'created_at' => '2017-10-16 16:43:49',
                'updated_at' => '2017-10-16 16:43:49',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 43,
                'module_id' => 12,
                'lang_id' => 1,
                'text' => 'Small Gallery',
                'created_at' => '2017-10-16 16:49:39',
                'updated_at' => '2017-10-16 16:49:39',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 44,
                'module_id' => 12,
                'lang_id' => 2,
                'text' => 'معرض صور صغير',
                'created_at' => '2017-10-16 16:49:39',
                'updated_at' => '2017-10-16 16:49:39',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 45,
                'module_id' => 13,
                'lang_id' => 1,
                'text' => 'Steps',
                'created_at' => '2017-10-16 16:50:13',
                'updated_at' => '2017-10-16 16:50:13',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 46,
                'module_id' => 13,
                'lang_id' => 2,
                'text' => 'خطوات',
                'created_at' => '2017-10-16 16:50:13',
                'updated_at' => '2017-10-16 16:50:13',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 47,
                'module_id' => 14,
                'lang_id' => 1,
                'text' => 'Section Intersect Top',
                'created_at' => '2017-10-16 16:51:31',
                'updated_at' => '2017-10-16 16:51:31',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 48,
                'module_id' => 14,
                'lang_id' => 2,
                'text' => 'Section Intersect Top',
                'created_at' => '2017-10-16 16:51:31',
                'updated_at' => '2017-10-16 16:51:31',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 49,
                'module_id' => 15,
                'lang_id' => 1,
                'text' => 'Section Intersect End',
                'created_at' => '2017-10-16 16:51:54',
                'updated_at' => '2017-10-16 16:51:54',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 50,
                'module_id' => 15,
                'lang_id' => 2,
                'text' => 'Section Intersect End',
                'created_at' => '2017-10-16 16:51:54',
                'updated_at' => '2017-10-16 16:51:54',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 51,
                'module_id' => 16,
                'lang_id' => 1,
                'text' => 'Text Card #1',
                'created_at' => '2017-10-16 16:52:28',
                'updated_at' => '2017-10-16 16:52:28',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 52,
                'module_id' => 16,
                'lang_id' => 2,
                'text' => 'Text Card #1',
                'created_at' => '2017-10-16 16:52:28',
                'updated_at' => '2017-10-16 16:52:28',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 53,
                'module_id' => 17,
                'lang_id' => 1,
                'text' => 'Contact Form',
                'created_at' => '2017-10-16 18:01:45',
                'updated_at' => '2017-10-16 18:01:45',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 54,
                'module_id' => 17,
                'lang_id' => 2,
                'text' => 'فورم الاتصال',
                'created_at' => '2017-10-16 18:01:45',
                'updated_at' => '2017-10-16 18:01:45',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 55,
                'module_id' => 18,
                'lang_id' => 1,
                'text' => 'Text Card #2',
                'created_at' => '2017-10-19 17:15:32',
                'updated_at' => '2017-10-19 17:15:32',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 56,
                'module_id' => 18,
                'lang_id' => 2,
                'text' => 'Text Card #2',
                'created_at' => '2017-10-19 17:15:33',
                'updated_at' => '2017-10-19 17:15:33',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 57,
                'module_id' => 19,
                'lang_id' => 1,
                'text' => 'Person Page',
                'created_at' => '2017-10-19 17:31:43',
                'updated_at' => '2017-10-19 17:31:43',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 58,
                'module_id' => 19,
                'lang_id' => 2,
                'text' => 'Person Page',
                'created_at' => '2017-10-19 17:31:43',
                'updated_at' => '2017-10-19 17:31:43',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 59,
                'module_id' => 20,
                'lang_id' => 1,
                'text' => 'Office Page',
                'created_at' => '2017-10-19 17:44:25',
                'updated_at' => '2017-10-19 17:44:25',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 60,
                'module_id' => 20,
                'lang_id' => 2,
                'text' => 'Office Page',
                'created_at' => '2017-10-19 17:44:25',
                'updated_at' => '2017-10-19 17:44:25',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 61,
                'module_id' => 21,
                'lang_id' => 1,
                'text' => 'Breadcrumb',
                'created_at' => '2017-10-19 18:08:25',
                'updated_at' => '2019-01-07 13:09:17',
                'deleted_at' => '2019-01-07 13:09:17',
            ),
            41 => 
            array (
                'id' => 62,
                'module_id' => 21,
                'lang_id' => 2,
                'text' => 'Breadcrumb',
                'created_at' => '2017-10-19 18:08:25',
                'updated_at' => '2019-01-07 13:09:17',
                'deleted_at' => '2019-01-07 13:09:17',
            ),
            42 => 
            array (
                'id' => 63,
                'module_id' => 22,
                'lang_id' => 1,
                'text' => 'University Council',
                'created_at' => '2017-10-31 19:45:45',
                'updated_at' => '2017-10-31 19:45:45',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 64,
                'module_id' => 22,
                'lang_id' => 2,
                'text' => 'مجلس الجامعة',
                'created_at' => '2017-10-31 19:45:45',
                'updated_at' => '2017-10-31 19:45:45',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 65,
                'module_id' => 23,
                'lang_id' => 1,
                'text' => 'Trusted Council',
                'created_at' => '2017-11-03 04:54:05',
                'updated_at' => '2017-11-03 04:54:05',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 66,
                'module_id' => 23,
                'lang_id' => 2,
                'text' => 'مجلس الامناء',
                'created_at' => '2017-11-03 04:54:05',
                'updated_at' => '2017-11-03 04:54:05',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 67,
                'module_id' => 24,
                'lang_id' => 1,
                'text' => 'University Partner',
                'created_at' => '2017-11-05 19:35:03',
                'updated_at' => '2017-11-05 19:35:03',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 68,
                'module_id' => 24,
                'lang_id' => 2,
                'text' => 'الشركاء',
                'created_at' => '2017-11-05 19:35:03',
                'updated_at' => '2017-11-05 19:35:03',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 69,
                'module_id' => 25,
                'lang_id' => 1,
                'text' => 'Degrees Table',
                'created_at' => '2017-11-17 18:45:14',
                'updated_at' => '2017-11-17 18:45:14',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 70,
                'module_id' => 25,
                'lang_id' => 2,
                'text' => 'جدول الاختصاصات',
                'created_at' => '2017-11-17 18:45:14',
                'updated_at' => '2017-11-17 18:45:14',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 71,
                'module_id' => 26,
                'lang_id' => 1,
                'text' => 'Courses Table',
                'created_at' => '2017-11-22 18:40:58',
                'updated_at' => '2017-11-22 18:40:58',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 72,
                'module_id' => 26,
                'lang_id' => 2,
                'text' => 'جدول الامقررات',
                'created_at' => '2017-11-22 18:40:58',
                'updated_at' => '2017-11-22 18:40:58',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 73,
                'module_id' => 27,
                'lang_id' => 1,
                'text' => 'Study Plan',
                'created_at' => '2017-12-01 17:26:56',
                'updated_at' => '2017-12-01 17:26:56',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 74,
                'module_id' => 27,
                'lang_id' => 2,
                'text' => 'الخطة الدرسية',
                'created_at' => '2017-12-01 17:26:56',
                'updated_at' => '2017-12-01 17:26:56',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 75,
                'module_id' => 28,
                'lang_id' => 1,
                'text' => 'Faculty Instructors',
                'created_at' => '2017-12-09 17:37:57',
                'updated_at' => '2017-12-09 17:37:57',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 76,
                'module_id' => 28,
                'lang_id' => 2,
                'text' => 'مدرسو الكلية',
                'created_at' => '2017-12-09 17:37:57',
                'updated_at' => '2017-12-09 17:37:57',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 77,
                'module_id' => 29,
                'lang_id' => 1,
                'text' => 'University Hierarchy',
                'created_at' => '2018-03-29 18:43:43',
                'updated_at' => '2018-03-29 20:05:26',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 78,
                'module_id' => 29,
                'lang_id' => 2,
                'text' => 'هيكلية الجامعة',
                'created_at' => '2018-03-29 18:43:43',
                'updated_at' => '2018-03-29 18:43:43',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 79,
                'module_id' => 30,
                'lang_id' => 1,
                'text' => 'Galleries',
                'created_at' => '2018-03-31 18:46:23',
                'updated_at' => '2018-03-31 18:46:23',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 80,
                'module_id' => 30,
                'lang_id' => 2,
                'text' => 'معارض الصور',
                'created_at' => '2018-03-31 18:46:23',
                'updated_at' => '2018-03-31 18:46:23',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 81,
                'module_id' => 31,
                'lang_id' => 1,
                'text' => 'Courses List #1',
                'created_at' => '2018-04-11 18:00:07',
                'updated_at' => '2018-04-11 18:00:07',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 82,
                'module_id' => 31,
                'lang_id' => 2,
                'text' => 'قائمة الكتب #1',
                'created_at' => '2018-04-11 18:00:07',
                'updated_at' => '2018-04-11 18:00:07',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 83,
                'module_id' => 32,
                'lang_id' => 1,
                'text' => 'Google Map',
                'created_at' => '2018-04-11 18:58:50',
                'updated_at' => '2018-04-11 18:58:50',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 84,
                'module_id' => 32,
                'lang_id' => 2,
                'text' => 'خريطة',
                'created_at' => '2018-04-11 18:58:50',
                'updated_at' => '2018-04-11 18:58:50',
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 85,
                'module_id' => 33,
                'lang_id' => 1,
                'text' => 'Course Content',
                'created_at' => '2018-05-20 15:32:54',
                'updated_at' => '2018-05-20 15:32:54',
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 86,
                'module_id' => 33,
                'lang_id' => 2,
                'text' => 'محتوى المقرر',
                'created_at' => '2018-05-20 15:32:54',
                'updated_at' => '2018-05-20 15:32:54',
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 87,
                'module_id' => 34,
                'lang_id' => 1,
                'text' => 'Labs List',
                'created_at' => '2018-05-25 12:10:04',
                'updated_at' => '2018-05-25 12:10:04',
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 88,
                'module_id' => 34,
                'lang_id' => 2,
                'text' => 'قائمة المخابر',
                'created_at' => '2018-05-25 12:10:04',
                'updated_at' => '2018-05-25 12:10:04',
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 89,
                'module_id' => 35,
                'lang_id' => 1,
                'text' => 'Lab Page',
                'created_at' => '2018-05-26 16:12:53',
                'updated_at' => '2018-05-26 16:12:53',
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 90,
                'module_id' => 35,
                'lang_id' => 2,
                'text' => 'صفحة المخبر',
                'created_at' => '2018-05-26 16:12:53',
                'updated_at' => '2018-05-26 16:12:53',
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 91,
                'module_id' => 36,
                'lang_id' => 1,
                'text' => 'Office List #1',
                'created_at' => '2018-05-27 15:31:11',
                'updated_at' => '2018-05-27 15:32:06',
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 92,
                'module_id' => 36,
                'lang_id' => 2,
                'text' => 'قائمة المكاتب',
                'created_at' => '2018-05-27 15:31:11',
                'updated_at' => '2018-05-27 15:31:11',
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 93,
                'module_id' => 37,
                'lang_id' => 1,
                'text' => 'News List #1',
                'created_at' => '2018-05-29 15:51:54',
                'updated_at' => '2018-05-29 15:51:54',
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 94,
                'module_id' => 37,
                'lang_id' => 2,
                'text' => 'قائمة الاخبار #1',
                'created_at' => '2018-05-29 15:51:54',
                'updated_at' => '2018-05-29 15:51:54',
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 95,
                'module_id' => 38,
                'lang_id' => 1,
                'text' => 'News Page',
                'created_at' => '2018-06-01 06:46:58',
                'updated_at' => '2018-06-01 06:46:58',
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 96,
                'module_id' => 38,
                'lang_id' => 2,
                'text' => 'محتوى الخبر',
                'created_at' => '2018-06-01 06:46:58',
                'updated_at' => '2018-06-01 06:46:58',
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 97,
                'module_id' => 39,
                'lang_id' => 1,
                'text' => 'Latest News',
                'created_at' => '2018-12-05 06:31:39',
                'updated_at' => '2018-12-05 06:31:39',
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 98,
                'module_id' => 39,
                'lang_id' => 2,
                'text' => 'آخر الأخبار',
                'created_at' => '2018-12-05 06:31:39',
                'updated_at' => '2018-12-05 06:31:39',
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 99,
                'module_id' => 40,
                'lang_id' => 1,
                'text' => 'Empty Block',
                'created_at' => '2018-12-25 06:06:54',
                'updated_at' => '2018-12-25 06:06:54',
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 100,
                'module_id' => 40,
                'lang_id' => 2,
                'text' => 'كتل فارغة',
                'created_at' => '2018-12-25 06:06:54',
                'updated_at' => '2018-12-25 06:06:54',
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 101,
                'module_id' => 41,
                'lang_id' => 1,
                'text' => 'Faculty Researches',
                'created_at' => '2018-12-27 07:01:57',
                'updated_at' => '2018-12-27 07:01:57',
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 102,
                'module_id' => 41,
                'lang_id' => 2,
                'text' => 'ابحاث الكلية',
                'created_at' => '2018-12-27 07:01:57',
                'updated_at' => '2018-12-27 07:01:57',
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 103,
                'module_id' => 42,
                'lang_id' => 1,
                'text' => 'Calender',
                'created_at' => '2018-12-30 08:04:47',
                'updated_at' => '2018-12-30 08:04:47',
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 104,
                'module_id' => 42,
                'lang_id' => 2,
                'text' => 'التقويم',
                'created_at' => '2018-12-30 08:04:47',
                'updated_at' => '2018-12-30 08:04:47',
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 105,
                'module_id' => 43,
                'lang_id' => 1,
                'text' => 'Person Card #2',
                'created_at' => '2019-01-13 06:07:17',
                'updated_at' => '2019-01-13 06:07:17',
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 106,
                'module_id' => 43,
                'lang_id' => 2,
                'text' => 'بطاقة اشخاص #2',
                'created_at' => '2019-01-13 06:07:17',
                'updated_at' => '2019-01-13 06:07:17',
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 107,
                'module_id' => 44,
                'lang_id' => 1,
                'text' => 'Slider Upcoming Events',
                'created_at' => '2019-01-19 09:51:37',
                'updated_at' => '2019-01-19 09:51:37',
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 108,
                'module_id' => 44,
                'lang_id' => 2,
                'text' => 'شرائح الأحداث القادمة',
                'created_at' => '2019-01-19 09:51:38',
                'updated_at' => '2019-01-19 09:51:38',
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 109,
                'module_id' => 45,
                'lang_id' => 1,
                'text' => 'Cards',
                'created_at' => '2019-01-22 08:12:13',
                'updated_at' => '2019-01-22 08:12:13',
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 110,
                'module_id' => 45,
                'lang_id' => 2,
                'text' => 'بطاقات',
                'created_at' => '2019-01-22 08:12:13',
                'updated_at' => '2019-01-22 08:12:13',
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 111,
                'module_id' => 46,
                'lang_id' => 1,
                'text' => 'Tenders List',
                'created_at' => '2019-01-26 13:06:18',
                'updated_at' => '2019-01-26 13:06:18',
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 112,
                'module_id' => 46,
                'lang_id' => 2,
                'text' => 'قائمة المناقصات',
                'created_at' => '2019-01-26 13:06:18',
                'updated_at' => '2019-01-26 13:06:18',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}