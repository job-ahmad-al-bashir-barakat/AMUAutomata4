<?php

use Illuminate\Database\Seeder;

class BasicsUserSummaryLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('user_summary_langs')->delete();

        \DB::table('user_summary_langs')->insert(
            [
                [
                    'id' => 1,
                    'user_id' => 1,
                    'text' => 'Automata4 Group Administration',
                    'created_at' => '2018-03-14 06:53:45',
                    'updated_at' => '2018-03-14 06:53:45',
                    'deleted_at' => NULL,
                    'lang_id' => 1,
                ],
                [
                    'id' => 2,
                    'user_id' => 1,
                    'text' => 'إدارة مجموعة اوتوماتا4',
                    'created_at' => '2018-03-14 06:53:45',
                    'updated_at' => '2018-03-14 06:53:45',
                    'deleted_at' => NULL,
                    'lang_id' => 2,
                ],
                [
                    'id' => 3,
                    'user_id' => 2,
                    'text' => 'Al-sham Private Administrative',
                    'created_at' => '2018-03-15 02:44:25',
                    'updated_at' => '2018-10-09 03:22:50',
                    'deleted_at' => NULL,
                    'lang_id' => 1,
                ],
                [
                    'id' => 4,
                    'user_id' => 2,
                    'text' => 'إدارة جامعة الشام',
                    'created_at' => '2018-03-15 02:44:25',
                    'updated_at' => '2018-10-09 03:22:50',
                    'deleted_at' => NULL,
                    'lang_id' => 2,
                ],
            ]
        );
    }
}