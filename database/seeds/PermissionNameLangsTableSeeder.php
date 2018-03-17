<?php

use Illuminate\Database\Seeder;

class PermissionNameLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permission_name_langs')->delete();
        
        \DB::table('permission_name_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'permission_id' => 1,
                'lang_id' => 1,
                'text' => 'Automata4',
                'created_at' => '2018-03-15 07:45:41',
                'updated_at' => '2018-03-15 08:41:11',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'permission_id' => 1,
                'lang_id' => 2,
                'text' => 'اوتوماتا4',
                'created_at' => '2018-03-15 07:45:41',
                'updated_at' => '2018-03-15 08:41:11',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'permission_id' => 2,
                'lang_id' => 1,
                'text' => 'Administrator',
                'created_at' => '2018-03-15 07:46:04',
                'updated_at' => '2018-03-15 08:40:38',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'permission_id' => 2,
                'lang_id' => 2,
                'text' => 'مدير',
                'created_at' => '2018-03-15 07:46:04',
                'updated_at' => '2018-03-15 08:40:38',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'permission_id' => 3,
                'lang_id' => 1,
                'text' => 'Languages',
                'created_at' => '2018-03-15 13:26:30',
                'updated_at' => '2018-03-15 13:26:30',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'permission_id' => 3,
                'lang_id' => 2,
                'text' => 'اللغات',
                'created_at' => '2018-03-15 13:26:30',
                'updated_at' => '2018-03-15 13:26:30',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'permission_id' => 4,
                'lang_id' => 1,
                'text' => 'Schema Tables',
                'created_at' => '2018-03-17 06:48:07',
                'updated_at' => '2018-03-17 06:48:07',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'permission_id' => 4,
                'lang_id' => 2,
                'text' => 'Schema Tables',
                'created_at' => '2018-03-17 06:48:07',
                'updated_at' => '2018-03-17 06:48:07',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'permission_id' => 5,
                'lang_id' => 1,
                'text' => 'Tables',
                'created_at' => '2018-03-17 07:09:52',
                'updated_at' => '2018-03-17 07:09:52',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'permission_id' => 5,
                'lang_id' => 2,
                'text' => 'الجداول',
                'created_at' => '2018-03-17 07:09:53',
                'updated_at' => '2018-03-17 07:09:53',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'permission_id' => 6,
                'lang_id' => 1,
                'text' => 'Icons',
                'created_at' => '2018-03-17 07:18:57',
                'updated_at' => '2018-03-17 07:18:57',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'permission_id' => 6,
                'lang_id' => 2,
                'text' => 'ايقونات',
                'created_at' => '2018-03-17 07:18:57',
                'updated_at' => '2018-03-17 07:18:57',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'permission_id' => 7,
                'lang_id' => 1,
                'text' => 'Attributes',
                'created_at' => '2018-03-17 07:19:39',
                'updated_at' => '2018-03-17 07:19:39',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'permission_id' => 7,
                'lang_id' => 2,
                'text' => 'خصائص',
                'created_at' => '2018-03-17 07:19:40',
                'updated_at' => '2018-03-17 07:19:40',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'permission_id' => 8,
                'lang_id' => 1,
                'text' => 'Modules',
                'created_at' => '2018-03-17 07:19:55',
                'updated_at' => '2018-03-17 07:19:55',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'permission_id' => 8,
                'lang_id' => 2,
                'text' => 'الكتل',
                'created_at' => '2018-03-17 07:19:55',
                'updated_at' => '2018-03-17 07:19:55',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'permission_id' => 9,
                'lang_id' => 1,
                'text' => 'Pages',
                'created_at' => '2018-03-17 07:20:15',
                'updated_at' => '2018-03-17 07:20:15',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'permission_id' => 9,
                'lang_id' => 2,
                'text' => 'الصفحات',
                'created_at' => '2018-03-17 07:20:15',
                'updated_at' => '2018-03-17 07:20:15',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'permission_id' => 10,
                'lang_id' => 1,
                'text' => 'Permissions',
                'created_at' => '2018-03-17 07:20:56',
                'updated_at' => '2018-03-17 07:20:56',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'permission_id' => 10,
                'lang_id' => 2,
                'text' => 'السماحيات',
                'created_at' => '2018-03-17 07:20:56',
                'updated_at' => '2018-03-17 07:20:56',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'permission_id' => 11,
                'lang_id' => 1,
                'text' => 'Roles',
                'created_at' => '2018-03-17 07:21:11',
                'updated_at' => '2018-03-17 07:21:11',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'permission_id' => 11,
                'lang_id' => 2,
                'text' => 'الادوار',
                'created_at' => '2018-03-17 07:21:11',
                'updated_at' => '2018-03-17 07:21:11',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'permission_id' => 12,
                'lang_id' => 1,
                'text' => 'Users',
                'created_at' => '2018-03-17 07:21:32',
                'updated_at' => '2018-03-17 07:21:32',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'permission_id' => 12,
                'lang_id' => 2,
                'text' => 'المستخدمين',
                'created_at' => '2018-03-17 07:21:33',
                'updated_at' => '2018-03-17 07:21:33',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'permission_id' => 13,
                'lang_id' => 1,
                'text' => 'Sliders',
                'created_at' => '2018-03-17 07:22:14',
                'updated_at' => '2018-03-17 07:22:14',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'permission_id' => 13,
                'lang_id' => 2,
                'text' => 'سلايدر',
                'created_at' => '2018-03-17 07:22:14',
                'updated_at' => '2018-03-17 07:22:14',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'permission_id' => 14,
                'lang_id' => 1,
                'text' => 'Vertical Sliders',
                'created_at' => '2018-03-17 07:22:52',
                'updated_at' => '2018-03-17 07:22:52',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'permission_id' => 14,
                'lang_id' => 2,
                'text' => 'سلايدر عمودي',
                'created_at' => '2018-03-17 07:22:52',
                'updated_at' => '2018-03-17 07:22:52',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'permission_id' => 15,
                'lang_id' => 1,
                'text' => 'Blocks',
                'created_at' => '2018-03-17 07:23:16',
                'updated_at' => '2018-03-17 07:23:16',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'permission_id' => 15,
                'lang_id' => 2,
                'text' => 'كتل',
                'created_at' => '2018-03-17 07:23:16',
                'updated_at' => '2018-03-17 07:23:16',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'permission_id' => 16,
                'lang_id' => 1,
                'text' => 'Text Cards',
                'created_at' => '2018-03-17 07:23:43',
                'updated_at' => '2018-03-17 07:23:43',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'permission_id' => 16,
                'lang_id' => 2,
                'text' => 'بطاقات نصية',
                'created_at' => '2018-03-17 07:23:43',
                'updated_at' => '2018-03-17 07:23:43',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'permission_id' => 17,
                'lang_id' => 1,
                'text' => 'Custom Modules',
                'created_at' => '2018-03-17 07:24:10',
                'updated_at' => '2018-03-17 07:24:10',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'permission_id' => 17,
                'lang_id' => 2,
                'text' => 'الكتلة الخاصة',
                'created_at' => '2018-03-17 07:24:10',
                'updated_at' => '2018-03-17 07:24:10',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'permission_id' => 18,
                'lang_id' => 1,
                'text' => 'Page Builder',
                'created_at' => '2018-03-17 07:24:44',
                'updated_at' => '2018-03-17 07:24:44',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'permission_id' => 18,
                'lang_id' => 2,
                'text' => 'باني الصفحات',
                'created_at' => '2018-03-17 07:24:44',
                'updated_at' => '2018-03-17 07:24:44',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'permission_id' => 19,
                'lang_id' => 1,
                'text' => 'Steps',
                'created_at' => '2018-03-17 08:35:33',
                'updated_at' => '2018-03-17 08:35:33',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'permission_id' => 19,
                'lang_id' => 2,
                'text' => 'خطوات',
                'created_at' => '2018-03-17 08:35:33',
                'updated_at' => '2018-03-17 08:35:33',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}