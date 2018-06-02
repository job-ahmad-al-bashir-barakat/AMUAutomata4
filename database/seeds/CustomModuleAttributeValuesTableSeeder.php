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
                'created_at' => '2017-10-16 17:13:23',
                'updated_at' => '2017-10-16 17:13:23',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'custom_module_id' => 2,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-16 17:13:57',
                'updated_at' => '2017-10-16 17:13:57',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'custom_module_id' => 3,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-16 17:15:19',
                'updated_at' => '2017-10-16 17:15:19',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'custom_module_id' => 4,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-16 17:16:31',
                'updated_at' => '2017-10-16 17:16:31',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'custom_module_id' => 5,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-16 17:17:13',
                'updated_at' => '2017-10-16 17:17:13',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'custom_module_id' => 6,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-16 17:28:31',
                'updated_at' => '2017-10-16 17:28:31',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'custom_module_id' => 6,
                'attribute_id' => 5,
                'value' => '1',
                'created_at' => '2017-10-16 17:28:31',
                'updated_at' => '2017-10-16 17:28:31',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'custom_module_id' => 7,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-16 17:29:17',
                'updated_at' => '2017-10-16 17:29:17',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'custom_module_id' => 7,
                'attribute_id' => 6,
                'value' => '1',
                'created_at' => '2017-10-16 17:29:17',
                'updated_at' => '2017-10-16 17:29:17',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'custom_module_id' => 8,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-16 18:11:04',
                'updated_at' => '2017-10-16 18:11:04',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'custom_module_id' => 8,
                'attribute_id' => 2,
                'value' => '8',
                'created_at' => '2017-10-16 18:11:04',
                'updated_at' => '2017-10-16 18:11:04',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'custom_module_id' => 8,
                'attribute_id' => 10,
                'value' => '',
                'created_at' => '2017-10-16 18:11:04',
                'updated_at' => '2017-10-16 18:11:04',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'custom_module_id' => 8,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2017-10-16 18:11:05',
                'updated_at' => '2017-10-16 18:11:05',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 24,
                'custom_module_id' => 11,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-17 19:22:01',
                'updated_at' => '2017-10-17 19:22:01',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 25,
                'custom_module_id' => 11,
                'attribute_id' => 2,
                'value' => '4',
                'created_at' => '2017-10-17 19:22:01',
                'updated_at' => '2017-10-31 18:08:16',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 26,
                'custom_module_id' => 11,
                'attribute_id' => 18,
                'value' => '["1","2","3","4"]',
                'created_at' => '2017-10-17 19:22:01',
                'updated_at' => '2017-10-17 19:22:01',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 27,
                'custom_module_id' => 11,
                'attribute_id' => 8,
                'value' => '1',
                'created_at' => '2017-10-17 19:22:01',
                'updated_at' => '2017-10-17 19:22:01',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 28,
                'custom_module_id' => 12,
                'attribute_id' => 2,
                'value' => '6',
                'created_at' => '2017-10-23 18:01:01',
                'updated_at' => '2017-10-23 18:01:01',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 29,
                'custom_module_id' => 12,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-23 18:01:02',
                'updated_at' => '2017-10-23 18:01:02',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 30,
                'custom_module_id' => 12,
                'attribute_id' => 10,
                'value' => '',
                'created_at' => '2017-10-23 18:01:02',
                'updated_at' => '2017-10-23 18:01:02',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 31,
                'custom_module_id' => 12,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2017-10-23 18:01:02',
                'updated_at' => '2017-10-23 18:01:02',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 32,
                'custom_module_id' => 12,
                'attribute_id' => 16,
                'value' => '2',
                'created_at' => '2017-10-23 18:01:02',
                'updated_at' => '2017-10-23 18:01:02',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 33,
                'custom_module_id' => 13,
                'attribute_id' => 1,
                'value' => 'D',
                'created_at' => '2017-10-25 16:18:22',
                'updated_at' => '2017-10-25 16:26:38',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 34,
                'custom_module_id' => 13,
                'attribute_id' => 3,
                'value' => '20',
                'created_at' => '2017-10-25 16:18:22',
                'updated_at' => '2017-10-25 16:18:22',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 35,
                'custom_module_id' => 13,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2017-10-25 16:18:22',
                'updated_at' => '2017-10-25 16:18:22',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 36,
                'custom_module_id' => 13,
                'attribute_id' => 8,
                'value' => '4',
                'created_at' => '2017-10-25 16:18:22',
                'updated_at' => '2017-10-25 16:18:22',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 37,
                'custom_module_id' => 13,
                'attribute_id' => 7,
                'value' => '["1","2","3"]',
                'created_at' => '2017-10-25 16:18:22',
                'updated_at' => '2017-10-25 16:18:22',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 38,
                'custom_module_id' => 13,
                'attribute_id' => 10,
                'value' => '',
                'created_at' => '2017-10-25 16:26:39',
                'updated_at' => '2017-10-25 16:26:39',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 39,
                'custom_module_id' => 14,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-25 19:27:30',
                'updated_at' => '2017-10-25 19:27:30',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 40,
                'custom_module_id' => 14,
                'attribute_id' => 12,
                'value' => '1',
                'created_at' => '2017-10-25 19:27:30',
                'updated_at' => '2017-10-25 19:27:30',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 41,
                'custom_module_id' => 14,
                'attribute_id' => 10,
                'value' => '',
                'created_at' => '2017-10-25 19:27:30',
                'updated_at' => '2017-10-25 19:27:30',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 42,
                'custom_module_id' => 14,
                'attribute_id' => 11,
                'value' => '222',
                'created_at' => '2017-10-25 19:27:30',
                'updated_at' => '2017-10-25 19:27:30',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 43,
                'custom_module_id' => 14,
                'attribute_id' => 2,
                'value' => '6',
                'created_at' => '2017-10-25 19:27:30',
                'updated_at' => '2017-10-25 19:27:30',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 44,
                'custom_module_id' => 14,
                'attribute_id' => 8,
                'value' => '2',
                'created_at' => '2017-10-25 19:27:30',
                'updated_at' => '2017-10-25 19:27:30',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 45,
                'custom_module_id' => 15,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-27 07:20:05',
                'updated_at' => '2017-10-27 07:20:05',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 46,
                'custom_module_id' => 15,
                'attribute_id' => 2,
                'value' => '6',
                'created_at' => '2017-10-27 07:20:05',
                'updated_at' => '2017-10-27 07:20:05',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 47,
                'custom_module_id' => 15,
                'attribute_id' => 13,
                'value' => '["17","18","19"]',
                'created_at' => '2017-10-27 07:20:05',
                'updated_at' => '2017-10-27 14:05:47',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 48,
                'custom_module_id' => 16,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-29 06:07:31',
                'updated_at' => '2017-10-29 06:07:31',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 49,
                'custom_module_id' => 16,
                'attribute_id' => 2,
                'value' => '6',
                'created_at' => '2017-10-29 06:07:31',
                'updated_at' => '2017-10-29 06:07:31',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 50,
                'custom_module_id' => 16,
                'attribute_id' => 10,
                'value' => '',
                'created_at' => '2017-10-29 06:07:31',
                'updated_at' => '2017-10-29 06:07:31',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 51,
                'custom_module_id' => 16,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2017-10-29 06:07:32',
                'updated_at' => '2017-10-29 06:07:32',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 52,
                'custom_module_id' => 16,
                'attribute_id' => 17,
                'value' => '["1","2"]',
                'created_at' => '2017-10-29 06:07:32',
                'updated_at' => '2017-10-29 06:07:32',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 53,
                'custom_module_id' => 17,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-29 20:00:28',
                'updated_at' => '2017-10-29 20:00:28',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 54,
                'custom_module_id' => 17,
                'attribute_id' => 3,
                'value' => '12',
                'created_at' => '2017-10-29 20:00:28',
                'updated_at' => '2017-10-29 20:00:28',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 55,
                'custom_module_id' => 17,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2017-10-29 20:00:28',
                'updated_at' => '2017-10-30 17:58:07',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 56,
                'custom_module_id' => 17,
                'attribute_id' => 8,
                'value' => '4',
                'created_at' => '2017-10-29 20:00:28',
                'updated_at' => '2017-10-29 20:00:28',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 57,
                'custom_module_id' => 17,
                'attribute_id' => 9,
                'value' => '["1","3","4"]',
                'created_at' => '2017-10-29 20:00:28',
                'updated_at' => '2017-10-30 17:54:50',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 58,
                'custom_module_id' => 17,
                'attribute_id' => 10,
                'value' => '',
                'created_at' => '2017-10-30 17:54:50',
                'updated_at' => '2017-10-30 17:54:50',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 59,
                'custom_module_id' => 18,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-31 17:27:47',
                'updated_at' => '2017-10-31 17:27:47',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 60,
                'custom_module_id' => 18,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2017-10-31 17:27:47',
                'updated_at' => '2017-10-31 17:27:47',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 61,
                'custom_module_id' => 18,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2017-10-31 17:27:47',
                'updated_at' => '2017-10-31 17:27:47',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 62,
                'custom_module_id' => 19,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-31 19:56:17',
                'updated_at' => '2017-10-31 19:56:17',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 63,
                'custom_module_id' => 19,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2017-10-31 19:56:17',
                'updated_at' => '2017-10-31 19:56:17',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 64,
                'custom_module_id' => 20,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-10-31 20:06:14',
                'updated_at' => '2017-10-31 20:06:14',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 65,
                'custom_module_id' => 20,
                'attribute_id' => 2,
                'value' => '6',
                'created_at' => '2017-10-31 20:06:14',
                'updated_at' => '2017-10-31 20:06:14',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 66,
                'custom_module_id' => 20,
                'attribute_id' => 18,
                'value' => '["1","2","3","4"]',
                'created_at' => '2017-10-31 20:06:14',
                'updated_at' => '2017-10-31 20:06:14',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 67,
                'custom_module_id' => 20,
                'attribute_id' => 8,
                'value' => '2',
                'created_at' => '2017-10-31 20:06:14',
                'updated_at' => '2017-10-31 20:06:14',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 68,
                'custom_module_id' => 20,
                'attribute_id' => 10,
                'value' => '',
                'created_at' => '2017-10-31 20:06:14',
                'updated_at' => '2017-10-31 20:06:14',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 69,
                'custom_module_id' => 21,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-11-03 05:07:56',
                'updated_at' => '2017-11-03 05:07:56',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 70,
                'custom_module_id' => 21,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2017-11-03 05:07:56',
                'updated_at' => '2017-11-03 05:07:56',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 71,
                'custom_module_id' => 22,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-11-05 19:49:54',
                'updated_at' => '2017-11-05 19:49:54',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 72,
                'custom_module_id' => 22,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2017-11-05 19:49:54',
                'updated_at' => '2017-11-05 19:49:54',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 73,
                'custom_module_id' => 23,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-11-15 19:04:08',
                'updated_at' => '2017-11-15 19:04:08',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 74,
                'custom_module_id' => 23,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2017-11-15 19:04:08',
                'updated_at' => '2017-11-15 19:04:08',
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 75,
                'custom_module_id' => 25,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-11-17 18:52:26',
                'updated_at' => '2017-11-17 18:52:26',
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 76,
                'custom_module_id' => 25,
                'attribute_id' => 2,
                'value' => '9',
                'created_at' => '2017-11-17 18:52:26',
                'updated_at' => '2017-11-17 18:52:26',
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 77,
                'custom_module_id' => 26,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-11-22 18:53:28',
                'updated_at' => '2017-11-22 18:53:28',
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 78,
                'custom_module_id' => 26,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2017-11-22 18:53:28',
                'updated_at' => '2017-11-22 18:53:28',
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 79,
                'custom_module_id' => 27,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-12-01 17:52:01',
                'updated_at' => '2017-12-01 17:52:01',
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 80,
                'custom_module_id' => 27,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2017-12-01 17:52:01',
                'updated_at' => '2017-12-01 17:52:01',
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 81,
                'custom_module_id' => 28,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2017-12-09 17:46:13',
                'updated_at' => '2017-12-09 17:46:13',
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 82,
                'custom_module_id' => 28,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2017-12-09 17:46:13',
                'updated_at' => '2017-12-09 17:46:13',
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 90,
                'custom_module_id' => 31,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-04-18 17:26:36',
                'updated_at' => '2018-04-18 17:26:36',
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 91,
                'custom_module_id' => 31,
                'attribute_id' => 3,
                'value' => '1',
                'created_at' => '2018-04-18 17:26:36',
                'updated_at' => '2018-04-18 17:26:36',
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 92,
                'custom_module_id' => 31,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-04-18 17:26:36',
                'updated_at' => '2018-04-18 17:26:36',
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 93,
                'custom_module_id' => 31,
                'attribute_id' => 21,
                'value' => '["1","2"]',
                'created_at' => '2018-04-18 17:26:36',
                'updated_at' => '2018-04-18 17:26:36',
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 94,
                'custom_module_id' => 32,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-04-18 17:32:32',
                'updated_at' => '2018-04-18 17:32:32',
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 95,
                'custom_module_id' => 32,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-04-18 17:32:32',
                'updated_at' => '2018-04-18 17:32:32',
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 96,
                'custom_module_id' => 32,
                'attribute_id' => 8,
                'value' => '8',
                'created_at' => '2018-04-18 17:32:32',
                'updated_at' => '2018-04-18 17:32:32',
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 97,
                'custom_module_id' => 33,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-05-18 05:26:30',
                'updated_at' => '2018-05-18 05:26:30',
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 98,
                'custom_module_id' => 33,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-05-18 05:26:30',
                'updated_at' => '2018-05-18 05:26:30',
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 99,
                'custom_module_id' => 33,
                'attribute_id' => 22,
                'value' => '35.103823,35.997245',
                'created_at' => '2018-05-18 05:26:30',
                'updated_at' => '2018-05-18 05:26:30',
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 100,
                'custom_module_id' => 34,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-05-20 15:38:53',
                'updated_at' => '2018-05-20 15:38:53',
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 101,
                'custom_module_id' => 34,
                'attribute_id' => 2,
                'value' => '8',
                'created_at' => '2018-05-20 15:38:53',
                'updated_at' => '2018-05-21 15:16:10',
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 102,
                'custom_module_id' => 34,
                'attribute_id' => 24,
                'value' => '1',
                'created_at' => '2018-05-20 15:38:53',
                'updated_at' => '2018-05-20 15:38:53',
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 103,
                'custom_module_id' => 34,
                'attribute_id' => 4,
                'value' => '',
                'created_at' => '2018-05-20 15:38:53',
                'updated_at' => '2018-05-20 15:38:53',
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 104,
                'custom_module_id' => 35,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-05-26 15:07:55',
                'updated_at' => '2018-05-26 15:07:55',
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 105,
                'custom_module_id' => 35,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-05-26 15:07:55',
                'updated_at' => '2018-05-26 15:07:55',
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 106,
                'custom_module_id' => 36,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-05-26 16:18:47',
                'updated_at' => '2018-05-26 16:18:47',
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 107,
                'custom_module_id' => 36,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-05-26 16:18:47',
                'updated_at' => '2018-05-26 16:18:47',
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 108,
                'custom_module_id' => 37,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-05-27 15:38:30',
                'updated_at' => '2018-05-27 15:38:30',
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 109,
                'custom_module_id' => 37,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-05-27 15:38:30',
                'updated_at' => '2018-05-27 15:38:30',
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 110,
                'custom_module_id' => 38,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-05-29 16:17:45',
                'updated_at' => '2018-05-29 16:17:45',
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 111,
                'custom_module_id' => 38,
                'attribute_id' => 2,
                'value' => '12',
                'created_at' => '2018-05-29 16:17:45',
                'updated_at' => '2018-05-29 16:17:45',
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 112,
                'custom_module_id' => 39,
                'attribute_id' => 1,
                'value' => 'E',
                'created_at' => '2018-06-01 06:54:10',
                'updated_at' => '2018-06-01 06:54:10',
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 113,
                'custom_module_id' => 39,
                'attribute_id' => 2,
                'value' => '9',
                'created_at' => '2018-06-01 06:54:10',
                'updated_at' => '2018-06-01 06:54:10',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}