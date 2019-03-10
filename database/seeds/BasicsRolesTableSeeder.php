<?php

use Illuminate\Database\Seeder;

class BasicsRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->delete();
        \DB::table('roles')->insert(
            [
                [
                    'id' => 1,
                    'name' => 'automata',
                    'guard_name' => 'web',
                    'hidden' => 'Y',
                    'created_at' => '2018-03-17 01:01:56',
                    'updated_at' => '2018-03-17 01:01:56',
                    'deleted_at' => NULL,
                ],
                [
                    'id' => 2,
                    'name' => 'administrator',
                    'guard_name' => 'web',
                    'hidden' => 'N',
                    'created_at' => '2018-03-17 01:03:00',
                    'updated_at' => '2018-03-17 01:03:00',
                    'deleted_at' => NULL,
                ],
            ]
        );
    }
}