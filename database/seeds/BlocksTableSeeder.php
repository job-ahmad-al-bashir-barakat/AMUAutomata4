<?php

use Illuminate\Database\Seeder;

class BlocksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blocks')->delete();
        
        \DB::table('blocks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2017-09-10 06:06:03',
                'updated_at' => '2018-11-05 06:48:29',
                'deleted_at' => '2018-11-05 06:48:29',
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2017-09-10 06:06:47',
                'updated_at' => '2017-09-10 06:06:47',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2018-10-03 05:29:04',
                'updated_at' => '2018-10-13 08:12:03',
                'deleted_at' => '2018-10-13 08:12:03',
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => '2018-10-06 04:59:46',
                'updated_at' => '2018-10-09 02:12:31',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => '2018-11-06 06:06:16',
                'updated_at' => '2018-11-06 06:06:16',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}