<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'Seo',
                'value' => 'Seo',
                'created_at' => '2017-06-16 20:44:25',
                'updated_at' => '2017-06-16 20:44:37',
                'deleted_at' => '2017-06-16 20:44:37',
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'aaaa',
                'value' => 'aaa',
                'created_at' => '2017-07-05 12:31:40',
                'updated_at' => '2017-08-17 14:30:08',
                'deleted_at' => '2017-08-17 14:30:08',
            ),
            2 => 
            array (
                'id' => 3,
                'code' => '213213',
                'value' => '32',
                'created_at' => '2017-07-05 12:32:21',
                'updated_at' => '2017-08-17 14:30:12',
                'deleted_at' => '2017-08-17 14:30:12',
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 'dsa',
                'value' => 'asdas',
                'created_at' => '2017-07-05 12:32:27',
                'updated_at' => '2017-08-17 14:30:16',
                'deleted_at' => '2017-08-17 14:30:16',
            ),
            4 => 
            array (
                'id' => 5,
                'code' => 'UGL',
                'value' => '35.0985546,36.1864543',
                'created_at' => '2017-08-17 14:31:35',
                'updated_at' => '2017-08-17 16:56:06',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'code' => 'learnata',
                'value' => 'http://learnata.com',
                'created_at' => '2018-01-30 18:06:32',
                'updated_at' => '2018-01-30 18:06:32',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'code' => 'website_title',
                'value' => 'Al Andalus University',
                'created_at' => '2018-01-30 18:23:38',
                'updated_at' => '2018-01-30 18:23:38',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}