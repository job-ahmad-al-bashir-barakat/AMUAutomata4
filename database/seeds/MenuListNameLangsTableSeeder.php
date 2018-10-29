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
                    'menu_list_id' => 1,
                    'lang_id' => 1,
                    'text' => 'Main Menu',
                    'created_at' => '2018-10-26 08:52:29',
                    'updated_at' => '2018-10-26 08:52:29',
                    'deleted_at' => NULL,
                ),
            1 =>
                array (
                    'id' => 2,
                    'menu_list_id' => 1,
                    'lang_id' => 2,
                    'text' => 'القائمة الرئيسية',
                    'created_at' => '2018-10-26 08:52:29',
                    'updated_at' => '2018-10-26 08:52:29',
                    'deleted_at' => NULL,
                ),
            2 =>
                array (
                    'id' => 3,
                    'menu_list_id' => 2,
                    'lang_id' => 1,
                    'text' => 'Faculty 1\'s menu',
                    'created_at' => '2018-10-26 12:43:56',
                    'updated_at' => '2018-10-26 12:43:56',
                    'deleted_at' => NULL,
                ),
            3 =>
                array (
                    'id' => 4,
                    'menu_list_id' => 2,
                    'lang_id' => 2,
                    'text' => 'قائمة الكلية الاولى',
                    'created_at' => '2018-10-26 12:43:56',
                    'updated_at' => '2018-10-26 12:43:56',
                    'deleted_at' => NULL,
                ),
        ));


    }
}