<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('departments')->delete();
        
        \DB::table('departments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'faculty_id' => 6,
                'created_at' => '2017-07-05 16:58:17',
                'updated_at' => '2017-08-28 20:09:06',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'faculty_id' => 6,
                'created_at' => '2017-07-05 16:58:18',
                'updated_at' => '2017-08-28 20:09:29',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'faculty_id' => 6,
                'created_at' => '2017-07-05 16:58:26',
                'updated_at' => '2017-08-28 20:09:51',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'faculty_id' => 7,
                'created_at' => '2017-08-28 20:25:54',
                'updated_at' => '2017-08-28 20:25:54',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}