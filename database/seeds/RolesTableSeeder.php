<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'automata',
                'guard_name' => 'web',
                'hidden' => 'Y',
                'created_at' => '2018-03-17 07:01:56',
                'updated_at' => '2018-03-17 07:01:56',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'administrator',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-17 07:03:00',
                'updated_at' => '2018-03-17 07:03:00',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}