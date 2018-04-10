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
        ));
        
        
    }
}