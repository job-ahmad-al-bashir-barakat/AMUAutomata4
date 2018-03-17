<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'automata',
                'guard_name' => 'web',
                'hidden' => 'Y',
                'created_at' => '2018-03-15 07:45:40',
                'updated_at' => '2018-03-17 07:33:22',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'administrator',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-15 07:46:03',
                'updated_at' => '2018-03-17 07:34:53',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'languages',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-15 13:26:30',
                'updated_at' => '2018-03-15 13:26:30',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'schema-tables',
                'guard_name' => 'web',
                'hidden' => 'Y',
                'created_at' => '2018-03-17 06:48:07',
                'updated_at' => '2018-03-17 07:35:47',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'tables',
                'guard_name' => 'web',
                'hidden' => 'Y',
                'created_at' => '2018-03-17 07:09:52',
                'updated_at' => '2018-03-17 07:35:56',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'icons',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-17 07:18:56',
                'updated_at' => '2018-03-17 07:18:56',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'attributes',
                'guard_name' => 'web',
                'hidden' => 'Y',
                'created_at' => '2018-03-17 07:19:39',
                'updated_at' => '2018-03-17 07:36:07',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'modules',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-17 07:19:55',
                'updated_at' => '2018-03-17 07:19:55',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'pages',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-17 07:20:15',
                'updated_at' => '2018-03-17 07:20:15',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'permissions',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-17 07:20:56',
                'updated_at' => '2018-03-17 07:20:56',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'roles',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-17 07:21:11',
                'updated_at' => '2018-03-17 07:21:11',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'users',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-17 07:21:32',
                'updated_at' => '2018-03-17 07:21:32',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'sliders',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-17 07:22:14',
                'updated_at' => '2018-03-17 07:22:14',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'vertical-sliders',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-17 07:22:52',
                'updated_at' => '2018-03-17 07:22:52',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'blocks',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-17 07:23:16',
                'updated_at' => '2018-03-17 07:23:16',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'text-cards',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-17 07:23:43',
                'updated_at' => '2018-03-17 07:23:43',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'custom-modules',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-17 07:24:10',
                'updated_at' => '2018-03-17 07:24:10',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'page-builder',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-17 07:24:44',
                'updated_at' => '2018-03-17 07:24:44',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'steps',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-17 08:35:33',
                'updated_at' => '2018-03-17 08:35:33',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}