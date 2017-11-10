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
                'id' => 40,
                'control_page_id' => 75,
                '_lft' => 1,
                '_rgt' => 94,
                'parent_id' => NULL,
                'url_path' => 'admin',
                'order' => 1,
                'created_at' => '2017-11-10 17:44:56',
                'updated_at' => '2017-11-10 20:28:24',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 41,
                'control_page_id' => 76,
                '_lft' => 3,
                '_rgt' => 4,
                'parent_id' => 43,
                'url_path' => 'utilities/langs',
                'order' => 1,
                'created_at' => '2017-11-10 17:45:16',
                'updated_at' => '2017-11-10 17:46:01',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 42,
                'control_page_id' => 77,
                '_lft' => 5,
                '_rgt' => 6,
                'parent_id' => 43,
                'url_path' => 'utilities/icons',
                'order' => 2,
                'created_at' => '2017-11-10 17:45:35',
                'updated_at' => '2017-11-10 17:46:01',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 43,
                'control_page_id' => 78,
                '_lft' => 2,
                '_rgt' => 15,
                'parent_id' => 40,
                'url_path' => NULL,
                'order' => 1,
                'created_at' => '2017-11-10 17:45:52',
                'updated_at' => '2017-11-10 20:13:33',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 44,
                'control_page_id' => 79,
                '_lft' => 7,
                '_rgt' => 8,
                'parent_id' => 43,
                'url_path' => 'utilities/users',
                'order' => 3,
                'created_at' => '2017-11-10 17:46:29',
                'updated_at' => '2017-11-10 17:46:29',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 45,
                'control_page_id' => 80,
                '_lft' => 9,
                '_rgt' => 10,
                'parent_id' => 43,
                'url_path' => 'utilities/attributes',
                'order' => 4,
                'created_at' => '2017-11-10 17:47:31',
                'updated_at' => '2017-11-10 17:47:31',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 46,
                'control_page_id' => 81,
                '_lft' => 11,
                '_rgt' => 12,
                'parent_id' => 43,
                'url_path' => 'utilities/modules',
                'order' => 5,
                'created_at' => '2017-11-10 17:47:50',
                'updated_at' => '2017-11-10 17:47:50',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 47,
                'control_page_id' => 82,
                '_lft' => 13,
                '_rgt' => 14,
                'parent_id' => 43,
                'url_path' => 'utilities/pages',
                'order' => 6,
                'created_at' => '2017-11-10 17:48:07',
                'updated_at' => '2017-11-10 17:48:07',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 48,
                'control_page_id' => 83,
                '_lft' => 17,
                '_rgt' => 18,
                'parent_id' => 49,
                'url_path' => 'utilities/general/menu',
                'order' => 1,
                'created_at' => '2017-11-10 17:48:38',
                'updated_at' => '2017-11-10 17:49:12',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 49,
                'control_page_id' => 84,
                '_lft' => 16,
                '_rgt' => 23,
                'parent_id' => 40,
                'url_path' => NULL,
                'order' => 2,
                'created_at' => '2017-11-10 17:48:54',
                'updated_at' => '2017-11-10 20:13:33',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 50,
                'control_page_id' => 85,
                '_lft' => 19,
                '_rgt' => 20,
                'parent_id' => 49,
                'url_path' => 'utilities/control/menu',
                'order' => 2,
                'created_at' => '2017-11-10 17:49:39',
                'updated_at' => '2017-11-10 17:49:39',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 51,
                'control_page_id' => 86,
                '_lft' => 21,
                '_rgt' => 22,
                'parent_id' => 49,
                'url_path' => 'utilities/menu-tables',
                'order' => 3,
                'created_at' => '2017-11-10 17:50:07',
                'updated_at' => '2017-11-10 17:50:07',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 52,
                'control_page_id' => 87,
                '_lft' => 24,
                '_rgt' => 43,
                'parent_id' => 40,
                'url_path' => NULL,
                'order' => 4,
                'created_at' => '2017-11-10 17:50:41',
                'updated_at' => '2017-11-10 20:13:33',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 53,
                'control_page_id' => 88,
                '_lft' => 25,
                '_rgt' => 30,
                'parent_id' => 52,
                'url_path' => 'admin/faculties',
                'order' => 1,
                'created_at' => '2017-11-10 17:50:59',
                'updated_at' => '2017-11-10 17:50:59',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 54,
                'control_page_id' => 89,
                '_lft' => 31,
                '_rgt' => 32,
                'parent_id' => 52,
                'url_path' => 'admin/departments',
                'order' => 2,
                'created_at' => '2017-11-10 17:51:12',
                'updated_at' => '2017-11-10 17:51:12',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 55,
                'control_page_id' => 90,
                '_lft' => 33,
                '_rgt' => 34,
                'parent_id' => 52,
                'url_path' => 'admin/degrees',
                'order' => 3,
                'created_at' => '2017-11-10 17:51:27',
                'updated_at' => '2017-11-10 17:51:27',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 56,
                'control_page_id' => 91,
                '_lft' => 35,
                '_rgt' => 36,
                'parent_id' => 52,
                'url_path' => 'admin/study-plan',
                'order' => 4,
                'created_at' => '2017-11-10 17:51:44',
                'updated_at' => '2017-11-10 17:51:44',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 57,
                'control_page_id' => 92,
                '_lft' => 37,
                '_rgt' => 38,
                'parent_id' => 52,
                'url_path' => 'admin/hierarchy/menu',
                'order' => 5,
                'created_at' => '2017-11-10 17:52:12',
                'updated_at' => '2017-11-10 17:52:12',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 58,
                'control_page_id' => 93,
                '_lft' => 39,
                '_rgt' => 40,
                'parent_id' => 52,
                'url_path' => 'admin/offices',
                'order' => 6,
                'created_at' => '2017-11-10 17:52:29',
                'updated_at' => '2017-11-10 17:52:29',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 59,
                'control_page_id' => 94,
                '_lft' => 41,
                '_rgt' => 42,
                'parent_id' => 52,
                'url_path' => 'admin/partners',
                'order' => 7,
                'created_at' => '2017-11-10 17:52:45',
                'updated_at' => '2017-11-10 17:52:45',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 60,
                'control_page_id' => 95,
                '_lft' => 44,
                '_rgt' => 51,
                'parent_id' => 40,
                'url_path' => NULL,
                'order' => 5,
                'created_at' => '2017-11-10 17:53:08',
                'updated_at' => '2017-11-10 20:13:33',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 61,
                'control_page_id' => 96,
                '_lft' => 45,
                '_rgt' => 46,
                'parent_id' => 60,
                'url_path' => 'admin/university-council',
                'order' => 1,
                'created_at' => '2017-11-10 17:53:33',
                'updated_at' => '2017-11-10 17:53:33',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 62,
                'control_page_id' => 97,
                '_lft' => 47,
                '_rgt' => 48,
                'parent_id' => 60,
                'url_path' => 'admin/board-of-trustees',
                'order' => 2,
                'created_at' => '2017-11-10 17:54:14',
                'updated_at' => '2017-11-10 17:54:14',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 63,
                'control_page_id' => 98,
                '_lft' => 49,
                '_rgt' => 50,
                'parent_id' => 60,
                'url_path' => 'admin/staff',
                'order' => 3,
                'created_at' => '2017-11-10 17:54:29',
                'updated_at' => '2017-11-10 17:54:29',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 64,
                'control_page_id' => 99,
                '_lft' => 52,
                '_rgt' => 53,
                'parent_id' => 40,
                'url_path' => 'admin/blog',
                'order' => 6,
                'created_at' => '2017-11-10 17:54:45',
                'updated_at' => '2017-11-10 20:13:33',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 65,
                'control_page_id' => 100,
                '_lft' => 54,
                '_rgt' => 71,
                'parent_id' => 40,
                'url_path' => NULL,
                'order' => 7,
                'created_at' => '2017-11-10 18:32:23',
                'updated_at' => '2017-11-10 20:13:33',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 66,
                'control_page_id' => 101,
                '_lft' => 55,
                '_rgt' => 56,
                'parent_id' => 65,
                'url_path' => 'utilities/general-setting',
                'order' => 1,
                'created_at' => '2017-11-10 18:32:56',
                'updated_at' => '2017-11-10 18:32:56',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 67,
                'control_page_id' => 102,
                '_lft' => 57,
                '_rgt' => 58,
                'parent_id' => 65,
                'url_path' => 'utilities/social-network',
                'order' => 2,
                'created_at' => '2017-11-10 18:33:18',
                'updated_at' => '2017-11-10 18:33:18',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 68,
                'control_page_id' => 103,
                '_lft' => 59,
                '_rgt' => 60,
                'parent_id' => 65,
                'url_path' => 'utilities/gender',
                'order' => 3,
                'created_at' => '2017-11-10 18:33:39',
                'updated_at' => '2017-11-10 18:33:39',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 69,
                'control_page_id' => 104,
                '_lft' => 61,
                '_rgt' => 62,
                'parent_id' => 65,
                'url_path' => 'utilities/position',
                'order' => 4,
                'created_at' => '2017-11-10 18:33:58',
                'updated_at' => '2017-11-10 18:33:58',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 70,
                'control_page_id' => 105,
                '_lft' => 63,
                '_rgt' => 64,
                'parent_id' => 65,
                'url_path' => 'utilities/job-title',
                'order' => 5,
                'created_at' => '2017-11-10 18:34:22',
                'updated_at' => '2017-11-10 18:34:22',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 71,
                'control_page_id' => 106,
                '_lft' => 65,
                '_rgt' => 66,
                'parent_id' => 65,
                'url_path' => 'admin/study-year',
                'order' => 6,
                'created_at' => '2017-11-10 18:36:18',
                'updated_at' => '2017-11-10 18:36:18',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 72,
                'control_page_id' => 107,
                '_lft' => 67,
                '_rgt' => 68,
                'parent_id' => 65,
                'url_path' => 'admin/semester',
                'order' => 7,
                'created_at' => '2017-11-10 18:36:43',
                'updated_at' => '2017-11-10 18:36:43',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 73,
                'control_page_id' => 108,
                '_lft' => 69,
                '_rgt' => 70,
                'parent_id' => 65,
                'url_path' => 'admin/hierarchy-type',
                'order' => 8,
                'created_at' => '2017-11-10 18:37:06',
                'updated_at' => '2017-11-10 18:37:06',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 74,
                'control_page_id' => 109,
                '_lft' => 26,
                '_rgt' => 27,
                'parent_id' => 53,
                'url_path' => 'admin/{id}/courses',
                'order' => 1,
                'created_at' => '2017-11-10 19:34:43',
                'updated_at' => '2017-11-10 19:35:08',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 75,
                'control_page_id' => 110,
                '_lft' => 28,
                '_rgt' => 29,
                'parent_id' => 53,
                'url_path' => 'admin/{id}/labs',
                'order' => 2,
                'created_at' => '2017-11-10 19:36:03',
                'updated_at' => '2017-11-10 20:04:34',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 76,
                'control_page_id' => 111,
                '_lft' => 72,
                '_rgt' => 93,
                'parent_id' => 40,
                'url_path' => NULL,
                'order' => 3,
                'created_at' => '2017-11-10 20:13:18',
                'updated_at' => '2017-11-10 20:13:33',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 77,
                'control_page_id' => 112,
                '_lft' => 73,
                '_rgt' => 76,
                'parent_id' => 76,
                'url_path' => 'utilities/builder/sliders',
                'order' => 1,
                'created_at' => '2017-11-10 20:13:56',
                'updated_at' => '2017-11-10 20:23:20',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 78,
                'control_page_id' => 113,
                '_lft' => 74,
                '_rgt' => 75,
                'parent_id' => 77,
                'url_path' => 'utilities/builder/sliders/{slider->id}',
                'order' => 1,
                'created_at' => '2017-11-10 20:20:51',
                'updated_at' => '2017-11-10 21:45:26',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 79,
                'control_page_id' => 114,
                '_lft' => 77,
                '_rgt' => 80,
                'parent_id' => 76,
                'url_path' => 'utilities/builder/vertical-sliders',
                'order' => 3,
                'created_at' => '2017-11-10 20:22:51',
                'updated_at' => '2017-11-10 20:22:51',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 80,
                'control_page_id' => 115,
                '_lft' => 78,
                '_rgt' => 79,
                'parent_id' => 79,
                'url_path' => 'utilities/builder/vertical-sliders/{verticalSlider->id}',
                'order' => 1,
                'created_at' => '2017-11-10 20:23:50',
                'updated_at' => '2017-11-10 21:45:37',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 81,
                'control_page_id' => 116,
                '_lft' => 81,
                '_rgt' => 84,
                'parent_id' => 76,
                'url_path' => 'utilities/builder/blocks',
                'order' => 3,
                'created_at' => '2017-11-10 20:24:29',
                'updated_at' => '2017-11-10 20:24:29',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 82,
                'control_page_id' => 117,
                '_lft' => 82,
                '_rgt' => 83,
                'parent_id' => 81,
                'url_path' => 'utilities/builder/blocks/{block->id}',
                'order' => 1,
                'created_at' => '2017-11-10 20:25:01',
                'updated_at' => '2017-11-10 21:45:32',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 83,
                'control_page_id' => 118,
                '_lft' => 85,
                '_rgt' => 86,
                'parent_id' => 76,
                'url_path' => 'utilities/builder/steps',
                'order' => 4,
                'created_at' => '2017-11-10 20:25:20',
                'updated_at' => '2017-11-10 20:25:20',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 84,
                'control_page_id' => 119,
                '_lft' => 87,
                '_rgt' => 88,
                'parent_id' => 76,
                'url_path' => 'utilities/builder/text-cards',
                'order' => 5,
                'created_at' => '2017-11-10 20:25:42',
                'updated_at' => '2017-11-10 20:25:42',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 85,
                'control_page_id' => 120,
                '_lft' => 89,
                '_rgt' => 90,
                'parent_id' => 76,
                'url_path' => 'utilities/custom-modules',
                'order' => 6,
                'created_at' => '2017-11-10 20:26:48',
                'updated_at' => '2017-11-10 20:26:48',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 86,
                'control_page_id' => 121,
                '_lft' => 91,
                '_rgt' => 92,
                'parent_id' => 76,
                'url_path' => 'utilities/builder/pages',
                'order' => 7,
                'created_at' => '2017-11-10 20:27:07',
                'updated_at' => '2017-11-10 20:27:07',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}