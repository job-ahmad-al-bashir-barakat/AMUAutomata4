<?php

use Illuminate\Database\Seeder;

class BasicsUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();

        \DB::table('users')->insert([
                [
                    'id' => 1,
                    'name' => 'AUT405',
                    'email' => 'AUT405@automata4.com',
                    'password' => '$2y$10$LfiA2E6QTwPMD1s06qIMjuFQgArVYP5xojXdRnXoelbTxogdWbV8S',
                    'image_id' => NULL,
                    'remember_token' => '9MzXNL9tQTkXqZzat5ITohMihtR24HDz8w9U4dQB9YEuz1wJpViJHakZOVii',
                    'created_at' => '2017-11-10 13:22:23',
                    'updated_at' => '2018-03-14 06:54:22',
                    'deleted_at' => NULL,
                ],
                [
                    'id' => 2,
                    'name' => 'admin',
                    'email' => 'admin@alsham.com',
                    'password' => '$2y$10$T7z8pnFi.Je8Ser/LEgwOe9xstN3w5SVuegLnyG.alhVpsa7ls7d.',
                    'image_id' => 65,
                    'remember_token' => 'rkQZDDSP28muwFJEyNWUMaK7ofE3vVHNSDrzmX1AAlUSmiGhPyaawmQfnBs1',
                    'created_at' => '2018-03-15 02:44:24',
                    'updated_at' => '2018-11-19 06:30:46',
                    'deleted_at' => NULL,
                ],
            ]
        );
    }
}