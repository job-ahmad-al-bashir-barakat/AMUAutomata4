<?php

use Illuminate\Database\Seeder;

class PrerequisiteGroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('prerequisite_groups')->delete();
        
        \DB::table('prerequisite_groups')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'G12',
                'course_id' => 6,
                'created_at' => '2017-11-28 20:20:00',
                'updated_at' => '2017-11-28 20:20:00',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'G22',
                'course_id' => 4,
                'created_at' => '2017-11-28 20:20:24',
                'updated_at' => '2017-11-28 20:20:24',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'T15',
                'course_id' => 1,
                'created_at' => '2017-11-28 20:21:09',
                'updated_at' => '2017-11-28 20:21:09',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}