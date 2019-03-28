<?php

use Illuminate\Database\Seeder;

class SettingNameLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('setting_name_langs')->delete();
        
        \DB::table('setting_name_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'setting_id' => 1,
                'lang_id' => 1,
                'text' => 'Seo',
                'created_at' => '2017-06-16 14:44:25',
                'updated_at' => '2017-06-16 14:44:37',
                'deleted_at' => '2017-06-16 14:44:37',
            ),
            1 => 
            array (
                'id' => 2,
                'setting_id' => 1,
                'lang_id' => 2,
                'text' => 'Seo',
                'created_at' => '2017-06-16 14:44:25',
                'updated_at' => '2017-06-16 14:44:37',
                'deleted_at' => '2017-06-16 14:44:37',
            ),
            2 => 
            array (
                'id' => 3,
                'setting_id' => 2,
                'lang_id' => 1,
                'text' => 'aaa',
                'created_at' => '2017-07-05 06:31:40',
                'updated_at' => '2017-08-17 08:30:08',
                'deleted_at' => '2017-08-17 08:30:08',
            ),
            3 => 
            array (
                'id' => 4,
                'setting_id' => 2,
                'lang_id' => 2,
                'text' => 'aaaa',
                'created_at' => '2017-07-05 06:31:40',
                'updated_at' => '2017-08-17 08:30:08',
                'deleted_at' => '2017-08-17 08:30:08',
            ),
            4 => 
            array (
                'id' => 5,
                'setting_id' => 3,
                'lang_id' => 1,
                'text' => '2312',
                'created_at' => '2017-07-05 06:32:21',
                'updated_at' => '2017-08-17 08:30:12',
                'deleted_at' => '2017-08-17 08:30:12',
            ),
            5 => 
            array (
                'id' => 6,
                'setting_id' => 3,
                'lang_id' => 2,
                'text' => '3213',
                'created_at' => '2017-07-05 06:32:21',
                'updated_at' => '2017-08-17 08:30:12',
                'deleted_at' => '2017-08-17 08:30:12',
            ),
            6 => 
            array (
                'id' => 7,
                'setting_id' => 4,
                'lang_id' => 1,
                'text' => 'dsa',
                'created_at' => '2017-07-05 06:32:27',
                'updated_at' => '2017-08-17 08:30:16',
                'deleted_at' => '2017-08-17 08:30:16',
            ),
            7 => 
            array (
                'id' => 8,
                'setting_id' => 4,
                'lang_id' => 2,
                'text' => 'dsa',
                'created_at' => '2017-07-05 06:32:27',
                'updated_at' => '2017-08-17 08:30:16',
                'deleted_at' => '2017-08-17 08:30:16',
            ),
            8 => 
            array (
                'id' => 9,
                'setting_id' => 5,
                'lang_id' => 1,
                'text' => 'University Geo-location',
                'created_at' => '2017-08-17 08:31:35',
                'updated_at' => '2017-12-21 17:44:00',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'setting_id' => 5,
                'lang_id' => 2,
                'text' => 'موقع الجامعة الجغرافي',
                'created_at' => '2017-08-17 08:31:36',
                'updated_at' => '2017-08-17 08:31:36',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'setting_id' => 6,
                'lang_id' => 1,
                'text' => 'Learnata',
                'created_at' => '2018-01-30 14:06:32',
                'updated_at' => '2018-01-30 14:06:32',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'setting_id' => 6,
                'lang_id' => 2,
                'text' => 'ليرناتا',
                'created_at' => '2018-01-30 14:06:32',
                'updated_at' => '2018-01-30 14:06:32',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'setting_id' => 7,
                'lang_id' => 1,
                'text' => 'Website Title',
                'created_at' => '2018-01-30 14:23:38',
                'updated_at' => '2018-01-30 14:23:38',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'setting_id' => 7,
                'lang_id' => 2,
                'text' => 'عنوان الموقع',
                'created_at' => '2018-01-30 14:23:38',
                'updated_at' => '2018-01-30 14:23:38',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'setting_id' => 9,
                'lang_id' => 1,
                'text' => 'Hot Line Phone Number',
                'created_at' => '2018-07-31 15:29:41',
                'updated_at' => '2018-07-31 15:29:41',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'setting_id' => 9,
                'lang_id' => 2,
                'text' => 'رقم هاتف الخط الساخن',
                'created_at' => '2018-07-31 15:29:41',
                'updated_at' => '2018-07-31 15:29:41',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'setting_id' => 10,
                'lang_id' => 1,
                'text' => 'Open Days EN',
                'created_at' => '2018-08-01 03:44:10',
                'updated_at' => '2018-08-01 03:44:10',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'setting_id' => 10,
                'lang_id' => 2,
                'text' => 'أيام الدوام انكليزي',
                'created_at' => '2018-08-01 03:44:10',
                'updated_at' => '2018-08-01 03:44:10',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'setting_id' => 11,
                'lang_id' => 1,
                'text' => 'Open Days Arabic',
                'created_at' => '2018-08-01 03:45:51',
                'updated_at' => '2018-08-01 03:45:51',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'setting_id' => 11,
                'lang_id' => 2,
                'text' => 'أيام الدوام عربي',
                'created_at' => '2018-08-01 03:45:51',
                'updated_at' => '2018-08-01 03:45:51',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'setting_id' => 12,
                'lang_id' => 1,
                'text' => 'Facebook Page',
                'created_at' => '2018-08-01 04:04:45',
                'updated_at' => '2018-08-01 04:04:45',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'setting_id' => 12,
                'lang_id' => 2,
                'text' => 'صفحة الفيسبوك',
                'created_at' => '2018-08-01 04:04:45',
                'updated_at' => '2018-08-01 04:04:45',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'setting_id' => 13,
                'lang_id' => 1,
                'text' => 'Youtube Channel',
                'created_at' => '2018-08-01 04:08:29',
                'updated_at' => '2018-10-02 16:41:30',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'setting_id' => 13,
                'lang_id' => 2,
                'text' => 'قناة اليوتيوب',
                'created_at' => '2018-08-01 04:08:29',
                'updated_at' => '2018-10-02 16:41:31',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'setting_id' => 14,
                'lang_id' => 1,
                'text' => 'Google Plus Account',
                'created_at' => '2018-08-01 04:09:20',
                'updated_at' => '2018-08-01 04:09:20',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'setting_id' => 14,
                'lang_id' => 2,
                'text' => 'حساب جوجل بلس',
                'created_at' => '2018-08-01 04:09:20',
                'updated_at' => '2018-08-01 04:09:20',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'setting_id' => 15,
                'lang_id' => 1,
                'text' => 'Wikipedia Page',
                'created_at' => '2018-08-01 04:10:27',
                'updated_at' => '2018-08-01 04:10:27',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'setting_id' => 15,
                'lang_id' => 2,
                'text' => 'صفحة الويكيبيديا',
                'created_at' => '2018-08-01 04:10:27',
                'updated_at' => '2018-08-01 04:10:27',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'setting_id' => 16,
                'lang_id' => 1,
                'text' => 'Logo Style',
                'created_at' => '2018-10-21 15:35:19',
                'updated_at' => '2018-10-21 15:35:19',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'setting_id' => 16,
                'lang_id' => 2,
                'text' => 'Logo Style',
                'created_at' => '2018-10-21 15:35:20',
                'updated_at' => '2018-10-21 15:35:20',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'setting_id' => 17,
                'lang_id' => 1,
                'text' => 'Hot Line Style',
                'created_at' => '2018-10-21 15:38:18',
                'updated_at' => '2018-10-21 15:38:18',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'setting_id' => 17,
                'lang_id' => 2,
                'text' => 'Hot Line Style',
                'created_at' => '2018-10-21 15:38:18',
                'updated_at' => '2018-10-21 15:38:18',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'setting_id' => 18,
                'lang_id' => 1,
                'text' => 'Moto Style',
                'created_at' => '2018-10-21 15:41:26',
                'updated_at' => '2018-10-21 15:41:26',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'setting_id' => 18,
                'lang_id' => 2,
                'text' => 'Moto Style',
                'created_at' => '2018-10-21 15:41:26',
                'updated_at' => '2018-10-21 15:41:26',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'setting_id' => 19,
                'lang_id' => 1,
                'text' => 'رقم ملف اللون',
                'created_at' => '2018-11-01 15:06:47',
                'updated_at' => '2018-11-01 15:06:47',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'setting_id' => 19,
                'lang_id' => 2,
                'text' => 'Color File Number',
                'created_at' => '2018-11-01 15:06:47',
                'updated_at' => '2018-11-01 15:06:47',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'setting_id' => 20,
                'lang_id' => 1,
                'text' => 'عنوان الإدارة',
                'created_at' => '2018-11-01 15:58:07',
                'updated_at' => '2018-11-01 15:58:07',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'setting_id' => 20,
                'lang_id' => 2,
                'text' => 'Admin Title',
                'created_at' => '2018-11-01 15:58:07',
                'updated_at' => '2018-11-01 15:58:07',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'setting_id' => 21,
                'lang_id' => 1,
                'text' => 'Admin Header Image Style',
                'created_at' => '2018-11-01 16:17:18',
                'updated_at' => '2018-11-01 16:20:37',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'setting_id' => 21,
                'lang_id' => 2,
                'text' => 'Admin Header Image Style',
                'created_at' => '2018-11-01 16:17:19',
                'updated_at' => '2018-11-01 16:20:39',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'setting_id' => 22,
                'lang_id' => 1,
                'text' => 'Admin Header navbar Style',
                'created_at' => '2018-11-01 16:21:25',
                'updated_at' => '2018-11-01 16:21:25',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'setting_id' => 22,
                'lang_id' => 2,
                'text' => 'Admin Header navbar Style',
                'created_at' => '2018-11-01 16:21:25',
                'updated_at' => '2018-11-01 16:21:25',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'setting_id' => 23,
                'lang_id' => 1,
                'text' => 'Login Header Style',
                'created_at' => '2018-11-01 17:20:38',
                'updated_at' => '2018-11-01 17:20:38',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'setting_id' => 23,
                'lang_id' => 2,
                'text' => 'Login Header Style',
                'created_at' => '2018-11-01 17:20:38',
                'updated_at' => '2018-11-01 17:20:38',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'setting_id' => 24,
                'lang_id' => 1,
                'text' => 'linkedIn Account',
                'created_at' => '2019-03-28 09:07:22',
                'updated_at' => '2019-03-28 09:07:22',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'setting_id' => 24,
                'lang_id' => 2,
                'text' => 'حساب لينكيد ان',
                'created_at' => '2019-03-28 09:07:22',
                'updated_at' => '2019-03-28 09:07:22',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}