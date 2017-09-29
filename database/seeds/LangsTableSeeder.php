<?php

use Illuminate\Database\Seeder;

class LangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('langs')->delete();
        
        \DB::table('langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'lang_code' => 'en',
                'name' => 'en',
                'native' => 'en',
                'is_default' => 1,
                'deleted_at' => NULL,
                'created_at' => '2017-06-15 22:35:40',
                'updated_at' => '2017-06-15 22:35:40',
            ),
            1 => 
            array (
                'id' => 2,
                'lang_code' => 'ar',
                'name' => 'ar',
                'native' => 'ar',
                'is_default' => 0,
                'deleted_at' => NULL,
                'created_at' => '2017-06-15 22:35:51',
                'updated_at' => '2017-06-15 22:35:51',
            ),
        ));
        
        
    }
}