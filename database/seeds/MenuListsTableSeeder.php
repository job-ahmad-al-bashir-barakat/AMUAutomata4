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
                'id' => 1,
                'is_default' => 1,
                'created_at' => '2018-10-26 08:52:29',
                'updated_at' => '2018-10-26 12:41:52',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'is_default' => 0,
                'created_at' => '2018-10-26 12:43:56',
                'updated_at' => '2018-10-26 12:43:56',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}