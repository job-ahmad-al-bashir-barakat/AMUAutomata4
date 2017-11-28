<?php

use Illuminate\Database\Seeder;

class StudyYearsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('study_years')->delete();
        
        \DB::table('study_years')->insert(array (
            0 => 
            array (
                'id' => 2,
                'created_at' => '2017-11-28 19:54:22',
                'updated_at' => '2017-11-28 19:54:22',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'created_at' => '2017-11-28 19:54:47',
                'updated_at' => '2017-11-28 19:54:47',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}