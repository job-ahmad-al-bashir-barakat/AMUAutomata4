<?php

use Illuminate\Database\Seeder;

class BasicsCustomModulesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('custom_modules')->delete();

        \DB::table('custom_modules')->insert([
            0 =>
                [
                    'id' => 1,
                    'module_id' => 3,
                    'created_at' => '2017-10-16 08:12:49',
                    'updated_at' => '2017-10-16 08:12:49',
                    'deleted_at' => NULL,
                ],
            1 =>
                [
                    'id' => 2,
                    'module_id' => 4,
                    'created_at' => '2017-10-16 08:13:56',
                    'updated_at' => '2017-10-16 08:13:56',
                    'deleted_at' => NULL,
                ],
            2 =>
                [
                    'id' => 3,
                    'module_id' => 11,
                    'created_at' => '2017-10-16 08:15:19',
                    'updated_at' => '2017-10-16 08:15:19',
                    'deleted_at' => NULL,
                ],
            3 =>
                [
                    'id' => 4,
                    'module_id' => 14,
                    'created_at' => '2017-10-16 08:16:10',
                    'updated_at' => '2017-10-16 08:16:10',
                    'deleted_at' => NULL,
                ],
            4 =>
                [
                    'id' => 5,
                    'module_id' => 15,
                    'created_at' => '2017-10-16 08:17:12',
                    'updated_at' => '2017-10-16 08:17:12',
                    'deleted_at' => NULL,
                ],
            5 =>
                [
                    'id' => 6,
                    'module_id' => 22,
                    'created_at' => '2017-10-31 13:56:17',
                    'updated_at' => '2017-10-31 13:56:17',
                    'deleted_at' => NULL,
                ],
            6 =>
                [
                    'id' => 7,
                    'module_id' => 23,
                    'created_at' => '2017-11-02 23:07:56',
                    'updated_at' => '2017-11-02 23:07:56',
                    'deleted_at' => NULL,
                ],
            7 =>
                [
                    'id' => 8,
                    'module_id' => 19,
                    'created_at' => '2017-11-15 13:04:08',
                    'updated_at' => '2017-11-15 13:04:08',
                    'deleted_at' => NULL,
                ],
            8 =>
                [
                    'id' => 9,
                    'module_id' => 25,
                    'created_at' => '2017-11-17 12:52:25',
                    'updated_at' => '2017-11-17 12:52:25',
                    'deleted_at' => NULL,
                ],
            9 =>
                [
                    'id' => 10,
                    'module_id' => 26,
                    'created_at' => '2017-11-22 12:53:28',
                    'updated_at' => '2017-11-22 12:53:28',
                    'deleted_at' => NULL,
                ],
            10 =>
                [
                    'id' => 11,
                    'module_id' => 34,
                    'created_at' => '2018-05-26 06:07:54',
                    'updated_at' => '2018-05-26 06:07:54',
                    'deleted_at' => NULL,
                ],
            11 =>
                [
                    'id' => 12,
                    'module_id' => 35,
                    'created_at' => '2018-05-26 07:18:47',
                    'updated_at' => '2018-05-26 07:18:47',
                    'deleted_at' => NULL,
                ],
            12 =>
                [
                    'id' => 13,
                    'module_id' => 36,
                    'created_at' => '2018-05-27 06:38:30',
                    'updated_at' => '2018-05-27 06:38:30',
                    'deleted_at' => NULL,
                ],
            13 =>
                [
                    'id' => 14,
                    'module_id' => 37,
                    'created_at' => '2018-05-29 07:17:45',
                    'updated_at' => '2018-05-29 07:17:45',
                    'deleted_at' => NULL,
                ],
            14 =>
                [
                    'id' => 15,
                    'module_id' => 38,
                    'created_at' => '2018-05-31 21:54:09',
                    'updated_at' => '2018-05-31 21:54:09',
                    'deleted_at' => NULL,
                ],
        ]);


    }
}