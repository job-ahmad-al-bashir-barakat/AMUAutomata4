<?php

use Illuminate\Database\Seeder;

class VerticalSliderDetailSubTextLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vertical_slider_detail_sub_text_langs')->delete();
        
        \DB::table('vertical_slider_detail_sub_text_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'vertical_slider_detail_id' => 2,
                'lang_id' => 1,
                'text' => '- Catherine Grace,',
                'created_at' => '2017-09-24 18:25:25',
                'updated_at' => '2017-09-24 18:25:25',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'vertical_slider_detail_id' => 2,
                'lang_id' => 2,
                'text' => '- Catherine Grace,',
                'created_at' => '2017-09-24 18:25:25',
                'updated_at' => '2017-09-24 18:25:25',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'vertical_slider_detail_id' => 3,
                'lang_id' => 1,
                'text' => '- Catherine Grace,',
                'created_at' => '2017-10-25 19:19:26',
                'updated_at' => '2017-10-25 19:19:26',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'vertical_slider_detail_id' => 3,
                'lang_id' => 2,
                'text' => '- Catherine Grace,',
                'created_at' => '2017-10-25 19:19:26',
                'updated_at' => '2017-10-25 19:19:26',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'vertical_slider_detail_id' => 4,
                'lang_id' => 1,
                'text' => '- Catherine Grace,',
                'created_at' => '2017-10-25 19:20:29',
                'updated_at' => '2017-10-25 19:20:29',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'vertical_slider_detail_id' => 4,
                'lang_id' => 2,
                'text' => '- Catherine Grace,',
                'created_at' => '2017-10-25 19:20:29',
                'updated_at' => '2017-10-25 19:20:29',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}