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
                'model_id' => 1,
                'model_type' => 'Modules\\Utilities\\Entities\\User',
            ),
            1 => 
            array (
                'permission_id' => 2,
                'model_id' => 2,
                'model_type' => 'Modules\\Utilities\\Entities\\User',
            ),
        ));
        
        
    }
}