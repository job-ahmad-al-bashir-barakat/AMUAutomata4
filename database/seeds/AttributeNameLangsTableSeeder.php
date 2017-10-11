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
                'created_at' => '2017-07-22 08:43:51',
                'updated_at' => '2017-07-22 08:43:51',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'attribute_id' => 1,
                'lang_id' => 2,
                'text' => 'الحالة',
                'created_at' => '2017-07-22 08:43:51',
                'updated_at' => '2017-07-22 08:43:51',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'attribute_id' => 2,
                'lang_id' => 1,
                'text' => 'Width',
                'created_at' => '2017-07-22 08:44:19',
                'updated_at' => '2017-07-22 08:44:19',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'attribute_id' => 2,
                'lang_id' => 2,
                'text' => 'العرض',
                'created_at' => '2017-07-22 08:44:19',
                'updated_at' => '2017-07-22 08:44:19',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'attribute_id' => 3,
                'lang_id' => 1,
                'text' => 'Limit',
                'created_at' => '2017-07-22 08:44:43',
                'updated_at' => '2017-07-22 08:44:43',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'attribute_id' => 3,
                'lang_id' => 2,
                'text' => 'الحدود',
                'created_at' => '2017-07-22 08:44:43',
                'updated_at' => '2017-07-22 08:44:43',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'attribute_id' => 4,
                'lang_id' => 1,
                'text' => 'Text Editor',
                'created_at' => '2017-07-22 08:45:14',
                'updated_at' => '2017-07-22 08:45:14',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'attribute_id' => 4,
                'lang_id' => 2,
                'text' => 'محرر نصوص',
                'created_at' => '2017-07-22 08:45:14',
                'updated_at' => '2017-07-22 08:45:14',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'attribute_id' => 5,
                'lang_id' => 1,
                'text' => 'Sliders',
                'created_at' => '2017-09-09 15:19:11',
                'updated_at' => '2017-09-09 15:19:11',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'attribute_id' => 5,
                'lang_id' => 2,
                'text' => 'شرائح',
                'created_at' => '2017-09-09 15:19:11',
                'updated_at' => '2017-09-09 15:19:11',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'attribute_id' => 6,
                'lang_id' => 1,
                'text' => 'Blocks',
                'created_at' => '2017-09-10 16:07:58',
                'updated_at' => '2017-09-10 16:07:58',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'attribute_id' => 6,
                'lang_id' => 2,
                'text' => 'كتل',
                'created_at' => '2017-09-10 16:07:58',
                'updated_at' => '2017-09-10 16:07:58',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'attribute_id' => 7,
                'lang_id' => 1,
                'text' => 'Courses',
                'created_at' => '2017-09-13 17:42:04',
                'updated_at' => '2017-09-13 17:42:04',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'attribute_id' => 7,
                'lang_id' => 2,
                'text' => 'المقررات',
                'created_at' => '2017-09-13 17:42:04',
                'updated_at' => '2017-09-13 17:42:04',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'attribute_id' => 8,
                'lang_id' => 1,
                'text' => 'Show',
                'created_at' => '2017-09-13 18:23:39',
                'updated_at' => '2017-09-13 18:23:39',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'attribute_id' => 8,
                'lang_id' => 2,
                'text' => 'اظهار',
                'created_at' => '2017-09-13 18:23:40',
                'updated_at' => '2017-09-13 18:23:40',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'attribute_id' => 9,
                'lang_id' => 1,
                'text' => 'Persons',
                'created_at' => '2017-09-20 18:02:58',
                'updated_at' => '2017-09-20 18:02:58',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'attribute_id' => 9,
                'lang_id' => 2,
                'text' => 'أشخاص',
                'created_at' => '2017-09-20 18:02:58',
                'updated_at' => '2017-09-20 18:02:58',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'attribute_id' => 10,
                'lang_id' => 1,
                'text' => 'Title',
                'created_at' => '2017-09-22 18:17:53',
                'updated_at' => '2017-09-22 18:17:53',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'attribute_id' => 10,
                'lang_id' => 2,
                'text' => 'عنوان',
                'created_at' => '2017-09-22 18:17:53',
                'updated_at' => '2017-09-22 18:17:53',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'attribute_id' => 11,
                'lang_id' => 1,
                'text' => 'Icon',
                'created_at' => '2017-09-22 18:19:14',
                'updated_at' => '2017-09-22 18:19:14',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'attribute_id' => 11,
                'lang_id' => 2,
                'text' => 'ايقونه',
                'created_at' => '2017-09-22 18:19:14',
                'updated_at' => '2017-09-22 18:19:14',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'attribute_id' => 12,
                'lang_id' => 1,
                'text' => 'Vertical Sliders',
                'created_at' => '2017-09-24 18:32:27',
                'updated_at' => '2017-09-24 18:32:27',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'attribute_id' => 12,
                'lang_id' => 2,
                'text' => 'شرائح افقيه',
                'created_at' => '2017-09-24 18:32:27',
                'updated_at' => '2017-09-24 18:32:27',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'attribute_id' => 13,
                'lang_id' => 1,
                'text' => 'Images',
                'created_at' => '2017-09-29 04:56:23',
                'updated_at' => '2017-09-29 04:56:23',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'attribute_id' => 13,
                'lang_id' => 2,
                'text' => 'صور',
                'created_at' => '2017-09-29 04:56:23',
                'updated_at' => '2017-09-29 04:56:23',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'attribute_id' => 14,
                'lang_id' => 1,
                'text' => 'Link Text',
                'created_at' => '2017-09-29 06:11:00',
                'updated_at' => '2017-09-29 06:13:59',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'attribute_id' => 14,
                'lang_id' => 2,
                'text' => 'نص الرابط',
                'created_at' => '2017-09-29 06:11:00',
                'updated_at' => '2017-09-29 06:13:59',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'attribute_id' => 15,
                'lang_id' => 1,
                'text' => 'Url',
                'created_at' => '2017-09-29 06:14:33',
                'updated_at' => '2017-09-29 06:14:33',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'attribute_id' => 15,
                'lang_id' => 2,
                'text' => 'رابط',
                'created_at' => '2017-09-29 06:14:33',
                'updated_at' => '2017-09-29 06:14:33',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'attribute_id' => 16,
                'lang_id' => 1,
                'text' => 'Page',
                'created_at' => '2017-09-30 16:39:06',
                'updated_at' => '2017-09-30 16:49:09',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'attribute_id' => 16,
                'lang_id' => 2,
                'text' => 'الصفحة',
                'created_at' => '2017-09-30 16:39:06',
                'updated_at' => '2017-09-30 16:49:09',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}