<?php

use Illuminate\Database\Seeder;

class DegreesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('degrees')->delete();
        
        \DB::table('degrees')->insert(array (
            0 => 
            array (
                'id' => 1,
                'faculty_id' => 6,
                'created_at' => '2017-07-05 17:05:50',
                'updated_at' => '2017-08-28 20:12:21',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'faculty_id' => 6,
                'created_at' => '2017-07-05 17:05:58',
                'updated_at' => '2017-08-28 20:12:42',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'faculty_id' => 6,
                'created_at' => '2017-08-28 20:15:02',
                'updated_at' => '2017-08-28 20:15:02',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'faculty_id' => 6,
                'created_at' => '2017-08-28 20:15:09',
                'updated_at' => '2017-08-28 20:15:09',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'faculty_id' => 7,
                'created_at' => '2017-08-28 20:26:24',
                'updated_at' => '2017-08-28 20:26:24',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}