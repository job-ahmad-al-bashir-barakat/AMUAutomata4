<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'AUT405',
                'email' => 'AUT405@automata4.com',
                'password' => '$2y$10$LfiA2E6QTwPMD1s06qIMjuFQgArVYP5xojXdRnXoelbTxogdWbV8S',
                'image_id' => NULL,
                'deleted_at' => NULL,
                'remember_token' => 'FOHYbFMuKZDAr8PvgHm6pE8C4Q6ErRPVQtklcujjzXCZoUdYSIGiGp6HBaLg',
                'created_at' => '2017-11-10 19:22:23',
                'updated_at' => '2018-03-14 12:54:22',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Andalus',
                'email' => 'admin@andalus.com',
                'password' => '$2y$10$Od4I2nPN5wK756IQZECk8OReVXDUNwGqEwAF2Bj3lHXjApQ/z3gAW',
                'image_id' => NULL,
                'deleted_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-03-15 08:44:24',
                'updated_at' => '2018-03-15 08:44:24',
            ),
        ));
        
        
    }
}