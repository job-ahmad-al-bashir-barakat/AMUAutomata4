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
                'text' => '15',
                'created_at' => '2017-06-16 17:16:42',
                'updated_at' => '2017-06-16 17:16:42',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'gender_id' => 1,
                'lang_id' => 2,
                'text' => '15',
                'created_at' => '2017-06-16 17:16:42',
                'updated_at' => '2017-06-16 17:16:42',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}