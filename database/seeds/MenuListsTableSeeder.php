<?php

use Illuminate\Database\Seeder;

class MenuListsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_lists')->delete();
        
        \DB::table('menu_lists')->insert(array (
            0 => 
            array (
                'id' => 1,
                'is_default' => 1,
                'created_at' => '2018-10-26 03:52:29',
                'updated_at' => '2018-10-26 07:41:52',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'is_default' => 0,
                'created_at' => '2018-10-26 07:43:56',
                'updated_at' => '2018-10-30 09:10:06',
                'deleted_at' => '2018-10-30 09:10:06',
            ),
            2 => 
            array (
                'id' => 3,
                'is_default' => 0,
                'created_at' => '2018-11-04 06:40:33',
                'updated_at' => '2018-11-04 08:40:51',
                'deleted_at' => '2018-11-04 08:40:51',
            ),
            3 => 
            array (
                'id' => 4,
                'is_default' => 1,
                'created_at' => '2018-11-06 11:50:44',
                'updated_at' => '2018-12-02 13:12:14',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'is_default' => 1,
                'created_at' => '2018-12-09 09:24:33',
                'updated_at' => '2018-12-09 09:24:33',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'is_default' => 1,
                'created_at' => '2018-12-09 12:26:33',
                'updated_at' => '2018-12-09 12:26:33',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'is_default' => 1,
                'created_at' => '2018-12-09 13:29:40',
                'updated_at' => '2018-12-09 13:29:40',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'is_default' => 1,
                'created_at' => '2018-12-09 13:46:15',
                'updated_at' => '2018-12-09 13:46:15',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'is_default' => 1,
                'created_at' => '2018-12-10 07:57:27',
                'updated_at' => '2018-12-10 07:57:27',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'is_default' => 1,
                'created_at' => '2018-12-10 08:19:58',
                'updated_at' => '2018-12-10 08:19:58',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}