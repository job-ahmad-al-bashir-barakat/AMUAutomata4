<?php

use Illuminate\Database\Seeder;

class FacultyNameLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faculty_name_langs')->delete();
        
        \DB::table('faculty_name_langs')->insert(array (
            0 => 
            array (
                'id' => 11,
                'faculty_id' => 6,
                'lang_id' => 1,
                'text' => 'Faculty of Informatics',
                'created_at' => '2017-08-28 20:07:53',
                'updated_at' => '2017-08-28 20:07:53',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 12,
                'faculty_id' => 6,
                'lang_id' => 2,
                'text' => 'كلية المعلوماتية',
                'created_at' => '2017-08-28 20:07:53',
                'updated_at' => '2017-08-28 20:07:53',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 13,
                'faculty_id' => 7,
                'lang_id' => 1,
                'text' => 'Faculty of Economics',
                'created_at' => '2017-08-28 20:08:24',
                'updated_at' => '2017-08-28 20:08:24',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 14,
                'faculty_id' => 7,
                'lang_id' => 2,
                'text' => 'كلية الاقتصاد',
                'created_at' => '2017-08-28 20:08:24',
                'updated_at' => '2017-08-28 20:08:24',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}