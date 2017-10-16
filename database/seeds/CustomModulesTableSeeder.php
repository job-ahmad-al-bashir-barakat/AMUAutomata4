<?php

use Illuminate\Database\Seeder;

class CustomModulesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('custom_modules')->delete();
        
        \DB::table('custom_modules')->insert(array (
            0 => 
            array (
                'id' => 1,
                'module_id' => 3,
                'created_at' => '2017-10-16 17:12:49',
                'updated_at' => '2017-10-16 17:12:49',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'module_id' => 4,
                'created_at' => '2017-10-16 17:13:56',
                'updated_at' => '2017-10-16 17:13:56',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'module_id' => 11,
                'created_at' => '2017-10-16 17:15:19',
                'updated_at' => '2017-10-16 17:15:19',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'module_id' => 14,
                'created_at' => '2017-10-16 17:16:10',
                'updated_at' => '2017-10-16 17:16:10',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'module_id' => 15,
                'created_at' => '2017-10-16 17:17:12',
                'updated_at' => '2017-10-16 17:17:12',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}