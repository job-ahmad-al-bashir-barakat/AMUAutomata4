<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'page_code' => 'home',
                'route' => 'home',
                'created_at' => '2017-08-23 18:20:56',
                'updated_at' => '2017-10-29 19:24:20',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'page_code' => 'about_us',
                'route' => 'about-us',
                'created_at' => '2017-08-31 18:34:17',
                'updated_at' => '2017-08-31 18:34:17',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'page_code' => 'university_message',
                'route' => 'university-message',
                'created_at' => '2017-10-14 17:58:05',
                'updated_at' => '2017-10-29 19:19:13',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'page_code' => 'university_in_glance',
                'route' => 'university-in-glance',
                'created_at' => '2017-10-14 17:59:01',
                'updated_at' => '2017-10-29 19:24:53',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'page_code' => 'university_council',
                'route' => 'university-council',
                'created_at' => '2017-10-14 18:03:13',
                'updated_at' => '2017-10-29 19:25:07',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'page_code' => 'trusted_council',
                'route' => 'trusted-council',
                'created_at' => '2017-10-14 18:04:01',
                'updated_at' => '2017-10-29 19:25:20',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'page_code' => 'university_partner',
                'route' => 'university-partner',
                'created_at' => '2017-10-14 18:05:24',
                'updated_at' => '2017-10-29 19:25:32',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'page_code' => 'location',
                'route' => 'location',
                'created_at' => '2017-10-14 18:06:10',
                'updated_at' => '2017-10-14 18:06:10',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'page_code' => 'location',
                'route' => 'location',
                'created_at' => '2017-10-14 18:06:12',
                'updated_at' => '2017-10-14 18:08:34',
                'deleted_at' => '2017-10-14 18:08:34',
            ),
            9 => 
            array (
                'id' => 10,
                'page_code' => 'university_offices',
                'route' => 'university-offices',
                'created_at' => '2017-10-14 18:06:46',
                'updated_at' => '2017-10-29 19:25:44',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'page_code' => 'degrees',
                'route' => 'degrees',
                'created_at' => '2017-10-14 18:16:05',
                'updated_at' => '2017-10-14 18:16:05',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'page_code' => 'courses',
                'route' => 'courses',
                'created_at' => '2017-10-14 18:16:26',
                'updated_at' => '2017-10-14 18:16:26',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'page_code' => 'study_plan',
                'route' => 'study-plan',
                'created_at' => '2017-10-14 18:17:00',
                'updated_at' => '2017-10-29 19:26:13',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'page_code' => 'message_and_goals',
                'route' => 'message-and-goals',
                'created_at' => '2017-10-14 18:20:17',
                'updated_at' => '2017-10-29 19:26:28',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'page_code' => 'instructors',
                'route' => 'instructors',
                'created_at' => '2017-10-14 18:20:40',
                'updated_at' => '2017-10-14 18:20:40',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'page_code' => 'labs',
                'route' => 'labs',
                'created_at' => '2017-10-14 18:21:01',
                'updated_at' => '2017-10-14 18:21:01',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'page_code' => 'contact_us',
                'route' => 'contact-us',
                'created_at' => '2017-10-14 18:25:07',
                'updated_at' => '2017-10-29 19:26:01',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'page_code' => 'news',
                'route' => 'news',
                'created_at' => '2017-10-14 18:25:21',
                'updated_at' => '2017-10-14 18:25:21',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'page_code' => 'gallery',
                'route' => 'gallery',
                'created_at' => '2017-10-14 18:25:39',
                'updated_at' => '2017-10-14 18:25:39',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'page_code' => 'admission_rules',
                'route' => 'admission-rules',
                'created_at' => '2017-10-14 18:47:09',
                'updated_at' => '2017-10-29 19:26:45',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'page_code' => 'admission_process',
                'route' => 'admission-process',
                'created_at' => '2017-10-14 18:47:59',
                'updated_at' => '2017-10-29 19:27:02',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'page_code' => 'fees',
                'route' => 'fees',
                'created_at' => '2017-10-14 18:48:22',
                'updated_at' => '2017-10-14 18:48:22',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'page_code' => 'scholarship',
                'route' => 'scholarship',
                'created_at' => '2017-10-14 18:48:43',
                'updated_at' => '2017-10-14 18:48:43',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'page_code' => 'university_calendar',
                'route' => 'university-calendar',
                'created_at' => '2017-10-14 18:49:43',
                'updated_at' => '2017-11-15 20:56:39',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'page_code' => 'courses_list',
                'route' => 'courses-list',
                'created_at' => '2017-10-14 18:50:13',
                'updated_at' => '2017-10-29 19:27:39',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'page_code' => 'exams',
                'route' => 'exams',
                'created_at' => '2017-10-14 18:50:34',
                'updated_at' => '2017-10-14 18:50:34',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'page_code' => 'person',
                'route' => 'person',
                'created_at' => '2017-11-15 18:10:31',
                'updated_at' => '2017-11-15 18:10:31',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}