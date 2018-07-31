<?php

use Illuminate\Database\Seeder;

class StatusNameLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('status_name_langs')->delete();
        
        \DB::table('status_name_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'status_id' => 1,
                'lang_id' => 1,
                'text' => 'Draft',
                'created_at' => '2018-05-13 15:37:15',
                'updated_at' => '2018-05-13 15:37:15',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'status_id' => 1,
                'lang_id' => 2,
                'text' => 'مسودة',
                'created_at' => '2018-05-13 15:37:15',
                'updated_at' => '2018-05-13 15:37:15',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'status_id' => 2,
                'lang_id' => 1,
                'text' => 'Pending review',
                'created_at' => '2018-05-13 15:37:58',
                'updated_at' => '2018-05-13 15:37:58',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'status_id' => 2,
                'lang_id' => 2,
                'text' => 'بانتظار تاكيد',
                'created_at' => '2018-05-13 15:37:58',
                'updated_at' => '2018-05-13 15:37:58',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'status_id' => 3,
                'lang_id' => 1,
                'text' => 'Reviewed',
                'created_at' => '2018-05-13 15:38:24',
                'updated_at' => '2018-05-13 15:38:24',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'status_id' => 3,
                'lang_id' => 2,
                'text' => 'تمت مراجعته',
                'created_at' => '2018-05-13 15:38:24',
                'updated_at' => '2018-05-13 15:38:24',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}