<?php

use Illuminate\Database\Seeder;

class DegreeNameLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('degree_name_langs')->delete();
        
        \DB::table('degree_name_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'degree_id' => 1,
                'lang_id' => 1,
                'text' => 'Network Degree 1',
                'created_at' => '2017-07-05 17:05:50',
                'updated_at' => '2017-08-28 20:12:21',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'degree_id' => 1,
                'lang_id' => 2,
                'text' => 'اختصاص شبكات 1',
                'created_at' => '2017-07-05 17:05:50',
                'updated_at' => '2017-08-28 20:12:21',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'degree_id' => 2,
                'lang_id' => 1,
                'text' => 'Network Degree 2',
                'created_at' => '2017-07-05 17:05:58',
                'updated_at' => '2017-08-28 20:13:01',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'degree_id' => 2,
                'lang_id' => 2,
                'text' => 'اختصاص شبكات 2',
                'created_at' => '2017-07-05 17:05:58',
                'updated_at' => '2017-08-28 20:13:01',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'degree_id' => 3,
                'lang_id' => 1,
                'text' => 'Programming Degree 1',
                'created_at' => '2017-08-28 20:15:02',
                'updated_at' => '2017-08-28 20:15:02',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'degree_id' => 3,
                'lang_id' => 2,
                'text' => 'اختصاص برمجة 1',
                'created_at' => '2017-08-28 20:15:03',
                'updated_at' => '2017-08-28 20:15:03',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'degree_id' => 4,
                'lang_id' => 1,
                'text' => 'Programming Degree 2',
                'created_at' => '2017-08-28 20:15:09',
                'updated_at' => '2017-08-28 20:15:18',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'degree_id' => 4,
                'lang_id' => 2,
                'text' => 'اختصاص برمجة 1',
                'created_at' => '2017-08-28 20:15:09',
                'updated_at' => '2017-08-28 20:15:09',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'degree_id' => 5,
                'lang_id' => 1,
                'text' => 'Degree 1',
                'created_at' => '2017-08-28 20:26:25',
                'updated_at' => '2017-08-28 20:26:25',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'degree_id' => 5,
                'lang_id' => 2,
                'text' => 'اختصاص 1',
                'created_at' => '2017-08-28 20:26:25',
                'updated_at' => '2017-08-28 20:26:25',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}