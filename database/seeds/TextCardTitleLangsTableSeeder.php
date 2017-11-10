<?php

use Illuminate\Database\Seeder;

class TextCardTitleLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('text_card_title_langs')->delete();
        
        \DB::table('text_card_title_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'text_card_id' => 1,
                'lang_id' => 1,
                'text' => 'OUR OFFICE LOCATION',
                'created_at' => '2017-10-17 18:48:57',
                'updated_at' => '2017-10-17 18:48:57',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'text_card_id' => 1,
                'lang_id' => 2,
                'text' => 'OUR OFFICE LOCATION',
                'created_at' => '2017-10-17 18:48:57',
                'updated_at' => '2017-10-17 18:48:57',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'text_card_id' => 2,
                'lang_id' => 1,
                'text' => 'OUR CONTACT NUMBER',
                'created_at' => '2017-10-17 18:49:55',
                'updated_at' => '2017-10-17 18:49:55',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'text_card_id' => 2,
                'lang_id' => 2,
                'text' => 'OUR CONTACT NUMBER',
                'created_at' => '2017-10-17 18:49:55',
                'updated_at' => '2017-10-17 18:49:55',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'text_card_id' => 3,
                'lang_id' => 1,
                'text' => 'OUR CONTACT E-MAIL',
                'created_at' => '2017-10-17 18:51:38',
                'updated_at' => '2017-10-17 18:51:38',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'text_card_id' => 3,
                'lang_id' => 2,
                'text' => 'OUR CONTACT E-MAIL',
                'created_at' => '2017-10-17 18:51:38',
                'updated_at' => '2017-10-17 18:51:38',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'text_card_id' => 4,
                'lang_id' => 1,
                'text' => 'Make a Video Call',
                'created_at' => '2017-10-17 18:52:21',
                'updated_at' => '2017-10-17 18:52:21',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'text_card_id' => 4,
                'lang_id' => 2,
                'text' => 'Make a Video Call',
                'created_at' => '2017-10-17 18:52:21',
                'updated_at' => '2017-10-17 18:52:21',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}