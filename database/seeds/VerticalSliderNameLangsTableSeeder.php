<?php

use Illuminate\Database\Seeder;

class VerticalSliderNameLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vertical_slider_name_langs')->delete();
        
        \DB::table('vertical_slider_name_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'vertical_slider_id' => 1,
                'lang_id' => 1,
                'text' => 'Test Vertical Sliders 1',
                'created_at' => '2017-09-24 18:08:34',
                'updated_at' => '2017-09-24 18:08:59',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'vertical_slider_id' => 1,
                'lang_id' => 2,
                'text' => 'Test Vertical Sliders 1',
                'created_at' => '2017-09-24 18:08:34',
                'updated_at' => '2017-09-24 18:08:59',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'vertical_slider_id' => 2,
                'lang_id' => 1,
                'text' => 'Test Vertical Sliders 2',
                'created_at' => '2017-09-24 18:08:46',
                'updated_at' => '2017-09-24 18:08:46',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'vertical_slider_id' => 2,
                'lang_id' => 2,
                'text' => 'Test Vertical Sliders 2',
                'created_at' => '2017-09-24 18:08:46',
                'updated_at' => '2017-09-24 18:08:46',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}