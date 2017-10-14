<?php

use Illuminate\Database\Seeder;

class MenuTableNameLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_table_name_langs')->delete();
        
        \DB::table('menu_table_name_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_table_id' => 1,
                'lang_id' => 1,
                'text' => 'Page',
                'created_at' => '2017-09-29 21:22:05',
                'updated_at' => '2017-09-29 21:22:05',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'menu_table_id' => 1,
                'lang_id' => 2,
                'text' => 'صفحة',
                'created_at' => '2017-09-29 21:22:05',
                'updated_at' => '2017-09-29 21:22:05',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_table_id' => 2,
                'lang_id' => 1,
                'text' => 'Faculty',
                'created_at' => '2017-09-29 21:22:53',
                'updated_at' => '2017-09-29 21:22:53',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'menu_table_id' => 2,
                'lang_id' => 2,
                'text' => 'كلية',
                'created_at' => '2017-09-29 21:22:53',
                'updated_at' => '2017-09-29 21:22:53',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menu_table_id' => 3,
                'lang_id' => 1,
                'text' => 'Degree',
                'created_at' => '2017-09-29 21:23:20',
                'updated_at' => '2017-09-29 21:23:20',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'menu_table_id' => 3,
                'lang_id' => 2,
                'text' => 'اختصاص',
                'created_at' => '2017-09-29 21:23:20',
                'updated_at' => '2017-09-29 21:23:20',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'menu_table_id' => 4,
                'lang_id' => 1,
                'text' => 'Department',
                'created_at' => '2017-09-29 21:23:49',
                'updated_at' => '2017-09-29 21:23:49',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_table_id' => 4,
                'lang_id' => 2,
                'text' => 'قسم',
                'created_at' => '2017-09-29 21:23:49',
                'updated_at' => '2017-09-29 21:23:49',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}