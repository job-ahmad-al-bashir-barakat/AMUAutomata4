<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('courses')->delete();
        
        \DB::table('courses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'C#',
                'credit' => 10,
                'faculty_id' => 6,
                'department_id' => 2,
                'degree_id' => 3,
                'semester_id' => NULL,
                'faculty_study_year_id' => NULL,
                'image_265_id' => NULL,
                'created_at' => '2017-11-28 20:09:07',
                'updated_at' => '2017-11-28 20:09:07',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'O320',
                'credit' => 20,
                'faculty_id' => 6,
                'department_id' => 2,
                'degree_id' => 3,
                'semester_id' => NULL,
                'faculty_study_year_id' => NULL,
                'image_265_id' => NULL,
                'created_at' => '2017-11-28 20:10:06',
                'updated_at' => '2017-11-28 20:10:06',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'ORC220',
                'credit' => 30,
                'faculty_id' => 6,
                'department_id' => 2,
                'degree_id' => 3,
                'semester_id' => NULL,
                'faculty_study_year_id' => NULL,
                'image_265_id' => NULL,
                'created_at' => '2017-11-28 20:10:42',
                'updated_at' => '2017-11-28 20:10:42',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 'L110',
                'credit' => 10,
                'faculty_id' => 6,
                'department_id' => 2,
                'degree_id' => 3,
                'semester_id' => NULL,
                'faculty_study_year_id' => NULL,
                'image_265_id' => NULL,
                'created_at' => '2017-11-28 20:11:15',
                'updated_at' => '2017-11-28 20:11:15',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'code' => 'H100',
                'credit' => 30,
                'faculty_id' => 6,
                'department_id' => 2,
                'degree_id' => 3,
                'semester_id' => NULL,
                'faculty_study_year_id' => NULL,
                'image_265_id' => NULL,
                'created_at' => '2017-11-28 20:12:04',
                'updated_at' => '2017-11-28 20:12:04',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'code' => 'J220',
                'credit' => 10,
                'faculty_id' => 6,
                'department_id' => 2,
                'degree_id' => 3,
                'semester_id' => NULL,
                'faculty_study_year_id' => NULL,
                'image_265_id' => NULL,
                'created_at' => '2017-11-28 20:12:40',
                'updated_at' => '2017-11-28 20:12:40',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}