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
                'created_at' => '2017-06-16 17:16:42',
                'updated_at' => '2017-06-16 17:16:42',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}