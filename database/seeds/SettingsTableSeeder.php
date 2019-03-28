<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'Seo',
                'value' => 'Seo',
                'created_at' => '2017-06-16 14:44:25',
                'updated_at' => '2017-06-16 14:44:37',
                'deleted_at' => '2017-06-16 14:44:37',
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'aaaa',
                'value' => 'aaa',
                'created_at' => '2017-07-05 06:31:40',
                'updated_at' => '2017-08-17 08:30:08',
                'deleted_at' => '2017-08-17 08:30:08',
            ),
            2 => 
            array (
                'id' => 3,
                'code' => '213213',
                'value' => '32',
                'created_at' => '2017-07-05 06:32:21',
                'updated_at' => '2017-08-17 08:30:12',
                'deleted_at' => '2017-08-17 08:30:12',
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 'dsa',
                'value' => 'asdas',
                'created_at' => '2017-07-05 06:32:27',
                'updated_at' => '2017-08-17 08:30:16',
                'deleted_at' => '2017-08-17 08:30:16',
            ),
            4 => 
            array (
                'id' => 5,
                'code' => 'UGL',
                'value' => '33.506746,36.289075',
                'created_at' => '2017-08-17 08:31:35',
                'updated_at' => '2018-10-03 08:23:30',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'code' => 'learnata',
                'value' => 'http://learnata.com',
                'created_at' => '2018-01-30 14:06:32',
                'updated_at' => '2018-01-30 14:06:32',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'code' => 'website_title',
                'value' => 'جامعة الشام الخاصة',
                'created_at' => '2018-01-30 14:23:38',
                'updated_at' => '2018-07-16 15:19:15',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'code' => 'hot_line',
                'value' => '+963-11-2066',
                'created_at' => '2018-07-31 15:28:38',
                'updated_at' => '2018-07-31 15:29:50',
                'deleted_at' => '2018-07-31 15:29:50',
            ),
            8 => 
            array (
                'id' => 9,
                'code' => 'hot_line',
                'value' => '+963-11-2066',
                'created_at' => '2018-07-31 15:29:41',
                'updated_at' => '2018-07-31 15:29:41',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'code' => 'open_days_en',
                'value' => 'Mon-Fri 8:00-16:00',
                'created_at' => '2018-08-01 03:44:10',
                'updated_at' => '2018-08-01 03:44:10',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'code' => 'open_days_ar',
                'value' => 'السبت - الخميس 8:00 - 4:00',
                'created_at' => '2018-08-01 03:45:51',
                'updated_at' => '2018-08-01 03:45:51',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'code' => 'facebook_page',
                'value' => 'https://www.facebook.com/%D8%A7%D9%84%D9%85%D9%83%D8%AA%D8%A8-%D8%A7%D9%84%D8%B5%D8%AD%D9%81%D9%8A-%D9%81%D9%8A-ASPU-824921897702582/',
                'created_at' => '2018-08-01 04:04:45',
                'updated_at' => '2018-10-03 08:18:43',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'code' => 'youtube_channel',
                'value' => '#',
                'created_at' => '2018-08-01 04:08:29',
                'updated_at' => '2018-10-02 16:41:30',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'code' => 'google_account',
                'value' => 'https://plus.google.com/109716173945497241792',
                'created_at' => '2018-08-01 04:09:20',
                'updated_at' => '2018-08-01 04:09:20',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'code' => 'wiki_page',
                'value' => 'https://ar.wikipedia.org/wiki/جامعة_الشام_الخاصة',
                'created_at' => '2018-08-01 04:10:27',
                'updated_at' => '2018-08-01 04:10:27',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'code' => 'logo_style',
                'value' => 'margin-bottom: -14px;margin-top: -16px; max-height: 130px;',
                'created_at' => '2018-10-21 15:35:19',
                'updated_at' => '2018-10-21 15:35:19',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'code' => 'hot_line_style',
                'value' => 'margin-top: 40px;',
                'created_at' => '2018-10-21 15:38:18',
                'updated_at' => '2018-10-21 15:38:18',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'code' => 'moto_style',
                'value' => 'margin-top: 30px;',
                'created_at' => '2018-10-21 15:41:26',
                'updated_at' => '2018-10-21 15:41:26',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'code' => 'color_file_number',
                'value' => '7',
                'created_at' => '2018-11-01 15:06:47',
                'updated_at' => '2018-11-01 15:06:47',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'code' => 'admin_title',
                'value' => 'ASPU - Admin',
                'created_at' => '2018-11-01 15:58:07',
                'updated_at' => '2018-11-01 15:58:07',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'code' => 'admin_header_image_style',
                'value' => 'margin-top: -28px;',
                'created_at' => '2018-11-01 16:17:17',
                'updated_at' => '2018-11-01 16:20:36',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'code' => 'admin_navbar_header_style',
                'value' => 'background-color: #f5f7fa;',
                'created_at' => '2018-11-01 16:21:25',
                'updated_at' => '2018-11-01 16:21:25',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'code' => 'login_header_style',
                'value' => 'background-color: #dae0f7;',
                'created_at' => '2018-11-01 17:20:37',
                'updated_at' => '2018-11-01 17:20:37',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'code' => 'linked_in',
                'value' => '#',
                'created_at' => '2019-03-28 09:07:21',
                'updated_at' => '2019-03-28 09:07:21',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}