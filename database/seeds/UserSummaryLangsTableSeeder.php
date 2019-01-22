<?php

use Illuminate\Database\Seeder;

class UserSummaryLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_summary_langs')->delete();
        
        \DB::table('user_summary_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'text' => 'Automata4 Group Administration',
                'created_at' => '2018-03-14 06:53:45',
                'updated_at' => '2018-03-14 06:53:45',
                'deleted_at' => NULL,
                'lang_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'text' => 'إدارة مجموعة اوتوماتا4',
                'created_at' => '2018-03-14 06:53:45',
                'updated_at' => '2018-03-14 06:53:45',
                'deleted_at' => NULL,
                'lang_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 2,
                'text' => 'Al-sham Private Administrative',
                'created_at' => '2018-03-15 02:44:25',
                'updated_at' => '2018-10-09 03:22:50',
                'deleted_at' => NULL,
                'lang_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 2,
                'text' => 'إدارة جامعة الشام',
                'created_at' => '2018-03-15 02:44:25',
                'updated_at' => '2018-10-09 03:22:50',
                'deleted_at' => NULL,
                'lang_id' => 2,
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 3,
                'text' => 'moayd',
                'created_at' => '2018-10-04 02:15:37',
                'updated_at' => '2018-10-10 04:29:59',
                'deleted_at' => '2018-10-10 04:29:59',
                'lang_id' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 3,
                'text' => 'مؤيد',
                'created_at' => '2018-10-04 02:15:37',
                'updated_at' => '2018-10-10 04:29:59',
                'deleted_at' => '2018-10-10 04:29:59',
                'lang_id' => 2,
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 4,
                'text' => '-',
                'created_at' => '2018-10-06 03:24:15',
                'updated_at' => '2018-10-09 06:19:12',
                'deleted_at' => '2018-10-09 06:19:12',
                'lang_id' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 4,
                'text' => '-',
                'created_at' => '2018-10-06 03:24:15',
                'updated_at' => '2018-10-09 06:19:12',
                'deleted_at' => '2018-10-09 06:19:12',
                'lang_id' => 2,
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 5,
                'text' => 'US Office Manager',
                'created_at' => '2018-10-07 05:28:49',
                'updated_at' => '2018-10-23 05:27:07',
                'deleted_at' => '2018-10-23 05:27:07',
                'lang_id' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 5,
                'text' => 'مديرة مكتب أمانة الجامعة',
                'created_at' => '2018-10-07 05:28:49',
                'updated_at' => '2018-10-23 05:27:07',
                'deleted_at' => '2018-10-23 05:27:07',
                'lang_id' => 2,
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 13,
                'text' => 'website manger',
                'created_at' => '2018-10-10 06:44:17',
                'updated_at' => '2018-10-10 06:44:17',
                'deleted_at' => NULL,
                'lang_id' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 13,
                'text' => 'مدير الموقع',
                'created_at' => '2018-10-10 06:44:17',
                'updated_at' => '2018-10-10 06:44:17',
                'deleted_at' => NULL,
                'lang_id' => 2,
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 15,
                'text' => 'ite',
                'created_at' => '2018-10-14 08:51:39',
                'updated_at' => '2018-10-23 05:27:16',
                'deleted_at' => '2018-10-23 05:27:16',
                'lang_id' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 15,
                'text' => 'مهندس',
                'created_at' => '2018-10-14 08:51:39',
                'updated_at' => '2018-10-23 05:27:16',
                'deleted_at' => '2018-10-23 05:27:16',
                'lang_id' => 2,
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => 16,
                'text' => 'sum a',
                'created_at' => '2018-10-14 09:09:28',
                'updated_at' => '2018-10-14 09:09:32',
                'deleted_at' => '2018-10-14 09:09:32',
                'lang_id' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => 16,
                'text' => 'جمع  ش',
                'created_at' => '2018-10-14 09:09:28',
                'updated_at' => '2018-10-14 09:09:32',
                'deleted_at' => '2018-10-14 09:09:32',
                'lang_id' => 2,
            ),
            16 => 
            array (
                'id' => 17,
                'user_id' => 17,
                'text' => 'Test',
                'created_at' => '2018-10-15 05:59:30',
                'updated_at' => '2018-10-15 05:59:30',
                'deleted_at' => NULL,
                'lang_id' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'user_id' => 17,
                'text' => 'تجريبي',
                'created_at' => '2018-10-15 05:59:30',
                'updated_at' => '2018-10-15 05:59:30',
                'deleted_at' => NULL,
                'lang_id' => 2,
            ),
            18 => 
            array (
                'id' => 19,
                'user_id' => 18,
                'text' => 'data entry for 
Teaching staff',
                'created_at' => '2018-10-31 07:47:38',
                'updated_at' => '2018-10-31 07:47:38',
                'deleted_at' => NULL,
                'lang_id' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'user_id' => 18,
                'text' => 'ادخال بيانات الكادر التدريس',
                'created_at' => '2018-10-31 07:47:38',
                'updated_at' => '2018-10-31 07:47:38',
                'deleted_at' => NULL,
                'lang_id' => 2,
            ),
            20 => 
            array (
                'id' => 21,
                'user_id' => 19,
                'text' => 'DB assistant',
                'created_at' => '2018-12-03 09:31:19',
                'updated_at' => '2018-12-24 08:55:10',
                'deleted_at' => '2018-12-24 08:55:10',
                'lang_id' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'user_id' => 19,
                'text' => 'مساعد قاعدة بيانات',
                'created_at' => '2018-12-03 09:31:19',
                'updated_at' => '2018-12-24 08:55:10',
                'deleted_at' => '2018-12-24 08:55:10',
                'lang_id' => 2,
            ),
            22 => 
            array (
                'id' => 23,
                'user_id' => 20,
                'text' => 'Enter data for news',
                'created_at' => '2018-12-24 09:07:06',
                'updated_at' => '2018-12-24 09:07:06',
                'deleted_at' => NULL,
                'lang_id' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'user_id' => 20,
                'text' => 'اخال اليبانات الخاصة بالاخبار',
                'created_at' => '2018-12-24 09:07:06',
                'updated_at' => '2018-12-24 09:07:06',
                'deleted_at' => NULL,
                'lang_id' => 2,
            ),
        ));
        
        
    }
}