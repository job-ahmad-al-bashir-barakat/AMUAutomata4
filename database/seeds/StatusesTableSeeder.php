<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('statuses')->delete();
        
        \DB::table('statuses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2018-05-13 06:37:15',
                'updated_at' => '2018-05-13 06:37:15',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2018-05-13 06:37:58',
                'updated_at' => '2018-05-13 06:37:58',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2018-05-13 06:38:23',
                'updated_at' => '2018-05-13 06:38:23',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => '2018-10-15 03:59:39',
                'updated_at' => '2018-10-15 04:03:06',
                'deleted_at' => '2018-10-15 04:03:06',
            ),
        ));
        
        
    }
}