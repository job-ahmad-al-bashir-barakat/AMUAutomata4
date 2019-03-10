<?php

use Illuminate\Database\Seeder;

class BasicsUserNameLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_name_langs')->delete();

        \DB::table('user_name_langs')->insert(
            [
                [
                    'id' => 1,
                    'user_id' => 1,
                    'lang_id' => 1,
                    'text' => 'Automata4 Group',
                    'created_at' => '2018-03-14 06:53:45',
                    'updated_at' => '2018-03-14 06:53:45',
                    'deleted_at' => NULL,
                ],
                [
                    'id' => 2,
                    'user_id' => 1,
                    'lang_id' => 2,
                    'text' => 'مجموعة اوتوماتا4',
                    'created_at' => '2018-03-14 06:53:45',
                    'updated_at' => '2018-03-14 06:53:45',
                    'deleted_at' => NULL,
                ],
                [
                    'id' => 3,
                    'user_id' => 2,
                    'lang_id' => 1,
                    'text' => 'Alsham University',
                    'created_at' => '2018-03-15 02:44:25',
                    'updated_at' => '2018-10-09 03:22:50',
                    'deleted_at' => NULL,
                ],
                [
                    'id' => 4,
                    'user_id' => 2,
                    'lang_id' => 2,
                    'text' => 'جامعة الشام',
                    'created_at' => '2018-03-15 02:44:25',
                    'updated_at' => '2018-10-09 03:22:50',
                    'deleted_at' => NULL,
                ],
            ]
        );
        
        
    }
}