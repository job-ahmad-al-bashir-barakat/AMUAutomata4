<?php

use Illuminate\Database\Seeder;

class BlockDetailTextLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('block_detail_text_langs')->delete();
        
        \DB::table('block_detail_text_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'block_detail_id' => 1,
                'lang_id' => 1,
                'text' => 'Sed gravida, ligula eget aliquam elementum, justo nisl mattis neque, in molestie ipsum dolor eu justo. Duis nec aliquam nulla. Sed interdum orci non mi porttitor, a dapibus ante varius.',
                'created_at' => '2017-09-10 15:58:35',
                'updated_at' => '2017-09-10 15:58:35',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'block_detail_id' => 1,
                'lang_id' => 2,
                'text' => 'Sed gravida, ligula eget aliquam elementum, justo nisl mattis neque, in molestie ipsum dolor eu justo. Duis nec aliquam nulla. Sed interdum orci non mi porttitor, a dapibus ante varius.',
                'created_at' => '2017-09-10 15:58:35',
                'updated_at' => '2017-09-10 15:58:35',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'block_detail_id' => 2,
                'lang_id' => 1,
                'text' => 'Sed gravida, ligula eget aliquam elementum, justo nisl mattis neque, in molestie ipsum dolor eu justo. Duis nec aliquam nulla. Sed interdum orci non mi porttitor, a dapibus ante varius',
                'created_at' => '2017-09-10 15:59:38',
                'updated_at' => '2017-09-10 15:59:38',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'block_detail_id' => 2,
                'lang_id' => 2,
                'text' => 'Sed gravida, ligula eget aliquam elementum, justo nisl mattis neque, in molestie ipsum dolor eu justo. Duis nec aliquam nulla. Sed interdum orci non mi porttitor, a dapibus ante varius',
                'created_at' => '2017-09-10 15:59:38',
                'updated_at' => '2017-09-10 15:59:38',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'block_detail_id' => 3,
                'lang_id' => 1,
                'text' => 'Sed gravida, ligula eget aliquam elementum, justo nisl mattis neque, in molestie ipsum dolor eu justo. Duis nec aliquam nulla. Sed interdum orci non mi porttitor, a dapibus ante varius.',
                'created_at' => '2017-09-10 16:00:19',
                'updated_at' => '2017-09-10 16:00:19',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'block_detail_id' => 3,
                'lang_id' => 2,
                'text' => 'Sed gravida, ligula eget aliquam elementum, justo nisl mattis neque, in molestie ipsum dolor eu justo. Duis nec aliquam nulla. Sed interdum orci non mi porttitor, a dapibus ante varius.',
                'created_at' => '2017-09-10 16:00:19',
                'updated_at' => '2017-09-10 16:00:19',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}