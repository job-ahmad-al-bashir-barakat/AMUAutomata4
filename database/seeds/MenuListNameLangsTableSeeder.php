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
                'created_at' => '2018-10-26 03:52:29',
                'updated_at' => '2018-10-26 03:52:29',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'menu_list_id' => 1,
                'lang_id' => 2,
                'text' => 'القائمة الرئيسية',
                'created_at' => '2018-10-26 03:52:29',
                'updated_at' => '2018-10-26 03:52:29',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_list_id' => 2,
                'lang_id' => 1,
                'text' => 'Faculty 1\'s menu',
                'created_at' => '2018-10-26 07:43:56',
                'updated_at' => '2018-10-30 09:10:07',
                'deleted_at' => '2018-10-30 09:10:07',
            ),
            3 => 
            array (
                'id' => 4,
                'menu_list_id' => 2,
                'lang_id' => 2,
                'text' => 'قائمة الكلية الاولى',
                'created_at' => '2018-10-26 07:43:56',
                'updated_at' => '2018-10-30 09:10:07',
                'deleted_at' => '2018-10-30 09:10:07',
            ),
            4 => 
            array (
                'id' => 5,
                'menu_list_id' => 3,
                'lang_id' => 1,
                'text' => 'it',
                'created_at' => '2018-11-04 06:40:33',
                'updated_at' => '2018-11-04 08:40:51',
                'deleted_at' => '2018-11-04 08:40:51',
            ),
            5 => 
            array (
                'id' => 6,
                'menu_list_id' => 3,
                'lang_id' => 2,
                'text' => 'قائمة كلية المعلوماتية',
                'created_at' => '2018-11-04 06:40:33',
                'updated_at' => '2018-11-04 08:40:51',
                'deleted_at' => '2018-11-04 08:40:51',
            ),
            6 => 
            array (
                'id' => 7,
                'menu_list_id' => 4,
                'lang_id' => 1,
                'text' => 'information menu',
                'created_at' => '2018-11-06 11:50:44',
                'updated_at' => '2018-12-09 09:24:04',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_list_id' => 4,
                'lang_id' => 2,
                'text' => 'قائمة المعلوماتية',
                'created_at' => '2018-11-06 11:50:44',
                'updated_at' => '2018-11-06 11:50:44',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menu_list_id' => 5,
                'lang_id' => 1,
                'text' => 'law menu',
                'created_at' => '2018-12-09 09:24:33',
                'updated_at' => '2018-12-09 09:24:33',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'menu_list_id' => 5,
                'lang_id' => 2,
                'text' => 'قائمة الحقوق',
                'created_at' => '2018-12-09 09:24:33',
                'updated_at' => '2018-12-09 09:24:33',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'menu_list_id' => 6,
                'lang_id' => 1,
                'text' => 'Administrative Sciences Menu',
                'created_at' => '2018-12-09 12:26:33',
                'updated_at' => '2018-12-09 12:26:33',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'menu_list_id' => 6,
                'lang_id' => 2,
                'text' => 'قائمة العلوم الادارية',
                'created_at' => '2018-12-09 12:26:33',
                'updated_at' => '2018-12-09 12:26:33',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'menu_list_id' => 7,
                'lang_id' => 1,
                'text' => 'International Relations and Diplomacy Menu',
                'created_at' => '2018-12-09 13:29:40',
                'updated_at' => '2018-12-09 13:29:40',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'menu_list_id' => 7,
                'lang_id' => 2,
                'text' => 'قائمة العلاقات الدولية والدبلوملسية',
                'created_at' => '2018-12-09 13:29:40',
                'updated_at' => '2018-12-09 13:29:40',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'menu_list_id' => 8,
                'lang_id' => 1,
                'text' => 'Dentistry Menu',
                'created_at' => '2018-12-09 13:46:15',
                'updated_at' => '2018-12-09 13:46:15',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'menu_list_id' => 8,
                'lang_id' => 2,
                'text' => 'قائمة طب اسنان',
                'created_at' => '2018-12-09 13:46:15',
                'updated_at' => '2018-12-09 13:46:15',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'menu_list_id' => 9,
                'lang_id' => 1,
                'text' => 'Medicine Menu',
                'created_at' => '2018-12-10 07:57:27',
                'updated_at' => '2018-12-10 07:57:27',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'menu_list_id' => 9,
                'lang_id' => 2,
                'text' => 'قائمة طب بشري',
                'created_at' => '2018-12-10 07:57:27',
                'updated_at' => '2018-12-10 07:57:27',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'menu_list_id' => 10,
                'lang_id' => 1,
                'text' => 'Pharmacy Menu',
                'created_at' => '2018-12-10 08:19:58',
                'updated_at' => '2018-12-10 08:19:58',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'menu_list_id' => 10,
                'lang_id' => 2,
                'text' => 'قائمة الصيدلة',
                'created_at' => '2018-12-10 08:19:58',
                'updated_at' => '2018-12-10 08:19:58',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}