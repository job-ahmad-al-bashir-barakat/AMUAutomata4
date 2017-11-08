<?php

use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attributes')->delete();
        
        \DB::table('attributes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'status',
                'created_at' => '2017-07-22 08:43:51',
                'updated_at' => '2017-07-22 08:45:37',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'width',
                'created_at' => '2017-07-22 08:44:19',
                'updated_at' => '2017-07-22 08:44:19',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'limit',
                'created_at' => '2017-07-22 08:44:43',
                'updated_at' => '2017-07-22 08:44:43',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 'text_editor',
                'created_at' => '2017-07-22 08:45:14',
                'updated_at' => '2017-07-22 08:45:14',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'code' => 'sliders',
                'created_at' => '2017-09-09 15:19:11',
                'updated_at' => '2017-09-09 15:19:11',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'code' => 'blocks',
                'created_at' => '2017-09-10 16:07:58',
                'updated_at' => '2017-09-10 16:07:58',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'code' => 'courses',
                'created_at' => '2017-09-13 17:42:04',
                'updated_at' => '2017-09-13 17:42:04',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'code' => 'show',
                'created_at' => '2017-09-13 18:23:39',
                'updated_at' => '2017-09-13 18:23:39',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'code' => 'persons',
                'created_at' => '2017-09-20 18:02:58',
                'updated_at' => '2017-09-20 18:02:58',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'code' => 'title',
                'created_at' => '2017-09-22 18:17:52',
                'updated_at' => '2017-09-22 18:17:52',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'code' => 'icon',
                'created_at' => '2017-09-22 18:19:14',
                'updated_at' => '2017-09-22 18:19:14',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'code' => 'vertical_sliders',
                'created_at' => '2017-09-24 18:32:27',
                'updated_at' => '2017-09-24 18:32:27',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'code' => 'images',
                'created_at' => '2017-09-29 04:56:23',
                'updated_at' => '2017-09-29 04:56:23',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'code' => 'link_text',
                'created_at' => '2017-09-29 06:11:00',
                'updated_at' => '2017-09-29 06:13:59',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'code' => 'url',
                'created_at' => '2017-09-29 06:14:33',
                'updated_at' => '2017-09-29 06:14:33',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'code' => 'page',
                'created_at' => '2017-09-30 16:39:06',
                'updated_at' => '2017-09-30 16:49:09',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'code' => 'steps',
                'created_at' => '2017-10-16 16:31:48',
                'updated_at' => '2017-10-16 16:31:48',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'code' => 'text_cards_1',
                'created_at' => '2017-10-16 17:56:40',
                'updated_at' => '2017-10-17 18:57:38',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'code' => 'url_text',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}