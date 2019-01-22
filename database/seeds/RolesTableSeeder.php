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
                'created_at' => '2018-03-17 01:01:56',
                'updated_at' => '2018-03-17 01:01:56',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'administrator',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-17 01:03:00',
                'updated_at' => '2018-03-17 01:03:00',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'sd',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-10-02 04:00:57',
                'updated_at' => '2018-10-02 13:23:47',
                'deleted_at' => '2018-10-02 13:23:47',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'test',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-10-04 00:03:43',
                'updated_at' => '2018-10-05 23:48:53',
                'deleted_at' => '2018-10-05 23:48:53',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'it roule',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-10-06 03:22:47',
                'updated_at' => '2018-10-14 07:57:44',
                'deleted_at' => '2018-10-14 07:57:44',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'أمانه الجامعة',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-10-07 05:18:26',
                'updated_at' => '2018-10-14 07:58:34',
                'deleted_at' => '2018-10-14 07:58:34',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'mohand',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-10-14 08:49:14',
                'updated_at' => '2018-10-31 07:54:13',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'اسم',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-10-14 09:05:34',
                'updated_at' => '2018-10-14 09:05:39',
                'deleted_at' => '2018-10-14 09:05:39',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'automata_test',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-10-15 06:03:43',
                'updated_at' => '2018-10-15 06:03:43',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Marwa',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-12-24 08:54:28',
                'updated_at' => '2018-12-24 08:54:28',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}