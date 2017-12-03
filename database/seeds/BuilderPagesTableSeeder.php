<?php

use Illuminate\Database\Seeder;

class BuilderPagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('builder_pages')->delete();
        
        \DB::table('builder_pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'page_id' => 1,
                'custom_module_id' => 1,
                'position' => 'T',
                'order' => 1,
                'created_at' => '2017-10-16 17:26:52',
                'updated_at' => '2017-10-16 17:31:53',
                'deleted_at' => '2017-10-16 17:31:53',
            ),
            1 => 
            array (
                'id' => 2,
                'page_id' => 1,
                'custom_module_id' => 2,
                'position' => 'T',
                'order' => 3,
                'created_at' => '2017-10-16 17:26:52',
                'updated_at' => '2017-10-16 17:31:53',
                'deleted_at' => '2017-10-16 17:31:53',
            ),
            2 => 
            array (
                'id' => 3,
                'page_id' => 1,
                'custom_module_id' => 4,
                'position' => 'T',
                'order' => 2,
                'created_at' => '2017-10-16 17:26:52',
                'updated_at' => '2017-10-23 18:03:30',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'page_id' => 1,
                'custom_module_id' => 5,
                'position' => 'T',
                'order' => 4,
                'created_at' => '2017-10-16 17:26:52',
                'updated_at' => '2017-10-23 18:03:30',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'page_id' => 1,
                'custom_module_id' => 6,
                'position' => 'T',
                'order' => 1,
                'created_at' => '2017-10-16 17:30:16',
                'updated_at' => '2017-10-23 18:03:30',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'page_id' => 1,
                'custom_module_id' => 7,
                'position' => 'T',
                'order' => 3,
                'created_at' => '2017-10-16 17:30:16',
                'updated_at' => '2017-10-23 18:03:30',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'page_id' => 17,
                'custom_module_id' => 1,
                'position' => 'T',
                'order' => 1,
                'created_at' => '2017-10-16 18:23:29',
                'updated_at' => '2017-10-16 18:23:29',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 10,
                'page_id' => 17,
                'custom_module_id' => 8,
                'position' => 'T',
                'order' => 3,
                'created_at' => '2017-10-16 18:23:29',
                'updated_at' => '2017-10-31 18:00:32',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 11,
                'page_id' => 17,
                'custom_module_id' => 2,
                'position' => 'T',
                'order' => 4,
                'created_at' => '2017-10-16 18:23:29',
                'updated_at' => '2017-10-17 19:24:50',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 12,
                'page_id' => 17,
                'custom_module_id' => 11,
                'position' => 'T',
                'order' => 2,
                'created_at' => '2017-10-17 19:24:50',
                'updated_at' => '2017-10-17 19:24:50',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 13,
                'page_id' => 1,
                'custom_module_id' => 1,
                'position' => 'T',
                'order' => 5,
                'created_at' => '2017-10-23 18:03:30',
                'updated_at' => '2017-10-23 18:03:30',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 14,
                'page_id' => 1,
                'custom_module_id' => 12,
                'position' => 'T',
                'order' => 6,
                'created_at' => '2017-10-23 18:03:30',
                'updated_at' => '2017-10-23 18:03:30',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 15,
                'page_id' => 1,
                'custom_module_id' => 2,
                'position' => 'T',
                'order' => 8,
                'created_at' => '2017-10-23 18:03:30',
                'updated_at' => '2017-10-25 19:30:30',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 16,
                'page_id' => 1,
                'custom_module_id' => 1,
                'position' => 'T',
                'order' => 9,
                'created_at' => '2017-10-25 16:19:40',
                'updated_at' => '2017-10-25 19:30:30',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 17,
                'page_id' => 1,
                'custom_module_id' => 13,
                'position' => 'T',
                'order' => 10,
                'created_at' => '2017-10-25 16:19:40',
                'updated_at' => '2017-10-25 19:30:30',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 18,
                'page_id' => 1,
                'custom_module_id' => 2,
                'position' => 'T',
                'order' => 13,
                'created_at' => '2017-10-25 16:19:40',
                'updated_at' => '2017-10-29 17:46:24',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 19,
                'page_id' => 1,
                'custom_module_id' => 14,
                'position' => 'T',
                'order' => 11,
                'created_at' => '2017-10-25 19:29:45',
                'updated_at' => '2017-10-27 14:15:27',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 20,
                'page_id' => 1,
                'custom_module_id' => 15,
                'position' => 'T',
                'order' => 7,
                'created_at' => '2017-10-27 14:15:26',
                'updated_at' => '2017-10-27 14:15:26',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 21,
                'page_id' => 1,
                'custom_module_id' => 16,
                'position' => 'T',
                'order' => 12,
                'created_at' => '2017-10-29 17:46:23',
                'updated_at' => '2017-10-29 17:46:23',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 22,
                'page_id' => 1,
                'custom_module_id' => 1,
                'position' => 'T',
                'order' => 14,
                'created_at' => '2017-10-29 20:01:50',
                'updated_at' => '2017-10-29 20:01:50',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 23,
                'page_id' => 1,
                'custom_module_id' => 17,
                'position' => 'T',
                'order' => 15,
                'created_at' => '2017-10-29 20:01:50',
                'updated_at' => '2017-10-29 20:01:50',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 24,
                'page_id' => 1,
                'custom_module_id' => 2,
                'position' => 'T',
                'order' => 16,
                'created_at' => '2017-10-29 20:01:50',
                'updated_at' => '2017-10-29 20:01:50',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 25,
                'page_id' => 3,
                'custom_module_id' => 1,
                'position' => 'T',
                'order' => 1,
                'created_at' => '2017-10-31 17:29:09',
                'updated_at' => '2017-10-31 17:29:09',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 26,
                'page_id' => 3,
                'custom_module_id' => 18,
                'position' => 'T',
                'order' => 2,
                'created_at' => '2017-10-31 17:29:09',
                'updated_at' => '2017-10-31 17:29:09',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 27,
                'page_id' => 3,
                'custom_module_id' => 2,
                'position' => 'T',
                'order' => 3,
                'created_at' => '2017-10-31 17:29:10',
                'updated_at' => '2017-10-31 17:29:10',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 28,
                'page_id' => 5,
                'custom_module_id' => 1,
                'position' => 'T',
                'order' => 1,
                'created_at' => '2017-10-31 20:07:01',
                'updated_at' => '2017-10-31 20:07:01',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 29,
                'page_id' => 5,
                'custom_module_id' => 19,
                'position' => 'T',
                'order' => 2,
                'created_at' => '2017-10-31 20:07:01',
                'updated_at' => '2017-10-31 20:07:01',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 30,
                'page_id' => 5,
                'custom_module_id' => 2,
                'position' => 'T',
                'order' => 3,
                'created_at' => '2017-10-31 20:07:01',
                'updated_at' => '2017-10-31 20:07:01',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 31,
                'page_id' => 5,
                'custom_module_id' => 1,
                'position' => 'T',
                'order' => 4,
                'created_at' => '2017-10-31 20:07:01',
                'updated_at' => '2017-10-31 20:07:01',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 32,
                'page_id' => 5,
                'custom_module_id' => 20,
                'position' => 'T',
                'order' => 5,
                'created_at' => '2017-10-31 20:07:02',
                'updated_at' => '2017-10-31 20:07:02',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 33,
                'page_id' => 5,
                'custom_module_id' => 16,
                'position' => 'T',
                'order' => 6,
                'created_at' => '2017-10-31 20:07:02',
                'updated_at' => '2017-10-31 20:07:02',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 34,
                'page_id' => 5,
                'custom_module_id' => 2,
                'position' => 'T',
                'order' => 7,
                'created_at' => '2017-10-31 20:07:02',
                'updated_at' => '2017-10-31 20:07:02',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 35,
                'page_id' => 6,
                'custom_module_id' => 1,
                'position' => 'T',
                'order' => 1,
                'created_at' => '2017-11-03 05:10:52',
                'updated_at' => '2017-11-03 05:10:52',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 36,
                'page_id' => 6,
                'custom_module_id' => 21,
                'position' => 'T',
                'order' => 2,
                'created_at' => '2017-11-03 05:10:52',
                'updated_at' => '2017-11-03 05:10:52',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 37,
                'page_id' => 6,
                'custom_module_id' => 2,
                'position' => 'T',
                'order' => 3,
                'created_at' => '2017-11-03 05:10:52',
                'updated_at' => '2017-11-03 05:10:52',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 38,
                'page_id' => 6,
                'custom_module_id' => 1,
                'position' => 'T',
                'order' => 4,
                'created_at' => '2017-11-03 05:10:52',
                'updated_at' => '2017-11-03 05:10:52',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 39,
                'page_id' => 6,
                'custom_module_id' => 20,
                'position' => 'T',
                'order' => 5,
                'created_at' => '2017-11-03 05:10:52',
                'updated_at' => '2017-11-03 05:10:52',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 40,
                'page_id' => 6,
                'custom_module_id' => 16,
                'position' => 'T',
                'order' => 6,
                'created_at' => '2017-11-03 05:10:52',
                'updated_at' => '2017-11-03 05:10:52',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 41,
                'page_id' => 6,
                'custom_module_id' => 2,
                'position' => 'T',
                'order' => 7,
                'created_at' => '2017-11-03 05:10:52',
                'updated_at' => '2017-11-03 05:10:52',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 42,
                'page_id' => 7,
                'custom_module_id' => 22,
                'position' => 'T',
                'order' => 1,
                'created_at' => '2017-11-05 19:51:38',
                'updated_at' => '2017-11-05 19:51:38',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 52,
                'page_id' => 13,
                'custom_module_id' => 1,
                'position' => 'T',
                'order' => 1,
                'created_at' => '2017-12-01 18:14:30',
                'updated_at' => '2017-12-01 18:14:30',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 53,
                'page_id' => 13,
                'custom_module_id' => 27,
                'position' => 'T',
                'order' => 2,
                'created_at' => '2017-12-01 18:14:30',
                'updated_at' => '2017-12-01 18:14:30',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 54,
                'page_id' => 13,
                'custom_module_id' => 2,
                'position' => 'T',
                'order' => 3,
                'created_at' => '2017-12-01 18:14:30',
                'updated_at' => '2017-12-01 18:14:30',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}