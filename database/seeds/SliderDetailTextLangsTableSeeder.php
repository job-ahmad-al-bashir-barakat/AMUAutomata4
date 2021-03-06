<?php

use Illuminate\Database\Seeder;

class SliderDetailTextLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('slider_detail_text_langs')->delete();
        
        \DB::table('slider_detail_text_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slider_detail_id' => 1,
                'lang_id' => 1,
                'text' => 'We provides always our best services for our clients and  always',
                'created_at' => '2017-09-08 11:49:08',
                'updated_at' => '2017-09-08 11:49:08',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'slider_detail_id' => 1,
                'lang_id' => 2,
                'text' => 'We provides always our best services for our clients and  always',
                'created_at' => '2017-09-08 11:49:08',
                'updated_at' => '2017-09-08 11:49:08',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'slider_detail_id' => 2,
                'lang_id' => 1,
                'text' => 'We provides always our best services for our clients and always',
                'created_at' => '2017-09-28 14:55:46',
                'updated_at' => '2017-10-23 17:45:09',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'slider_detail_id' => 2,
                'lang_id' => 2,
                'text' => 'We provides always our best services for our clients and always',
                'created_at' => '2017-09-28 14:55:47',
                'updated_at' => '2017-10-23 17:45:09',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'slider_detail_id' => 3,
                'lang_id' => 1,
                'text' => 'We provides always our best services for our clients and always',
                'created_at' => '2017-10-21 18:23:38',
                'updated_at' => '2017-10-23 17:46:54',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'slider_detail_id' => 3,
                'lang_id' => 2,
                'text' => 'We provides always our best services for our clients and always',
                'created_at' => '2017-10-21 18:23:38',
                'updated_at' => '2017-10-23 17:46:54',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}