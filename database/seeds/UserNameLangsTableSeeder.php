<?php

use Illuminate\Database\Seeder;

class UserNameLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_name_langs')->delete();
        
        \DB::table('user_name_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'lang_id' => 1,
                'text' => 'Automata4 Group',
                'created_at' => '2018-03-14 12:53:45',
                'updated_at' => '2018-03-14 12:53:45',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'lang_id' => 2,
                'text' => 'مجموعة اوتوماتا4',
                'created_at' => '2018-03-14 12:53:45',
                'updated_at' => '2018-03-14 12:53:45',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 2,
                'lang_id' => 1,
                'text' => 'Andalus University',
                'created_at' => '2018-03-15 08:44:25',
                'updated_at' => '2018-03-15 08:44:25',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 2,
                'lang_id' => 2,
                'text' => 'جامعة الاندلس',
                'created_at' => '2018-03-15 08:44:25',
                'updated_at' => '2018-03-15 08:44:25',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}