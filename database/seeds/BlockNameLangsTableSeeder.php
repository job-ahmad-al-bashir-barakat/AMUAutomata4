<?php

use Illuminate\Database\Seeder;

class BlockNameLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('block_name_langs')->delete();
        
        \DB::table('block_name_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'block_id' => 1,
                'lang_id' => 1,
                'text' => 'Home Block',
                'created_at' => '2017-09-10 06:06:03',
                'updated_at' => '2018-11-05 06:48:29',
                'deleted_at' => '2018-11-05 06:48:29',
            ),
            1 => 
            array (
                'id' => 2,
                'block_id' => 1,
                'lang_id' => 2,
                'text' => 'كتل الصفحة الرئيسية',
                'created_at' => '2017-09-10 06:06:03',
                'updated_at' => '2018-11-05 06:48:29',
                'deleted_at' => '2018-11-05 06:48:29',
            ),
            2 => 
            array (
                'id' => 3,
                'block_id' => 2,
                'lang_id' => 1,
                'text' => 'Block Informatics',
                'created_at' => '2017-09-10 06:06:47',
                'updated_at' => '2018-11-11 05:51:52',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'block_id' => 2,
                'lang_id' => 2,
                'text' => 'كتلة المعلوماتية',
                'created_at' => '2017-09-10 06:06:47',
                'updated_at' => '2018-11-11 05:51:52',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'block_id' => 3,
                'lang_id' => 1,
                'text' => 'Faculties Module',
                'created_at' => '2018-10-03 05:29:04',
                'updated_at' => '2018-10-13 08:12:03',
                'deleted_at' => '2018-10-13 08:12:03',
            ),
            5 => 
            array (
                'id' => 6,
                'block_id' => 3,
                'lang_id' => 2,
                'text' => 'كتل الكليات',
                'created_at' => '2018-10-03 05:29:04',
                'updated_at' => '2018-10-13 08:12:03',
                'deleted_at' => '2018-10-13 08:12:03',
            ),
            6 => 
            array (
                'id' => 7,
                'block_id' => 4,
                'lang_id' => 1,
                'text' => 'Al bramkeh blocks',
                'created_at' => '2018-10-06 04:59:46',
                'updated_at' => '2019-01-19 10:49:53',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'block_id' => 4,
                'lang_id' => 2,
                'text' => 'كتل البرامكة',
                'created_at' => '2018-10-06 04:59:46',
                'updated_at' => '2019-01-19 10:49:53',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'block_id' => 4,
                'lang_id' => 1,
                'text' => 'Alsham University',
                'created_at' => '2018-10-10 04:46:07',
                'updated_at' => '2018-10-10 04:46:07',
                'deleted_at' => '2018-10-09 18:00:00',
            ),
            9 => 
            array (
                'id' => 10,
                'block_id' => 4,
                'lang_id' => 2,
                'text' => 'جامعة الشام',
                'created_at' => '2018-10-10 04:46:07',
                'updated_at' => '2018-10-10 04:46:07',
                'deleted_at' => '2018-10-09 18:00:00',
            ),
            10 => 
            array (
                'id' => 11,
                'block_id' => 5,
                'lang_id' => 1,
                'text' => 'block of midical',
                'created_at' => '2018-11-06 06:06:16',
                'updated_at' => '2018-11-06 06:06:16',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'block_id' => 5,
                'lang_id' => 2,
                'text' => 'كتل الطب',
                'created_at' => '2018-11-06 06:06:16',
                'updated_at' => '2018-11-06 06:06:16',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}