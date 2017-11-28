<?php

use Illuminate\Database\Seeder;

class StudyYearNameLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('study_year_name_langs')->delete();
        
        \DB::table('study_year_name_langs')->insert(array (
            0 => 
            array (
                'id' => 3,
                'study_year_id' => 2,
                'lang_id' => 1,
                'text' => 'First Year',
                'created_at' => '2017-11-28 19:54:22',
                'updated_at' => '2017-11-28 19:54:22',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'study_year_id' => 2,
                'lang_id' => 2,
                'text' => 'السنة الأولى',
                'created_at' => '2017-11-28 19:54:22',
                'updated_at' => '2017-11-28 19:54:22',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 5,
                'study_year_id' => 3,
                'lang_id' => 1,
                'text' => 'Second Year',
                'created_at' => '2017-11-28 19:54:47',
                'updated_at' => '2017-11-28 19:54:47',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 6,
                'study_year_id' => 3,
                'lang_id' => 2,
                'text' => 'السنة الثانية',
                'created_at' => '2017-11-28 19:54:47',
                'updated_at' => '2017-11-28 19:54:47',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}