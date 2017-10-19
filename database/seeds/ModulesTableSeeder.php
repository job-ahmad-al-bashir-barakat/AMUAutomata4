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
                'id' => 1,
                'code' => 'text_editor',
                'customized' => '1',
                'created_at' => '2017-07-22 08:56:29',
                'updated_at' => '2017-07-22 08:56:29',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'short_info',
                'customized' => '1',
                'created_at' => '2017-09-30 16:48:36',
                'updated_at' => '2017-09-30 16:48:36',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'section_start',
                'customized' => '0',
                'created_at' => '2017-09-06 16:31:23',
                'updated_at' => '2017-10-16 17:14:07',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 'section_end',
                'customized' => '0',
                'created_at' => '2017-09-06 16:31:56',
                'updated_at' => '2017-10-16 17:14:20',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'code' => 'sliders',
                'customized' => '1',
                'created_at' => '2017-09-09 16:10:32',
                'updated_at' => '2017-09-09 16:10:32',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'code' => 'blocks',
                'customized' => '1',
                'created_at' => '2017-09-10 16:22:43',
                'updated_at' => '2017-09-10 16:22:43',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'code' => 'courses_1',
                'customized' => '1',
                'created_at' => '2017-09-13 18:31:27',
                'updated_at' => '2017-09-13 18:32:15',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'code' => 'persons_1',
                'customized' => '1',
                'created_at' => '2017-09-20 18:10:49',
                'updated_at' => '2017-09-20 18:10:49',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'code' => 'vertical_sliders',
                'customized' => '1',
                'created_at' => '2017-09-24 18:39:16',
                'updated_at' => '2017-09-24 18:39:16',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'code' => 'gallery',
                'customized' => '1',
                'created_at' => '2017-09-29 05:12:27',
                'updated_at' => '2017-09-29 05:12:27',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'code' => 'section_fluid_start',
                'customized' => '0',
                'created_at' => '2017-10-16 16:43:48',
                'updated_at' => '2017-10-16 17:17:32',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'code' => 'small_gallery',
                'customized' => '1',
                'created_at' => '2017-10-16 16:49:39',
                'updated_at' => '2017-10-16 16:49:39',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'code' => 'steps',
                'customized' => '1',
                'created_at' => '2017-10-16 16:50:13',
                'updated_at' => '2017-10-16 16:50:13',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'code' => 'section_intersect_top',
                'customized' => '0',
                'created_at' => '2017-10-16 16:51:31',
                'updated_at' => '2017-10-16 17:17:44',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'code' => 'section_intersect_end',
                'customized' => '0',
                'created_at' => '2017-10-16 16:51:54',
                'updated_at' => '2017-10-16 17:17:55',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'code' => 'text_card_1',
                'customized' => '1',
                'created_at' => '2017-10-16 16:52:28',
                'updated_at' => '2017-10-16 16:52:28',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'code' => 'contact_form',
                'customized' => '1',
                'created_at' => NULL,
                'updated_at' => '2017-10-16 18:09:35',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'code' => 'text_card_2',
                'customized' => '1',
                'created_at' => '2017-10-19 17:15:32',
                'updated_at' => '2017-10-19 17:15:32',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'code' => 'person_page',
                'customized' => '0',
                'created_at' => '2017-10-19 17:31:43',
                'updated_at' => '2017-10-19 17:31:43',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'code' => 'office_page',
                'customized' => '0',
                'created_at' => '2017-10-19 17:44:25',
                'updated_at' => '2017-10-19 17:44:25',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'code' => 'breadcrumb',
                'customized' => '0',
                'created_at' => '2017-10-19 18:08:24',
                'updated_at' => '2017-10-19 18:08:24',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}