<?php

use Illuminate\Database\Seeder;

class BasicsCustomModuleNameLangsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('custom_module_name_langs')->delete();

        \DB::table('custom_module_name_langs')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'custom_module_id' => 1,
                    'lang_id' => 1,
                    'text' => 'Section Open',
                    'created_at' => '2017-10-16 08:12:49',
                    'updated_at' => '2017-10-16 08:12:49',
                    'deleted_at' => NULL,
                ),
            1 =>
                array (
                    'id' => 2,
                    'custom_module_id' => 1,
                    'lang_id' => 2,
                    'text' => 'Section Open',
                    'created_at' => '2017-10-16 08:12:49',
                    'updated_at' => '2017-10-16 08:12:49',
                    'deleted_at' => NULL,
                ),
            2 =>
                array (
                    'id' => 3,
                    'custom_module_id' => 2,
                    'lang_id' => 1,
                    'text' => 'Section Close',
                    'created_at' => '2017-10-16 08:13:57',
                    'updated_at' => '2017-10-16 08:13:57',
                    'deleted_at' => NULL,
                ),
            3 =>
                array (
                    'id' => 4,
                    'custom_module_id' => 2,
                    'lang_id' => 2,
                    'text' => 'Section Close',
                    'created_at' => '2017-10-16 08:13:57',
                    'updated_at' => '2017-10-16 08:13:57',
                    'deleted_at' => NULL,
                ),
            4 =>
                array (
                    'id' => 5,
                    'custom_module_id' => 3,
                    'lang_id' => 1,
                    'text' => 'Fluid Section Open',
                    'created_at' => '2017-10-16 08:15:19',
                    'updated_at' => '2017-10-16 08:15:19',
                    'deleted_at' => NULL,
                ),
            5 =>
                array (
                    'id' => 6,
                    'custom_module_id' => 3,
                    'lang_id' => 2,
                    'text' => 'Fluid Section Open',
                    'created_at' => '2017-10-16 08:15:19',
                    'updated_at' => '2017-10-16 08:15:19',
                    'deleted_at' => NULL,
                ),
            6 =>
                array (
                    'id' => 7,
                    'custom_module_id' => 4,
                    'lang_id' => 1,
                    'text' => 'Section Intersect Top',
                    'created_at' => '2017-10-16 08:16:10',
                    'updated_at' => '2017-10-16 08:16:10',
                    'deleted_at' => NULL,
                ),
            7 =>
                array (
                    'id' => 8,
                    'custom_module_id' => 4,
                    'lang_id' => 2,
                    'text' => 'Section Intersect Top',
                    'created_at' => '2017-10-16 08:16:10',
                    'updated_at' => '2017-10-16 08:16:10',
                    'deleted_at' => NULL,
                ),
            8 =>
                array (
                    'id' => 9,
                    'custom_module_id' => 5,
                    'lang_id' => 1,
                    'text' => 'Intersect Top Close',
                    'created_at' => '2017-10-16 08:17:13',
                    'updated_at' => '2017-10-16 08:17:13',
                    'deleted_at' => NULL,
                ),
            9 =>
                array (
                    'id' => 10,
                    'custom_module_id' => 5,
                    'lang_id' => 2,
                    'text' => 'Intersect Top Close',
                    'created_at' => '2017-10-16 08:17:13',
                    'updated_at' => '2017-10-16 08:17:13',
                    'deleted_at' => NULL,
                ),
            10 =>
                array (
                    'id' => 11,
                    'custom_module_id' => 6,
                    'lang_id' => 1,
                    'text' => 'University Council',
                    'created_at' => '2017-10-31 13:56:17',
                    'updated_at' => '2017-10-31 13:56:17',
                    'deleted_at' => NULL,
                ),
            11 =>
                array (
                    'id' => 12,
                    'custom_module_id' => 6,
                    'lang_id' => 2,
                    'text' => 'مجلس الجامعة',
                    'created_at' => '2017-10-31 13:56:17',
                    'updated_at' => '2017-10-31 13:56:17',
                    'deleted_at' => NULL,
                ),
            12 =>
                array (
                    'id' => 13,
                    'custom_module_id' => 7,
                    'lang_id' => 1,
                    'text' => 'Trusted Council',
                    'created_at' => '2017-11-02 23:07:56',
                    'updated_at' => '2017-11-02 23:07:56',
                    'deleted_at' => NULL,
                ),
            13 =>
                array (
                    'id' => 14,
                    'custom_module_id' => 7,
                    'lang_id' => 2,
                    'text' => 'مجلس الامناء',
                    'created_at' => '2017-11-02 23:07:56',
                    'updated_at' => '2017-11-02 23:07:56',
                    'deleted_at' => NULL,
                ),
            14 =>
                array (
                    'id' => 15,
                    'custom_module_id' => 8,
                    'lang_id' => 1,
                    'text' => 'Person',
                    'created_at' => '2017-11-15 13:04:08',
                    'updated_at' => '2017-11-15 13:04:08',
                    'deleted_at' => NULL,
                ),
            15 =>
                array (
                    'id' => 16,
                    'custom_module_id' => 8,
                    'lang_id' => 2,
                    'text' => 'شخص',
                    'created_at' => '2017-11-15 13:04:08',
                    'updated_at' => '2017-11-15 13:04:08',
                    'deleted_at' => NULL,
                ),
            16 =>
                array (
                    'id' => 17,
                    'custom_module_id' => 9,
                    'lang_id' => 1,
                    'text' => 'Degrees Table',
                    'created_at' => '2017-11-17 12:52:26',
                    'updated_at' => '2017-11-17 12:52:26',
                    'deleted_at' => NULL,
                ),
            17 =>
                array (
                    'id' => 18,
                    'custom_module_id' => 9,
                    'lang_id' => 2,
                    'text' => 'جدول الاختصاصات',
                    'created_at' => '2017-11-17 12:52:26',
                    'updated_at' => '2017-11-17 12:52:26',
                    'deleted_at' => NULL,
                ),
            18 =>
                array (
                    'id' => 19,
                    'custom_module_id' => 10,
                    'lang_id' => 1,
                    'text' => 'Courses Table',
                    'created_at' => '2017-11-22 12:53:28',
                    'updated_at' => '2017-11-22 12:53:28',
                    'deleted_at' => NULL,
                ),
            19 =>
                array (
                    'id' => 20,
                    'custom_module_id' => 10,
                    'lang_id' => 2,
                    'text' => 'جدول المقررات',
                    'created_at' => '2017-11-22 12:53:28',
                    'updated_at' => '2017-11-22 12:53:28',
                    'deleted_at' => NULL,
                ),
            20 =>
                array (
                    'id' => 21,
                    'custom_module_id' => 11,
                    'lang_id' => 1,
                    'text' => 'Labs List',
                    'created_at' => '2018-05-26 06:07:54',
                    'updated_at' => '2018-05-26 06:07:54',
                    'deleted_at' => NULL,
                ),
            21 =>
                array (
                    'id' => 22,
                    'custom_module_id' => 11,
                    'lang_id' => 2,
                    'text' => 'قائمة المخابر',
                    'created_at' => '2018-05-26 06:07:55',
                    'updated_at' => '2018-05-26 06:07:55',
                    'deleted_at' => NULL,
                ),
            22 =>
                array (
                    'id' => 23,
                    'custom_module_id' => 12,
                    'lang_id' => 1,
                    'text' => 'Lab Page',
                    'created_at' => '2018-05-26 07:18:47',
                    'updated_at' => '2018-05-26 07:18:47',
                    'deleted_at' => NULL,
                ),
            23 =>
                array (
                    'id' => 24,
                    'custom_module_id' => 12,
                    'lang_id' => 2,
                    'text' => 'صفحة المخبر',
                    'created_at' => '2018-05-26 07:18:47',
                    'updated_at' => '2018-05-26 07:18:47',
                    'deleted_at' => NULL,
                ),
            24 =>
                array (
                    'id' => 25,
                    'custom_module_id' => 13,
                    'lang_id' => 1,
                    'text' => 'Offices List',
                    'created_at' => '2018-05-27 06:38:30',
                    'updated_at' => '2018-05-27 06:55:22',
                    'deleted_at' => NULL,
                ),
            25 =>
                array (
                    'id' => 26,
                    'custom_module_id' => 13,
                    'lang_id' => 2,
                    'text' => 'قائمة المكاتب',
                    'created_at' => '2018-05-27 06:38:30',
                    'updated_at' => '2018-05-27 06:38:30',
                    'deleted_at' => NULL,
                ),
            26 =>
                array (
                    'id' => 27,
                    'custom_module_id' => 14,
                    'lang_id' => 1,
                    'text' => 'News List',
                    'created_at' => '2018-05-29 07:17:45',
                    'updated_at' => '2018-05-29 07:17:45',
                    'deleted_at' => NULL,
                ),
            27 =>
                array (
                    'id' => 28,
                    'custom_module_id' => 14,
                    'lang_id' => 2,
                    'text' => 'قائمة الاخبار',
                    'created_at' => '2018-05-29 07:17:45',
                    'updated_at' => '2018-10-15 05:56:50',
                    'deleted_at' => NULL,
                ),
            28 =>
                array (
                    'id' => 29,
                    'custom_module_id' => 15,
                    'lang_id' => 1,
                    'text' => 'News Page',
                    'created_at' => '2018-05-31 21:54:09',
                    'updated_at' => '2018-05-31 21:54:09',
                    'deleted_at' => NULL,
                ),
            29 =>
                array (
                    'id' => 30,
                    'custom_module_id' => 15,
                    'lang_id' => 2,
                    'text' => 'صفحة الخبر',
                    'created_at' => '2018-05-31 21:54:10',
                    'updated_at' => '2018-05-31 21:54:10',
                    'deleted_at' => NULL,
                ),
        ));


    }
}