<?php

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sliders')->delete();
        
        \DB::table('sliders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2017-09-08 07:52:17',
                'updated_at' => '2017-09-08 07:52:17',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2017-09-08 11:51:20',
                'updated_at' => '2017-09-08 11:51:20',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}