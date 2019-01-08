<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'automata',
                'guard_name' => 'web',
                'hidden' => 'Y',
                'created_at' => '2018-03-15 07:45:40',
                'updated_at' => '2018-03-17 07:33:22',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'administrator',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-15 07:46:03',
                'updated_at' => '2018-03-17 07:34:53',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'languages',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-15 13:26:30',
                'updated_at' => '2018-03-15 13:26:30',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'schema-tables',
                'guard_name' => 'web',
                'hidden' => 'Y',
                'created_at' => '2018-03-17 06:48:07',
                'updated_at' => '2018-03-17 07:35:47',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'tables',
                'guard_name' => 'web',
                'hidden' => 'Y',
                'created_at' => '2018-03-17 07:09:52',
                'updated_at' => '2018-03-17 07:35:56',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'icons',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-17 07:18:56',
                'updated_at' => '2018-03-17 07:18:56',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'attributes',
                'guard_name' => 'web',
                'hidden' => 'Y',
                'created_at' => '2018-03-17 07:19:39',
                'updated_at' => '2018-03-17 07:36:07',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'modules',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-17 07:19:55',
                'updated_at' => '2018-03-17 07:19:55',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'pages',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-17 07:20:15',
                'updated_at' => '2018-03-17 07:20:15',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'permissions',
                'guard_name' => 'web',
                'hidden' => 'Y',
                'created_at' => '2018-03-17 07:20:56',
                'updated_at' => '2018-03-17 07:20:56',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'roles',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-17 07:21:11',
                'updated_at' => '2018-03-17 07:21:11',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'users',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-17 07:21:32',
                'updated_at' => '2018-03-17 07:21:32',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'sliders',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-17 07:22:14',
                'updated_at' => '2018-03-17 07:22:14',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'vertical-sliders',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-17 07:22:52',
                'updated_at' => '2018-03-17 07:22:52',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'blocks',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-17 07:23:16',
                'updated_at' => '2018-03-17 07:23:16',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'text-cards',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-17 07:23:43',
                'updated_at' => '2018-03-17 07:23:43',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'custom-modules',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-17 07:24:10',
                'updated_at' => '2018-03-17 07:24:10',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'page-builder',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-17 07:24:44',
                'updated_at' => '2018-03-17 07:24:44',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'steps',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-17 08:35:33',
                'updated_at' => '2018-03-17 08:35:33',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'website-menu',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-20 19:09:46',
                'updated_at' => '2018-03-20 19:09:46',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'control-panel-menu',
                'guard_name' => 'web',
                'hidden' => 'Y',
                'created_at' => '2018-03-20 19:10:35',
                'updated_at' => '2018-03-20 19:10:35',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'general-setting',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-21 16:47:36',
                'updated_at' => '2018-03-21 16:47:36',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'social-network',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-21 16:48:20',
                'updated_at' => '2018-03-21 16:48:20',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'gender',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-21 16:48:48',
                'updated_at' => '2018-03-21 16:48:48',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'position',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-21 16:49:18',
                'updated_at' => '2018-03-21 16:49:18',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'job-title',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-21 16:49:52',
                'updated_at' => '2018-03-21 16:49:52',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'faculties',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-21 16:50:43',
                'updated_at' => '2018-03-21 16:50:43',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'departments',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-21 16:51:04',
                'updated_at' => '2018-03-21 16:51:04',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'degrees',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-21 16:51:33',
                'updated_at' => '2018-03-21 16:51:33',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'study-plan',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-21 16:52:08',
                'updated_at' => '2018-03-21 16:52:08',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'offices',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-21 16:52:36',
                'updated_at' => '2018-03-21 16:52:36',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'partners',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-21 16:52:54',
                'updated_at' => '2018-03-21 16:52:54',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'university-council',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-21 17:23:51',
                'updated_at' => '2018-03-21 17:23:51',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'board-of-trustees',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-21 17:24:31',
                'updated_at' => '2018-03-21 17:24:31',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'staff',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-21 17:25:10',
                'updated_at' => '2018-03-21 17:25:10',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'news',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-21 17:26:11',
                'updated_at' => '2018-05-12 18:28:41',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'study-year',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-21 17:27:44',
                'updated_at' => '2018-03-21 17:27:44',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'semester',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-21 17:28:21',
                'updated_at' => '2018-03-21 17:28:21',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'hierarchy-type',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-21 17:29:05',
                'updated_at' => '2018-03-21 17:29:05',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'galleries',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-03-30 06:13:30',
                'updated_at' => '2018-03-30 06:13:30',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'news-status',
                'guard_name' => 'web',
                'hidden' => 'Y',
                'created_at' => '2018-05-13 15:53:36',
                'updated_at' => '2018-05-13 15:53:36',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'translation-manager',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-10-26 07:15:00',
                'updated_at' => '2018-10-26 07:15:00',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'hierarchy',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-10-26 07:33:16',
                'updated_at' => '2018-10-26 07:33:16',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'campuses',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-11-03 15:05:04',
                'updated_at' => '2018-11-03 15:05:04',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'management-staff',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-12-02 07:53:21',
                'updated_at' => '2018-12-02 07:53:21',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'calendar',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2018-12-30 13:46:18',
                'updated_at' => '2018-12-30 13:46:18',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'footer',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2019-01-05 05:51:45',
                'updated_at' => '2019-01-05 05:51:45',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'show-modules',
                'guard_name' => 'web',
                'hidden' => 'N',
                'created_at' => '2019-01-06 12:50:41',
                'updated_at' => '2019-01-06 12:50:41',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}