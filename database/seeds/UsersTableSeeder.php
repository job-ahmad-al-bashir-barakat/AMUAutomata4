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
                'password' => '$2y$10$xaEezRxChZfy6kMMB1/NDeLAIXpUTaUUHiW4/YHe69gPDeTbYSicW',
                'image_id' => NULL,
                'deleted_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2017-11-10 19:22:23',
                'updated_at' => '2017-11-10 19:22:23',
            ),
        ));
        
        
    }
}