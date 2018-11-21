<?php

use Illuminate\Database\Seeder;

class TableNameLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('table_name_langs')->delete();
        
        \DB::table('table_name_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'table_id' => 14,
                'lang_id' => 1,
                'text' => 'Faculties',
                'created_at' => '2018-04-10 17:00:35',
                'updated_at' => '2018-04-10 17:00:35',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'table_id' => 14,
                'lang_id' => 2,
                'text' => 'الكليات',
                'created_at' => '2018-04-10 17:00:35',
                'updated_at' => '2018-04-10 17:00:35',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'table_id' => 9,
                'lang_id' => 1,
                'text' => 'Courses',
                'created_at' => '2018-04-10 17:16:24',
                'updated_at' => '2018-04-10 17:16:24',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'table_id' => 9,
                'lang_id' => 2,
                'text' => 'المقررات',
                'created_at' => '2018-04-10 17:16:24',
                'updated_at' => '2018-04-10 17:16:24',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'table_id' => 12,
                'lang_id' => 1,
                'text' => 'Degrees',
                'created_at' => '2018-04-10 17:16:43',
                'updated_at' => '2018-04-10 17:16:43',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'table_id' => 12,
                'lang_id' => 2,
                'text' => 'الشهادات',
                'created_at' => '2018-04-10 17:16:44',
                'updated_at' => '2018-04-10 17:16:44',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'table_id' => 32,
                'lang_id' => 1,
                'text' => 'Pages',
                'created_at' => '2018-04-10 17:17:05',
                'updated_at' => '2018-04-10 17:17:05',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'table_id' => 32,
                'lang_id' => 2,
                'text' => 'الصفحات',
                'created_at' => '2018-04-10 17:17:05',
                'updated_at' => '2018-04-10 17:17:05',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'table_id' => 35,
                'lang_id' => 1,
                'text' => 'People',
                'created_at' => '2018-04-10 17:17:28',
                'updated_at' => '2018-04-10 17:17:28',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'table_id' => 35,
                'lang_id' => 2,
                'text' => 'الاشخاص',
                'created_at' => '2018-04-10 17:17:28',
                'updated_at' => '2018-04-10 17:17:28',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'table_id' => 50,
                'lang_id' => 1,
                'text' => 'University Offices',
                'created_at' => '2018-04-10 17:17:53',
                'updated_at' => '2018-04-10 17:17:53',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'table_id' => 50,
                'lang_id' => 2,
                'text' => 'مكاتب الجامعة',
                'created_at' => '2018-04-10 17:17:53',
                'updated_at' => '2018-04-10 17:17:53',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'table_id' => 55,
                'lang_id' => 1,
                'text' => 'News',
                'created_at' => '2018-05-18 05:55:41',
                'updated_at' => '2018-05-18 05:55:41',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'table_id' => 55,
                'lang_id' => 2,
                'text' => 'الاخبار',
                'created_at' => '2018-05-18 05:55:41',
                'updated_at' => '2018-05-18 05:55:41',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'table_id' => 24,
                'lang_id' => 1,
                'text' => 'Labs',
                'created_at' => '2018-05-26 16:21:04',
                'updated_at' => '2018-05-26 16:21:04',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'table_id' => 24,
                'lang_id' => 2,
                'text' => 'المخابر',
                'created_at' => '2018-05-26 16:21:04',
                'updated_at' => '2018-05-26 16:21:04',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'table_id' => 56,
                'lang_id' => 1,
                'text' => 'الحرم الجامعية',
                'created_at' => '2018-11-03 15:08:34',
                'updated_at' => '2018-11-03 15:10:05',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'table_id' => 56,
                'lang_id' => 2,
                'text' => 'Campuses',
                'created_at' => '2018-11-03 15:08:34',
                'updated_at' => '2018-11-03 15:10:05',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}