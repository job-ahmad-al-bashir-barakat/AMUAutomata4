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
        ));
        
        
    }
}