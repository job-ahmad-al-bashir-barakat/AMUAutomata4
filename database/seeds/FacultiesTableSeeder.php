<?php

use Illuminate\Database\Seeder;

class FacultiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faculties')->delete();
        
        \DB::table('faculties')->insert(array (
            0 => 
            array (
                'id' => 6,
                'created_at' => '2017-08-28 20:07:53',
                'updated_at' => '2017-08-28 20:07:53',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 7,
                'created_at' => '2017-08-28 20:08:24',
                'updated_at' => '2017-08-28 20:08:24',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}