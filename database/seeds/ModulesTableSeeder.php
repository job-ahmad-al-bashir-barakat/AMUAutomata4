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
                'image_id' => NULL,
                'code' => 'text_editor',
                'customized' => '1',
                'created_at' => '2017-07-22 08:56:29',
                'updated_at' => '2017-07-22 08:56:29',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'image_id' => NULL,
                'code' => 'short_info',
                'customized' => '1',
                'created_at' => '2017-09-30 16:48:36',
                'updated_at' => '2017-09-30 16:48:36',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'image_id' => NULL,
                'code' => 'section_start',
                'customized' => '0',
                'created_at' => '2017-09-06 16:31:23',
                'updated_at' => '2017-10-16 17:14:07',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'image_id' => NULL,
                'code' => 'section_end',
                'customized' => '0',
                'created_at' => '2017-09-06 16:31:56',
                'updated_at' => '2017-10-16 17:14:20',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'image_id' => NULL,
                'code' => 'sliders',
                'customized' => '1',
                'created_at' => '2017-09-09 16:10:32',
                'updated_at' => '2017-09-09 16:10:32',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'image_id' => NULL,
                'code' => 'blocks',
                'customized' => '1',
                'created_at' => '2017-09-10 16:22:43',
                'updated_at' => '2017-09-10 16:22:43',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'image_id' => NULL,
                'code' => 'courses_1',
                'customized' => '1',
                'created_at' => '2017-09-13 18:31:27',
                'updated_at' => '2017-09-13 18:32:15',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'image_id' => NULL,
                'code' => 'persons_1',
                'customized' => '1',
                'created_at' => '2017-09-20 18:10:49',
                'updated_at' => '2017-09-20 18:10:49',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'image_id' => NULL,
                'code' => 'vertical_sliders',
                'customized' => '1',
                'created_at' => '2017-09-24 18:39:16',
                'updated_at' => '2017-09-24 18:39:16',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'image_id' => NULL,
                'code' => 'gallery',
                'customized' => '1',
                'created_at' => '2017-09-29 05:12:27',
                'updated_at' => '2017-09-29 05:12:27',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'image_id' => NULL,
                'code' => 'section_fluid_start',
                'customized' => '0',
                'created_at' => '2017-10-16 16:43:48',
                'updated_at' => '2017-10-16 17:17:32',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'image_id' => NULL,
                'code' => 'small_gallery',
                'customized' => '1',
                'created_at' => '2017-10-16 16:49:39',
                'updated_at' => '2017-10-16 16:49:39',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'image_id' => NULL,
                'code' => 'steps',
                'customized' => '1',
                'created_at' => '2017-10-16 16:50:13',
                'updated_at' => '2017-10-16 16:50:13',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'image_id' => NULL,
                'code' => 'section_intersect_top',
                'customized' => '0',
                'created_at' => '2017-10-16 16:51:31',
                'updated_at' => '2017-10-16 17:17:44',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'image_id' => NULL,
                'code' => 'section_intersect_end',
                'customized' => '0',
                'created_at' => '2017-10-16 16:51:54',
                'updated_at' => '2017-10-16 17:17:55',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'image_id' => NULL,
                'code' => 'text_card_1',
                'customized' => '1',
                'created_at' => '2017-10-16 16:52:28',
                'updated_at' => '2017-10-16 16:52:28',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'image_id' => NULL,
                'code' => 'contact_form',
                'customized' => '1',
                'created_at' => NULL,
                'updated_at' => '2017-10-16 18:09:35',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'image_id' => NULL,
                'code' => 'text_card_2',
                'customized' => '1',
                'created_at' => '2017-10-19 17:15:32',
                'updated_at' => '2017-10-19 17:15:32',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'image_id' => NULL,
                'code' => 'person_page',
                'customized' => '0',
                'created_at' => '2017-10-19 17:31:43',
                'updated_at' => '2017-11-15 19:04:29',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'image_id' => NULL,
                'code' => 'office_page',
                'customized' => '0',
                'created_at' => '2017-10-19 17:44:25',
                'updated_at' => '2017-10-19 17:44:25',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'image_id' => NULL,
                'code' => 'breadcrumb',
                'customized' => '0',
                'created_at' => '2017-10-19 18:08:24',
                'updated_at' => '2017-10-19 18:08:24',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'image_id' => NULL,
                'code' => 'university_council',
                'customized' => '0',
                'created_at' => NULL,
                'updated_at' => '2017-10-31 19:56:44',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'image_id' => NULL,
                'code' => 'trusted_council',
                'customized' => '0',
                'created_at' => NULL,
                'updated_at' => '2017-11-03 05:08:08',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'image_id' => NULL,
                'code' => 'university_partner',
                'customized' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'image_id' => NULL,
                'code' => 'degrees_table',
                'customized' => '0',
                'created_at' => NULL,
                'updated_at' => '2017-11-17 18:53:27',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'image_id' => NULL,
                'code' => 'courses_table',
                'customized' => '0',
                'created_at' => NULL,
                'updated_at' => '2017-11-22 18:56:24',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'image_id' => NULL,
                'code' => 'study_plan',
                'customized' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'image_id' => NULL,
                'code' => 'faculty_instructors',
                'customized' => '1',
                'created_at' => NULL,
                'updated_at' => '2018-12-27 05:20:02',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'image_id' => NULL,
                'code' => 'university_hierarchy',
                'customized' => '1',
                'created_at' => '2018-03-29 18:43:43',
                'updated_at' => '2018-03-29 18:43:43',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'image_id' => NULL,
                'code' => 'galleries',
                'customized' => '1',
                'created_at' => '2018-03-31 18:46:23',
                'updated_at' => '2018-03-31 18:46:23',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'image_id' => NULL,
                'code' => 'courses_list_1',
                'customized' => '1',
                'created_at' => '2018-04-11 18:00:07',
                'updated_at' => '2018-04-11 18:00:21',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'image_id' => NULL,
                'code' => 'google_map',
                'customized' => '1',
                'created_at' => '2018-04-11 18:58:50',
                'updated_at' => '2018-04-11 18:58:50',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'image_id' => NULL,
                'code' => 'course_content',
                'customized' => '1',
                'created_at' => '2018-05-20 15:32:54',
                'updated_at' => '2018-05-20 15:32:54',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'image_id' => NULL,
                'code' => 'labs_list_1',
                'customized' => '0',
                'created_at' => '2018-05-25 12:10:04',
                'updated_at' => '2018-05-26 15:08:18',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'image_id' => NULL,
                'code' => 'lab_page',
                'customized' => '0',
                'created_at' => '2018-05-26 16:12:53',
                'updated_at' => '2018-05-26 16:19:19',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'image_id' => NULL,
                'code' => 'offices_list_1',
                'customized' => '0',
                'created_at' => '2018-05-27 15:31:11',
                'updated_at' => '2018-05-27 15:39:03',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'image_id' => NULL,
                'code' => 'news_list_1',
                'customized' => '0',
                'created_at' => '2018-05-29 15:51:53',
                'updated_at' => '2018-05-29 16:18:10',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'image_id' => NULL,
                'code' => 'news_page',
                'customized' => '0',
                'created_at' => '2018-06-01 06:46:58',
                'updated_at' => '2018-06-01 06:54:35',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'image_id' => NULL,
                'code' => 'latest_news',
                'customized' => '1',
                'created_at' => '2018-12-05 06:31:39',
                'updated_at' => '2018-12-05 06:31:39',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'image_id' => NULL,
                'code' => 'empty_block',
                'customized' => '1',
                'created_at' => '2018-12-25 06:06:54',
                'updated_at' => '2018-12-25 06:11:58',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'image_id' => NULL,
                'code' => 'faculty_researches',
                'customized' => '1',
                'created_at' => '2018-12-27 09:01:57',
                'updated_at' => '2018-12-27 09:01:57',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'image_id' => NULL,
                'code' => 'calendar',
                'customized' => '1',
                'created_at' => '2018-12-30 10:04:47',
                'updated_at' => '2018-12-30 10:04:47',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}