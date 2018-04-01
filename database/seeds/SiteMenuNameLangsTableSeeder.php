<?php

use Illuminate\Database\Seeder;

class SiteMenuNameLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('site_menu_name_langs')->delete();
        
        \DB::table('site_menu_name_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'site_menu_id' => 2,
                'lang_id' => 1,
                'text' => 'About University',
                'created_at' => '2017-10-14 17:56:06',
                'updated_at' => '2017-10-14 17:56:06',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'site_menu_id' => 2,
                'lang_id' => 2,
                'text' => 'حول الجامعة',
                'created_at' => '2017-10-14 17:56:06',
                'updated_at' => '2017-10-14 17:56:06',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'site_menu_id' => 5,
                'lang_id' => 1,
                'text' => 'Hierarchy',
                'created_at' => '2017-10-14 18:01:05',
                'updated_at' => '2018-03-26 19:34:57',
                'deleted_at' => '2018-03-26 19:34:57',
            ),
            3 => 
            array (
                'id' => 4,
                'site_menu_id' => 5,
                'lang_id' => 2,
                'text' => 'الهيكلية',
                'created_at' => '2017-10-14 18:01:05',
                'updated_at' => '2018-03-26 19:34:57',
                'deleted_at' => '2018-03-26 19:34:57',
            ),
            4 => 
            array (
                'id' => 5,
                'site_menu_id' => 13,
                'lang_id' => 1,
                'text' => 'Medical',
                'created_at' => '2017-10-14 18:11:23',
                'updated_at' => '2017-11-12 19:48:19',
                'deleted_at' => '2017-11-12 19:48:19',
            ),
            5 => 
            array (
                'id' => 6,
                'site_menu_id' => 13,
                'lang_id' => 2,
                'text' => 'طبي',
                'created_at' => '2017-10-14 18:11:23',
                'updated_at' => '2017-11-12 19:48:19',
                'deleted_at' => '2017-11-12 19:48:19',
            ),
            6 => 
            array (
                'id' => 7,
                'site_menu_id' => 14,
                'lang_id' => 1,
                'text' => 'Faculties',
                'created_at' => '2017-10-14 18:12:30',
                'updated_at' => '2017-11-12 19:50:47',
                'deleted_at' => '2017-11-12 19:50:47',
            ),
            7 => 
            array (
                'id' => 8,
                'site_menu_id' => 14,
                'lang_id' => 2,
                'text' => 'الكليات',
                'created_at' => '2017-10-14 18:12:30',
                'updated_at' => '2017-11-12 19:50:47',
                'deleted_at' => '2017-11-12 19:50:47',
            ),
            8 => 
            array (
                'id' => 9,
                'site_menu_id' => 15,
                'lang_id' => 1,
                'text' => 'Engineering',
                'created_at' => '2017-10-14 18:13:31',
                'updated_at' => '2017-11-12 19:50:08',
                'deleted_at' => '2017-11-12 19:50:08',
            ),
            9 => 
            array (
                'id' => 10,
                'site_menu_id' => 15,
                'lang_id' => 2,
                'text' => 'الهندسة',
                'created_at' => '2017-10-14 18:13:31',
                'updated_at' => '2017-11-12 19:50:08',
                'deleted_at' => '2017-11-12 19:50:08',
            ),
            10 => 
            array (
                'id' => 11,
                'site_menu_id' => 33,
                'lang_id' => 1,
                'text' => 'Registration And Admission',
                'created_at' => '2017-10-14 18:27:33',
                'updated_at' => '2017-10-14 18:27:33',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'site_menu_id' => 33,
                'lang_id' => 2,
                'text' => 'القبول والتسجيل',
                'created_at' => '2017-10-14 18:27:33',
                'updated_at' => '2017-10-14 18:27:33',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'site_menu_id' => 34,
                'lang_id' => 1,
                'text' => 'Study and Exams',
                'created_at' => '2017-10-14 18:28:04',
                'updated_at' => '2017-10-14 18:28:04',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'site_menu_id' => 34,
                'lang_id' => 2,
                'text' => 'الدراسات والامتحانات',
                'created_at' => '2017-10-14 18:28:04',
                'updated_at' => '2017-10-14 18:28:04',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}