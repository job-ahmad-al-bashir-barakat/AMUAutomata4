<?php

use Illuminate\Database\Seeder;

class PermissionNameLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permission_name_langs')->delete();
        
        \DB::table('permission_name_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'permission_id' => 1,
                'lang_id' => 1,
                'text' => 'Automata4',
                'created_at' => '2018-03-15 07:45:41',
                'updated_at' => '2018-03-15 08:41:11',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'permission_id' => 1,
                'lang_id' => 2,
                'text' => 'اوتوماتا4',
                'created_at' => '2018-03-15 07:45:41',
                'updated_at' => '2018-03-15 08:41:11',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'permission_id' => 2,
                'lang_id' => 1,
                'text' => 'Administrator',
                'created_at' => '2018-03-15 07:46:04',
                'updated_at' => '2018-03-15 08:40:38',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'permission_id' => 2,
                'lang_id' => 2,
                'text' => 'مدير',
                'created_at' => '2018-03-15 07:46:04',
                'updated_at' => '2018-03-15 08:40:38',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'permission_id' => 3,
                'lang_id' => 1,
                'text' => 'Languages',
                'created_at' => '2018-03-15 13:26:30',
                'updated_at' => '2018-03-15 13:26:30',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'permission_id' => 3,
                'lang_id' => 2,
                'text' => 'اللغات',
                'created_at' => '2018-03-15 13:26:30',
                'updated_at' => '2018-03-15 13:26:30',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'permission_id' => 4,
                'lang_id' => 1,
                'text' => 'Schema Tables',
                'created_at' => '2018-03-17 06:48:07',
                'updated_at' => '2018-03-17 06:48:07',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'permission_id' => 4,
                'lang_id' => 2,
                'text' => 'Schema Tables',
                'created_at' => '2018-03-17 06:48:07',
                'updated_at' => '2018-03-17 06:48:07',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'permission_id' => 5,
                'lang_id' => 1,
                'text' => 'Tables',
                'created_at' => '2018-03-17 07:09:52',
                'updated_at' => '2018-03-17 07:09:52',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'permission_id' => 5,
                'lang_id' => 2,
                'text' => 'الجداول',
                'created_at' => '2018-03-17 07:09:53',
                'updated_at' => '2018-03-17 07:09:53',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'permission_id' => 6,
                'lang_id' => 1,
                'text' => 'Icons',
                'created_at' => '2018-03-17 07:18:57',
                'updated_at' => '2018-03-17 07:18:57',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'permission_id' => 6,
                'lang_id' => 2,
                'text' => 'ايقونات',
                'created_at' => '2018-03-17 07:18:57',
                'updated_at' => '2018-03-17 07:18:57',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'permission_id' => 7,
                'lang_id' => 1,
                'text' => 'Attributes',
                'created_at' => '2018-03-17 07:19:39',
                'updated_at' => '2018-03-17 07:19:39',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'permission_id' => 7,
                'lang_id' => 2,
                'text' => 'خصائص',
                'created_at' => '2018-03-17 07:19:40',
                'updated_at' => '2018-03-17 07:19:40',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'permission_id' => 8,
                'lang_id' => 1,
                'text' => 'Modules',
                'created_at' => '2018-03-17 07:19:55',
                'updated_at' => '2018-03-17 07:19:55',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'permission_id' => 8,
                'lang_id' => 2,
                'text' => 'الكتل',
                'created_at' => '2018-03-17 07:19:55',
                'updated_at' => '2018-03-17 07:19:55',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'permission_id' => 9,
                'lang_id' => 1,
                'text' => 'Pages',
                'created_at' => '2018-03-17 07:20:15',
                'updated_at' => '2018-03-17 07:20:15',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'permission_id' => 9,
                'lang_id' => 2,
                'text' => 'الصفحات',
                'created_at' => '2018-03-17 07:20:15',
                'updated_at' => '2018-03-17 07:20:15',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'permission_id' => 10,
                'lang_id' => 1,
                'text' => 'Permissions',
                'created_at' => '2018-03-17 07:20:56',
                'updated_at' => '2018-03-17 07:20:56',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'permission_id' => 10,
                'lang_id' => 2,
                'text' => 'السماحيات',
                'created_at' => '2018-03-17 07:20:56',
                'updated_at' => '2018-03-17 07:20:56',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'permission_id' => 11,
                'lang_id' => 1,
                'text' => 'Roles',
                'created_at' => '2018-03-17 07:21:11',
                'updated_at' => '2018-03-17 07:21:11',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'permission_id' => 11,
                'lang_id' => 2,
                'text' => 'الادوار',
                'created_at' => '2018-03-17 07:21:11',
                'updated_at' => '2018-03-17 07:21:11',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'permission_id' => 12,
                'lang_id' => 1,
                'text' => 'Users',
                'created_at' => '2018-03-17 07:21:32',
                'updated_at' => '2018-03-17 07:21:32',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'permission_id' => 12,
                'lang_id' => 2,
                'text' => 'المستخدمين',
                'created_at' => '2018-03-17 07:21:33',
                'updated_at' => '2018-03-17 07:21:33',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'permission_id' => 13,
                'lang_id' => 1,
                'text' => 'Sliders',
                'created_at' => '2018-03-17 07:22:14',
                'updated_at' => '2018-03-17 07:22:14',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'permission_id' => 13,
                'lang_id' => 2,
                'text' => 'سلايدر',
                'created_at' => '2018-03-17 07:22:14',
                'updated_at' => '2018-03-17 07:22:14',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'permission_id' => 14,
                'lang_id' => 1,
                'text' => 'Vertical Sliders',
                'created_at' => '2018-03-17 07:22:52',
                'updated_at' => '2018-03-17 07:22:52',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'permission_id' => 14,
                'lang_id' => 2,
                'text' => 'سلايدر عمودي',
                'created_at' => '2018-03-17 07:22:52',
                'updated_at' => '2018-03-17 07:22:52',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'permission_id' => 15,
                'lang_id' => 1,
                'text' => 'Blocks',
                'created_at' => '2018-03-17 07:23:16',
                'updated_at' => '2018-03-17 07:23:16',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'permission_id' => 15,
                'lang_id' => 2,
                'text' => 'كتل',
                'created_at' => '2018-03-17 07:23:16',
                'updated_at' => '2018-03-17 07:23:16',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'permission_id' => 16,
                'lang_id' => 1,
                'text' => 'Text Cards',
                'created_at' => '2018-03-17 07:23:43',
                'updated_at' => '2018-03-17 07:23:43',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'permission_id' => 16,
                'lang_id' => 2,
                'text' => 'بطاقات نصية',
                'created_at' => '2018-03-17 07:23:43',
                'updated_at' => '2018-03-17 07:23:43',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'permission_id' => 17,
                'lang_id' => 1,
                'text' => 'Custom Modules',
                'created_at' => '2018-03-17 07:24:10',
                'updated_at' => '2018-03-17 07:24:10',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'permission_id' => 17,
                'lang_id' => 2,
                'text' => 'الكتلة الخاصة',
                'created_at' => '2018-03-17 07:24:10',
                'updated_at' => '2018-03-17 07:24:10',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'permission_id' => 18,
                'lang_id' => 1,
                'text' => 'Page Content',
                'created_at' => '2018-03-17 07:24:44',
                'updated_at' => '2018-12-02 10:46:06',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'permission_id' => 18,
                'lang_id' => 2,
                'text' => 'محتوى الصفحات',
                'created_at' => '2018-03-17 07:24:44',
                'updated_at' => '2018-12-02 10:46:06',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'permission_id' => 19,
                'lang_id' => 1,
                'text' => 'Steps',
                'created_at' => '2018-03-17 08:35:33',
                'updated_at' => '2018-03-17 08:35:33',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'permission_id' => 19,
                'lang_id' => 2,
                'text' => 'خطوات',
                'created_at' => '2018-03-17 08:35:33',
                'updated_at' => '2018-03-17 08:35:33',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'permission_id' => 20,
                'lang_id' => 1,
                'text' => 'Website Menu',
                'created_at' => '2018-03-20 19:09:46',
                'updated_at' => '2018-03-20 19:09:46',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'permission_id' => 20,
                'lang_id' => 2,
                'text' => 'قائمة الموقع',
                'created_at' => '2018-03-20 19:09:46',
                'updated_at' => '2018-03-20 19:09:46',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'permission_id' => 21,
                'lang_id' => 1,
                'text' => 'Control Panel Menu',
                'created_at' => '2018-03-20 19:10:35',
                'updated_at' => '2018-03-20 19:10:35',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'permission_id' => 21,
                'lang_id' => 2,
                'text' => 'قائمة ادارة الموقع',
                'created_at' => '2018-03-20 19:10:35',
                'updated_at' => '2018-03-20 19:10:35',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'permission_id' => 22,
                'lang_id' => 1,
                'text' => 'General Settings',
                'created_at' => '2018-03-21 16:47:37',
                'updated_at' => '2018-03-21 16:47:37',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'permission_id' => 22,
                'lang_id' => 2,
                'text' => 'اعدادات عامة',
                'created_at' => '2018-03-21 16:47:37',
                'updated_at' => '2018-03-21 16:47:37',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'permission_id' => 23,
                'lang_id' => 1,
                'text' => 'Social Networks',
                'created_at' => '2018-03-21 16:48:20',
                'updated_at' => '2018-03-21 16:48:20',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'permission_id' => 23,
                'lang_id' => 2,
                'text' => 'مواقع التواصل الاجتماعي',
                'created_at' => '2018-03-21 16:48:21',
                'updated_at' => '2018-03-21 16:48:21',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'permission_id' => 24,
                'lang_id' => 1,
                'text' => 'Gender',
                'created_at' => '2018-03-21 16:48:48',
                'updated_at' => '2018-03-21 16:48:48',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'permission_id' => 24,
                'lang_id' => 2,
                'text' => 'الجنس',
                'created_at' => '2018-03-21 16:48:48',
                'updated_at' => '2018-03-21 16:48:48',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'permission_id' => 25,
                'lang_id' => 1,
                'text' => 'Position',
                'created_at' => '2018-03-21 16:49:18',
                'updated_at' => '2018-03-21 16:49:18',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'permission_id' => 25,
                'lang_id' => 2,
                'text' => 'مناصب',
                'created_at' => '2018-03-21 16:49:18',
                'updated_at' => '2018-03-21 16:49:18',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'permission_id' => 26,
                'lang_id' => 1,
                'text' => 'Job Title',
                'created_at' => '2018-03-21 16:49:52',
                'updated_at' => '2018-03-21 16:49:52',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'permission_id' => 26,
                'lang_id' => 2,
                'text' => 'الالقاب الوظيفية',
                'created_at' => '2018-03-21 16:49:52',
                'updated_at' => '2018-03-21 16:49:52',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'permission_id' => 27,
                'lang_id' => 1,
                'text' => 'Faculties',
                'created_at' => '2018-03-21 16:50:43',
                'updated_at' => '2018-03-21 16:50:43',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'permission_id' => 27,
                'lang_id' => 2,
                'text' => 'الكليات',
                'created_at' => '2018-03-21 16:50:43',
                'updated_at' => '2018-03-21 16:50:43',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'permission_id' => 28,
                'lang_id' => 1,
                'text' => 'Departments',
                'created_at' => '2018-03-21 16:51:05',
                'updated_at' => '2018-03-21 16:51:05',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'permission_id' => 28,
                'lang_id' => 2,
                'text' => 'الاقسام',
                'created_at' => '2018-03-21 16:51:05',
                'updated_at' => '2018-03-21 16:51:05',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'permission_id' => 29,
                'lang_id' => 1,
                'text' => 'Degrees',
                'created_at' => '2018-03-21 16:51:33',
                'updated_at' => '2018-03-21 16:51:33',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'permission_id' => 29,
                'lang_id' => 2,
                'text' => 'الشهادات',
                'created_at' => '2018-03-21 16:51:33',
                'updated_at' => '2018-03-21 16:51:33',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'permission_id' => 30,
                'lang_id' => 1,
                'text' => 'Study Plan',
                'created_at' => '2018-03-21 16:52:08',
                'updated_at' => '2018-03-21 16:52:08',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'permission_id' => 30,
                'lang_id' => 2,
                'text' => 'الخطة الدرسية',
                'created_at' => '2018-03-21 16:52:08',
                'updated_at' => '2018-03-21 16:52:08',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'permission_id' => 31,
                'lang_id' => 1,
                'text' => 'Offices',
                'created_at' => '2018-03-21 16:52:36',
                'updated_at' => '2018-03-21 16:52:36',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'permission_id' => 31,
                'lang_id' => 2,
                'text' => 'المكاتب',
                'created_at' => '2018-03-21 16:52:36',
                'updated_at' => '2018-03-21 16:52:36',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'permission_id' => 32,
                'lang_id' => 1,
                'text' => 'Partners',
                'created_at' => '2018-03-21 16:52:54',
                'updated_at' => '2018-03-21 16:52:54',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'permission_id' => 32,
                'lang_id' => 2,
                'text' => 'الشركاء',
                'created_at' => '2018-03-21 16:52:54',
                'updated_at' => '2018-03-21 16:52:54',
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'permission_id' => 33,
                'lang_id' => 1,
                'text' => 'University Council',
                'created_at' => '2018-03-21 17:23:52',
                'updated_at' => '2018-03-21 17:23:52',
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'permission_id' => 33,
                'lang_id' => 2,
                'text' => 'مجلس الجامعة',
                'created_at' => '2018-03-21 17:23:52',
                'updated_at' => '2018-03-21 17:23:52',
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'permission_id' => 34,
                'lang_id' => 1,
                'text' => 'Board of Trustees',
                'created_at' => '2018-03-21 17:24:31',
                'updated_at' => '2018-03-21 17:24:31',
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'permission_id' => 34,
                'lang_id' => 2,
                'text' => 'مجلس الامناء',
                'created_at' => '2018-03-21 17:24:31',
                'updated_at' => '2018-03-21 17:24:31',
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'permission_id' => 35,
                'lang_id' => 1,
                'text' => 'Staff',
                'created_at' => '2018-03-21 17:25:10',
                'updated_at' => '2018-03-21 17:25:10',
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'permission_id' => 35,
                'lang_id' => 2,
                'text' => 'الموظفون',
                'created_at' => '2018-03-21 17:25:10',
                'updated_at' => '2018-03-21 17:25:10',
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'permission_id' => 36,
                'lang_id' => 1,
                'text' => 'News',
                'created_at' => '2018-03-21 17:26:11',
                'updated_at' => '2018-05-12 18:28:41',
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'permission_id' => 36,
                'lang_id' => 2,
                'text' => 'الاخبار',
                'created_at' => '2018-03-21 17:26:12',
                'updated_at' => '2018-05-12 18:28:41',
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'permission_id' => 37,
                'lang_id' => 1,
                'text' => 'Study Year',
                'created_at' => '2018-03-21 17:27:44',
                'updated_at' => '2018-03-21 17:27:44',
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'permission_id' => 37,
                'lang_id' => 2,
                'text' => 'السنوات الدراسية',
                'created_at' => '2018-03-21 17:27:44',
                'updated_at' => '2018-03-21 17:27:44',
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'permission_id' => 38,
                'lang_id' => 1,
                'text' => 'Semester',
                'created_at' => '2018-03-21 17:28:21',
                'updated_at' => '2018-03-21 17:28:21',
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'permission_id' => 38,
                'lang_id' => 2,
                'text' => 'الفصول الدراسية',
                'created_at' => '2018-03-21 17:28:21',
                'updated_at' => '2018-03-21 17:28:21',
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'permission_id' => 39,
                'lang_id' => 1,
                'text' => 'Hierarchy  Type',
                'created_at' => '2018-03-21 17:29:05',
                'updated_at' => '2018-03-21 17:29:05',
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'permission_id' => 39,
                'lang_id' => 2,
                'text' => 'نوع الهيكلية',
                'created_at' => '2018-03-21 17:29:05',
                'updated_at' => '2018-03-21 17:29:05',
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'permission_id' => 40,
                'lang_id' => 1,
                'text' => 'Galleries',
                'created_at' => '2018-03-30 06:13:30',
                'updated_at' => '2018-03-30 06:13:30',
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'permission_id' => 40,
                'lang_id' => 2,
                'text' => 'معرض الصور',
                'created_at' => '2018-03-30 06:13:30',
                'updated_at' => '2018-03-30 06:13:30',
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'permission_id' => 41,
                'lang_id' => 1,
                'text' => 'News Status',
                'created_at' => '2018-05-13 15:53:37',
                'updated_at' => '2018-05-13 15:53:37',
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'permission_id' => 41,
                'lang_id' => 2,
                'text' => 'حالات الخبر',
                'created_at' => '2018-05-13 15:53:37',
                'updated_at' => '2018-05-13 15:53:37',
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'permission_id' => 42,
                'lang_id' => 1,
                'text' => 'Translation Manager',
                'created_at' => '2018-10-26 07:20:13',
                'updated_at' => '2018-10-26 07:21:27',
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'permission_id' => 42,
                'lang_id' => 2,
                'text' => 'متحولات اللغة',
                'created_at' => '2018-10-26 07:20:14',
                'updated_at' => '2018-10-26 07:21:27',
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'permission_id' => 43,
                'lang_id' => 1,
                'text' => 'Hierarchy',
                'created_at' => '2018-10-26 07:33:16',
                'updated_at' => '2018-10-26 07:33:33',
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'permission_id' => 43,
                'lang_id' => 2,
                'text' => 'الهيكلية',
                'created_at' => '2018-10-26 07:33:16',
                'updated_at' => '2018-10-26 07:33:33',
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'permission_id' => 44,
                'lang_id' => 1,
                'text' => 'Campuses',
                'created_at' => '2018-11-03 15:05:04',
                'updated_at' => '2018-11-03 15:05:04',
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'permission_id' => 44,
                'lang_id' => 2,
                'text' => 'الحرم الجامعي',
                'created_at' => '2018-11-03 15:05:04',
                'updated_at' => '2018-11-03 15:05:04',
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'permission_id' => 45,
                'lang_id' => 1,
                'text' => 'Management Staff',
                'created_at' => '2018-12-02 07:53:21',
                'updated_at' => '2018-12-02 07:53:21',
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'permission_id' => 45,
                'lang_id' => 2,
                'text' => 'الكادر الإداري',
                'created_at' => '2018-12-02 07:53:22',
                'updated_at' => '2018-12-02 07:53:22',
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'permission_id' => 46,
                'lang_id' => 1,
                'text' => 'Calendar',
                'created_at' => '2018-12-30 11:46:18',
                'updated_at' => '2018-12-30 11:46:18',
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'permission_id' => 46,
                'lang_id' => 2,
                'text' => 'التقويم',
                'created_at' => '2018-12-30 11:46:18',
                'updated_at' => '2018-12-30 11:46:18',
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'permission_id' => 47,
                'lang_id' => 1,
                'text' => 'Footers',
                'created_at' => '2019-01-05 03:51:45',
                'updated_at' => '2019-01-05 03:51:45',
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'permission_id' => 47,
                'lang_id' => 2,
                'text' => 'فوتر',
                'created_at' => '2019-01-05 03:51:45',
                'updated_at' => '2019-01-05 03:51:45',
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'permission_id' => 48,
                'lang_id' => 1,
                'text' => 'Show Modules',
                'created_at' => '2019-01-06 10:50:41',
                'updated_at' => '2019-01-06 10:50:41',
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'permission_id' => 48,
                'lang_id' => 2,
                'text' => 'رؤية القوالب',
                'created_at' => '2019-01-06 10:50:42',
                'updated_at' => '2019-01-06 10:50:42',
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'permission_id' => 49,
                'lang_id' => 1,
                'text' => 'Cards',
                'created_at' => '2019-01-22 05:14:31',
                'updated_at' => '2019-01-22 05:14:31',
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'permission_id' => 49,
                'lang_id' => 2,
                'text' => 'بطاقات',
                'created_at' => '2019-01-22 05:14:31',
                'updated_at' => '2019-01-22 05:14:31',
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'permission_id' => 50,
                'lang_id' => 1,
                'text' => 'Tenders',
                'created_at' => '2019-01-26 12:01:55',
                'updated_at' => '2019-01-26 12:01:55',
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'permission_id' => 50,
                'lang_id' => 2,
                'text' => 'المناقصات',
                'created_at' => '2019-01-26 12:01:55',
                'updated_at' => '2019-01-26 12:01:55',
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'permission_id' => 51,
                'lang_id' => 1,
                'text' => 'Links',
                'created_at' => '2019-01-28 10:15:58',
                'updated_at' => '2019-01-28 10:15:58',
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'permission_id' => 51,
                'lang_id' => 2,
                'text' => 'روابط',
                'created_at' => '2019-01-28 10:15:58',
                'updated_at' => '2019-01-28 10:15:58',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}