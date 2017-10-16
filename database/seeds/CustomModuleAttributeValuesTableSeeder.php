<?php

use Illuminate\Database\Seeder;

class CustomModuleAttributeValuesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('custom_module_attribute_values')->delete();
        
        \DB::table('custom_module_attribute_values')->insert(array (
            0 => 
            array (
                'id' => 1,
                'custom_module_id' => 1,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-16 17:13:23',
                'updated_at' => '2017-10-16 17:13:23',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'custom_module_id' => 2,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-16 17:13:57',
                'updated_at' => '2017-10-16 17:13:57',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'custom_module_id' => 3,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-16 17:15:19',
                'updated_at' => '2017-10-16 17:15:19',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'custom_module_id' => 4,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-16 17:16:31',
                'updated_at' => '2017-10-16 17:16:31',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'custom_module_id' => 5,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-16 17:17:13',
                'updated_at' => '2017-10-16 17:17:13',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}