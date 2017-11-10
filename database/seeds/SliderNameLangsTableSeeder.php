<?php

use Illuminate\Database\Seeder;

class SliderNameLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('slider_name_langs')->delete();
        
        \DB::table('slider_name_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slider_id' => 1,
                'lang_id' => 1,
                'text' => 'Home Slider',
                'created_at' => '2017-09-08 07:52:17',
                'updated_at' => '2017-09-08 07:52:17',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'slider_id' => 1,
                'lang_id' => 2,
                'text' => 'شرائح صفحة الرئيسية',
                'created_at' => '2017-09-08 07:52:17',
                'updated_at' => '2017-09-08 07:52:17',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'slider_id' => 2,
                'lang_id' => 1,
                'text' => 'University Slider',
                'created_at' => '2017-09-08 11:51:20',
                'updated_at' => '2017-09-08 11:51:20',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'slider_id' => 2,
                'lang_id' => 2,
                'text' => 'مقر الجامعة',
                'created_at' => '2017-09-08 11:51:21',
                'updated_at' => '2017-09-08 11:51:21',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}