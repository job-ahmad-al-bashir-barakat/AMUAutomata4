<?php

use Illuminate\Database\Seeder;

class CustomModuleNameLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('custom_module_name_langs')->delete();
        
        \DB::table('custom_module_name_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'custom_module_id' => 1,
                'lang_id' => 1,
                'text' => 'Section Open',
                'created_at' => '2017-10-16 17:12:49',
                'updated_at' => '2017-10-16 17:12:49',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'custom_module_id' => 1,
                'lang_id' => 2,
                'text' => 'Section Open',
                'created_at' => '2017-10-16 17:12:49',
                'updated_at' => '2017-10-16 17:12:49',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'custom_module_id' => 2,
                'lang_id' => 1,
                'text' => 'Section Close',
                'created_at' => '2017-10-16 17:13:57',
                'updated_at' => '2017-10-16 17:13:57',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'custom_module_id' => 2,
                'lang_id' => 2,
                'text' => 'Section Close',
                'created_at' => '2017-10-16 17:13:57',
                'updated_at' => '2017-10-16 17:13:57',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'custom_module_id' => 3,
                'lang_id' => 1,
                'text' => 'Fluid Section Open',
                'created_at' => '2017-10-16 17:15:19',
                'updated_at' => '2017-10-16 17:15:19',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'custom_module_id' => 3,
                'lang_id' => 2,
                'text' => 'Fluid Section Open',
                'created_at' => '2017-10-16 17:15:19',
                'updated_at' => '2017-10-16 17:15:19',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'custom_module_id' => 4,
                'lang_id' => 1,
                'text' => 'Section Intersect Top',
                'created_at' => '2017-10-16 17:16:10',
                'updated_at' => '2017-10-16 17:16:10',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'custom_module_id' => 4,
                'lang_id' => 2,
                'text' => 'Section Intersect Top',
                'created_at' => '2017-10-16 17:16:10',
                'updated_at' => '2017-10-16 17:16:10',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'custom_module_id' => 5,
                'lang_id' => 1,
                'text' => 'Intersect Top Close',
                'created_at' => '2017-10-16 17:17:13',
                'updated_at' => '2017-10-16 17:17:13',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'custom_module_id' => 5,
                'lang_id' => 2,
                'text' => 'Intersect Top Close',
                'created_at' => '2017-10-16 17:17:13',
                'updated_at' => '2017-10-16 17:17:13',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}