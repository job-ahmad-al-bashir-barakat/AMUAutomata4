<?php

use Illuminate\Database\Seeder;

class CustomModuleAttributeValuesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('custom_module_attribute_values')->delete();
        
        \DB::table('custom_module_attribute_values')->insert(array (
            0 => 
            array (
                'id' => 1,
                'custom_module_id' => 1,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-16 08:13:23',
                'updated_at' => '2017-10-16 08:13:23',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'custom_module_id' => 2,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-16 08:13:57',
                'updated_at' => '2017-10-16 08:13:57',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'custom_module_id' => 3,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-16 08:15:19',
                'updated_at' => '2017-10-16 08:15:19',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'custom_module_id' => 4,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-16 08:16:31',
                'updated_at' => '2017-10-16 08:16:31',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'custom_module_id' => 5,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-16 08:17:13',
                'updated_at' => '2017-10-16 08:17:13',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'custom_module_id' => 6,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-16 08:28:31',
                'updated_at' => '2017-10-16 08:28:31',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'custom_module_id' => 6,
                'attribute_id' => 5,
                'value' => '4',
                'created_at' => '2017-10-16 08:28:31',
                'updated_at' => '2018-10-21 09:48:55',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'custom_module_id' => 7,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-16 08:29:17',
                'updated_at' => '2017-10-16 08:29:17',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'custom_module_id' => 7,
                'attribute_id' => 6,
                'value' => '4',
                'created_at' => '2017-10-16 08:29:17',
                'updated_at' => '2018-10-06 05:05:54',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'custom_module_id' => 8,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-16 09:11:04',
                'updated_at' => '2017-10-16 09:11:04',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'custom_module_id' => 8,
                'attribute_id' => 2,
                'value' => '8',
                'created_at' => '2017-10-16 09:11:04',
                'updated_at' => '2017-10-16 09:11:04',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'custom_module_id' => 8,
                'attribute_id' => 10,
                'value' => '',
                'created_at' => '2017-10-16 09:11:04',
                'updated_at' => '2017-10-16 09:11:04',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'custom_module_id' => 8,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2017-10-16 09:11:05',
                'updated_at' => '2017-10-16 09:11:05',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 24,
                'custom_module_id' => 11,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-17 10:22:01',
                'updated_at' => '2017-10-17 10:22:01',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 25,
                'custom_module_id' => 11,
                'attribute_id' => 2,
                'value' => '4',
                'created_at' => '2017-10-17 10:22:01',
                'updated_at' => '2017-10-31 12:08:16',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 26,
                'custom_module_id' => 11,
                'attribute_id' => 18,
                'value' => '["1","2","3","4"]',
                'created_at' => '2017-10-17 10:22:01',
                'updated_at' => '2017-10-17 10:22:01',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 27,
                'custom_module_id' => 11,
                'attribute_id' => 8,
                'value' => '1',
                'created_at' => '2017-10-17 10:22:01',
                'updated_at' => '2017-10-17 10:22:01',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 28,
                'custom_module_id' => 12,
                'attribute_id' => 2,
                'value' => '6',
                'created_at' => '2017-10-23 09:01:01',
                'updated_at' => '2017-10-23 09:01:01',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 29,
                'custom_module_id' => 12,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-23 09:01:02',
                'updated_at' => '2017-10-23 09:01:02',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 30,
                'custom_module_id' => 12,
                'attribute_id' => 10,
                'value' => '',
                'created_at' => '2017-10-23 09:01:02',
                'updated_at' => '2017-10-23 09:01:02',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 31,
                'custom_module_id' => 12,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2017-10-23 09:01:02',
                'updated_at' => '2017-10-23 09:01:02',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 32,
                'custom_module_id' => 12,
                'attribute_id' => 16,
                'value' => '15',
                'created_at' => '2017-10-23 09:01:02',
                'updated_at' => '2018-10-04 04:55:34',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 33,
                'custom_module_id' => 13,
                'attribute_id' => 1,
                'value' => 'D',
                'created_at' => '2017-10-25 07:18:22',
                'updated_at' => '2017-10-25 07:26:38',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 34,
                'custom_module_id' => 13,
                'attribute_id' => 3,
                'value' => '20',
                'created_at' => '2017-10-25 07:18:22',
                'updated_at' => '2017-10-25 07:18:22',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 35,
                'custom_module_id' => 13,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2017-10-25 07:18:22',
                'updated_at' => '2017-10-25 07:18:22',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 36,
                'custom_module_id' => 13,
                'attribute_id' => 8,
                'value' => '4',
                'created_at' => '2017-10-25 07:18:22',
                'updated_at' => '2017-10-25 07:18:22',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 37,
                'custom_module_id' => 13,
                'attribute_id' => 7,
                'value' => '["1","2","3"]',
                'created_at' => '2017-10-25 07:18:22',
                'updated_at' => '2017-10-25 07:18:22',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 38,
                'custom_module_id' => 13,
                'attribute_id' => 10,
                'value' => '',
                'created_at' => '2017-10-25 07:26:39',
                'updated_at' => '2017-10-25 07:26:39',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 39,
                'custom_module_id' => 14,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-25 10:27:30',
                'updated_at' => '2017-10-25 10:27:30',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 40,
                'custom_module_id' => 14,
                'attribute_id' => 12,
                'value' => '1',
                'created_at' => '2017-10-25 10:27:30',
                'updated_at' => '2017-10-25 10:27:30',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 41,
                'custom_module_id' => 14,
                'attribute_id' => 10,
                'value' => '',
                'created_at' => '2017-10-25 10:27:30',
                'updated_at' => '2017-10-25 10:27:30',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 42,
                'custom_module_id' => 14,
                'attribute_id' => 11,
                'value' => '222',
                'created_at' => '2017-10-25 10:27:30',
                'updated_at' => '2017-10-25 10:27:30',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 43,
                'custom_module_id' => 14,
                'attribute_id' => 2,
                'value' => '6',
                'created_at' => '2017-10-25 10:27:30',
                'updated_at' => '2017-10-25 10:27:30',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 44,
                'custom_module_id' => 14,
                'attribute_id' => 8,
                'value' => '2',
                'created_at' => '2017-10-25 10:27:30',
                'updated_at' => '2017-10-25 10:27:30',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 45,
                'custom_module_id' => 15,
                'attribute_id' => 1,
                'value' => 'D',
                'created_at' => '2017-10-26 23:20:05',
                'updated_at' => '2019-01-01 10:06:30',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 46,
                'custom_module_id' => 15,
                'attribute_id' => 2,
                'value' => '6',
                'created_at' => '2017-10-26 23:20:05',
                'updated_at' => '2017-10-26 23:20:05',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 47,
                'custom_module_id' => 15,
                'attribute_id' => 13,
                'value' => '["19","94","95","94,95","131,132,133,134","131,134,135","305","308","310"]',
                'created_at' => '2017-10-26 23:20:05',
                'updated_at' => '2018-12-04 12:10:24',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 48,
                'custom_module_id' => 16,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-28 23:07:31',
                'updated_at' => '2017-10-28 23:07:31',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 49,
                'custom_module_id' => 16,
                'attribute_id' => 2,
                'value' => '6',
                'created_at' => '2017-10-28 23:07:31',
                'updated_at' => '2017-10-28 23:07:31',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 50,
                'custom_module_id' => 16,
                'attribute_id' => 10,
                'value' => '',
                'created_at' => '2017-10-28 23:07:31',
                'updated_at' => '2017-10-28 23:07:31',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 51,
                'custom_module_id' => 16,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2017-10-28 23:07:32',
                'updated_at' => '2017-10-28 23:07:32',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 52,
                'custom_module_id' => 16,
                'attribute_id' => 17,
                'value' => '["1","2","3"]',
                'created_at' => '2017-10-28 23:07:32',
                'updated_at' => '2018-12-17 08:57:39',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 53,
                'custom_module_id' => 17,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-29 14:00:28',
                'updated_at' => '2017-10-29 14:00:28',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 54,
                'custom_module_id' => 17,
                'attribute_id' => 3,
                'value' => '4',
                'created_at' => '2017-10-29 14:00:28',
                'updated_at' => '2018-10-16 04:41:52',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 55,
                'custom_module_id' => 17,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2017-10-29 14:00:28',
                'updated_at' => '2017-10-30 11:58:07',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 56,
                'custom_module_id' => 17,
                'attribute_id' => 8,
                'value' => '4',
                'created_at' => '2017-10-29 14:00:28',
                'updated_at' => '2018-10-04 04:51:40',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 57,
                'custom_module_id' => 17,
                'attribute_id' => 9,
                'value' => '["3","14","17","18","19","25","26","27","28","29","30","31","33","34"]',
                'created_at' => '2017-10-29 14:00:28',
                'updated_at' => '2018-12-10 13:44:38',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 58,
                'custom_module_id' => 17,
                'attribute_id' => 10,
                'value' => '',
                'created_at' => '2017-10-30 11:54:50',
                'updated_at' => '2017-10-30 11:54:50',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 59,
                'custom_module_id' => 18,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-31 11:27:47',
                'updated_at' => '2017-10-31 11:27:47',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 60,
                'custom_module_id' => 18,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2017-10-31 11:27:47',
                'updated_at' => '2017-10-31 11:27:47',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 61,
                'custom_module_id' => 18,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2017-10-31 11:27:47',
                'updated_at' => '2017-10-31 11:27:47',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 62,
                'custom_module_id' => 19,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-31 13:56:17',
                'updated_at' => '2017-10-31 13:56:17',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 63,
                'custom_module_id' => 19,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2017-10-31 13:56:17',
                'updated_at' => '2017-10-31 13:56:17',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 64,
                'custom_module_id' => 20,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-31 14:06:14',
                'updated_at' => '2017-10-31 14:06:14',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 65,
                'custom_module_id' => 20,
                'attribute_id' => 2,
                'value' => '6',
                'created_at' => '2017-10-31 14:06:14',
                'updated_at' => '2017-10-31 14:06:14',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 66,
                'custom_module_id' => 20,
                'attribute_id' => 18,
                'value' => '["1","2","3","4"]',
                'created_at' => '2017-10-31 14:06:14',
                'updated_at' => '2017-10-31 14:06:14',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 67,
                'custom_module_id' => 20,
                'attribute_id' => 8,
                'value' => '2',
                'created_at' => '2017-10-31 14:06:14',
                'updated_at' => '2017-10-31 14:06:14',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 68,
                'custom_module_id' => 20,
                'attribute_id' => 10,
                'value' => '',
                'created_at' => '2017-10-31 14:06:14',
                'updated_at' => '2017-10-31 14:06:14',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 69,
                'custom_module_id' => 21,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-11-02 23:07:56',
                'updated_at' => '2017-11-02 23:07:56',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 70,
                'custom_module_id' => 21,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2017-11-02 23:07:56',
                'updated_at' => '2017-11-02 23:07:56',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 71,
                'custom_module_id' => 22,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-11-05 13:49:54',
                'updated_at' => '2017-11-05 13:49:54',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 72,
                'custom_module_id' => 22,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2017-11-05 13:49:54',
                'updated_at' => '2017-11-05 13:49:54',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 73,
                'custom_module_id' => 23,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-11-15 13:04:08',
                'updated_at' => '2017-11-15 13:04:08',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 74,
                'custom_module_id' => 23,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2017-11-15 13:04:08',
                'updated_at' => '2017-11-15 13:04:08',
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 75,
                'custom_module_id' => 25,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-11-17 12:52:26',
                'updated_at' => '2017-11-17 12:52:26',
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 76,
                'custom_module_id' => 25,
                'attribute_id' => 2,
                'value' => '9',
                'created_at' => '2017-11-17 12:52:26',
                'updated_at' => '2017-11-17 12:52:26',
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 77,
                'custom_module_id' => 26,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-11-22 12:53:28',
                'updated_at' => '2017-11-22 12:53:28',
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 78,
                'custom_module_id' => 26,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2017-11-22 12:53:28',
                'updated_at' => '2017-11-22 12:53:28',
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 79,
                'custom_module_id' => 27,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-12-01 11:52:01',
                'updated_at' => '2017-12-01 11:52:01',
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 80,
                'custom_module_id' => 27,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2017-12-01 11:52:01',
                'updated_at' => '2017-12-01 11:52:01',
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 81,
                'custom_module_id' => 28,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-12-09 11:46:13',
                'updated_at' => '2017-12-09 11:46:13',
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 82,
                'custom_module_id' => 28,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2017-12-09 11:46:13',
                'updated_at' => '2018-12-16 07:47:12',
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 90,
                'custom_module_id' => 31,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-04-18 08:26:36',
                'updated_at' => '2018-04-18 08:26:36',
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 91,
                'custom_module_id' => 31,
                'attribute_id' => 3,
                'value' => '1',
                'created_at' => '2018-04-18 08:26:36',
                'updated_at' => '2018-04-18 08:26:36',
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 92,
                'custom_module_id' => 31,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-04-18 08:26:36',
                'updated_at' => '2018-04-18 08:26:36',
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 93,
                'custom_module_id' => 31,
                'attribute_id' => 21,
                'value' => '["1","2"]',
                'created_at' => '2018-04-18 08:26:36',
                'updated_at' => '2018-04-18 08:26:36',
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 94,
                'custom_module_id' => 32,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-04-18 08:32:32',
                'updated_at' => '2018-04-18 08:32:32',
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 95,
                'custom_module_id' => 32,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-04-18 08:32:32',
                'updated_at' => '2018-04-18 08:32:32',
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 96,
                'custom_module_id' => 32,
                'attribute_id' => 8,
                'value' => '8',
                'created_at' => '2018-04-18 08:32:32',
                'updated_at' => '2018-04-18 08:32:32',
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 97,
                'custom_module_id' => 33,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-05-17 20:26:30',
                'updated_at' => '2018-05-17 20:26:30',
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 98,
                'custom_module_id' => 33,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-05-17 20:26:30',
                'updated_at' => '2018-05-17 20:26:30',
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 99,
                'custom_module_id' => 33,
                'attribute_id' => 22,
                'value' => '35.103823,35.997245',
                'created_at' => '2018-05-17 20:26:30',
                'updated_at' => '2018-05-17 20:26:30',
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 100,
                'custom_module_id' => 34,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-05-20 06:38:53',
                'updated_at' => '2018-05-20 06:38:53',
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 101,
                'custom_module_id' => 34,
                'attribute_id' => 2,
                'value' => '8',
                'created_at' => '2018-05-20 06:38:53',
                'updated_at' => '2018-05-21 06:16:10',
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 102,
                'custom_module_id' => 34,
                'attribute_id' => 24,
                'value' => '2',
                'created_at' => '2018-05-20 06:38:53',
                'updated_at' => '2018-11-25 06:33:12',
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 103,
                'custom_module_id' => 34,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2018-05-20 06:38:53',
                'updated_at' => '2018-05-20 06:38:53',
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 104,
                'custom_module_id' => 35,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-05-26 06:07:55',
                'updated_at' => '2018-05-26 06:07:55',
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 105,
                'custom_module_id' => 35,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-05-26 06:07:55',
                'updated_at' => '2018-05-26 06:07:55',
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 106,
                'custom_module_id' => 36,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-05-26 07:18:47',
                'updated_at' => '2018-05-26 07:18:47',
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 107,
                'custom_module_id' => 36,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-05-26 07:18:47',
                'updated_at' => '2018-05-26 07:18:47',
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 108,
                'custom_module_id' => 37,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-05-27 06:38:30',
                'updated_at' => '2018-05-27 06:38:30',
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 109,
                'custom_module_id' => 37,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-05-27 06:38:30',
                'updated_at' => '2018-05-27 06:38:30',
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 110,
                'custom_module_id' => 38,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-05-29 07:17:45',
                'updated_at' => '2018-05-29 07:17:45',
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 111,
                'custom_module_id' => 38,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-05-29 07:17:45',
                'updated_at' => '2018-10-15 06:02:39',
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 112,
                'custom_module_id' => 39,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-05-31 21:54:10',
                'updated_at' => '2018-05-31 21:54:10',
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 113,
                'custom_module_id' => 39,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-05-31 21:54:10',
                'updated_at' => '2018-10-16 04:18:49',
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 114,
                'custom_module_id' => 40,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-09-26 14:24:30',
                'updated_at' => '2018-09-26 14:24:30',
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 115,
                'custom_module_id' => 40,
                'attribute_id' => 2,
                'value' => '6',
                'created_at' => '2018-09-26 14:24:31',
                'updated_at' => '2018-10-15 05:40:36',
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 116,
                'custom_module_id' => 40,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2018-09-26 14:24:31',
                'updated_at' => '2018-09-26 14:24:31',
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 117,
                'custom_module_id' => 41,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-09-26 15:32:34',
                'updated_at' => '2018-09-26 15:32:34',
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 118,
                'custom_module_id' => 41,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-09-26 15:32:34',
                'updated_at' => '2018-10-17 06:57:58',
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 119,
                'custom_module_id' => 41,
                'attribute_id' => 22,
                'value' => '1,2',
                'created_at' => '2018-09-26 15:32:34',
                'updated_at' => '2018-09-26 15:32:34',
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 120,
                'custom_module_id' => 45,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-10-03 02:43:32',
                'updated_at' => '2018-10-03 02:43:32',
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 121,
                'custom_module_id' => 45,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-10-03 02:43:32',
                'updated_at' => '2018-10-14 04:19:57',
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 122,
                'custom_module_id' => 45,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2018-10-03 02:43:32',
                'updated_at' => '2018-10-03 02:43:32',
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 123,
                'custom_module_id' => 46,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-10-03 03:34:59',
                'updated_at' => '2018-10-03 03:34:59',
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 124,
                'custom_module_id' => 46,
                'attribute_id' => 12,
                'value' => '3',
                'created_at' => '2018-10-03 03:34:59',
                'updated_at' => '2018-10-03 03:34:59',
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 125,
                'custom_module_id' => 46,
                'attribute_id' => 10,
                'value' => '',
                'created_at' => '2018-10-03 03:34:59',
                'updated_at' => '2018-10-03 03:34:59',
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 126,
                'custom_module_id' => 46,
                'attribute_id' => 11,
                'value' => '1',
                'created_at' => '2018-10-03 03:34:59',
                'updated_at' => '2019-01-01 13:57:30',
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 127,
                'custom_module_id' => 46,
                'attribute_id' => 2,
                'value' => '6',
                'created_at' => '2018-10-03 03:34:59',
                'updated_at' => '2018-10-03 03:34:59',
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 128,
                'custom_module_id' => 46,
                'attribute_id' => 8,
                'value' => '4',
                'created_at' => '2018-10-03 03:34:59',
                'updated_at' => '2018-10-15 07:19:39',
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 129,
                'custom_module_id' => 47,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-10-03 05:44:37',
                'updated_at' => '2018-10-03 05:44:37',
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 130,
                'custom_module_id' => 47,
                'attribute_id' => 2,
                'value' => '10',
                'created_at' => '2018-10-03 05:44:37',
                'updated_at' => '2018-10-03 05:44:37',
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 131,
                'custom_module_id' => 47,
                'attribute_id' => 18,
                'value' => '["1","3"]',
                'created_at' => '2018-10-03 05:44:37',
                'updated_at' => '2018-10-04 03:01:54',
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 132,
                'custom_module_id' => 47,
                'attribute_id' => 8,
                'value' => '2',
                'created_at' => '2018-10-03 05:44:38',
                'updated_at' => '2018-10-03 05:47:03',
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 133,
                'custom_module_id' => 48,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-10-04 02:49:46',
                'updated_at' => '2018-10-04 02:49:46',
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 134,
                'custom_module_id' => 48,
                'attribute_id' => 2,
                'value' => '6',
                'created_at' => '2018-10-04 02:49:46',
                'updated_at' => '2018-10-04 02:49:46',
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 135,
                'custom_module_id' => 48,
                'attribute_id' => 10,
                'value' => '',
                'created_at' => '2018-10-04 02:49:46',
                'updated_at' => '2018-10-04 02:49:46',
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 136,
                'custom_module_id' => 48,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2018-10-04 02:49:46',
                'updated_at' => '2018-10-04 02:49:46',
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 137,
                'custom_module_id' => 48,
                'attribute_id' => 17,
                'value' => '["2","3"]',
                'created_at' => '2018-10-04 02:49:46',
                'updated_at' => '2018-10-04 02:49:46',
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 138,
                'custom_module_id' => 49,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-10-04 02:54:51',
                'updated_at' => '2018-10-04 02:54:51',
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 139,
                'custom_module_id' => 49,
                'attribute_id' => 2,
                'value' => '10',
                'created_at' => '2018-10-04 02:54:51',
                'updated_at' => '2018-10-15 08:38:07',
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 140,
                'custom_module_id' => 49,
                'attribute_id' => 11,
                'value' => '2',
                'created_at' => '2018-10-04 02:54:51',
                'updated_at' => '2018-10-04 02:54:51',
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 141,
                'custom_module_id' => 49,
                'attribute_id' => 10,
                'value' => '',
                'created_at' => '2018-10-04 02:54:51',
                'updated_at' => '2018-10-04 02:54:51',
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 142,
                'custom_module_id' => 49,
                'attribute_id' => 13,
                'value' => '["90","90"]',
                'created_at' => '2018-10-04 02:54:51',
                'updated_at' => '2018-10-04 02:54:51',
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'id' => 143,
                'custom_module_id' => 49,
                'attribute_id' => 3,
                'value' => '2',
                'created_at' => '2018-10-04 02:57:42',
                'updated_at' => '2019-01-07 13:45:31',
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'id' => 144,
                'custom_module_id' => 49,
                'attribute_id' => 21,
                'value' => '["1","2"]',
                'created_at' => '2018-10-04 02:57:42',
                'updated_at' => '2018-10-15 08:44:01',
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'id' => 145,
                'custom_module_id' => 50,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-10-04 03:12:03',
                'updated_at' => '2018-10-04 03:12:03',
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'id' => 146,
                'custom_module_id' => 50,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-10-04 03:12:03',
                'updated_at' => '2018-11-06 07:07:20',
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'id' => 147,
                'custom_module_id' => 50,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2018-10-04 03:12:03',
                'updated_at' => '2018-10-04 03:12:03',
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'id' => 148,
                'custom_module_id' => 51,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-10-04 04:09:18',
                'updated_at' => '2018-10-04 04:09:18',
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'id' => 149,
                'custom_module_id' => 51,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-10-04 04:09:18',
                'updated_at' => '2018-10-14 04:18:46',
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'id' => 150,
                'custom_module_id' => 51,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2018-10-04 04:09:18',
                'updated_at' => '2018-10-04 04:09:18',
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'id' => 151,
                'custom_module_id' => 52,
                'attribute_id' => 2,
                'value' => '6',
                'created_at' => '2018-10-06 03:56:22',
                'updated_at' => '2018-10-06 03:56:22',
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'id' => 152,
                'custom_module_id' => 52,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-10-06 03:56:22',
                'updated_at' => '2018-10-06 03:56:22',
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'id' => 153,
                'custom_module_id' => 52,
                'attribute_id' => 10,
                'value' => '',
                'created_at' => '2018-10-06 03:56:22',
                'updated_at' => '2018-10-06 03:56:22',
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'id' => 154,
                'custom_module_id' => 52,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2018-10-06 03:56:22',
                'updated_at' => '2018-10-06 03:56:22',
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'id' => 155,
                'custom_module_id' => 52,
                'attribute_id' => 16,
                'value' => '1',
                'created_at' => '2018-10-06 03:56:22',
                'updated_at' => '2018-10-06 03:56:22',
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'id' => 156,
                'custom_module_id' => 53,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-10-06 03:59:30',
                'updated_at' => '2018-10-06 03:59:30',
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'id' => 157,
                'custom_module_id' => 53,
                'attribute_id' => 2,
                'value' => '6',
                'created_at' => '2018-10-06 03:59:30',
                'updated_at' => '2018-10-06 03:59:30',
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'id' => 158,
                'custom_module_id' => 53,
                'attribute_id' => 13,
                'value' => '["97","98","99","97,99"]',
                'created_at' => '2018-10-06 03:59:30',
                'updated_at' => '2018-10-06 03:59:30',
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'id' => 159,
                'custom_module_id' => 54,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-10-06 04:08:24',
                'updated_at' => '2018-10-06 04:08:24',
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'id' => 160,
                'custom_module_id' => 54,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-10-06 04:08:24',
                'updated_at' => '2018-10-10 05:11:24',
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'id' => 161,
                'custom_module_id' => 54,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2018-10-06 04:08:24',
                'updated_at' => '2018-10-06 04:08:24',
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'id' => 162,
                'custom_module_id' => 55,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-10-06 04:18:37',
                'updated_at' => '2018-10-06 04:18:37',
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'id' => 163,
                'custom_module_id' => 55,
                'attribute_id' => 2,
                'value' => '6',
                'created_at' => '2018-10-06 04:18:37',
                'updated_at' => '2018-10-06 04:18:37',
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'id' => 164,
                'custom_module_id' => 55,
                'attribute_id' => 10,
                'value' => '',
                'created_at' => '2018-10-06 04:18:37',
                'updated_at' => '2018-10-06 04:18:37',
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'id' => 165,
                'custom_module_id' => 55,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2018-10-06 04:18:37',
                'updated_at' => '2018-10-06 04:18:37',
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'id' => 166,
                'custom_module_id' => 55,
                'attribute_id' => 17,
                'value' => '["4"]',
                'created_at' => '2018-10-06 04:18:37',
                'updated_at' => '2018-10-06 04:18:37',
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'id' => 167,
                'custom_module_id' => 56,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-10-06 04:39:39',
                'updated_at' => '2018-10-06 04:39:39',
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'id' => 168,
                'custom_module_id' => 56,
                'attribute_id' => 12,
                'value' => '4',
                'created_at' => '2018-10-06 04:39:39',
                'updated_at' => '2018-10-06 04:39:39',
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'id' => 169,
                'custom_module_id' => 56,
                'attribute_id' => 10,
                'value' => '',
                'created_at' => '2018-10-06 04:39:39',
                'updated_at' => '2018-10-06 04:39:39',
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'id' => 170,
                'custom_module_id' => 56,
                'attribute_id' => 11,
                'value' => '9',
                'created_at' => '2018-10-06 04:39:39',
                'updated_at' => '2018-10-06 04:39:39',
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'id' => 171,
                'custom_module_id' => 56,
                'attribute_id' => 2,
                'value' => '8',
                'created_at' => '2018-10-06 04:39:39',
                'updated_at' => '2018-10-06 04:39:39',
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'id' => 172,
                'custom_module_id' => 56,
                'attribute_id' => 8,
                'value' => '2',
                'created_at' => '2018-10-06 04:39:39',
                'updated_at' => '2018-10-06 04:39:39',
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'id' => 173,
                'custom_module_id' => 59,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-10-10 01:11:06',
                'updated_at' => '2018-10-10 01:11:06',
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'id' => 174,
                'custom_module_id' => 59,
                'attribute_id' => 3,
                'value' => '4',
                'created_at' => '2018-10-10 01:11:06',
                'updated_at' => '2018-10-10 01:11:06',
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'id' => 175,
                'custom_module_id' => 59,
                'attribute_id' => 2,
                'value' => '4',
                'created_at' => '2018-10-10 01:11:06',
                'updated_at' => '2018-10-10 01:11:06',
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'id' => 176,
                'custom_module_id' => 59,
                'attribute_id' => 8,
                'value' => '4',
                'created_at' => '2018-10-10 01:11:06',
                'updated_at' => '2018-10-10 01:11:06',
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'id' => 177,
                'custom_module_id' => 59,
                'attribute_id' => 9,
                'value' => '["3"]',
                'created_at' => '2018-10-10 01:11:06',
                'updated_at' => '2018-10-10 01:11:06',
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'id' => 178,
                'custom_module_id' => 59,
                'attribute_id' => 10,
                'value' => '',
                'created_at' => '2018-10-10 01:11:06',
                'updated_at' => '2018-10-10 01:11:06',
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'id' => 179,
                'custom_module_id' => 60,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-10-10 01:13:47',
                'updated_at' => '2018-10-10 01:13:47',
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'id' => 180,
                'custom_module_id' => 60,
                'attribute_id' => 3,
                'value' => '4',
                'created_at' => '2018-10-10 01:13:47',
                'updated_at' => '2018-10-10 01:13:47',
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'id' => 181,
                'custom_module_id' => 60,
                'attribute_id' => 2,
                'value' => '4',
                'created_at' => '2018-10-10 01:13:47',
                'updated_at' => '2018-10-10 01:13:47',
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'id' => 182,
                'custom_module_id' => 60,
                'attribute_id' => 8,
                'value' => '4',
                'created_at' => '2018-10-10 01:13:47',
                'updated_at' => '2018-10-10 01:13:47',
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'id' => 183,
                'custom_module_id' => 60,
                'attribute_id' => 9,
                'value' => '["3"]',
                'created_at' => '2018-10-10 01:13:47',
                'updated_at' => '2018-10-10 01:13:47',
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'id' => 184,
                'custom_module_id' => 60,
                'attribute_id' => 10,
                'value' => '3',
                'created_at' => '2018-10-10 01:13:47',
                'updated_at' => '2018-10-10 01:13:47',
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'id' => 185,
                'custom_module_id' => 61,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-10-10 01:21:11',
                'updated_at' => '2018-10-10 01:21:11',
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'id' => 186,
                'custom_module_id' => 61,
                'attribute_id' => 3,
                'value' => '4',
                'created_at' => '2018-10-10 01:21:11',
                'updated_at' => '2018-10-10 01:21:11',
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'id' => 187,
                'custom_module_id' => 61,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-10-10 01:21:11',
                'updated_at' => '2018-11-25 08:28:06',
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'id' => 188,
                'custom_module_id' => 61,
                'attribute_id' => 8,
                'value' => '4',
                'created_at' => '2018-10-10 01:21:11',
                'updated_at' => '2018-10-10 01:21:11',
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'id' => 189,
                'custom_module_id' => 61,
                'attribute_id' => 9,
                'value' => '["3"]',
                'created_at' => '2018-10-10 01:21:11',
                'updated_at' => '2018-10-10 01:21:11',
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'id' => 190,
                'custom_module_id' => 61,
                'attribute_id' => 10,
                'value' => '',
                'created_at' => '2018-10-10 01:21:11',
                'updated_at' => '2018-10-10 01:21:11',
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'id' => 191,
                'custom_module_id' => 58,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-10-10 18:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'id' => 192,
                'custom_module_id' => 58,
                'attribute_id' => 6,
                'value' => '5',
                'created_at' => '2018-10-10 18:00:00',
                'updated_at' => '2018-11-06 06:12:06',
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'id' => 193,
                'custom_module_id' => 64,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-10-13 03:22:25',
                'updated_at' => '2018-10-13 03:22:25',
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'id' => 194,
                'custom_module_id' => 64,
                'attribute_id' => 5,
                'value' => '5',
                'created_at' => '2018-10-13 03:22:25',
                'updated_at' => '2018-10-13 03:22:25',
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'id' => 195,
                'custom_module_id' => 65,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-10-13 07:29:46',
                'updated_at' => '2018-10-13 07:30:04',
                'deleted_at' => '2018-10-13 07:30:04',
            ),
            178 => 
            array (
                'id' => 196,
                'custom_module_id' => 65,
                'attribute_id' => 5,
                'value' => '4',
                'created_at' => '2018-10-13 07:29:46',
                'updated_at' => '2018-10-13 07:30:04',
                'deleted_at' => '2018-10-13 07:30:04',
            ),
            179 => 
            array (
                'id' => 197,
                'custom_module_id' => 66,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-10-13 07:35:25',
                'updated_at' => '2018-10-13 07:35:25',
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'id' => 198,
                'custom_module_id' => 66,
                'attribute_id' => 5,
                'value' => '6',
                'created_at' => '2018-10-13 07:35:25',
                'updated_at' => '2018-10-13 07:35:25',
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'id' => 199,
                'custom_module_id' => 67,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-10-14 04:31:24',
                'updated_at' => '2018-10-14 04:31:24',
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'id' => 200,
                'custom_module_id' => 67,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-10-14 04:31:24',
                'updated_at' => '2018-10-14 04:31:24',
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'id' => 201,
                'custom_module_id' => 67,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2018-10-14 04:31:24',
                'updated_at' => '2018-10-14 04:31:24',
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'id' => 202,
                'custom_module_id' => 68,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-10-17 06:51:40',
                'updated_at' => '2018-10-17 06:51:40',
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'id' => 203,
                'custom_module_id' => 68,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-10-17 06:51:40',
                'updated_at' => '2018-10-17 06:58:15',
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'id' => 204,
                'custom_module_id' => 68,
                'attribute_id' => 22,
                'value' => '33.510019,36.26647',
                'created_at' => '2018-10-17 06:51:40',
                'updated_at' => '2018-10-20 06:51:24',
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'id' => 205,
                'custom_module_id' => 68,
                'attribute_id' => 24,
                'value' => '1',
                'created_at' => '2018-10-20 06:54:31',
                'updated_at' => '2018-10-20 06:54:31',
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'id' => 206,
                'custom_module_id' => 69,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-10-21 08:19:04',
                'updated_at' => '2018-10-21 08:19:04',
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'id' => 207,
                'custom_module_id' => 69,
                'attribute_id' => 5,
                'value' => '1',
                'created_at' => '2018-10-21 08:19:04',
                'updated_at' => '2018-10-21 08:19:04',
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'id' => 208,
                'custom_module_id' => 70,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-10-21 08:23:44',
                'updated_at' => '2018-10-21 08:23:44',
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'id' => 209,
                'custom_module_id' => 70,
                'attribute_id' => 5,
                'value' => '1',
                'created_at' => '2018-10-21 08:23:44',
                'updated_at' => '2018-10-21 08:23:44',
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'id' => 210,
                'custom_module_id' => 42,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-10-22 03:22:10',
                'updated_at' => '2018-10-22 03:22:10',
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'id' => 211,
                'custom_module_id' => 42,
                'attribute_id' => 2,
                'value' => '10',
                'created_at' => '2018-10-22 03:22:10',
                'updated_at' => '2018-10-22 03:22:10',
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'id' => 212,
                'custom_module_id' => 42,
                'attribute_id' => 24,
                'value' => '1',
                'created_at' => '2018-10-22 03:22:10',
                'updated_at' => '2018-10-22 03:22:10',
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'id' => 213,
                'custom_module_id' => 70,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-10-22 05:02:26',
                'updated_at' => '2018-10-22 05:02:26',
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'id' => 214,
                'custom_module_id' => 70,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2018-10-22 05:02:26',
                'updated_at' => '2018-10-22 05:02:26',
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'id' => 215,
                'custom_module_id' => 24,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-10-22 05:12:02',
                'updated_at' => '2018-10-22 05:12:02',
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'id' => 216,
                'custom_module_id' => 24,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-10-22 05:12:02',
                'updated_at' => '2018-10-22 05:12:02',
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'id' => 217,
                'custom_module_id' => 24,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2018-10-22 05:12:02',
                'updated_at' => '2018-10-22 05:12:02',
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'id' => 218,
                'custom_module_id' => 71,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-10-31 09:47:12',
                'updated_at' => '2018-10-31 09:47:12',
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'id' => 219,
                'custom_module_id' => 71,
                'attribute_id' => 20,
                'value' => 'V',
                'created_at' => '2018-10-31 09:47:12',
                'updated_at' => '2018-10-31 09:47:12',
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'id' => 220,
                'custom_module_id' => 71,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-10-31 09:47:12',
                'updated_at' => '2018-10-31 09:47:12',
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'id' => 221,
                'custom_module_id' => 71,
                'attribute_id' => 5,
                'value' => '6',
                'created_at' => '2018-10-31 09:55:04',
                'updated_at' => '2018-10-31 09:55:04',
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'id' => 222,
                'custom_module_id' => 57,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-11-06 06:05:29',
                'updated_at' => '2018-11-06 06:05:29',
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'id' => 223,
                'custom_module_id' => 57,
                'attribute_id' => 6,
                'value' => '2',
                'created_at' => '2018-11-06 06:05:29',
                'updated_at' => '2018-11-06 06:05:29',
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'id' => 224,
                'custom_module_id' => 44,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-11-11 09:55:44',
                'updated_at' => '2018-11-11 09:55:44',
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'id' => 225,
                'custom_module_id' => 44,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-11-11 09:55:44',
                'updated_at' => '2018-11-11 09:55:44',
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'id' => 226,
                'custom_module_id' => 44,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2018-11-11 09:55:44',
                'updated_at' => '2018-11-11 09:55:44',
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'id' => 227,
                'custom_module_id' => 72,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-11-25 06:55:00',
                'updated_at' => '2018-11-25 06:55:00',
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'id' => 228,
                'custom_module_id' => 72,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-11-25 06:55:00',
                'updated_at' => '2018-11-25 06:55:00',
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'id' => 229,
                'custom_module_id' => 72,
                'attribute_id' => 24,
                'value' => '2',
                'created_at' => '2018-11-25 06:55:00',
                'updated_at' => '2018-11-25 06:55:00',
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'id' => 230,
                'custom_module_id' => 73,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-12-08 18:24:36',
                'updated_at' => '2018-12-08 18:24:36',
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'id' => 231,
                'custom_module_id' => 73,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-12-08 18:24:36',
                'updated_at' => '2018-12-08 18:24:36',
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'id' => 232,
                'custom_module_id' => 43,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-12-10 09:05:22',
                'updated_at' => '2018-12-10 09:05:22',
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'id' => 233,
                'custom_module_id' => 43,
                'attribute_id' => 5,
                'value' => '2',
                'created_at' => '2018-12-10 09:05:22',
                'updated_at' => '2018-12-10 09:05:22',
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'id' => 234,
                'custom_module_id' => 51,
                'attribute_id' => 5,
                'value' => '3',
                'created_at' => '2018-12-10 09:17:04',
                'updated_at' => '2018-12-10 09:17:04',
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'id' => 235,
                'custom_module_id' => 52,
                'attribute_id' => 5,
                'value' => '9',
                'created_at' => '2018-12-10 09:29:18',
                'updated_at' => '2018-12-10 09:29:18',
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'id' => 236,
                'custom_module_id' => 53,
                'attribute_id' => 5,
                'value' => '10',
                'created_at' => '2018-12-10 10:03:45',
                'updated_at' => '2018-12-10 10:03:45',
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'id' => 237,
                'custom_module_id' => 55,
                'attribute_id' => 5,
                'value' => '11',
                'created_at' => '2018-12-10 10:14:04',
                'updated_at' => '2018-12-10 10:18:14',
                'deleted_at' => NULL,
            ),
            220 => 
            array (
                'id' => 238,
                'custom_module_id' => 56,
                'attribute_id' => 5,
                'value' => '12',
                'created_at' => '2018-12-10 10:37:31',
                'updated_at' => '2018-12-10 10:37:31',
                'deleted_at' => NULL,
            ),
            221 => 
            array (
                'id' => 239,
                'custom_module_id' => 59,
                'attribute_id' => 5,
                'value' => '13',
                'created_at' => '2018-12-10 10:41:37',
                'updated_at' => '2018-12-10 10:49:52',
                'deleted_at' => NULL,
            ),
            222 => 
            array (
                'id' => 240,
                'custom_module_id' => 62,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-12-11 13:04:25',
                'updated_at' => '2018-12-11 13:04:25',
                'deleted_at' => NULL,
            ),
            223 => 
            array (
                'id' => 241,
                'custom_module_id' => 62,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-12-11 13:04:25',
                'updated_at' => '2018-12-11 13:04:25',
                'deleted_at' => NULL,
            ),
            224 => 
            array (
                'id' => 242,
                'custom_module_id' => 62,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2018-12-11 13:04:25',
                'updated_at' => '2018-12-11 13:04:25',
                'deleted_at' => NULL,
            ),
            225 => 
            array (
                'id' => 243,
                'custom_module_id' => 63,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-12-11 13:56:01',
                'updated_at' => '2018-12-11 13:56:01',
                'deleted_at' => NULL,
            ),
            226 => 
            array (
                'id' => 244,
                'custom_module_id' => 63,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-12-11 13:56:01',
                'updated_at' => '2018-12-11 13:56:01',
                'deleted_at' => NULL,
            ),
            227 => 
            array (
                'id' => 245,
                'custom_module_id' => 63,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2018-12-11 13:56:01',
                'updated_at' => '2018-12-11 13:56:01',
                'deleted_at' => NULL,
            ),
            228 => 
            array (
                'id' => 246,
                'custom_module_id' => 64,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-12-12 07:38:51',
                'updated_at' => '2018-12-12 07:38:51',
                'deleted_at' => NULL,
            ),
            229 => 
            array (
                'id' => 247,
                'custom_module_id' => 64,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2018-12-12 07:38:51',
                'updated_at' => '2018-12-12 07:38:51',
                'deleted_at' => NULL,
            ),
            230 => 
            array (
                'id' => 248,
                'custom_module_id' => 71,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2018-12-12 08:12:57',
                'updated_at' => '2018-12-12 08:12:57',
                'deleted_at' => NULL,
            ),
            231 => 
            array (
                'id' => 249,
                'custom_module_id' => 72,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2018-12-12 08:26:55',
                'updated_at' => '2018-12-12 08:26:55',
                'deleted_at' => NULL,
            ),
            232 => 
            array (
                'id' => 250,
                'custom_module_id' => 73,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2018-12-12 08:56:37',
                'updated_at' => '2018-12-12 08:56:37',
                'deleted_at' => NULL,
            ),
            233 => 
            array (
                'id' => 251,
                'custom_module_id' => 74,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-12-12 10:48:31',
                'updated_at' => '2018-12-12 10:48:31',
                'deleted_at' => NULL,
            ),
            234 => 
            array (
                'id' => 252,
                'custom_module_id' => 74,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-12-12 10:48:31',
                'updated_at' => '2018-12-12 10:48:31',
                'deleted_at' => NULL,
            ),
            235 => 
            array (
                'id' => 253,
                'custom_module_id' => 74,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2018-12-12 10:48:31',
                'updated_at' => '2018-12-12 10:48:31',
                'deleted_at' => NULL,
            ),
            236 => 
            array (
                'id' => 254,
                'custom_module_id' => 75,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-12-12 11:10:41',
                'updated_at' => '2018-12-12 11:10:41',
                'deleted_at' => NULL,
            ),
            237 => 
            array (
                'id' => 255,
                'custom_module_id' => 75,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-12-12 11:10:41',
                'updated_at' => '2018-12-12 11:10:41',
                'deleted_at' => NULL,
            ),
            238 => 
            array (
                'id' => 256,
                'custom_module_id' => 75,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2018-12-12 11:10:41',
                'updated_at' => '2018-12-12 11:10:41',
                'deleted_at' => NULL,
            ),
            239 => 
            array (
                'id' => 257,
                'custom_module_id' => 76,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-12-12 11:22:52',
                'updated_at' => '2018-12-12 11:22:52',
                'deleted_at' => NULL,
            ),
            240 => 
            array (
                'id' => 258,
                'custom_module_id' => 76,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-12-12 11:22:52',
                'updated_at' => '2018-12-12 11:22:52',
                'deleted_at' => NULL,
            ),
            241 => 
            array (
                'id' => 259,
                'custom_module_id' => 76,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2018-12-12 11:22:52',
                'updated_at' => '2018-12-12 11:22:52',
                'deleted_at' => NULL,
            ),
            242 => 
            array (
                'id' => 260,
                'custom_module_id' => 77,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-12-12 11:38:28',
                'updated_at' => '2018-12-12 11:38:28',
                'deleted_at' => NULL,
            ),
            243 => 
            array (
                'id' => 261,
                'custom_module_id' => 77,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-12-12 11:38:28',
                'updated_at' => '2018-12-12 11:38:28',
                'deleted_at' => NULL,
            ),
            244 => 
            array (
                'id' => 262,
                'custom_module_id' => 77,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2018-12-12 11:38:28',
                'updated_at' => '2018-12-12 11:38:28',
                'deleted_at' => NULL,
            ),
            245 => 
            array (
                'id' => 263,
                'custom_module_id' => 78,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-12-12 12:30:10',
                'updated_at' => '2018-12-12 12:30:10',
                'deleted_at' => NULL,
            ),
            246 => 
            array (
                'id' => 264,
                'custom_module_id' => 78,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-12-12 12:30:10',
                'updated_at' => '2018-12-12 12:30:10',
                'deleted_at' => NULL,
            ),
            247 => 
            array (
                'id' => 265,
                'custom_module_id' => 78,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2018-12-12 12:30:10',
                'updated_at' => '2018-12-12 12:30:10',
                'deleted_at' => NULL,
            ),
            248 => 
            array (
                'id' => 266,
                'custom_module_id' => 79,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-12-12 12:37:28',
                'updated_at' => '2018-12-12 12:37:28',
                'deleted_at' => NULL,
            ),
            249 => 
            array (
                'id' => 267,
                'custom_module_id' => 79,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-12-12 12:37:28',
                'updated_at' => '2018-12-12 12:37:28',
                'deleted_at' => NULL,
            ),
            250 => 
            array (
                'id' => 268,
                'custom_module_id' => 79,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2018-12-12 12:37:28',
                'updated_at' => '2018-12-12 12:37:28',
                'deleted_at' => NULL,
            ),
            251 => 
            array (
                'id' => 269,
                'custom_module_id' => 80,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-12-16 11:42:56',
                'updated_at' => '2018-12-16 11:42:56',
                'deleted_at' => NULL,
            ),
            252 => 
            array (
                'id' => 270,
                'custom_module_id' => 80,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-12-16 11:42:56',
                'updated_at' => '2018-12-16 11:42:56',
                'deleted_at' => NULL,
            ),
            253 => 
            array (
                'id' => 271,
                'custom_module_id' => 80,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2018-12-16 11:42:56',
                'updated_at' => '2018-12-16 11:42:56',
                'deleted_at' => NULL,
            ),
            254 => 
            array (
                'id' => 272,
                'custom_module_id' => 28,
                'attribute_id' => 25,
                'value' => '1',
                'created_at' => '2018-12-27 05:50:25',
                'updated_at' => '2018-12-27 05:50:25',
                'deleted_at' => NULL,
            ),
            255 => 
            array (
                'id' => 273,
                'custom_module_id' => 81,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-12-27 09:11:55',
                'updated_at' => '2018-12-27 09:11:55',
                'deleted_at' => NULL,
            ),
            256 => 
            array (
                'id' => 274,
                'custom_module_id' => 81,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-12-27 09:11:55',
                'updated_at' => '2018-12-27 09:11:55',
                'deleted_at' => NULL,
            ),
            257 => 
            array (
                'id' => 275,
                'custom_module_id' => 81,
                'attribute_id' => 25,
                'value' => '1',
                'created_at' => '2018-12-27 09:11:55',
                'updated_at' => '2018-12-27 09:11:55',
                'deleted_at' => NULL,
            ),
            258 => 
            array (
                'id' => 276,
                'custom_module_id' => 82,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-12-30 10:21:28',
                'updated_at' => '2018-12-30 10:21:28',
                'deleted_at' => NULL,
            ),
            259 => 
            array (
                'id' => 277,
                'custom_module_id' => 82,
                'attribute_id' => 26,
                'value' => '["1","2"]',
                'created_at' => '2018-12-30 10:21:28',
                'updated_at' => '2018-12-30 10:21:28',
                'deleted_at' => NULL,
            ),
            260 => 
            array (
                'id' => 278,
                'custom_module_id' => 82,
                'attribute_id' => 2,
                'value' => '6',
                'created_at' => '2019-01-01 07:03:31',
                'updated_at' => '2019-01-01 07:03:31',
                'deleted_at' => NULL,
            ),
            261 => 
            array (
                'id' => 279,
                'custom_module_id' => 83,
                'attribute_id' => 1,
                'value' => 'D',
                'created_at' => '2019-01-01 07:52:59',
                'updated_at' => '2019-01-01 10:01:30',
                'deleted_at' => NULL,
            ),
            262 => 
            array (
                'id' => 280,
                'custom_module_id' => 83,
                'attribute_id' => 2,
                'value' => '9',
                'created_at' => '2019-01-01 07:52:59',
                'updated_at' => '2019-01-01 07:52:59',
                'deleted_at' => NULL,
            ),
            263 => 
            array (
                'id' => 281,
                'custom_module_id' => 83,
                'attribute_id' => 11,
                'value' => '2',
                'created_at' => '2019-01-01 07:52:59',
                'updated_at' => '2019-01-01 07:52:59',
                'deleted_at' => NULL,
            ),
            264 => 
            array (
                'id' => 282,
                'custom_module_id' => 83,
                'attribute_id' => 10,
                'value' => '',
                'created_at' => '2019-01-01 07:52:59',
                'updated_at' => '2019-01-01 07:52:59',
                'deleted_at' => NULL,
            ),
            265 => 
            array (
                'id' => 283,
                'custom_module_id' => 83,
                'attribute_id' => 13,
                'value' => '["433","434","435"]',
                'created_at' => '2019-01-01 07:53:00',
                'updated_at' => '2019-01-01 09:25:27',
                'deleted_at' => NULL,
            ),
            266 => 
            array (
                'id' => 284,
                'custom_module_id' => 12,
                'attribute_id' => 15,
                'value' => '',
                'created_at' => '2019-01-01 13:27:50',
                'updated_at' => '2019-01-01 13:27:50',
                'deleted_at' => NULL,
            ),
            267 => 
            array (
                'id' => 285,
                'custom_module_id' => 84,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2019-01-13 08:21:08',
                'updated_at' => '2019-01-13 08:21:08',
                'deleted_at' => NULL,
            ),
            268 => 
            array (
                'id' => 286,
                'custom_module_id' => 84,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2019-01-13 08:21:08',
                'updated_at' => '2019-01-13 08:21:08',
                'deleted_at' => NULL,
            ),
            269 => 
            array (
                'id' => 287,
                'custom_module_id' => 84,
                'attribute_id' => 9,
                'value' => '["3","17","20","18","14"]',
                'created_at' => '2019-01-13 08:21:08',
                'updated_at' => '2019-01-13 08:26:35',
                'deleted_at' => NULL,
            ),
            270 => 
            array (
                'id' => 288,
                'custom_module_id' => 84,
                'attribute_id' => 10,
                'value' => '',
                'created_at' => '2019-01-13 08:21:08',
                'updated_at' => '2019-01-13 08:21:08',
                'deleted_at' => NULL,
            ),
            271 => 
            array (
                'id' => 289,
                'custom_module_id' => 33,
                'attribute_id' => 27,
                'value' => '600',
                'created_at' => '2019-01-16 15:16:15',
                'updated_at' => '2019-01-16 15:16:15',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}