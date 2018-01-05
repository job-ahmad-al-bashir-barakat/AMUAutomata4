<?php

use Illuminate\Database\Seeder;

class LanguageTablesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('language_tables')->delete();
        
        \DB::table('language_tables')->insert(array (
            0 => 
            array (
                'id' => 1,
                'table_id' => 1,
                'table_name' => 'attribute_name_langs',
                'namespace' => 'Modules\\Utilities\\Entities\\LangModels',
                'created_at' => '2017-12-20 04:04:01',
                'updated_at' => '2017-12-20 04:04:01',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'table_id' => 2,
                'table_name' => 'block_detail_btn_langs',
                'namespace' => 'Modules\\Utilities\\Entities\\LangModels',
                'created_at' => '2017-12-20 04:13:17',
                'updated_at' => '2017-12-20 04:13:17',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'table_id' => 2,
                'table_name' => 'block_detail_text_langs',
                'namespace' => 'Modules\\Utilities\\Entities\\LangModels',
                'created_at' => '2017-12-20 04:13:36',
                'updated_at' => '2017-12-20 04:13:36',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'table_id' => 2,
                'table_name' => 'block_detail_title_langs',
                'namespace' => 'Modules\\Utilities\\Entities\\LangModels',
                'created_at' => '2017-12-20 04:14:16',
                'updated_at' => '2017-12-20 04:14:16',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'table_id' => 3,
                'table_name' => 'block_name_langs',
                'namespace' => 'Modules\\Utilities\\Entities\\LangModels',
                'created_at' => '2017-12-20 04:14:57',
                'updated_at' => '2017-12-20 04:14:57',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'table_id' => 5,
                'table_name' => 'contact_address_langs',
                'namespace' => 'Modules\\Utilities\\Entities\\LangModels',
                'created_at' => '2017-12-21 21:38:04',
                'updated_at' => '2017-12-21 21:38:04',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'table_id' => 9,
                'table_name' => 'course_name_langs',
                'namespace' => 'Modules\\Admin\\Entities\\LangModels',
                'created_at' => '2018-01-03 17:47:29',
                'updated_at' => '2018-01-03 17:47:29',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'table_id' => 9,
                'table_name' => 'course_description_langs',
                'namespace' => 'Modules\\Admin\\Entities\\LangModels',
                'created_at' => '2018-01-03 17:47:41',
                'updated_at' => '2018-01-03 17:47:41',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'table_id' => 14,
                'table_name' => 'faculty_name_langs',
                'namespace' => 'Modules\\Admin\\Entities\\LangModels',
                'created_at' => '2018-01-03 17:48:13',
                'updated_at' => '2018-01-03 17:48:13',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'table_id' => 32,
                'table_name' => 'page_name_langs',
                'namespace' => 'Modules\\Utilities\\Entities\\LangModels',
                'created_at' => '2018-01-03 17:49:05',
                'updated_at' => '2018-01-03 17:49:05',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'table_id' => 35,
                'table_name' => 'person_name_langs',
                'namespace' => 'Modules\\Admin\\Entities\\LangModels',
                'created_at' => '2018-01-03 17:49:53',
                'updated_at' => '2018-01-03 17:49:53',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'table_id' => 35,
                'table_name' => 'person_summary_langs',
                'namespace' => 'Modules\\Admin\\Entities\\LangModels',
                'created_at' => '2018-01-03 17:50:08',
                'updated_at' => '2018-01-03 17:50:08',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'table_id' => 12,
                'table_name' => 'degree_name_langs',
                'namespace' => 'Modules\\Admin\\Entities\\LangModels',
                'created_at' => '2018-01-03 17:51:20',
                'updated_at' => '2018-01-03 17:51:20',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'table_id' => 50,
                'table_name' => 'university_office_name_langs',
                'namespace' => 'Modules\\Admin\\Entities\\LangModels',
                'created_at' => '2018-01-03 18:07:51',
                'updated_at' => '2018-01-03 18:07:51',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}