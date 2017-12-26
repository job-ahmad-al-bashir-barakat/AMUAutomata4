<?php

use Illuminate\Database\Seeder;

class TablesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tables')->delete();
        
        \DB::table('tables')->insert(array (
            0 => 
            array (
                'id' => 1,
                'table_name' => 'attributes',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-15 19:44:05',
                'updated_at' => '2017-12-15 19:44:05',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'table_name' => 'block_details',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 17:24:39',
                'updated_at' => '2017-12-16 17:24:39',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'table_name' => 'blocks',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 17:25:08',
                'updated_at' => '2017-12-16 17:25:08',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'table_name' => 'builder_pages',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 17:25:24',
                'updated_at' => '2017-12-16 17:25:24',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'table_name' => 'contacts',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 18:18:42',
                'updated_at' => '2017-12-16 18:18:42',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'table_name' => 'control_menus',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 18:18:57',
                'updated_at' => '2017-12-16 18:18:57',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'table_name' => 'contact_social_network',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:25:37',
                'updated_at' => '2017-12-16 20:25:37',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'table_name' => 'control_pages',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:26:02',
                'updated_at' => '2017-12-16 20:26:02',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'table_name' => 'courses',
                'namespace' => 'Modules\\Utilities\\Admin',
                'pageable' => 1,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:26:52',
                'updated_at' => '2017-12-16 20:26:52',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'table_name' => 'custom_module_attribute_values',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:27:17',
                'updated_at' => '2017-12-16 20:27:17',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'table_name' => 'custom_modules',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:27:42',
                'updated_at' => '2017-12-16 20:27:42',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'table_name' => 'degrees',
                'namespace' => 'Modules\\Utilities\\Admin',
                'pageable' => 1,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:28:01',
                'updated_at' => '2017-12-16 20:28:01',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'table_name' => 'departments',
                'namespace' => 'Modules\\Utilities\\Admin',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:28:26',
                'updated_at' => '2017-12-16 20:28:26',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'table_name' => 'faculties',
                'namespace' => 'Modules\\Utilities\\Admin',
                'pageable' => 1,
                'menuable' => 1,
                'created_at' => '2017-12-16 20:28:45',
                'updated_at' => '2017-12-16 20:28:45',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'table_name' => 'faculty_study_year',
                'namespace' => 'Modules\\Utilities\\Admin',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:29:07',
                'updated_at' => '2017-12-16 20:29:07',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'table_name' => 'genders',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:29:25',
                'updated_at' => '2017-12-16 20:29:25',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'table_name' => 'hierarchies',
                'namespace' => 'Modules\\Utilities\\Admin',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:29:46',
                'updated_at' => '2017-12-16 20:29:46',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'table_name' => 'hierarchy_types',
                'namespace' => 'Modules\\Utilities\\Admin',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:30:06',
                'updated_at' => '2017-12-16 20:30:06',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'table_name' => 'icons',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:30:32',
                'updated_at' => '2017-12-16 20:30:32',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'table_name' => 'image_lab',
                'namespace' => 'Modules\\Utilities\\Admin',
                'pageable' => 1,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:30:57',
                'updated_at' => '2017-12-16 20:30:57',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'table_name' => 'image_partner',
                'namespace' => 'Modules\\Utilities\\Admin',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:32:38',
                'updated_at' => '2017-12-16 20:32:38',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'table_name' => 'images',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:32:54',
                'updated_at' => '2017-12-16 20:32:54',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'table_name' => 'job_titles',
                'namespace' => 'Modules\\Utilities\\Admin',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:33:23',
                'updated_at' => '2017-12-16 20:33:23',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'table_name' => 'labs',
                'namespace' => 'Modules\\Utilities\\Admin',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:33:41',
                'updated_at' => '2017-12-16 20:33:41',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 26,
                'table_name' => 'langs',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:34:32',
                'updated_at' => '2017-12-16 20:34:32',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 27,
                'table_name' => 'menu_table_columns',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:35:35',
                'updated_at' => '2017-12-16 20:35:35',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 28,
                'table_name' => 'menu_tables',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:35:48',
                'updated_at' => '2017-12-16 20:35:48',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 29,
                'table_name' => 'migrations',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:36:05',
                'updated_at' => '2017-12-16 20:36:05',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 30,
                'table_name' => 'module_attribute',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:36:20',
                'updated_at' => '2017-12-16 20:36:20',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 31,
                'table_name' => 'modules',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:36:48',
                'updated_at' => '2017-12-16 20:36:48',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 32,
                'table_name' => 'pages',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 1,
                'menuable' => 1,
                'created_at' => '2017-12-16 20:37:16',
                'updated_at' => '2017-12-16 20:37:16',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 33,
                'table_name' => 'partners',
                'namespace' => 'Modules\\Utilities\\Admin',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:37:33',
                'updated_at' => '2017-12-16 20:37:33',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 34,
                'table_name' => 'password_resets',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:37:46',
                'updated_at' => '2017-12-16 20:37:46',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 35,
                'table_name' => 'persons',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 1,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:38:10',
                'updated_at' => '2017-12-16 20:38:10',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 36,
                'table_name' => 'positions',
                'namespace' => 'Modules\\Utilities\\Admin',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:38:41',
                'updated_at' => '2017-12-16 20:38:41',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 37,
                'table_name' => 'prerequisite',
                'namespace' => 'Modules\\Utilities\\Admin',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:39:05',
                'updated_at' => '2017-12-16 20:39:05',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 38,
                'table_name' => 'prerequisite_groups',
                'namespace' => 'Modules\\Utilities\\Admin',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:39:23',
                'updated_at' => '2017-12-16 20:39:23',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 39,
                'table_name' => 'semesters',
                'namespace' => 'Modules\\Utilities\\Admin',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:39:38',
                'updated_at' => '2017-12-16 20:39:38',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 40,
                'table_name' => 'settings',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:39:52',
                'updated_at' => '2017-12-16 20:39:52',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 41,
                'table_name' => 'site_menus',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:40:32',
                'updated_at' => '2017-12-16 20:40:32',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 42,
                'table_name' => 'slider_details',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:41:53',
                'updated_at' => '2017-12-16 20:41:53',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 43,
                'table_name' => 'sliders',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:42:05',
                'updated_at' => '2017-12-16 20:42:05',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 44,
                'table_name' => 'social_networks',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:42:20',
                'updated_at' => '2017-12-16 20:42:20',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 45,
                'table_name' => 'steps',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:42:33',
                'updated_at' => '2017-12-16 20:42:33',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 46,
                'table_name' => 'study_years',
                'namespace' => 'Modules\\Utilities\\Admin',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:42:53',
                'updated_at' => '2017-12-16 20:42:53',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 47,
                'table_name' => 'tables',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:43:22',
                'updated_at' => '2017-12-16 20:43:22',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 48,
                'table_name' => 'text_cards',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:43:35',
                'updated_at' => '2017-12-16 20:43:35',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 50,
                'table_name' => 'university_offices',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 1,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:47:41',
                'updated_at' => '2017-12-16 20:47:41',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 51,
                'table_name' => 'users',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:47:56',
                'updated_at' => '2017-12-16 20:47:56',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 52,
                'table_name' => 'vertical_slider_details',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:48:18',
                'updated_at' => '2017-12-16 20:48:18',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 53,
                'table_name' => 'vertical_sliders',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-16 20:48:33',
                'updated_at' => '2017-12-16 20:48:33',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 54,
                'table_name' => 'language_tables',
                'namespace' => 'Modules\\Utilities\\Entities',
                'pageable' => 0,
                'menuable' => 0,
                'created_at' => '2017-12-22 11:40:41',
                'updated_at' => '2017-12-22 11:40:41',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}