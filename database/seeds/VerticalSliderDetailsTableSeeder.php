<?php

use Illuminate\Database\Seeder;

class VerticalSliderDetailsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vertical_slider_details')->delete();
        
        \DB::table('vertical_slider_details')->insert(array (
            0 => 
            array (
                'id' => 1,
                'vertical_slider_id' => 1,
                'image_id' => NULL,
                'created_at' => '2017-09-24 18:23:45',
                'updated_at' => '2017-09-24 18:25:41',
                'deleted_at' => '2017-09-24 18:25:41',
            ),
            1 => 
            array (
                'id' => 2,
                'vertical_slider_id' => 1,
                'image_id' => 20,
                'created_at' => '2017-09-24 18:25:24',
                'updated_at' => '2017-10-29 18:22:16',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'vertical_slider_id' => 1,
                'image_id' => 15,
                'created_at' => '2017-10-25 19:19:26',
                'updated_at' => '2017-10-25 19:20:07',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'vertical_slider_id' => 1,
                'image_id' => 16,
                'created_at' => '2017-10-25 19:20:29',
                'updated_at' => '2017-10-25 19:20:52',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}