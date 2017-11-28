<?php

use Illuminate\Database\Seeder;

class FacultyStudyYearTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faculty_study_year')->delete();
        
        \DB::table('faculty_study_year')->insert(array (
            0 => 
            array (
                'id' => 2,
                'faculty_id' => 6,
                'study_year_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'faculty_id' => 6,
                'study_year_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'faculty_id' => 7,
                'study_year_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'faculty_id' => 7,
                'study_year_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}