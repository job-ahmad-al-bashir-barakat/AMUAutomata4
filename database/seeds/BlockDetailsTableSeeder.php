<?php

use Illuminate\Database\Seeder;

class BlockDetailsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('block_details')->delete();
        
        \DB::table('block_details')->insert(array (
            0 => 
            array (
                'id' => 1,
                'block_id' => 1,
                'icon_id' => 1,
                'page_id' => 1,
                'created_at' => '2017-09-10 15:58:35',
                'updated_at' => '2017-09-20 18:01:32',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'block_id' => 1,
                'icon_id' => 2,
                'page_id' => 1,
                'created_at' => '2017-09-10 15:59:38',
                'updated_at' => '2017-09-10 15:59:38',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'block_id' => 1,
                'icon_id' => 3,
                'page_id' => 2,
                'created_at' => '2017-09-10 16:00:19',
                'updated_at' => '2017-09-10 16:00:19',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}