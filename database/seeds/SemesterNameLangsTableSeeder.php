<?php

use Illuminate\Database\Seeder;

class SemesterNameLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('semester_name_langs')->delete();
        
        \DB::table('semester_name_langs')->insert(array (
            0 => 
            array (
                'id' => 15,
                'semester_id' => 8,
                'lang_id' => 1,
                'text' => 'First Semester',
                'created_at' => '2017-11-28 19:50:25',
                'updated_at' => '2017-11-28 19:50:25',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 16,
                'semester_id' => 8,
                'lang_id' => 2,
                'text' => 'الفصل الأول',
                'created_at' => '2017-11-28 19:50:25',
                'updated_at' => '2017-11-28 19:50:25',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 17,
                'semester_id' => 9,
                'lang_id' => 1,
                'text' => 'Second Semester',
                'created_at' => '2017-11-28 19:50:46',
                'updated_at' => '2017-11-28 19:50:46',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 18,
                'semester_id' => 9,
                'lang_id' => 2,
                'text' => 'الفصل الثاني',
                'created_at' => '2017-11-28 19:50:46',
                'updated_at' => '2017-11-28 19:50:46',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}