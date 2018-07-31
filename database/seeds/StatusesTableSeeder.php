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
                'created_at' => '2018-05-13 15:37:15',
                'updated_at' => '2018-05-13 15:37:15',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2018-05-13 15:37:58',
                'updated_at' => '2018-05-13 15:37:58',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2018-05-13 15:38:23',
                'updated_at' => '2018-05-13 15:38:23',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}