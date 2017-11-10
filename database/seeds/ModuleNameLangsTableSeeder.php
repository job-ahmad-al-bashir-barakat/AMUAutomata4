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
                'text' => 'شرائح افقيه',
                'created_at' => '2017-09-24 18:39:16',
                'updated_at' => '2017-09-24 18:39:16',
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
                'updated_at' => '2017-10-19 18:08:25',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 62,
                'module_id' => 21,
                'lang_id' => 2,
                'text' => 'Breadcrumb',
                'created_at' => '2017-10-19 18:08:25',
                'updated_at' => '2017-10-19 18:08:25',
                'deleted_at' => NULL,
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
        ));
        
        
    }
}