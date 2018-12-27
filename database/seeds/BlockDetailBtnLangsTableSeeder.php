<?php

use Illuminate\Database\Seeder;

class BlockDetailBtnLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('block_detail_btn_langs')->delete();
        
        \DB::table('block_detail_btn_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'block_detail_id' => 1,
                'lang_id' => 1,
                'text' => 'Read More',
                'created_at' => '2017-09-10 06:58:35',
                'updated_at' => '2017-09-10 06:58:35',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'block_detail_id' => 1,
                'lang_id' => 2,
                'text' => 'Read More',
                'created_at' => '2017-09-10 06:58:35',
                'updated_at' => '2017-09-10 06:58:35',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'block_detail_id' => 2,
                'lang_id' => 1,
                'text' => 'Read More',
                'created_at' => '2017-09-10 06:59:38',
                'updated_at' => '2017-09-10 06:59:38',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'block_detail_id' => 2,
                'lang_id' => 2,
                'text' => 'Read more',
                'created_at' => '2017-09-10 06:59:38',
                'updated_at' => '2017-09-10 06:59:38',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'block_detail_id' => 3,
                'lang_id' => 1,
                'text' => 'Read More',
                'created_at' => '2017-09-10 07:00:19',
                'updated_at' => '2017-09-10 07:00:19',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'block_detail_id' => 3,
                'lang_id' => 2,
                'text' => 'Read More',
                'created_at' => '2017-09-10 07:00:19',
                'updated_at' => '2017-09-10 07:00:19',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'block_detail_id' => 4,
                'lang_id' => 1,
                'text' => 'Test',
                'created_at' => '2018-08-03 10:37:41',
                'updated_at' => '2018-08-03 10:38:59',
                'deleted_at' => '2018-08-03 10:38:59',
            ),
            7 => 
            array (
                'id' => 8,
                'block_detail_id' => 4,
                'lang_id' => 2,
                'text' => 'تجريبي',
                'created_at' => '2018-08-03 10:37:41',
                'updated_at' => '2018-08-03 10:38:59',
                'deleted_at' => '2018-08-03 10:38:59',
            ),
            8 => 
            array (
                'id' => 9,
                'block_detail_id' => 5,
                'lang_id' => 1,
                'text' => '.',
                'created_at' => '2018-10-03 05:31:19',
                'updated_at' => '2018-10-03 05:31:19',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'block_detail_id' => 5,
                'lang_id' => 2,
                'text' => '.',
                'created_at' => '2018-10-03 05:31:20',
                'updated_at' => '2018-10-03 05:31:20',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'block_detail_id' => 7,
                'lang_id' => 1,
                'text' => 'press here',
                'created_at' => '2018-10-06 05:02:06',
                'updated_at' => '2018-11-06 05:59:30',
                'deleted_at' => '2018-11-06 05:59:30',
            ),
            11 => 
            array (
                'id' => 12,
                'block_detail_id' => 7,
                'lang_id' => 2,
                'text' => 'اضغط هنا',
                'created_at' => '2018-10-06 05:02:06',
                'updated_at' => '2018-11-06 05:59:30',
                'deleted_at' => '2018-11-06 05:59:30',
            ),
            12 => 
            array (
                'id' => 13,
                'block_detail_id' => 8,
                'lang_id' => 1,
                'text' => 'More',
                'created_at' => '2018-10-06 05:02:57',
                'updated_at' => '2018-11-11 06:18:39',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'block_detail_id' => 8,
                'lang_id' => 2,
                'text' => 'المزيد',
                'created_at' => '2018-10-06 05:02:57',
                'updated_at' => '2018-11-11 06:18:39',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'block_detail_id' => 9,
                'lang_id' => 1,
                'text' => 'More',
                'created_at' => '2018-10-06 05:04:17',
                'updated_at' => '2018-11-11 06:24:35',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'block_detail_id' => 9,
                'lang_id' => 2,
                'text' => 'المزيد',
                'created_at' => '2018-10-06 05:04:17',
                'updated_at' => '2018-11-11 06:24:35',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'block_detail_id' => 10,
                'lang_id' => 1,
                'text' => 'More',
                'created_at' => '2018-10-08 01:31:12',
                'updated_at' => '2018-11-11 06:31:07',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'block_detail_id' => 10,
                'lang_id' => 2,
                'text' => 'المزيد',
                'created_at' => '2018-10-08 01:31:12',
                'updated_at' => '2018-11-11 06:31:07',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'block_detail_id' => 11,
                'lang_id' => 1,
                'text' => 'press here',
                'created_at' => '2018-10-08 01:44:58',
                'updated_at' => '2018-11-06 05:59:23',
                'deleted_at' => '2018-11-06 05:59:23',
            ),
            19 => 
            array (
                'id' => 20,
                'block_detail_id' => 11,
                'lang_id' => 2,
                'text' => 'اضغط هنا',
                'created_at' => '2018-10-08 01:44:58',
                'updated_at' => '2018-11-06 05:59:23',
                'deleted_at' => '2018-11-06 05:59:23',
            ),
            20 => 
            array (
                'id' => 21,
                'block_detail_id' => 12,
                'lang_id' => 1,
                'text' => 'press here',
                'created_at' => '2018-10-08 01:45:54',
                'updated_at' => '2018-11-06 05:59:19',
                'deleted_at' => '2018-11-06 05:59:19',
            ),
            21 => 
            array (
                'id' => 22,
                'block_detail_id' => 12,
                'lang_id' => 2,
                'text' => 'اضغط هنا',
                'created_at' => '2018-10-08 01:45:54',
                'updated_at' => '2018-11-06 05:59:19',
                'deleted_at' => '2018-11-06 05:59:19',
            ),
            22 => 
            array (
                'id' => 23,
                'block_detail_id' => 13,
                'lang_id' => 1,
                'text' => 'press here',
                'created_at' => '2018-10-08 01:46:30',
                'updated_at' => '2018-11-06 05:59:15',
                'deleted_at' => '2018-11-06 05:59:15',
            ),
            23 => 
            array (
                'id' => 24,
                'block_detail_id' => 13,
                'lang_id' => 2,
                'text' => 'اضغط هنا',
                'created_at' => '2018-10-08 01:46:30',
                'updated_at' => '2018-11-06 05:59:15',
                'deleted_at' => '2018-11-06 05:59:15',
            ),
            24 => 
            array (
                'id' => 25,
                'block_detail_id' => 14,
                'lang_id' => 1,
                'text' => '.',
                'created_at' => '2018-10-14 09:17:24',
                'updated_at' => '2018-10-14 09:17:44',
                'deleted_at' => '2018-10-14 09:17:44',
            ),
            25 => 
            array (
                'id' => 26,
                'block_detail_id' => 14,
                'lang_id' => 2,
                'text' => '..',
                'created_at' => '2018-10-14 09:17:24',
                'updated_at' => '2018-10-14 09:17:44',
                'deleted_at' => '2018-10-14 09:17:44',
            ),
            26 => 
            array (
                'id' => 27,
                'block_detail_id' => 15,
                'lang_id' => 1,
                'text' => 'More',
                'created_at' => '2018-11-06 06:03:39',
                'updated_at' => '2018-11-11 07:28:59',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'block_detail_id' => 15,
                'lang_id' => 2,
                'text' => 'المزيد',
                'created_at' => '2018-11-06 06:03:39',
                'updated_at' => '2018-11-11 07:28:59',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'block_detail_id' => 16,
                'lang_id' => 1,
                'text' => 'more',
                'created_at' => '2018-11-06 06:07:03',
                'updated_at' => '2018-11-11 05:59:50',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'block_detail_id' => 16,
                'lang_id' => 2,
                'text' => 'المزيد',
                'created_at' => '2018-11-06 06:07:03',
                'updated_at' => '2018-11-11 06:00:45',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'block_detail_id' => 17,
                'lang_id' => 1,
                'text' => 'More',
                'created_at' => '2018-11-06 06:08:50',
                'updated_at' => '2018-11-11 06:04:53',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'block_detail_id' => 17,
                'lang_id' => 2,
                'text' => 'المزيد',
                'created_at' => '2018-11-06 06:08:50',
                'updated_at' => '2018-11-11 06:04:53',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'block_detail_id' => 18,
                'lang_id' => 1,
                'text' => 'More',
                'created_at' => '2018-11-06 06:09:39',
                'updated_at' => '2018-11-11 06:14:15',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'block_detail_id' => 18,
                'lang_id' => 2,
                'text' => 'المزيد',
                'created_at' => '2018-11-06 06:09:39',
                'updated_at' => '2018-11-11 06:14:15',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'block_detail_id' => 19,
                'lang_id' => 1,
                'text' => '-',
                'created_at' => '2018-11-06 07:17:54',
                'updated_at' => '2018-11-07 06:17:23',
                'deleted_at' => '2018-11-07 06:17:23',
            ),
            35 => 
            array (
                'id' => 36,
                'block_detail_id' => 19,
                'lang_id' => 2,
                'text' => '-',
                'created_at' => '2018-11-06 07:17:54',
                'updated_at' => '2018-11-07 06:17:23',
                'deleted_at' => '2018-11-07 06:17:23',
            ),
        ));
        
        
    }
}