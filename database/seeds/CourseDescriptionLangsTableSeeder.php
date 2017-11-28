<?php

use Illuminate\Database\Seeder;

class CourseDescriptionLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('course_description_langs')->delete();
        
        \DB::table('course_description_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'lang_id' => 1,
                'course_id' => 1,
                'text' => 'C#',
                'created_at' => '2017-11-28 20:09:07',
                'updated_at' => '2017-11-28 20:09:07',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'lang_id' => 2,
                'course_id' => 1,
                'text' => 'C#',
                'created_at' => '2017-11-28 20:09:07',
                'updated_at' => '2017-11-28 20:09:07',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'lang_id' => 1,
                'course_id' => 2,
                'text' => '-',
                'created_at' => '2017-11-28 20:10:06',
                'updated_at' => '2017-11-28 20:10:06',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'lang_id' => 2,
                'course_id' => 2,
                'text' => '-',
                'created_at' => '2017-11-28 20:10:06',
                'updated_at' => '2017-11-28 20:10:06',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'lang_id' => 1,
                'course_id' => 3,
                'text' => '-',
                'created_at' => '2017-11-28 20:10:42',
                'updated_at' => '2017-11-28 20:10:42',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'lang_id' => 2,
                'course_id' => 3,
                'text' => '-',
                'created_at' => '2017-11-28 20:10:42',
                'updated_at' => '2017-11-28 20:10:42',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'lang_id' => 1,
                'course_id' => 4,
                'text' => '-',
                'created_at' => '2017-11-28 20:11:16',
                'updated_at' => '2017-11-28 20:11:16',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'lang_id' => 2,
                'course_id' => 4,
                'text' => '-',
                'created_at' => '2017-11-28 20:11:16',
                'updated_at' => '2017-11-28 20:11:16',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'lang_id' => 1,
                'course_id' => 5,
                'text' => '-',
                'created_at' => '2017-11-28 20:12:04',
                'updated_at' => '2017-11-28 20:12:04',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'lang_id' => 2,
                'course_id' => 5,
                'text' => '-',
                'created_at' => '2017-11-28 20:12:04',
                'updated_at' => '2017-11-28 20:12:04',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'lang_id' => 1,
                'course_id' => 6,
                'text' => '-',
                'created_at' => '2017-11-28 20:12:40',
                'updated_at' => '2017-11-28 20:12:40',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'lang_id' => 2,
                'course_id' => 6,
                'text' => '-',
                'created_at' => '2017-11-28 20:12:40',
                'updated_at' => '2017-11-28 20:12:40',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}