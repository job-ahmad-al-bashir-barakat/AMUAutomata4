<?php

use Illuminate\Database\Seeder;

class GendersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('genders')->delete();
        
        \DB::table('genders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2017-11-03 04:18:16',
                'updated_at' => '2017-11-03 04:18:16',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2017-11-03 04:18:31',
                'updated_at' => '2017-11-03 04:18:31',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}