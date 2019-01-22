<?php

use Illuminate\Database\Seeder;

class RoleNameLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('role_name_langs')->delete();
        
        \DB::table('role_name_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'lang_id' => 1,
                'text' => 'Automata4 Role',
                'created_at' => '2018-03-17 01:01:56',
                'updated_at' => '2018-03-17 01:01:56',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 1,
                'lang_id' => 2,
                'text' => 'دور اوتوماتا4',
                'created_at' => '2018-03-17 01:01:56',
                'updated_at' => '2018-03-17 01:01:56',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 2,
                'lang_id' => 1,
                'text' => 'Administrator Role',
                'created_at' => '2018-03-17 03:09:09',
                'updated_at' => '2018-03-17 01:09:09',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 2,
                'lang_id' => 2,
                'text' => 'دور مدير',
                'created_at' => '2018-03-17 03:09:09',
                'updated_at' => '2018-03-17 01:09:09',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'role_id' => 4,
                'lang_id' => 1,
                'text' => 'test',
                'created_at' => '2018-10-05 23:48:44',
                'updated_at' => '2018-10-05 23:48:53',
                'deleted_at' => '2018-10-05 23:48:53',
            ),
            5 => 
            array (
                'id' => 6,
                'role_id' => 4,
                'lang_id' => 2,
                'text' => 'test',
                'created_at' => '2018-10-05 23:48:44',
                'updated_at' => '2018-10-05 23:48:53',
                'deleted_at' => '2018-10-05 23:48:53',
            ),
            6 => 
            array (
                'id' => 7,
                'role_id' => 5,
                'lang_id' => 1,
                'text' => 'it roule',
                'created_at' => '2018-10-06 03:22:47',
                'updated_at' => '2018-10-14 07:57:44',
                'deleted_at' => '2018-10-14 07:57:44',
            ),
            7 => 
            array (
                'id' => 8,
                'role_id' => 5,
                'lang_id' => 2,
                'text' => 'دور المعلوماتيه',
                'created_at' => '2018-10-06 03:22:47',
                'updated_at' => '2018-10-14 07:57:44',
                'deleted_at' => '2018-10-14 07:57:44',
            ),
            8 => 
            array (
                'id' => 9,
                'role_id' => 6,
                'lang_id' => 1,
                'text' => 'University Secretary',
                'created_at' => '2018-10-07 05:18:26',
                'updated_at' => '2018-10-14 07:58:35',
                'deleted_at' => '2018-10-14 07:58:35',
            ),
            9 => 
            array (
                'id' => 10,
                'role_id' => 6,
                'lang_id' => 2,
                'text' => 'أمانه الجامعة',
                'created_at' => '2018-10-07 05:18:26',
                'updated_at' => '2018-10-14 07:58:35',
                'deleted_at' => '2018-10-14 07:58:35',
            ),
            10 => 
            array (
                'id' => 11,
                'role_id' => 7,
                'lang_id' => 1,
                'text' => 'mouhannad role',
                'created_at' => '2018-10-14 08:49:14',
                'updated_at' => '2018-11-18 08:31:37',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'role_id' => 7,
                'lang_id' => 2,
                'text' => 'دور مهند',
                'created_at' => '2018-10-14 08:49:14',
                'updated_at' => '2018-10-31 07:54:13',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'role_id' => 8,
                'lang_id' => 1,
                'text' => 'Teaching staff',
                'created_at' => '2018-10-14 09:05:34',
                'updated_at' => '2018-10-14 09:05:39',
                'deleted_at' => '2018-10-14 09:05:39',
            ),
            13 => 
            array (
                'id' => 14,
                'role_id' => 8,
                'lang_id' => 2,
                'text' => 'الكادر التدريسي',
                'created_at' => '2018-10-14 09:05:34',
                'updated_at' => '2018-10-14 09:05:39',
                'deleted_at' => '2018-10-14 09:05:39',
            ),
            14 => 
            array (
                'id' => 15,
                'role_id' => 9,
                'lang_id' => 1,
                'text' => 'Test',
                'created_at' => '2018-10-15 06:03:43',
                'updated_at' => '2018-10-15 06:03:43',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'role_id' => 9,
                'lang_id' => 2,
                'text' => 'test',
                'created_at' => '2018-10-15 06:03:43',
                'updated_at' => '2018-10-15 06:03:43',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'role_id' => 10,
                'lang_id' => 1,
                'text' => 'Marwa Rule',
                'created_at' => '2018-12-24 08:54:28',
                'updated_at' => '2018-12-24 08:54:28',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'role_id' => 10,
                'lang_id' => 2,
                'text' => 'دور مروة',
                'created_at' => '2018-12-24 08:54:28',
                'updated_at' => '2018-12-24 08:54:28',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}