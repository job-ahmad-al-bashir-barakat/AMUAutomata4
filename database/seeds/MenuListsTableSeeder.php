<?php

use Illuminate\Database\Seeder;

class MenuListsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_lists')->delete();
        
        \DB::table('menu_lists')->insert(array (
            0 => 
            array (
                'id' => 2,
                'created_at' => '2018-10-16 17:09:21',
                'updated_at' => '2018-10-16 17:09:21',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'created_at' => '2018-10-16 18:23:44',
                'updated_at' => '2018-10-16 18:23:44',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}