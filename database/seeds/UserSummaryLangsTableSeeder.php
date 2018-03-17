<?php

use Illuminate\Database\Seeder;

class UserSummaryLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_summary_langs')->delete();
        
        \DB::table('user_summary_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'text' => 'Automata4 Group Administration',
                'created_at' => '2018-03-14 12:53:45',
                'updated_at' => '2018-03-14 12:53:45',
                'deleted_at' => NULL,
                'lang_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'text' => 'إدارة مجموعة اوتوماتا4',
                'created_at' => '2018-03-14 12:53:45',
                'updated_at' => '2018-03-14 12:53:45',
                'deleted_at' => NULL,
                'lang_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 2,
                'text' => 'Al Andalus Adminstrative',
                'created_at' => '2018-03-15 08:44:25',
                'updated_at' => '2018-03-15 08:44:25',
                'deleted_at' => NULL,
                'lang_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 2,
                'text' => 'مديرية جامعة الاندلس',
                'created_at' => '2018-03-15 08:44:25',
                'updated_at' => '2018-03-15 08:44:25',
                'deleted_at' => NULL,
                'lang_id' => 2,
            ),
        ));
        
        
    }
}