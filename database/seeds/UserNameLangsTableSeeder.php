<?php

use Illuminate\Database\Seeder;

class UserNameLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_name_langs')->delete();
        
        \DB::table('user_name_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'lang_id' => 1,
                'text' => 'Automata4 Group',
                'created_at' => '2018-03-14 06:53:45',
                'updated_at' => '2018-03-14 06:53:45',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'lang_id' => 2,
                'text' => 'مجموعة اوتوماتا4',
                'created_at' => '2018-03-14 06:53:45',
                'updated_at' => '2018-03-14 06:53:45',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 2,
                'lang_id' => 1,
                'text' => 'Alsham University',
                'created_at' => '2018-03-15 02:44:25',
                'updated_at' => '2018-10-09 03:22:50',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 2,
                'lang_id' => 2,
                'text' => 'جامعة الشام',
                'created_at' => '2018-03-15 02:44:25',
                'updated_at' => '2018-10-09 03:22:50',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 3,
                'lang_id' => 1,
                'text' => 'moayd',
                'created_at' => '2018-10-04 02:15:37',
                'updated_at' => '2018-10-10 04:29:59',
                'deleted_at' => '2018-10-10 04:29:59',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 3,
                'lang_id' => 2,
                'text' => 'مؤيد',
                'created_at' => '2018-10-04 02:15:37',
                'updated_at' => '2018-10-10 04:29:59',
                'deleted_at' => '2018-10-10 04:29:59',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 4,
                'lang_id' => 1,
                'text' => 'janda',
                'created_at' => '2018-10-06 03:24:15',
                'updated_at' => '2018-10-09 06:19:12',
                'deleted_at' => '2018-10-09 06:19:12',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 4,
                'lang_id' => 2,
                'text' => 'جاندة',
                'created_at' => '2018-10-06 03:24:15',
                'updated_at' => '2018-10-09 06:19:12',
                'deleted_at' => '2018-10-09 06:19:12',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 5,
                'lang_id' => 1,
                'text' => 'reema JABBOUR',
                'created_at' => '2018-10-07 05:28:49',
                'updated_at' => '2018-10-23 05:27:07',
                'deleted_at' => '2018-10-23 05:27:07',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 5,
                'lang_id' => 2,
            'text' => '(العربية)ريما جبور',
                'created_at' => '2018-10-07 05:28:49',
                'updated_at' => '2018-10-23 05:27:07',
                'deleted_at' => '2018-10-23 05:27:07',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 13,
                'lang_id' => 1,
                'text' => 'sawsan',
                'created_at' => '2018-10-10 06:44:17',
                'updated_at' => '2018-10-10 06:44:17',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 13,
                'lang_id' => 2,
                'text' => 'سوسن',
                'created_at' => '2018-10-10 06:44:17',
                'updated_at' => '2018-10-10 06:44:17',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 15,
                'lang_id' => 1,
                'text' => 'ali',
                'created_at' => '2018-10-14 08:51:39',
                'updated_at' => '2018-10-23 05:27:16',
                'deleted_at' => '2018-10-23 05:27:16',
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 15,
                'lang_id' => 2,
                'text' => 'علي',
                'created_at' => '2018-10-14 08:51:39',
                'updated_at' => '2018-10-23 05:27:16',
                'deleted_at' => '2018-10-23 05:27:16',
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => 16,
                'lang_id' => 1,
                'text' => 'sum',
                'created_at' => '2018-10-14 09:09:28',
                'updated_at' => '2018-10-14 09:09:32',
                'deleted_at' => '2018-10-14 09:09:32',
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => 16,
                'lang_id' => 2,
                'text' => 'جمع',
                'created_at' => '2018-10-14 09:09:28',
                'updated_at' => '2018-10-14 09:09:32',
                'deleted_at' => '2018-10-14 09:09:32',
            ),
            16 => 
            array (
                'id' => 17,
                'user_id' => 17,
                'lang_id' => 1,
                'text' => 'AbdulHameed',
                'created_at' => '2018-10-15 05:59:30',
                'updated_at' => '2018-10-15 05:59:30',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'user_id' => 17,
                'lang_id' => 2,
                'text' => 'عبدالحميد',
                'created_at' => '2018-10-15 05:59:30',
                'updated_at' => '2018-10-15 05:59:30',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'user_id' => 18,
                'lang_id' => 1,
                'text' => 'mouhannad alabed',
                'created_at' => '2018-10-31 07:47:38',
                'updated_at' => '2018-11-18 08:36:38',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'user_id' => 18,
                'lang_id' => 2,
                'text' => 'مهند العابد',
                'created_at' => '2018-10-31 07:47:38',
                'updated_at' => '2018-10-31 07:47:38',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'user_id' => 19,
                'lang_id' => 1,
                'text' => 'ganda',
                'created_at' => '2018-12-03 09:31:19',
                'updated_at' => '2018-12-03 09:31:19',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'user_id' => 19,
                'lang_id' => 2,
                'text' => 'جاندة',
                'created_at' => '2018-12-03 09:31:19',
                'updated_at' => '2018-12-03 09:31:19',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}