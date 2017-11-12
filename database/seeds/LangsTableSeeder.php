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
                'name' => 'English',
                'native' => 'English',
                'script' => 'Latn',
                'regional' => 'en_GB',
                'is_default' => 1,
                'image_id' => 263,
                'deleted_at' => NULL,
                'created_at' => '2017-06-15 22:35:40',
                'updated_at' => '2017-11-09 21:08:19',
            ),
            1 => 
            array (
                'id' => 2,
                'lang_code' => 'ar',
                'name' => 'Arabic',
                'native' => 'العربية',
                'script' => 'Arab',
                'regional' => 'ar_AE',
                'is_default' => 0,
                'image_id' => 264,
                'deleted_at' => NULL,
                'created_at' => '2017-06-15 22:35:51',
                'updated_at' => '2017-11-10 13:57:09',
            ),
        ));
        
        
    }
}