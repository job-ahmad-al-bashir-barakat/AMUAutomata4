<?php

use Illuminate\Database\Seeder;

class SocialNetworkNameLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('social_network_name_langs')->delete();
        
        \DB::table('social_network_name_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'social_network_id' => 1,
                'lang_id' => 1,
                'text' => 'Facebook',
                'created_at' => '2017-06-16 17:45:24',
                'updated_at' => '2017-06-16 17:45:24',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'social_network_id' => 1,
                'lang_id' => 2,
                'text' => 'فيسبوك',
                'created_at' => '2017-06-16 17:45:24',
                'updated_at' => '2017-06-16 17:45:24',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'social_network_id' => 2,
                'lang_id' => 1,
                'text' => 'Twitter',
                'created_at' => '2017-11-03 04:39:05',
                'updated_at' => '2017-11-03 04:39:05',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'social_network_id' => 2,
                'lang_id' => 2,
                'text' => 'تويتر',
                'created_at' => '2017-11-03 04:39:05',
                'updated_at' => '2017-11-03 04:39:05',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'social_network_id' => 3,
                'lang_id' => 1,
                'text' => 'Instagram',
                'created_at' => '2017-11-03 04:40:19',
                'updated_at' => '2017-11-03 04:40:19',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'social_network_id' => 3,
                'lang_id' => 2,
                'text' => 'انستغرام',
                'created_at' => '2017-11-03 04:40:19',
                'updated_at' => '2017-11-03 04:40:19',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'social_network_id' => 4,
                'lang_id' => 1,
                'text' => 'Skype',
                'created_at' => '2017-11-03 04:40:51',
                'updated_at' => '2017-11-03 04:40:51',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'social_network_id' => 4,
                'lang_id' => 2,
                'text' => 'سكايب',
                'created_at' => '2017-11-03 04:40:51',
                'updated_at' => '2017-11-03 04:40:51',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}