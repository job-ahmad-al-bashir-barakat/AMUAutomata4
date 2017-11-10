<?php

use Illuminate\Database\Seeder;

class VerticalSlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vertical_sliders')->delete();
        
        \DB::table('vertical_sliders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2017-09-24 18:08:34',
                'updated_at' => '2017-09-24 18:08:34',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2017-09-24 18:08:46',
                'updated_at' => '2017-09-24 18:08:46',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}