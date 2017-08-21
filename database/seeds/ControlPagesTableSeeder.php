<?php

use Illuminate\Database\Seeder;

class ControlPagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('control_pages')->delete();
        
        \DB::table('control_pages')->insert(array (
            0 => 
            array (
                'id' => 5,
                'control_page_code' => 'home',
                'created_at' => '2017-07-21 22:26:26',
                'updated_at' => '2017-07-22 09:14:30',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 9,
                'control_page_code' => 'global',
                'created_at' => '2017-07-22 07:01:21',
                'updated_at' => '2017-07-22 07:01:21',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 10,
                'control_page_code' => 'langs',
                'created_at' => '2017-07-22 07:53:18',
                'updated_at' => '2017-07-22 07:53:18',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 11,
                'control_page_code' => 'users',
                'created_at' => '2017-07-22 07:54:54',
                'updated_at' => '2017-07-22 07:54:54',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 12,
                'control_page_code' => 'attributes',
                'created_at' => '2017-07-22 07:55:51',
                'updated_at' => '2017-07-22 07:55:51',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 13,
                'control_page_code' => 'modules',
                'created_at' => '2017-07-22 07:56:17',
                'updated_at' => '2017-07-22 07:56:17',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 14,
                'control_page_code' => 'custom_modules',
                'created_at' => '2017-07-22 07:57:51',
                'updated_at' => '2017-07-22 07:57:51',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 15,
                'control_page_code' => 'menus',
                'created_at' => '2017-07-22 07:58:31',
                'updated_at' => '2017-07-22 07:58:31',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 16,
                'control_page_code' => 'general',
                'created_at' => '2017-07-22 07:59:01',
                'updated_at' => '2017-08-09 00:11:20',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 17,
                'control_page_code' => 'control',
                'created_at' => '2017-07-22 07:59:44',
                'updated_at' => '2017-07-22 07:59:44',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 18,
                'control_page_code' => 'univercity',
                'created_at' => '2017-07-22 08:00:35',
                'updated_at' => '2017-07-26 20:06:08',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 19,
                'control_page_code' => 'faculties',
                'created_at' => '2017-07-22 08:01:48',
                'updated_at' => '2017-07-22 08:01:48',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 20,
                'control_page_code' => 'departments',
                'created_at' => '2017-07-22 08:27:04',
                'updated_at' => '2017-07-26 20:11:30',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 21,
                'control_page_code' => 'degrees',
                'created_at' => '2017-07-22 08:27:28',
                'updated_at' => '2017-07-22 08:27:28',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 22,
                'control_page_code' => 'labs',
                'created_at' => '2017-07-22 08:30:26',
                'updated_at' => '2017-07-26 20:11:17',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 23,
                'control_page_code' => 'courses',
                'created_at' => '2017-07-22 08:30:54',
                'updated_at' => '2017-07-22 08:30:54',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 24,
                'control_page_code' => 'person',
                'created_at' => '2017-07-22 08:33:33',
                'updated_at' => '2017-07-26 20:09:12',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 25,
                'control_page_code' => 'university_council',
                'created_at' => '2017-07-22 08:34:39',
                'updated_at' => '2017-07-22 08:34:39',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 26,
                'control_page_code' => 'board_of_trustees',
                'created_at' => '2017-07-22 08:35:20',
                'updated_at' => '2017-07-22 08:35:20',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 27,
                'control_page_code' => 'blog',
                'created_at' => '2017-07-22 08:37:21',
                'updated_at' => '2017-07-22 08:37:21',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 28,
                'control_page_code' => 'setting',
                'created_at' => '2017-07-22 08:48:38',
                'updated_at' => '2017-07-22 08:48:38',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 29,
                'control_page_code' => 'general_setting',
                'created_at' => '2017-07-22 08:51:01',
                'updated_at' => '2017-07-22 08:51:01',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 30,
                'control_page_code' => 'social_network',
                'created_at' => '2017-07-22 08:52:18',
                'updated_at' => '2017-07-22 08:52:18',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 31,
                'control_page_code' => 'gender',
                'created_at' => '2017-07-22 08:54:53',
                'updated_at' => '2017-07-31 20:59:12',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 32,
                'control_page_code' => 'study_year',
                'created_at' => '2017-07-22 09:01:25',
                'updated_at' => '2017-07-22 09:01:25',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 33,
                'control_page_code' => 'semester',
                'created_at' => '2017-07-22 09:06:34',
                'updated_at' => '2017-07-26 19:38:36',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 34,
                'control_page_code' => 'position',
                'created_at' => '2017-07-31 20:58:01',
                'updated_at' => '2017-07-31 20:58:01',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 35,
                'control_page_code' => 'job-title',
                'created_at' => '2017-07-31 20:58:52',
                'updated_at' => '2017-07-31 20:58:52',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}