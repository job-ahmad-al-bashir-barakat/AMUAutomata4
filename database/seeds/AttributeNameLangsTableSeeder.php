<?php

use Illuminate\Database\Seeder;

class AttributeNameLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attribute_name_langs')->delete();
        
        \DB::table('attribute_name_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'attribute_id' => 1,
                'lang_id' => 1,
                'text' => 'Status',
                'created_at' => '2017-07-22 05:43:51',
                'updated_at' => '2017-07-22 05:43:51',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'attribute_id' => 1,
                'lang_id' => 2,
                'text' => 'الحالة',
                'created_at' => '2017-07-22 05:43:51',
                'updated_at' => '2017-07-22 05:43:51',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'attribute_id' => 2,
                'lang_id' => 1,
                'text' => 'Width',
                'created_at' => '2017-07-22 05:44:19',
                'updated_at' => '2017-07-22 05:44:19',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'attribute_id' => 2,
                'lang_id' => 2,
                'text' => 'العرض',
                'created_at' => '2017-07-22 05:44:19',
                'updated_at' => '2017-07-22 05:44:19',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'attribute_id' => 3,
                'lang_id' => 1,
                'text' => 'Limit',
                'created_at' => '2017-07-22 05:44:43',
                'updated_at' => '2017-07-22 05:44:43',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'attribute_id' => 3,
                'lang_id' => 2,
                'text' => 'الحدود',
                'created_at' => '2017-07-22 05:44:43',
                'updated_at' => '2017-07-22 05:44:43',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'attribute_id' => 4,
                'lang_id' => 1,
                'text' => 'Text Editor',
                'created_at' => '2017-07-22 05:45:14',
                'updated_at' => '2017-07-22 05:45:14',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'attribute_id' => 4,
                'lang_id' => 2,
                'text' => 'محرر نصوص',
                'created_at' => '2017-07-22 05:45:14',
                'updated_at' => '2017-07-22 05:45:14',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'attribute_id' => 5,
                'lang_id' => 1,
                'text' => 'Sliders',
                'created_at' => '2017-09-09 12:19:11',
                'updated_at' => '2017-09-09 12:19:11',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'attribute_id' => 5,
                'lang_id' => 2,
                'text' => 'شرائح',
                'created_at' => '2017-09-09 12:19:11',
                'updated_at' => '2017-09-09 12:19:11',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'attribute_id' => 6,
                'lang_id' => 1,
                'text' => 'Blocks',
                'created_at' => '2017-09-10 13:07:58',
                'updated_at' => '2017-09-10 13:07:58',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'attribute_id' => 6,
                'lang_id' => 2,
                'text' => 'كتل',
                'created_at' => '2017-09-10 13:07:58',
                'updated_at' => '2017-09-10 13:07:58',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'attribute_id' => 7,
                'lang_id' => 1,
                'text' => 'Courses',
                'created_at' => '2017-09-13 14:42:04',
                'updated_at' => '2017-09-13 14:42:04',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'attribute_id' => 7,
                'lang_id' => 2,
                'text' => 'المقررات',
                'created_at' => '2017-09-13 14:42:04',
                'updated_at' => '2017-09-13 14:42:04',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'attribute_id' => 8,
                'lang_id' => 1,
                'text' => 'Show',
                'created_at' => '2017-09-13 15:23:39',
                'updated_at' => '2017-09-13 15:23:39',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'attribute_id' => 8,
                'lang_id' => 2,
                'text' => 'اظهار',
                'created_at' => '2017-09-13 15:23:40',
                'updated_at' => '2017-09-13 15:23:40',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'attribute_id' => 9,
                'lang_id' => 1,
                'text' => 'Persons',
                'created_at' => '2017-09-20 15:02:58',
                'updated_at' => '2017-09-20 15:02:58',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'attribute_id' => 9,
                'lang_id' => 2,
                'text' => 'أشخاص',
                'created_at' => '2017-09-20 15:02:58',
                'updated_at' => '2017-09-20 15:02:58',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'attribute_id' => 10,
                'lang_id' => 1,
                'text' => 'Title',
                'created_at' => '2017-09-22 15:17:53',
                'updated_at' => '2017-09-22 15:17:53',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'attribute_id' => 10,
                'lang_id' => 2,
                'text' => 'عنوان',
                'created_at' => '2017-09-22 15:17:53',
                'updated_at' => '2017-09-22 15:17:53',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'attribute_id' => 11,
                'lang_id' => 1,
                'text' => 'Icon',
                'created_at' => '2017-09-22 15:19:14',
                'updated_at' => '2017-09-22 15:19:14',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'attribute_id' => 11,
                'lang_id' => 2,
                'text' => 'ايقونه',
                'created_at' => '2017-09-22 15:19:14',
                'updated_at' => '2017-09-22 15:19:14',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'attribute_id' => 12,
                'lang_id' => 1,
                'text' => 'Vertical Sliders',
                'created_at' => '2017-09-24 15:32:27',
                'updated_at' => '2017-09-24 15:32:27',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'attribute_id' => 12,
                'lang_id' => 2,
                'text' => 'شرائح افقيه',
                'created_at' => '2017-09-24 15:32:27',
                'updated_at' => '2017-09-24 15:32:27',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'attribute_id' => 13,
                'lang_id' => 1,
                'text' => 'Images',
                'created_at' => '2017-09-29 01:56:23',
                'updated_at' => '2017-09-29 01:56:23',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'attribute_id' => 13,
                'lang_id' => 2,
                'text' => 'صور',
                'created_at' => '2017-09-29 01:56:23',
                'updated_at' => '2017-09-29 01:56:23',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'attribute_id' => 14,
                'lang_id' => 1,
                'text' => 'Link Text',
                'created_at' => '2017-09-29 03:11:00',
                'updated_at' => '2017-09-29 03:13:59',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'attribute_id' => 14,
                'lang_id' => 2,
                'text' => 'نص الرابط',
                'created_at' => '2017-09-29 03:11:00',
                'updated_at' => '2017-09-29 03:13:59',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'attribute_id' => 15,
                'lang_id' => 1,
                'text' => 'Url',
                'created_at' => '2017-09-29 03:14:33',
                'updated_at' => '2017-09-29 03:14:33',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'attribute_id' => 15,
                'lang_id' => 2,
                'text' => 'رابط',
                'created_at' => '2017-09-29 03:14:33',
                'updated_at' => '2017-09-29 03:14:33',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'attribute_id' => 16,
                'lang_id' => 1,
                'text' => 'Page',
                'created_at' => '2017-09-30 13:39:06',
                'updated_at' => '2017-09-30 13:49:09',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'attribute_id' => 16,
                'lang_id' => 2,
                'text' => 'الصفحة',
                'created_at' => '2017-09-30 13:39:06',
                'updated_at' => '2017-09-30 13:49:09',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 35,
                'attribute_id' => 17,
                'lang_id' => 1,
                'text' => 'Steps',
                'created_at' => '2017-10-16 13:31:48',
                'updated_at' => '2017-10-16 13:31:48',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 36,
                'attribute_id' => 17,
                'lang_id' => 2,
                'text' => 'خطوات',
                'created_at' => '2017-10-16 13:31:48',
                'updated_at' => '2017-10-16 13:31:48',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 37,
                'attribute_id' => 18,
                'lang_id' => 1,
                'text' => 'Text Card #1',
                'created_at' => '2017-10-16 14:56:40',
                'updated_at' => '2017-10-17 15:57:38',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 38,
                'attribute_id' => 18,
                'lang_id' => 2,
                'text' => 'بطاقات النصوص #1',
                'created_at' => '2017-10-16 14:56:40',
                'updated_at' => '2017-10-17 15:57:38',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 39,
                'attribute_id' => 19,
                'lang_id' => 1,
                'text' => 'URL Text',
                'created_at' => '2017-10-31 16:39:04',
                'updated_at' => '2017-10-31 16:39:04',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 40,
                'attribute_id' => 19,
                'lang_id' => 2,
                'text' => 'نص الرابط',
                'created_at' => '2017-10-31 16:39:04',
                'updated_at' => '2017-10-31 16:39:04',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 41,
                'attribute_id' => 20,
                'lang_id' => 1,
                'text' => 'Rotate',
                'created_at' => '2018-03-29 16:34:37',
                'updated_at' => '2018-03-29 16:34:37',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 42,
                'attribute_id' => 20,
                'lang_id' => 2,
                'text' => 'تدوير',
                'created_at' => '2018-03-29 16:34:38',
                'updated_at' => '2018-03-29 16:34:38',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 43,
                'attribute_id' => 21,
                'lang_id' => 1,
                'text' => 'Galleries',
                'created_at' => '2018-03-31 16:37:45',
                'updated_at' => '2018-03-31 16:37:45',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 44,
                'attribute_id' => 21,
                'lang_id' => 2,
                'text' => 'معارض الصور',
                'created_at' => '2018-03-31 16:37:45',
                'updated_at' => '2018-03-31 16:37:45',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 45,
                'attribute_id' => 22,
                'lang_id' => 1,
                'text' => 'Geolocation',
                'created_at' => '2018-04-11 15:51:11',
                'updated_at' => '2018-04-11 15:51:11',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 46,
                'attribute_id' => 22,
                'lang_id' => 2,
                'text' => 'الموقع الجغرافي',
                'created_at' => '2018-04-11 15:51:11',
                'updated_at' => '2018-04-11 15:51:11',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 47,
                'attribute_id' => 23,
                'lang_id' => 1,
                'text' => 'Image',
                'created_at' => '2018-05-20 12:15:56',
                'updated_at' => '2018-05-20 12:15:56',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 48,
                'attribute_id' => 23,
                'lang_id' => 2,
                'text' => 'صورة',
                'created_at' => '2018-05-20 12:15:56',
                'updated_at' => '2018-05-20 12:15:56',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 49,
                'attribute_id' => 24,
                'lang_id' => 1,
                'text' => 'Course',
                'created_at' => '2018-05-20 12:25:51',
                'updated_at' => '2018-05-20 12:25:51',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 50,
                'attribute_id' => 24,
                'lang_id' => 2,
                'text' => 'مقرر',
                'created_at' => '2018-05-20 12:25:51',
                'updated_at' => '2018-05-20 12:25:51',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 51,
                'attribute_id' => 25,
                'lang_id' => 1,
                'text' => 'Faculty',
                'created_at' => '2018-12-27 01:16:05',
                'updated_at' => '2018-12-27 01:16:05',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 52,
                'attribute_id' => 25,
                'lang_id' => 2,
                'text' => 'الكلية',
                'created_at' => '2018-12-27 01:16:05',
                'updated_at' => '2018-12-27 01:16:05',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 53,
                'attribute_id' => 26,
                'lang_id' => 1,
                'text' => 'Events Groups',
                'created_at' => '2018-12-30 05:44:44',
                'updated_at' => '2018-12-30 05:44:44',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 54,
                'attribute_id' => 26,
                'lang_id' => 2,
                'text' => 'مجموعات الاحداث',
                'created_at' => '2018-12-30 05:44:44',
                'updated_at' => '2018-12-30 05:44:44',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 55,
                'attribute_id' => 27,
                'lang_id' => 1,
                'text' => 'Height',
                'created_at' => '2019-01-16 11:01:55',
                'updated_at' => '2019-01-16 11:01:55',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 56,
                'attribute_id' => 27,
                'lang_id' => 2,
                'text' => 'الارتفاع',
                'created_at' => '2019-01-16 11:01:55',
                'updated_at' => '2019-01-16 11:01:55',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 57,
                'attribute_id' => 28,
                'lang_id' => 1,
                'text' => 'Image Limit',
                'created_at' => '2019-01-17 04:01:19',
                'updated_at' => '2019-01-17 04:01:19',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 58,
                'attribute_id' => 28,
                'lang_id' => 2,
                'text' => 'عدد الصور',
                'created_at' => '2019-01-17 04:01:19',
                'updated_at' => '2019-01-17 04:01:19',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 59,
                'attribute_id' => 29,
                'lang_id' => 1,
                'text' => 'Cards',
                'created_at' => '2019-01-22 03:55:54',
                'updated_at' => '2019-01-22 03:55:54',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 60,
                'attribute_id' => 29,
                'lang_id' => 2,
                'text' => 'البطاقات',
                'created_at' => '2019-01-22 03:55:54',
                'updated_at' => '2019-01-22 03:55:54',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 61,
                'attribute_id' => 30,
                'lang_id' => 1,
                'text' => 'LInks',
                'created_at' => '2019-01-28 06:53:00',
                'updated_at' => '2019-01-28 06:53:00',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 62,
                'attribute_id' => 30,
                'lang_id' => 2,
                'text' => 'روابط',
                'created_at' => '2019-01-28 06:53:00',
                'updated_at' => '2019-01-28 06:53:00',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 63,
                'attribute_id' => 31,
                'lang_id' => 1,
                'text' => 'Video',
                'created_at' => '2019-03-23 09:27:52',
                'updated_at' => '2019-03-23 09:27:52',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 64,
                'attribute_id' => 31,
                'lang_id' => 2,
                'text' => 'فيديو',
                'created_at' => '2019-03-23 09:27:52',
                'updated_at' => '2019-03-23 09:27:52',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 65,
                'attribute_id' => 32,
                'lang_id' => 1,
                'text' => 'Office',
                'created_at' => '2019-05-27 07:15:40',
                'updated_at' => '2019-05-27 07:15:40',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 66,
                'attribute_id' => 32,
                'lang_id' => 2,
                'text' => 'المكتب',
                'created_at' => '2019-05-27 07:15:41',
                'updated_at' => '2019-05-27 07:15:41',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}