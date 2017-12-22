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
                'created_at' => '2017-10-16 17:12:49',
                'updated_at' => '2017-10-16 17:12:49',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'custom_module_id' => 1,
                'lang_id' => 2,
                'text' => 'Section Open',
                'created_at' => '2017-10-16 17:12:49',
                'updated_at' => '2017-10-16 17:12:49',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'custom_module_id' => 2,
                'lang_id' => 1,
                'text' => 'Section Close',
                'created_at' => '2017-10-16 17:13:57',
                'updated_at' => '2017-10-16 17:13:57',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'custom_module_id' => 2,
                'lang_id' => 2,
                'text' => 'Section Close',
                'created_at' => '2017-10-16 17:13:57',
                'updated_at' => '2017-10-16 17:13:57',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'custom_module_id' => 3,
                'lang_id' => 1,
                'text' => 'Fluid Section Open',
                'created_at' => '2017-10-16 17:15:19',
                'updated_at' => '2017-10-16 17:15:19',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'custom_module_id' => 3,
                'lang_id' => 2,
                'text' => 'Fluid Section Open',
                'created_at' => '2017-10-16 17:15:19',
                'updated_at' => '2017-10-16 17:15:19',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'custom_module_id' => 4,
                'lang_id' => 1,
                'text' => 'Section Intersect Top',
                'created_at' => '2017-10-16 17:16:10',
                'updated_at' => '2017-10-16 17:16:10',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'custom_module_id' => 4,
                'lang_id' => 2,
                'text' => 'Section Intersect Top',
                'created_at' => '2017-10-16 17:16:10',
                'updated_at' => '2017-10-16 17:16:10',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'custom_module_id' => 5,
                'lang_id' => 1,
                'text' => 'Intersect Top Close',
                'created_at' => '2017-10-16 17:17:13',
                'updated_at' => '2017-10-16 17:17:13',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'custom_module_id' => 5,
                'lang_id' => 2,
                'text' => 'Intersect Top Close',
                'created_at' => '2017-10-16 17:17:13',
                'updated_at' => '2017-10-16 17:17:13',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'custom_module_id' => 6,
                'lang_id' => 1,
                'text' => 'Home Slider',
                'created_at' => '2017-10-16 17:28:30',
                'updated_at' => '2017-10-16 17:28:30',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'custom_module_id' => 6,
                'lang_id' => 2,
                'text' => 'عرض شرائح الصفحة الرئيسية',
                'created_at' => '2017-10-16 17:28:30',
                'updated_at' => '2017-10-16 17:28:30',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'custom_module_id' => 7,
                'lang_id' => 1,
                'text' => 'Home Block',
                'created_at' => '2017-10-16 17:29:16',
                'updated_at' => '2017-10-16 17:29:16',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'custom_module_id' => 7,
                'lang_id' => 2,
                'text' => 'كتل الصفحة الرئيسية',
                'created_at' => '2017-10-16 17:29:16',
                'updated_at' => '2017-10-16 17:29:16',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'custom_module_id' => 8,
                'lang_id' => 1,
                'text' => 'Contact Form',
                'created_at' => '2017-10-16 18:11:04',
                'updated_at' => '2017-10-16 18:11:04',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'custom_module_id' => 8,
                'lang_id' => 2,
                'text' => 'فورم الاتصال',
                'created_at' => '2017-10-16 18:11:04',
                'updated_at' => '2017-10-16 18:11:04',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 21,
                'custom_module_id' => 11,
                'lang_id' => 1,
                'text' => 'Contact Form Text Cards',
                'created_at' => '2017-10-17 19:22:01',
                'updated_at' => '2017-10-17 19:22:01',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 22,
                'custom_module_id' => 11,
                'lang_id' => 2,
                'text' => 'Contact Form Text Cards',
                'created_at' => '2017-10-17 19:22:01',
                'updated_at' => '2017-10-17 19:22:01',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 23,
                'custom_module_id' => 12,
                'lang_id' => 1,
                'text' => 'Home Short Info',
                'created_at' => '2017-10-23 18:01:01',
                'updated_at' => '2017-10-23 18:01:01',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 24,
                'custom_module_id' => 12,
                'lang_id' => 2,
                'text' => 'Home Short Info',
                'created_at' => '2017-10-23 18:01:01',
                'updated_at' => '2017-10-23 18:01:01',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 25,
                'custom_module_id' => 13,
                'lang_id' => 1,
                'text' => 'home page courses',
                'created_at' => '2017-10-25 16:18:21',
                'updated_at' => '2017-10-25 16:18:21',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 26,
                'custom_module_id' => 13,
                'lang_id' => 2,
                'text' => 'home page courses',
                'created_at' => '2017-10-25 16:18:21',
                'updated_at' => '2017-10-25 16:18:21',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 27,
                'custom_module_id' => 14,
                'lang_id' => 1,
                'text' => 'Home Vertical Slider',
                'created_at' => '2017-10-25 19:27:30',
                'updated_at' => '2017-10-25 19:27:30',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 28,
                'custom_module_id' => 14,
                'lang_id' => 2,
                'text' => 'Home Vertical Slider',
                'created_at' => '2017-10-25 19:27:30',
                'updated_at' => '2017-10-25 19:27:30',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 29,
                'custom_module_id' => 15,
                'lang_id' => 1,
                'text' => 'Small Gallery',
                'created_at' => '2017-10-27 07:20:04',
                'updated_at' => '2017-10-27 07:20:04',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 30,
                'custom_module_id' => 15,
                'lang_id' => 2,
                'text' => 'Small Gallery',
                'created_at' => '2017-10-27 07:20:05',
                'updated_at' => '2017-10-27 07:20:05',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 31,
                'custom_module_id' => 16,
                'lang_id' => 1,
                'text' => 'Why Choose Us?',
                'created_at' => '2017-10-29 06:07:31',
                'updated_at' => '2017-10-29 06:07:31',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 32,
                'custom_module_id' => 16,
                'lang_id' => 2,
                'text' => 'Why Choose Us?',
                'created_at' => '2017-10-29 06:07:31',
                'updated_at' => '2017-10-29 06:07:31',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 33,
                'custom_module_id' => 17,
                'lang_id' => 1,
                'text' => 'Instructors',
                'created_at' => '2017-10-29 20:00:28',
                'updated_at' => '2017-10-29 20:00:28',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 34,
                'custom_module_id' => 17,
                'lang_id' => 2,
                'text' => 'المدرسون',
                'created_at' => '2017-10-29 20:00:28',
                'updated_at' => '2017-10-29 20:00:28',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 35,
                'custom_module_id' => 18,
                'lang_id' => 1,
                'text' => 'University Message',
                'created_at' => '2017-10-31 17:27:47',
                'updated_at' => '2017-10-31 17:27:47',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 36,
                'custom_module_id' => 18,
                'lang_id' => 2,
                'text' => 'رسالة الجامعة',
                'created_at' => '2017-10-31 17:27:47',
                'updated_at' => '2017-10-31 17:27:47',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 37,
                'custom_module_id' => 19,
                'lang_id' => 1,
                'text' => 'University Council',
                'created_at' => '2017-10-31 19:56:17',
                'updated_at' => '2017-10-31 19:56:17',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 38,
                'custom_module_id' => 19,
                'lang_id' => 2,
                'text' => 'مجلس الجامعة',
                'created_at' => '2017-10-31 19:56:17',
                'updated_at' => '2017-10-31 19:56:17',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 39,
                'custom_module_id' => 20,
                'lang_id' => 1,
                'text' => 'OUR FEATURES',
                'created_at' => '2017-10-31 20:06:14',
                'updated_at' => '2017-10-31 20:06:14',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 40,
                'custom_module_id' => 20,
                'lang_id' => 2,
                'text' => 'OUR FEATURES',
                'created_at' => '2017-10-31 20:06:14',
                'updated_at' => '2017-10-31 20:06:14',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 41,
                'custom_module_id' => 21,
                'lang_id' => 1,
                'text' => 'Trusted Council',
                'created_at' => '2017-11-03 05:07:56',
                'updated_at' => '2017-11-03 05:07:56',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 42,
                'custom_module_id' => 21,
                'lang_id' => 2,
                'text' => 'مجلس الامناء',
                'created_at' => '2017-11-03 05:07:56',
                'updated_at' => '2017-11-03 05:07:56',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 43,
                'custom_module_id' => 22,
                'lang_id' => 1,
                'text' => 'university partner',
                'created_at' => '2017-11-05 19:49:54',
                'updated_at' => '2017-11-05 19:49:54',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 44,
                'custom_module_id' => 22,
                'lang_id' => 2,
                'text' => 'شركاء الجامعة',
                'created_at' => '2017-11-05 19:49:54',
                'updated_at' => '2017-11-05 19:49:54',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 45,
                'custom_module_id' => 23,
                'lang_id' => 1,
                'text' => 'Person',
                'created_at' => '2017-11-15 19:04:08',
                'updated_at' => '2017-11-15 19:04:08',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 46,
                'custom_module_id' => 23,
                'lang_id' => 2,
                'text' => 'شخص',
                'created_at' => '2017-11-15 19:04:08',
                'updated_at' => '2017-11-15 19:04:08',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 49,
                'custom_module_id' => 25,
                'lang_id' => 1,
                'text' => 'Degrees Table',
                'created_at' => '2017-11-17 18:52:26',
                'updated_at' => '2017-11-17 18:52:26',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 50,
                'custom_module_id' => 25,
                'lang_id' => 2,
                'text' => 'جدول الاختصاصات',
                'created_at' => '2017-11-17 18:52:26',
                'updated_at' => '2017-11-17 18:52:26',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 51,
                'custom_module_id' => 26,
                'lang_id' => 1,
                'text' => 'Courses Table',
                'created_at' => '2017-11-22 18:53:28',
                'updated_at' => '2017-11-22 18:53:28',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 52,
                'custom_module_id' => 26,
                'lang_id' => 2,
                'text' => 'جدول المقررات',
                'created_at' => '2017-11-22 18:53:28',
                'updated_at' => '2017-11-22 18:53:28',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 53,
                'custom_module_id' => 27,
                'lang_id' => 1,
                'text' => 'Study Plan',
                'created_at' => '2017-12-01 17:52:01',
                'updated_at' => '2017-12-01 17:52:01',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 54,
                'custom_module_id' => 27,
                'lang_id' => 2,
                'text' => 'الخطة الدرسية',
                'created_at' => '2017-12-01 17:52:01',
                'updated_at' => '2017-12-01 17:52:01',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 55,
                'custom_module_id' => 28,
                'lang_id' => 1,
                'text' => 'Faculty Instructors',
                'created_at' => '2017-12-09 17:46:13',
                'updated_at' => '2017-12-09 17:46:13',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 56,
                'custom_module_id' => 28,
                'lang_id' => 2,
                'text' => 'مدرسو الكلية',
                'created_at' => '2017-12-09 17:46:13',
                'updated_at' => '2017-12-09 17:46:13',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}