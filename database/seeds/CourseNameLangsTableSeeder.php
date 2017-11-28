<?php

use Illuminate\Database\Seeder;

class CourseNameLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('course_name_langs')->delete();
        
        \DB::table('course_name_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'course_id' => 1,
                'lang_id' => 1,
                'text' => 'C#',
                'created_at' => '2017-11-28 20:09:07',
                'updated_at' => '2017-11-28 20:09:07',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'course_id' => 1,
                'lang_id' => 2,
                'text' => 'C#',
                'created_at' => '2017-11-28 20:09:07',
                'updated_at' => '2017-11-28 20:09:07',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'course_id' => 2,
                'lang_id' => 1,
                'text' => 'Oracle',
                'created_at' => '2017-11-28 20:10:06',
                'updated_at' => '2017-11-28 20:10:06',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'course_id' => 2,
                'lang_id' => 2,
                'text' => 'اوراكل',
                'created_at' => '2017-11-28 20:10:06',
                'updated_at' => '2017-11-28 20:10:06',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'course_id' => 3,
                'lang_id' => 1,
                'text' => 'Oracle2',
                'created_at' => '2017-11-28 20:10:42',
                'updated_at' => '2017-11-28 20:10:42',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'course_id' => 3,
                'lang_id' => 2,
                'text' => 'Oracle2',
                'created_at' => '2017-11-28 20:10:42',
                'updated_at' => '2017-11-28 20:10:42',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'course_id' => 4,
                'lang_id' => 1,
                'text' => 'Laravel',
                'created_at' => '2017-11-28 20:11:16',
                'updated_at' => '2017-11-28 20:11:16',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'course_id' => 4,
                'lang_id' => 2,
                'text' => 'لارافل',
                'created_at' => '2017-11-28 20:11:16',
                'updated_at' => '2017-11-28 20:11:16',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'course_id' => 5,
                'lang_id' => 1,
                'text' => 'Html',
                'created_at' => '2017-11-28 20:12:04',
                'updated_at' => '2017-11-28 20:12:04',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'course_id' => 5,
                'lang_id' => 2,
                'text' => 'Html',
                'created_at' => '2017-11-28 20:12:04',
                'updated_at' => '2017-11-28 20:12:04',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'course_id' => 6,
                'lang_id' => 1,
                'text' => 'Javascript',
                'created_at' => '2017-11-28 20:12:40',
                'updated_at' => '2017-11-28 20:12:40',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'course_id' => 6,
                'lang_id' => 2,
                'text' => 'جافا سكريبت',
                'created_at' => '2017-11-28 20:12:40',
                'updated_at' => '2017-11-28 20:12:40',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}