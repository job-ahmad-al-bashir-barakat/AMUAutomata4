<?php

use Illuminate\Database\Seeder;

class MenuTablesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_tables')->delete();
        
        \DB::table('menu_tables')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'page',
                'created_at' => '2017-09-29 21:22:05',
                'updated_at' => '2017-09-29 21:22:05',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'faculty',
                'created_at' => '2017-09-29 21:22:52',
                'updated_at' => '2017-09-29 21:22:52',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'degree',
                'created_at' => '2017-09-29 21:23:19',
                'updated_at' => '2017-09-29 21:23:19',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 'department',
                'created_at' => '2017-09-29 21:23:49',
                'updated_at' => '2017-09-29 21:23:49',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}