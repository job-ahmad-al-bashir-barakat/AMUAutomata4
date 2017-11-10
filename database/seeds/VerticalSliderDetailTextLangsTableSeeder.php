<?php

use Illuminate\Database\Seeder;

class VerticalSliderDetailTextLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vertical_slider_detail_text_langs')->delete();
        
        \DB::table('vertical_slider_detail_text_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'vertical_slider_detail_id' => 1,
                'lang_id' => 1,
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.',
                'created_at' => '2017-09-24 18:23:45',
                'updated_at' => '2017-09-24 18:25:41',
                'deleted_at' => '2017-09-24 18:25:41',
            ),
            1 => 
            array (
                'id' => 2,
                'vertical_slider_detail_id' => 1,
                'lang_id' => 2,
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.',
                'created_at' => '2017-09-24 18:23:46',
                'updated_at' => '2017-09-24 18:25:41',
                'deleted_at' => '2017-09-24 18:25:41',
            ),
            2 => 
            array (
                'id' => 3,
                'vertical_slider_detail_id' => 2,
                'lang_id' => 1,
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.',
                'created_at' => '2017-09-24 18:25:25',
                'updated_at' => '2017-09-24 18:25:25',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'vertical_slider_detail_id' => 2,
                'lang_id' => 2,
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.',
                'created_at' => '2017-09-24 18:25:25',
                'updated_at' => '2017-09-24 18:25:25',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'vertical_slider_detail_id' => 3,
                'lang_id' => 1,
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.',
                'created_at' => '2017-10-25 19:19:26',
                'updated_at' => '2017-10-25 19:19:26',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'vertical_slider_detail_id' => 3,
                'lang_id' => 2,
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.',
                'created_at' => '2017-10-25 19:19:26',
                'updated_at' => '2017-10-25 19:19:26',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'vertical_slider_detail_id' => 4,
                'lang_id' => 1,
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.',
                'created_at' => '2017-10-25 19:20:29',
                'updated_at' => '2017-10-25 19:20:29',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'vertical_slider_detail_id' => 4,
                'lang_id' => 2,
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.',
                'created_at' => '2017-10-25 19:20:29',
                'updated_at' => '2017-10-25 19:20:29',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}