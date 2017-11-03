<?php

use Illuminate\Database\Seeder;

class GenderNameLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gender_name_langs')->delete();
        
        \DB::table('gender_name_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'gender_id' => 1,
                'lang_id' => 1,
                'text' => 'Male',
                'created_at' => '2017-11-03 04:18:16',
                'updated_at' => '2017-11-03 04:18:16',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'gender_id' => 1,
                'lang_id' => 2,
                'text' => 'ذكر',
                'created_at' => '2017-11-03 04:18:16',
                'updated_at' => '2017-11-03 04:18:16',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'gender_id' => 2,
                'lang_id' => 1,
                'text' => 'Female',
                'created_at' => '2017-11-03 04:18:31',
                'updated_at' => '2017-11-03 04:18:31',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'gender_id' => 2,
                'lang_id' => 2,
                'text' => 'انثى',
                'created_at' => '2017-11-03 04:18:31',
                'updated_at' => '2017-11-03 04:18:31',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}