<?php

use Illuminate\Database\Seeder;

class ControlMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('control_menus')->delete();
        
        \DB::table('control_menus')->insert(array (
            0 => 
            array (
                'id' => 4,
                'control_page_id' => 5,
                '_lft' => 1,
                '_rgt' => 64,
                'parent_id' => NULL,
                'url_path' => 'admin',
                'order' => 1,
                'created_at' => '2017-07-21 22:26:26',
                'updated_at' => '2017-07-26 19:39:02',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 6,
                'control_page_id' => 10,
                '_lft' => 13,
                '_rgt' => 14,
                'parent_id' => 5,
                'url_path' => 'utilities/langs',
                'order' => 1,
                'created_at' => '2017-07-22 07:53:19',
                'updated_at' => '2017-07-26 19:04:54',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 7,
                'control_page_id' => 11,
                '_lft' => 15,
                '_rgt' => 16,
                'parent_id' => 5,
                'url_path' => 'utilities/users',
                'order' => 2,
                'created_at' => '2017-07-22 07:54:54',
                'updated_at' => '2017-07-26 19:04:54',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 8,
                'control_page_id' => 12,
                '_lft' => 21,
                '_rgt' => 22,
                'parent_id' => 5,
                'url_path' => 'utilities/attributes',
                'order' => 3,
                'created_at' => '2017-07-22 07:55:51',
                'updated_at' => '2017-07-26 19:04:54',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 9,
                'control_page_id' => 13,
                '_lft' => 17,
                '_rgt' => 18,
                'parent_id' => 5,
                'url_path' => 'utilities/modules',
                'order' => 4,
                'created_at' => '2017-07-22 07:56:18',
                'updated_at' => '2017-07-26 19:04:54',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 10,
                'control_page_id' => 14,
                '_lft' => 19,
                '_rgt' => 20,
                'parent_id' => 5,
                'url_path' => 'utilities/custom-modules',
                'order' => 5,
                'created_at' => '2017-07-22 07:57:51',
                'updated_at' => '2017-07-26 19:04:54',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 11,
                'control_page_id' => 15,
                '_lft' => 44,
                '_rgt' => 49,
                'parent_id' => 4,
                'url_path' => NULL,
                'order' => 1,
                'created_at' => '2017-07-22 07:58:31',
                'updated_at' => '2017-07-26 20:37:35',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 12,
                'control_page_id' => 16,
                '_lft' => 45,
                '_rgt' => 46,
                'parent_id' => 11,
                'url_path' => 'utilities/general/menu',
                'order' => 1,
                'created_at' => '2017-07-22 07:59:02',
                'updated_at' => '2017-07-22 07:59:02',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 13,
                'control_page_id' => 17,
                '_lft' => 47,
                '_rgt' => 48,
                'parent_id' => 11,
                'url_path' => 'utilities/control/menu',
                'order' => 2,
                'created_at' => '2017-07-22 07:59:44',
                'updated_at' => '2017-07-26 14:12:17',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 14,
                'control_page_id' => 18,
                '_lft' => 26,
                '_rgt' => 37,
                'parent_id' => 4,
                'url_path' => NULL,
                'order' => 2,
                'created_at' => '2017-07-22 08:00:35',
                'updated_at' => '2017-07-26 20:37:35',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 15,
                'control_page_id' => 19,
                '_lft' => 27,
                '_rgt' => 32,
                'parent_id' => 14,
                'url_path' => 'admin/faculties',
                'order' => 1,
                'created_at' => '2017-07-22 08:01:49',
                'updated_at' => '2017-07-26 20:36:55',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 16,
                'control_page_id' => 20,
                '_lft' => 33,
                '_rgt' => 34,
                'parent_id' => 14,
                'url_path' => 'admin/departments',
                'order' => 2,
                'created_at' => '2017-07-22 08:27:04',
                'updated_at' => '2017-07-26 20:36:56',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 17,
                'control_page_id' => 21,
                '_lft' => 35,
                '_rgt' => 36,
                'parent_id' => 14,
                'url_path' => 'admin/degrees',
                'order' => 3,
                'created_at' => '2017-07-22 08:27:28',
                'updated_at' => '2017-07-26 20:36:56',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 18,
                'control_page_id' => 22,
                '_lft' => 28,
                '_rgt' => 29,
                'parent_id' => 15,
                'url_path' => NULL,
                'order' => 1,
                'created_at' => '2017-07-22 08:30:27',
                'updated_at' => '2017-08-02 21:48:42',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 19,
                'control_page_id' => 23,
                '_lft' => 30,
                '_rgt' => 31,
                'parent_id' => 15,
                'url_path' => NULL,
                'order' => 2,
                'created_at' => '2017-07-22 08:30:54',
                'updated_at' => '2017-08-02 21:48:42',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 20,
                'control_page_id' => 24,
                '_lft' => 38,
                '_rgt' => 43,
                'parent_id' => 4,
                'url_path' => NULL,
                'order' => 3,
                'created_at' => '2017-07-22 08:33:33',
                'updated_at' => '2017-07-26 20:37:35',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 21,
                'control_page_id' => 25,
                '_lft' => 39,
                '_rgt' => 40,
                'parent_id' => 20,
                'url_path' => 'admin/university-council',
                'order' => 1,
                'created_at' => '2017-07-22 08:34:39',
                'updated_at' => '2017-07-26 16:54:38',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 22,
                'control_page_id' => 26,
                '_lft' => 41,
                '_rgt' => 42,
                'parent_id' => 20,
                'url_path' => 'admin/board-of-trustees',
                'order' => 2,
                'created_at' => '2017-07-22 08:35:20',
                'updated_at' => '2017-07-26 16:54:38',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 23,
                'control_page_id' => 27,
                '_lft' => 8,
                '_rgt' => 11,
                'parent_id' => 4,
                'url_path' => NULL,
                'order' => 4,
                'created_at' => '2017-07-22 08:37:21',
                'updated_at' => '2017-07-26 20:37:35',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 24,
                'control_page_id' => 28,
                '_lft' => 50,
                '_rgt' => 63,
                'parent_id' => 4,
                'url_path' => NULL,
                'order' => 5,
                'created_at' => '2017-07-22 08:48:38',
                'updated_at' => '2017-07-26 20:37:36',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 25,
                'control_page_id' => 29,
                '_lft' => 51,
                '_rgt' => 52,
                'parent_id' => 24,
                'url_path' => 'utilities/general-setting',
                'order' => 2,
                'created_at' => '2017-07-22 08:51:02',
                'updated_at' => '2017-08-18 18:10:07',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 26,
                'control_page_id' => 30,
                '_lft' => 53,
                '_rgt' => 54,
                'parent_id' => 24,
                'url_path' => 'utilities/social-network',
                'order' => 3,
                'created_at' => '2017-07-22 08:52:18',
                'updated_at' => '2017-08-18 18:10:07',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 27,
                'control_page_id' => 31,
                '_lft' => 55,
                '_rgt' => 56,
                'parent_id' => 24,
                'url_path' => 'utilities/gender',
                'order' => 4,
                'created_at' => '2017-07-22 08:54:53',
                'updated_at' => '2017-08-18 18:10:07',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 28,
                'control_page_id' => 32,
                '_lft' => 57,
                '_rgt' => 58,
                'parent_id' => 24,
                'url_path' => 'admin/study-year',
                'order' => 5,
                'created_at' => '2017-07-22 09:01:25',
                'updated_at' => '2017-08-18 18:10:07',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 33,
                'control_page_id' => 33,
                '_lft' => 59,
                '_rgt' => 60,
                'parent_id' => 24,
                'url_path' => 'admin/semester',
                'order' => 6,
                'created_at' => '2017-07-22 09:06:34',
                'updated_at' => '2017-08-18 18:10:07',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 35,
                'control_page_id' => 34,
                '_lft' => 61,
                '_rgt' => 62,
                'parent_id' => 24,
                'url_path' => 'utilities/position',
                'order' => 7,
                'created_at' => '2017-07-31 20:58:01',
                'updated_at' => '2017-08-18 18:10:07',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 36,
                'control_page_id' => 35,
                '_lft' => 9,
                '_rgt' => 10,
                'parent_id' => 23,
                'url_path' => 'utilities/job-title',
                'order' => 1,
                'created_at' => '2017-07-31 20:58:52',
                'updated_at' => '2017-08-18 18:10:07',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}