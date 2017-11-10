<?php

use Illuminate\Database\Seeder;

class StepTitleLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('step_title_langs')->delete();
        
        \DB::table('step_title_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'step_id' => 1,
                'lang_id' => 1,
                'text' => 'Why this Company is Best?',
                'created_at' => '2017-10-06 04:38:28',
                'updated_at' => '2017-10-06 04:38:28',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'step_id' => 1,
                'lang_id' => 2,
                'text' => 'Why this Company is Best?',
                'created_at' => '2017-10-06 04:38:28',
                'updated_at' => '2017-10-06 04:38:28',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'step_id' => 2,
                'lang_id' => 1,
                'text' => 'test',
                'created_at' => '2017-10-06 05:12:30',
                'updated_at' => '2017-10-06 05:12:30',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'step_id' => 2,
                'lang_id' => 2,
                'text' => 'test',
                'created_at' => '2017-10-06 05:12:31',
                'updated_at' => '2017-10-06 05:12:31',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}