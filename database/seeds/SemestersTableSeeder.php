<?php

use Illuminate\Database\Seeder;

class SemestersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('semesters')->delete();
        
        \DB::table('semesters')->insert(array (
            0 => 
            array (
                'id' => 8,
                'created_at' => '2017-11-28 19:50:24',
                'updated_at' => '2017-11-28 19:50:24',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 9,
                'created_at' => '2017-11-28 19:50:45',
                'updated_at' => '2017-11-28 19:50:45',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}