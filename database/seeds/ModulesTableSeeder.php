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
                'updated_at' => '2017-11-15 19:04:29',
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
            21 => 
            array (
                'id' => 22,
                'code' => 'university_council',
                'customized' => '0',
                'created_at' => NULL,
                'updated_at' => '2017-10-31 19:56:44',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'code' => 'trusted_council',
                'customized' => '0',
                'created_at' => NULL,
                'updated_at' => '2017-11-03 05:08:08',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'code' => 'university_partner',
                'customized' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'code' => 'degrees_table',
                'customized' => '0',
                'created_at' => NULL,
                'updated_at' => '2017-11-17 18:53:27',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'code' => 'courses_table',
                'customized' => '0',
                'created_at' => NULL,
                'updated_at' => '2017-11-22 18:56:24',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'code' => 'study_plan',
                'customized' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'code' => 'faculty_instructors',
                'customized' => '0',
                'created_at' => NULL,
                'updated_at' => '2017-12-09 17:46:45',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'code' => 'university_hierarchy',
                'customized' => '1',
                'created_at' => '2018-03-29 18:43:43',
                'updated_at' => '2018-03-29 18:43:43',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'code' => 'galleries',
                'customized' => '1',
                'created_at' => '2018-03-31 17:46:23',
                'updated_at' => '2018-03-31 17:46:23',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'code' => 'courses_list_1',
                'customized' => '1',
                'created_at' => '2018-04-11 18:00:07',
                'updated_at' => '2018-04-11 18:00:21',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'code' => 'google_map',
                'customized' => '1',
                'created_at' => '2018-04-11 18:58:50',
                'updated_at' => '2018-04-11 18:58:50',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'code' => 'course_content',
                'customized' => '1',
                'created_at' => '2018-05-20 15:32:54',
                'updated_at' => '2018-05-20 15:32:54',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'code' => 'labs_list_1',
                'customized' => '0',
                'created_at' => '2018-05-25 12:10:04',
                'updated_at' => '2018-05-26 15:08:18',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'code' => 'lab_page',
                'customized' => '0',
                'created_at' => '2018-05-26 16:12:53',
                'updated_at' => '2018-05-26 16:19:19',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'code' => 'offices_list_1',
                'customized' => '0',
                'created_at' => '2018-05-27 15:31:11',
                'updated_at' => '2018-05-27 15:39:03',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}