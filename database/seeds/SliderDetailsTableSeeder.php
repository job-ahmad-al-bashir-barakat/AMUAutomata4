<?php

use Illuminate\Database\Seeder;

class SliderDetailsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('slider_details')->delete();
        
        \DB::table('slider_details')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slider_id' => 1,
                'image_id' => 12,
                'page_id' => 1,
                'position' => 'L',
                'created_at' => '2017-09-08 11:49:08',
                'updated_at' => '2017-10-23 17:48:02',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'slider_id' => 1,
                'image_id' => 13,
                'page_id' => 2,
                'position' => 'C',
                'created_at' => '2017-09-28 14:55:45',
                'updated_at' => '2017-10-21 17:53:47',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'slider_id' => 1,
                'image_id' => 14,
                'page_id' => 6,
                'position' => 'R',
                'created_at' => '2017-10-21 18:23:37',
                'updated_at' => '2017-10-23 17:47:48',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}