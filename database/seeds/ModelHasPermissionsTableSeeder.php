<?php

use Illuminate\Database\Seeder;

class ModelHasPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('model_has_permissions')->delete();
        
        \DB::table('model_has_permissions')->insert(array (
            0 => 
            array (
                'permission_id' => 1,
                'model_type' => 'Modules\\Utilities\\Entities\\User',
                'model_id' => 1,
            ),
            1 => 
            array (
                'permission_id' => 2,
                'model_type' => 'Modules\\Utilities\\Entities\\User',
                'model_id' => 2,
            ),
            2 => 
            array (
                'permission_id' => 2,
                'model_type' => 'Modules\\Utilities\\Entities\\User',
                'model_id' => 4,
            ),
            3 => 
            array (
                'permission_id' => 7,
                'model_type' => 'Modules\\Utilities\\Entities\\User',
                'model_id' => 15,
            ),
            4 => 
            array (
                'permission_id' => 18,
                'model_type' => 'Modules\\Utilities\\Entities\\User',
                'model_id' => 13,
            ),
            5 => 
            array (
                'permission_id' => 18,
                'model_type' => 'Modules\\Utilities\\Entities\\User',
                'model_id' => 17,
            ),
            6 => 
            array (
                'permission_id' => 18,
                'model_type' => 'Modules\\Utilities\\Entities\\User',
                'model_id' => 19,
            ),
            7 => 
            array (
                'permission_id' => 35,
                'model_type' => 'Modules\\Utilities\\Entities\\User',
                'model_id' => 18,
            ),
        ));
        
        
    }
}