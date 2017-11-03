<?php

use Illuminate\Database\Seeder;

class SocialNetworksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('social_networks')->delete();
        
        \DB::table('social_networks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'facebook',
                'created_at' => '2017-06-16 17:45:24',
                'updated_at' => '2017-06-16 17:45:24',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'twitter',
                'created_at' => '2017-11-03 04:39:05',
                'updated_at' => '2017-11-03 04:39:05',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'instagram',
                'created_at' => '2017-11-03 04:40:19',
                'updated_at' => '2017-11-03 04:40:19',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 'skype',
                'created_at' => '2017-11-03 04:40:51',
                'updated_at' => '2017-11-03 04:40:51',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}