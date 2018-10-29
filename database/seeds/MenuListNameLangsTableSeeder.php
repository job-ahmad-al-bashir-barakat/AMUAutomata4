<?php

use Illuminate\Database\Seeder;

class MenuListNameLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_list_name_langs')->delete();
        
        \DB::table('menu_list_name_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_list_id' => 2,
                'lang_id' => 1,
                'text' => 'Menu',
                'created_at' => '2018-10-16 17:09:21',
                'updated_at' => '2018-10-16 17:09:21',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'menu_list_id' => 2,
                'lang_id' => 2,
                'text' => 'Menu',
                'created_at' => '2018-10-16 17:09:21',
                'updated_at' => '2018-10-16 17:09:21',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_list_id' => 3,
                'lang_id' => 1,
                'text' => 'Menu 2',
                'created_at' => '2018-10-16 18:23:44',
                'updated_at' => '2018-10-16 18:23:44',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'menu_list_id' => 3,
                'lang_id' => 2,
                'text' => 'Menu 2',
                'created_at' => '2018-10-16 18:23:44',
                'updated_at' => '2018-10-16 18:23:44',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}