<?php

use Illuminate\Database\Seeder;

class SettingNameLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('setting_name_langs')->delete();
        
        \DB::table('setting_name_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'setting_id' => 1,
                'lang_id' => 1,
                'text' => 'Seo',
                'created_at' => '2017-06-16 20:44:25',
                'updated_at' => '2017-06-16 20:44:37',
                'deleted_at' => '2017-06-16 20:44:37',
            ),
            1 => 
            array (
                'id' => 2,
                'setting_id' => 1,
                'lang_id' => 2,
                'text' => 'Seo',
                'created_at' => '2017-06-16 20:44:25',
                'updated_at' => '2017-06-16 20:44:37',
                'deleted_at' => '2017-06-16 20:44:37',
            ),
            2 => 
            array (
                'id' => 3,
                'setting_id' => 2,
                'lang_id' => 1,
                'text' => 'aaa',
                'created_at' => '2017-07-05 12:31:40',
                'updated_at' => '2017-08-17 14:30:08',
                'deleted_at' => '2017-08-17 14:30:08',
            ),
            3 => 
            array (
                'id' => 4,
                'setting_id' => 2,
                'lang_id' => 2,
                'text' => 'aaaa',
                'created_at' => '2017-07-05 12:31:40',
                'updated_at' => '2017-08-17 14:30:08',
                'deleted_at' => '2017-08-17 14:30:08',
            ),
            4 => 
            array (
                'id' => 5,
                'setting_id' => 3,
                'lang_id' => 1,
                'text' => '2312',
                'created_at' => '2017-07-05 12:32:21',
                'updated_at' => '2017-08-17 14:30:12',
                'deleted_at' => '2017-08-17 14:30:12',
            ),
            5 => 
            array (
                'id' => 6,
                'setting_id' => 3,
                'lang_id' => 2,
                'text' => '3213',
                'created_at' => '2017-07-05 12:32:21',
                'updated_at' => '2017-08-17 14:30:12',
                'deleted_at' => '2017-08-17 14:30:12',
            ),
            6 => 
            array (
                'id' => 7,
                'setting_id' => 4,
                'lang_id' => 1,
                'text' => 'dsa',
                'created_at' => '2017-07-05 12:32:27',
                'updated_at' => '2017-08-17 14:30:16',
                'deleted_at' => '2017-08-17 14:30:16',
            ),
            7 => 
            array (
                'id' => 8,
                'setting_id' => 4,
                'lang_id' => 2,
                'text' => 'dsa',
                'created_at' => '2017-07-05 12:32:27',
                'updated_at' => '2017-08-17 14:30:16',
                'deleted_at' => '2017-08-17 14:30:16',
            ),
            8 => 
            array (
                'id' => 9,
                'setting_id' => 5,
                'lang_id' => 1,
                'text' => 'University Geo-location',
                'created_at' => '2017-08-17 14:31:35',
                'updated_at' => '2017-12-21 21:44:00',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'setting_id' => 5,
                'lang_id' => 2,
                'text' => 'موقع الجامعة الجغرافي',
                'created_at' => '2017-08-17 14:31:36',
                'updated_at' => '2017-08-17 14:31:36',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'setting_id' => 6,
                'lang_id' => 1,
                'text' => 'Learnata',
                'created_at' => '2018-01-30 18:06:32',
                'updated_at' => '2018-01-30 18:06:32',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'setting_id' => 6,
                'lang_id' => 2,
                'text' => 'ليرناتا',
                'created_at' => '2018-01-30 18:06:32',
                'updated_at' => '2018-01-30 18:06:32',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'setting_id' => 7,
                'lang_id' => 1,
                'text' => 'Website Title',
                'created_at' => '2018-01-30 18:23:38',
                'updated_at' => '2018-01-30 18:23:38',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'setting_id' => 7,
                'lang_id' => 2,
                'text' => 'عنوان الموقع',
                'created_at' => '2018-01-30 18:23:38',
                'updated_at' => '2018-01-30 18:23:38',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}