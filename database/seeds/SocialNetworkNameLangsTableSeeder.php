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
        ));
        
        
    }
}