<?php

use Illuminate\Database\Seeder;

class StepsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('steps')->delete();
        
        \DB::table('steps')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2017-10-06 04:38:28',
                'updated_at' => '2017-10-06 04:38:28',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2017-10-06 05:12:30',
                'updated_at' => '2017-10-06 05:12:30',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}