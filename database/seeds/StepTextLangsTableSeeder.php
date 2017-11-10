<?php

use Illuminate\Database\Seeder;

class StepTextLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('step_text_langs')->delete();
        
        \DB::table('step_text_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'step_id' => 1,
                'lang_id' => 1,
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae repellendus provident dolor iure poss imusven am aliquam. Officiis totam ea laborum deser unt vonsess. iure poss imusven am aliquam',
                'created_at' => '2017-10-06 04:38:28',
                'updated_at' => '2017-10-06 04:38:28',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'step_id' => 1,
                'lang_id' => 2,
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae repellendus provident dolor iure poss imusven am aliquam. Officiis totam ea laborum deser unt vonsess. iure poss imusven am aliquam',
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
                'created_at' => '2017-10-06 05:12:31',
                'updated_at' => '2017-10-06 05:12:31',
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