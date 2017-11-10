<?php

use Illuminate\Database\Seeder;

class BlockNameLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('block_name_langs')->delete();
        
        \DB::table('block_name_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'block_id' => 1,
                'lang_id' => 1,
                'text' => 'Home Block',
                'created_at' => '2017-09-10 15:06:03',
                'updated_at' => '2017-09-10 15:06:03',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'block_id' => 1,
                'lang_id' => 2,
                'text' => 'كتل الصفحة الرئيسية',
                'created_at' => '2017-09-10 15:06:03',
                'updated_at' => '2017-09-10 15:06:03',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'block_id' => 2,
                'lang_id' => 1,
                'text' => 'University Block',
                'created_at' => '2017-09-10 15:06:47',
                'updated_at' => '2017-09-10 15:06:47',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'block_id' => 2,
                'lang_id' => 2,
                'text' => 'كتل الجامعة',
                'created_at' => '2017-09-10 15:06:47',
                'updated_at' => '2017-09-10 15:06:47',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}