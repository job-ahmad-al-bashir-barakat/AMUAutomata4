<?php

use Illuminate\Database\Seeder;

class DepartmentNameLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('department_name_langs')->delete();
        
        \DB::table('department_name_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'department_id' => 1,
                'lang_id' => 1,
                'text' => 'General',
                'created_at' => '2017-07-05 16:58:18',
                'updated_at' => '2017-08-28 20:09:06',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'department_id' => 1,
                'lang_id' => 2,
                'text' => 'عام',
                'created_at' => '2017-07-05 16:58:18',
                'updated_at' => '2017-08-28 20:09:06',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'department_id' => 2,
                'lang_id' => 1,
                'text' => 'Programming',
                'created_at' => '2017-07-05 16:58:18',
                'updated_at' => '2017-08-28 20:09:30',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'department_id' => 2,
                'lang_id' => 2,
                'text' => 'برمجة',
                'created_at' => '2017-07-05 16:58:18',
                'updated_at' => '2017-08-28 20:09:30',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'department_id' => 3,
                'lang_id' => 1,
                'text' => 'Networks',
                'created_at' => '2017-07-05 16:58:26',
                'updated_at' => '2017-08-28 20:09:51',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'department_id' => 3,
                'lang_id' => 2,
                'text' => 'شبكات',
                'created_at' => '2017-07-05 16:58:26',
                'updated_at' => '2017-08-28 20:09:51',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'department_id' => 4,
                'lang_id' => 1,
                'text' => 'General',
                'created_at' => '2017-08-28 20:25:54',
                'updated_at' => '2017-08-28 20:25:54',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'department_id' => 4,
                'lang_id' => 2,
                'text' => 'عام',
                'created_at' => '2017-08-28 20:25:54',
                'updated_at' => '2017-08-28 20:25:54',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}