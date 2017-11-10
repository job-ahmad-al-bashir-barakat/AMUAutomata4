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
                'created_at' => '2017-09-10 15:06:03',
                'updated_at' => '2017-09-10 15:06:03',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2017-09-10 15:06:47',
                'updated_at' => '2017-09-10 15:06:47',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}