<?php

use Illuminate\Database\Seeder;

class SliderDetailTitleLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('slider_detail_title_langs')->delete();
        
        \DB::table('slider_detail_title_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slider_detail_id' => 1,
                'lang_id' => 1,
                'text' => 'Education for ever',
                'created_at' => '2017-09-08 11:49:08',
                'updated_at' => '2017-09-08 11:49:08',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'slider_detail_id' => 1,
                'lang_id' => 2,
                'text' => 'التعليم للابد',
                'created_at' => '2017-09-08 11:49:08',
                'updated_at' => '2017-09-08 11:49:08',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'slider_detail_id' => 2,
                'lang_id' => 1,
                'text' => 'World\'s best university',
                'created_at' => '2017-09-28 14:55:46',
                'updated_at' => '2017-10-23 17:44:31',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'slider_detail_id' => 2,
                'lang_id' => 2,
                'text' => 'World\'s best university',
                'created_at' => '2017-09-28 14:55:46',
                'updated_at' => '2017-10-23 17:44:31',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'slider_detail_id' => 3,
                'lang_id' => 1,
                'text' => 'For Your Better Future',
                'created_at' => '2017-10-21 18:23:38',
                'updated_at' => '2017-10-23 17:46:24',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'slider_detail_id' => 3,
                'lang_id' => 2,
                'text' => 'For Your Better Future',
                'created_at' => '2017-10-21 18:23:38',
                'updated_at' => '2017-10-23 17:46:24',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}