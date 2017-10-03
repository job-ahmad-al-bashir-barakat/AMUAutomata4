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
                'module_id' => 2,
                'lang_id' => 1,
                'text' => 'Text Editor',
                'created_at' => '2017-07-22 08:56:29',
                'updated_at' => '2017-07-22 08:56:29',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'module_id' => 2,
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
                'module_id' => 11,
                'lang_id' => 1,
                'text' => 'Short Info',
                'created_at' => '2017-09-30 16:48:37',
                'updated_at' => '2017-09-30 16:48:37',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 26,
                'module_id' => 11,
                'lang_id' => 2,
                'text' => 'معلومات قصير',
                'created_at' => '2017-09-30 16:48:37',
                'updated_at' => '2017-09-30 16:48:37',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}