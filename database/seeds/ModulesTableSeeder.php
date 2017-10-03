<?php

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('modules')->delete();
        
        \DB::table('modules')->insert(array (
            0 => 
            array (
                'id' => 2,
                'code' => 'text_editor',
                'created_at' => '2017-07-22 08:56:29',
                'updated_at' => '2017-07-22 08:56:29',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'code' => 'section_start',
                'created_at' => '2017-09-06 16:31:23',
                'updated_at' => '2017-09-06 17:18:03',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'code' => 'section_end',
                'created_at' => '2017-09-06 16:31:56',
                'updated_at' => '2017-09-06 17:18:11',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'code' => 'sliders',
                'created_at' => '2017-09-09 16:10:32',
                'updated_at' => '2017-09-09 16:10:32',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'code' => 'blocks',
                'created_at' => '2017-09-10 16:22:43',
                'updated_at' => '2017-09-10 16:22:43',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'code' => 'courses_1',
                'created_at' => '2017-09-13 18:31:27',
                'updated_at' => '2017-09-13 18:32:15',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'code' => 'persons_1',
                'created_at' => '2017-09-20 18:10:49',
                'updated_at' => '2017-09-20 18:10:49',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 9,
                'code' => 'vertical_sliders',
                'created_at' => '2017-09-24 18:39:16',
                'updated_at' => '2017-09-24 18:39:16',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'code' => 'gallery',
                'created_at' => '2017-09-29 05:12:27',
                'updated_at' => '2017-09-29 05:12:27',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 11,
                'code' => 'short_info',
                'created_at' => '2017-09-30 16:48:36',
                'updated_at' => '2017-09-30 16:48:36',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}