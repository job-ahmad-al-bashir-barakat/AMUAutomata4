<?php

use Illuminate\Database\Seeder;

class TextCardsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('text_cards')->delete();
        
        \DB::table('text_cards')->insert(array (
            0 => 
            array (
                'id' => 1,
                'icon_id' => 361,
                'url' => 'location:#405, Lan Streen, Los Vegas, USA',
                'created_at' => '2017-10-17 18:48:57',
                'updated_at' => '2017-10-17 18:48:57',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'icon_id' => 10,
                'url' => 'tel:+325 12345 65478',
                'created_at' => '2017-10-17 18:49:54',
                'updated_at' => '2017-10-17 18:49:54',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'icon_id' => 334,
                'url' => 'mailto:supporte@yourdomin.com',
                'created_at' => '2017-10-17 18:51:38',
                'updated_at' => '2017-10-17 18:51:38',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'icon_id' => 496,
                'url' => 'http://www.youtube.com',
                'created_at' => '2017-10-17 18:52:21',
                'updated_at' => '2017-10-31 18:52:33',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}