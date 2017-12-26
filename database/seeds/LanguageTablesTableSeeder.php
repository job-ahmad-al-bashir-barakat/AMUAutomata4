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
        ));
        
        
    }
}