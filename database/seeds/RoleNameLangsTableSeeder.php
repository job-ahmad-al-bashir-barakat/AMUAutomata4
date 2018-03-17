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
                'created_at' => '2018-03-17 07:01:56',
                'updated_at' => '2018-03-17 07:01:56',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 1,
                'lang_id' => 2,
                'text' => 'دور اوتوماتا4',
                'created_at' => '2018-03-17 07:01:56',
                'updated_at' => '2018-03-17 07:01:56',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 2,
                'lang_id' => 1,
                'text' => 'Administrator Role',
                'created_at' => '2018-03-17 09:09:09',
                'updated_at' => '2018-03-17 07:09:09',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 2,
                'lang_id' => 2,
                'text' => 'دور مدير',
                'created_at' => '2018-03-17 09:09:09',
                'updated_at' => '2018-03-17 07:09:09',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}