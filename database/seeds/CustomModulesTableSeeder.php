<?php

use Illuminate\Database\Seeder;

class CustomModulesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('custom_modules')->delete();

        \DB::table('custom_modules')->insert([
            0 =>
                [
                    'id' => 1,
                    'module_id' => 3,
                    'created_at' => '2017-10-16 08:12:49',
                    'updated_at' => '2017-10-16 08:12:49',
                    'deleted_at' => NULL,
                ],
            1 =>
                [
                    'id' => 2,
                    'module_id' => 4,
                    'created_at' => '2017-10-16 08:13:56',
                    'updated_at' => '2017-10-16 08:13:56',
                    'deleted_at' => NULL,
                ],
            2 =>
                [
                    'id' => 3,
                    'module_id' => 11,
                    'created_at' => '2017-10-16 08:15:19',
                    'updated_at' => '2017-10-16 08:15:19',
                    'deleted_at' => NULL,
                ],
            3 =>
                [
                    'id' => 4,
                    'module_id' => 14,
                    'created_at' => '2017-10-16 08:16:10',
                    'updated_at' => '2017-10-16 08:16:10',
                    'deleted_at' => NULL,
                ],
            4 =>
                [
                    'id' => 5,
                    'module_id' => 15,
                    'created_at' => '2017-10-16 08:17:12',
                    'updated_at' => '2017-10-16 08:17:12',
                    'deleted_at' => NULL,
                ],
            5 =>
                [
                    'id' => 6,
                    'module_id' => 5,
                    'created_at' => '2017-10-16 08:28:29',
                    'updated_at' => '2017-10-16 08:28:29',
                    'deleted_at' => NULL,
                ],
            6 =>
                [
                    'id' => 7,
                    'module_id' => 6,
                    'created_at' => '2017-10-16 08:29:16',
                    'updated_at' => '2017-10-16 08:29:16',
                    'deleted_at' => NULL,
                ],
            7 =>
                [
                    'id' => 8,
                    'module_id' => 17,
                    'created_at' => '2017-10-16 09:11:04',
                    'updated_at' => '2017-10-16 09:11:04',
                    'deleted_at' => NULL,
                ],
            8 =>
                [
                    'id' => 11,
                    'module_id' => 16,
                    'created_at' => '2017-10-17 10:22:01',
                    'updated_at' => '2017-10-17 10:22:01',
                    'deleted_at' => NULL,
                ],
            9 =>
                [
                    'id' => 12,
                    'module_id' => 2,
                    'created_at' => '2017-10-23 09:01:01',
                    'updated_at' => '2017-10-23 09:01:01',
                    'deleted_at' => NULL,
                ],
            10 =>
                [
                    'id' => 13,
                    'module_id' => 7,
                    'created_at' => '2017-10-25 07:18:21',
                    'updated_at' => '2017-10-25 07:18:21',
                    'deleted_at' => NULL,
                ],
            11 =>
                [
                    'id' => 14,
                    'module_id' => 9,
                    'created_at' => '2017-10-25 10:27:29',
                    'updated_at' => '2017-10-25 10:27:29',
                    'deleted_at' => NULL,
                ],
            12 =>
                [
                    'id' => 15,
                    'module_id' => 12,
                    'created_at' => '2017-10-26 23:20:04',
                    'updated_at' => '2017-10-26 23:20:04',
                    'deleted_at' => NULL,
                ],
            13 =>
                [
                    'id' => 16,
                    'module_id' => 13,
                    'created_at' => '2017-10-28 23:07:30',
                    'updated_at' => '2017-10-28 23:07:30',
                    'deleted_at' => NULL,
                ],
            14 =>
                [
                    'id' => 17,
                    'module_id' => 8,
                    'created_at' => '2017-10-29 14:00:27',
                    'updated_at' => '2017-10-29 14:00:27',
                    'deleted_at' => NULL,
                ],
            15 =>
                [
                    'id' => 18,
                    'module_id' => 1,
                    'created_at' => '2017-10-31 11:27:46',
                    'updated_at' => '2017-10-31 11:27:46',
                    'deleted_at' => NULL,
                ],
            16 =>
                [
                    'id' => 19,
                    'module_id' => 22,
                    'created_at' => '2017-10-31 13:56:17',
                    'updated_at' => '2017-10-31 13:56:17',
                    'deleted_at' => NULL,
                ],
            17 =>
                [
                    'id' => 20,
                    'module_id' => 18,
                    'created_at' => '2017-10-31 14:06:14',
                    'updated_at' => '2017-10-31 14:06:14',
                    'deleted_at' => NULL,
                ],
            18 =>
                [
                    'id' => 21,
                    'module_id' => 23,
                    'created_at' => '2017-11-02 23:07:56',
                    'updated_at' => '2017-11-02 23:07:56',
                    'deleted_at' => NULL,
                ],
            19 =>
                [
                    'id' => 22,
                    'module_id' => 24,
                    'created_at' => '2017-11-05 13:49:54',
                    'updated_at' => '2017-11-05 13:49:54',
                    'deleted_at' => NULL,
                ],
            20 =>
                [
                    'id' => 23,
                    'module_id' => 19,
                    'created_at' => '2017-11-15 13:04:08',
                    'updated_at' => '2017-11-15 13:04:08',
                    'deleted_at' => NULL,
                ],
            21 =>
                [
                    'id' => 24,
                    'module_id' => 1,
                    'created_at' => '2017-11-17 12:46:36',
                    'updated_at' => '2018-10-22 05:12:02',
                    'deleted_at' => NULL,
                ],
            22 =>
                [
                    'id' => 25,
                    'module_id' => 25,
                    'created_at' => '2017-11-17 12:52:25',
                    'updated_at' => '2017-11-17 12:52:25',
                    'deleted_at' => NULL,
                ],
            23 =>
                [
                    'id' => 26,
                    'module_id' => 26,
                    'created_at' => '2017-11-22 12:53:28',
                    'updated_at' => '2017-11-22 12:53:28',
                    'deleted_at' => NULL,
                ],
            24 =>
                [
                    'id' => 27,
                    'module_id' => 27,
                    'created_at' => '2017-12-01 11:52:01',
                    'updated_at' => '2017-12-01 11:52:01',
                    'deleted_at' => NULL,
                ],
            25 =>
                [
                    'id' => 28,
                    'module_id' => 28,
                    'created_at' => '2017-12-09 11:46:12',
                    'updated_at' => '2017-12-09 11:46:12',
                    'deleted_at' => NULL,
                ],
            26 =>
                [
                    'id' => 31,
                    'module_id' => 30,
                    'created_at' => '2018-04-18 08:26:36',
                    'updated_at' => '2018-04-18 08:26:36',
                    'deleted_at' => NULL,
                ],
            27 =>
                [
                    'id' => 32,
                    'module_id' => 31,
                    'created_at' => '2018-04-18 08:32:32',
                    'updated_at' => '2018-04-18 08:32:32',
                    'deleted_at' => NULL,
                ],
            28 =>
                [
                    'id' => 33,
                    'module_id' => 32,
                    'created_at' => '2018-05-17 20:26:30',
                    'updated_at' => '2018-05-17 20:26:30',
                    'deleted_at' => NULL,
                ],
            29 =>
                [
                    'id' => 34,
                    'module_id' => 33,
                    'created_at' => '2018-05-20 06:38:52',
                    'updated_at' => '2018-05-20 06:38:52',
                    'deleted_at' => NULL,
                ],
            30 =>
                [
                    'id' => 35,
                    'module_id' => 34,
                    'created_at' => '2018-05-26 06:07:54',
                    'updated_at' => '2018-05-26 06:07:54',
                    'deleted_at' => NULL,
                ],
            31 =>
                [
                    'id' => 36,
                    'module_id' => 35,
                    'created_at' => '2018-05-26 07:18:47',
                    'updated_at' => '2018-05-26 07:18:47',
                    'deleted_at' => NULL,
                ],
            32 =>
                [
                    'id' => 37,
                    'module_id' => 36,
                    'created_at' => '2018-05-27 06:38:30',
                    'updated_at' => '2018-05-27 06:38:30',
                    'deleted_at' => NULL,
                ],
            33 =>
                [
                    'id' => 38,
                    'module_id' => 37,
                    'created_at' => '2018-05-29 07:17:45',
                    'updated_at' => '2018-05-29 07:17:45',
                    'deleted_at' => NULL,
                ],
            34 =>
                [
                    'id' => 39,
                    'module_id' => 38,
                    'created_at' => '2018-05-31 21:54:09',
                    'updated_at' => '2018-05-31 21:54:09',
                    'deleted_at' => NULL,
                ],
            35 =>
                [
                    'id' => 40,
                    'module_id' => 1,
                    'created_at' => '2018-09-26 14:24:30',
                    'updated_at' => '2018-09-26 14:24:30',
                    'deleted_at' => NULL,
                ],
            36 =>
                [
                    'id' => 41,
                    'module_id' => 32,
                    'created_at' => '2018-09-26 15:32:34',
                    'updated_at' => '2018-09-26 15:32:34',
                    'deleted_at' => NULL,
                ],
            37 =>
                [
                    'id' => 42,
                    'module_id' => 33,
                    'created_at' => '2018-10-03 02:37:08',
                    'updated_at' => '2018-10-22 03:22:10',
                    'deleted_at' => NULL,
                ],
            38 =>
                [
                    'id' => 43,
                    'module_id' => 5,
                    'created_at' => '2018-10-03 02:37:10',
                    'updated_at' => '2018-10-03 02:37:10',
                    'deleted_at' => NULL,
                ],
            39 =>
                [
                    'id' => 44,
                    'module_id' => 1,
                    'created_at' => '2018-10-03 02:37:24',
                    'updated_at' => '2018-11-11 09:55:44',
                    'deleted_at' => NULL,
                ],
            40 =>
                [
                    'id' => 45,
                    'module_id' => 1,
                    'created_at' => '2018-10-03 02:43:32',
                    'updated_at' => '2018-10-03 02:43:32',
                    'deleted_at' => NULL,
                ],
            41 =>
                [
                    'id' => 46,
                    'module_id' => 9,
                    'created_at' => '2018-10-03 03:34:58',
                    'updated_at' => '2018-10-03 03:34:58',
                    'deleted_at' => NULL,
                ],
            42 =>
                [
                    'id' => 47,
                    'module_id' => 16,
                    'created_at' => '2018-10-03 05:44:37',
                    'updated_at' => '2018-10-03 05:44:37',
                    'deleted_at' => NULL,
                ],
            43 =>
                [
                    'id' => 48,
                    'module_id' => 13,
                    'created_at' => '2018-10-04 02:49:46',
                    'updated_at' => '2018-10-04 02:49:46',
                    'deleted_at' => NULL,
                ],
            44 =>
                [
                    'id' => 49,
                    'module_id' => 30,
                    'created_at' => '2018-10-04 02:54:51',
                    'updated_at' => '2018-10-04 02:57:42',
                    'deleted_at' => NULL,
                ],
            45 =>
                [
                    'id' => 50,
                    'module_id' => 1,
                    'created_at' => '2018-10-04 03:12:03',
                    'updated_at' => '2018-10-04 03:12:03',
                    'deleted_at' => NULL,
                ],
            46 =>
                [
                    'id' => 51,
                    'module_id' => 5,
                    'created_at' => '2018-10-04 04:09:18',
                    'updated_at' => '2018-12-10 09:17:04',
                    'deleted_at' => NULL,
                ],
            47 =>
                [
                    'id' => 52,
                    'module_id' => 5,
                    'created_at' => '2018-10-06 03:56:22',
                    'updated_at' => '2018-12-10 09:29:18',
                    'deleted_at' => NULL,
                ],
            48 =>
                [
                    'id' => 53,
                    'module_id' => 5,
                    'created_at' => '2018-10-06 03:59:30',
                    'updated_at' => '2018-12-10 10:03:45',
                    'deleted_at' => NULL,
                ],
            49 =>
                [
                    'id' => 54,
                    'module_id' => 1,
                    'created_at' => '2018-10-06 04:08:24',
                    'updated_at' => '2018-10-06 04:08:24',
                    'deleted_at' => NULL,
                ],
            50 =>
                [
                    'id' => 55,
                    'module_id' => 5,
                    'created_at' => '2018-10-06 04:18:37',
                    'updated_at' => '2018-12-10 10:14:04',
                    'deleted_at' => NULL,
                ],
            51 =>
                [
                    'id' => 56,
                    'module_id' => 5,
                    'created_at' => '2018-10-06 04:39:39',
                    'updated_at' => '2018-12-10 10:37:31',
                    'deleted_at' => NULL,
                ],
            52 =>
                [
                    'id' => 57,
                    'module_id' => 6,
                    'created_at' => '2018-10-06 05:05:09',
                    'updated_at' => '2018-10-06 05:05:09',
                    'deleted_at' => NULL,
                ],
            53 =>
                [
                    'id' => 58,
                    'module_id' => 6,
                    'created_at' => '2018-10-06 05:05:21',
                    'updated_at' => '2018-10-06 05:05:21',
                    'deleted_at' => NULL,
                ],
            54 =>
                [
                    'id' => 59,
                    'module_id' => 5,
                    'created_at' => '2018-10-10 01:11:06',
                    'updated_at' => '2018-12-10 10:41:37',
                    'deleted_at' => NULL,
                ],
            55 =>
                [
                    'id' => 60,
                    'module_id' => 8,
                    'created_at' => '2018-10-10 01:13:47',
                    'updated_at' => '2018-10-10 01:13:47',
                    'deleted_at' => NULL,
                ],
            56 =>
                [
                    'id' => 61,
                    'module_id' => 31,
                    'created_at' => '2018-10-10 01:21:11',
                    'updated_at' => '2018-11-25 08:28:06',
                    'deleted_at' => NULL,
                ],
            57 =>
                [
                    'id' => 62,
                    'module_id' => 1,
                    'created_at' => '2018-10-10 05:44:21',
                    'updated_at' => '2018-12-11 13:04:25',
                    'deleted_at' => NULL,
                ],
            58 =>
                [
                    'id' => 63,
                    'module_id' => 1,
                    'created_at' => '2018-10-10 05:47:50',
                    'updated_at' => '2018-12-11 13:56:01',
                    'deleted_at' => NULL,
                ],
            59 =>
                [
                    'id' => 64,
                    'module_id' => 1,
                    'created_at' => '2018-10-13 03:22:25',
                    'updated_at' => '2018-12-12 07:38:51',
                    'deleted_at' => NULL,
                ],
            60 =>
                [
                    'id' => 65,
                    'module_id' => 5,
                    'created_at' => '2018-10-13 07:29:46',
                    'updated_at' => '2018-10-13 07:30:04',
                    'deleted_at' => '2018-10-13 07:30:04',
                ],
            61 =>
                [
                    'id' => 66,
                    'module_id' => 5,
                    'created_at' => '2018-10-13 07:35:25',
                    'updated_at' => '2018-10-13 07:35:25',
                    'deleted_at' => NULL,
                ],
            62 =>
                [
                    'id' => 67,
                    'module_id' => 1,
                    'created_at' => '2018-10-14 04:31:24',
                    'updated_at' => '2018-10-14 04:31:24',
                    'deleted_at' => NULL,
                ],
            63 =>
                [
                    'id' => 68,
                    'module_id' => 33,
                    'created_at' => '2018-10-17 06:51:39',
                    'updated_at' => '2018-10-20 06:54:31',
                    'deleted_at' => NULL,
                ],
            64 =>
                [
                    'id' => 69,
                    'module_id' => 5,
                    'created_at' => '2018-10-21 08:19:04',
                    'updated_at' => '2018-10-21 08:19:04',
                    'deleted_at' => NULL,
                ],
            65 =>
                [
                    'id' => 70,
                    'module_id' => 1,
                    'created_at' => '2018-10-21 08:23:44',
                    'updated_at' => '2018-10-22 05:02:26',
                    'deleted_at' => NULL,
                ],
            66 =>
                [
                    'id' => 71,
                    'module_id' => 1,
                    'created_at' => '2018-10-31 09:47:12',
                    'updated_at' => '2018-12-12 08:12:56',
                    'deleted_at' => NULL,
                ],
            67 =>
                [
                    'id' => 72,
                    'module_id' => 1,
                    'created_at' => '2018-11-25 06:55:00',
                    'updated_at' => '2018-12-12 08:26:55',
                    'deleted_at' => NULL,
                ],
            68 =>
                [
                    'id' => 73,
                    'module_id' => 1,
                    'created_at' => '2018-12-08 18:24:36',
                    'updated_at' => '2018-12-12 08:56:37',
                    'deleted_at' => NULL,
                ],
            69 =>
                [
                    'id' => 74,
                    'module_id' => 1,
                    'created_at' => '2018-12-12 10:48:31',
                    'updated_at' => '2018-12-12 10:48:31',
                    'deleted_at' => NULL,
                ],
            70 =>
                [
                    'id' => 75,
                    'module_id' => 1,
                    'created_at' => '2018-12-12 11:10:41',
                    'updated_at' => '2018-12-12 11:10:41',
                    'deleted_at' => NULL,
                ],
            71 =>
                [
                    'id' => 76,
                    'module_id' => 1,
                    'created_at' => '2018-12-12 11:22:52',
                    'updated_at' => '2018-12-12 11:22:52',
                    'deleted_at' => NULL,
                ],
            72 =>
                [
                    'id' => 77,
                    'module_id' => 1,
                    'created_at' => '2018-12-12 11:38:28',
                    'updated_at' => '2018-12-12 11:38:28',
                    'deleted_at' => NULL,
                ],
            73 =>
                [
                    'id' => 78,
                    'module_id' => 1,
                    'created_at' => '2018-12-12 12:30:10',
                    'updated_at' => '2018-12-12 12:30:10',
                    'deleted_at' => NULL,
                ],
            74 =>
                [
                    'id' => 79,
                    'module_id' => 1,
                    'created_at' => '2018-12-12 12:37:28',
                    'updated_at' => '2018-12-12 12:37:28',
                    'deleted_at' => NULL,
                ],
            75 =>
                [
                    'id' => 80,
                    'module_id' => 1,
                    'created_at' => '2018-12-16 11:42:56',
                    'updated_at' => '2018-12-16 11:42:56',
                    'deleted_at' => NULL,
                ],
            76 =>
                [
                    'id' => 81,
                    'module_id' => 9,
                    'created_at' => '2018-12-22 11:38:08',
                    'updated_at' => '2018-12-23 07:44:20',
                    'deleted_at' => NULL,
                ],
            77 =>
                [
                    'id' => 82,
                    'module_id' => 40,
                    'created_at' => '2018-12-25 09:18:03',
                    'updated_at' => '2018-12-25 09:18:03',
                    'deleted_at' => NULL,
                ],
            78 =>
                [
                    'id' => 83,
                    'module_id' => 39,
                    'created_at' => '2018-12-25 09:33:20',
                    'updated_at' => '2018-12-25 09:33:20',
                    'deleted_at' => NULL,
                ],
            79 =>
                [
                    'id' => 84,
                    'module_id' => 28,
                    'created_at' => '2018-12-29 11:04:54',
                    'updated_at' => '2018-12-29 11:04:54',
                    'deleted_at' => NULL,
                ],
            80 =>
                [
                    'id' => 85,
                    'module_id' => 28,
                    'created_at' => '2018-12-29 11:08:53',
                    'updated_at' => '2018-12-29 11:08:53',
                    'deleted_at' => NULL,
                ],
            81 =>
                [
                    'id' => 86,
                    'module_id' => 28,
                    'created_at' => '2018-12-29 11:09:51',
                    'updated_at' => '2018-12-29 11:09:51',
                    'deleted_at' => NULL,
                ],
            82 =>
                [
                    'id' => 87,
                    'module_id' => 28,
                    'created_at' => '2018-12-29 11:17:09',
                    'updated_at' => '2018-12-29 11:17:09',
                    'deleted_at' => NULL,
                ],
            83 =>
                [
                    'id' => 88,
                    'module_id' => 28,
                    'created_at' => '2018-12-29 11:20:15',
                    'updated_at' => '2018-12-29 11:20:15',
                    'deleted_at' => NULL,
                ],
            84 =>
                [
                    'id' => 89,
                    'module_id' => 28,
                    'created_at' => '2018-12-29 11:21:30',
                    'updated_at' => '2018-12-29 11:21:30',
                    'deleted_at' => NULL,
                ],
            85 =>
                [
                    'id' => 90,
                    'module_id' => 41,
                    'created_at' => '2018-12-30 07:16:23',
                    'updated_at' => '2018-12-30 07:16:23',
                    'deleted_at' => NULL,
                ],
            86 =>
                [
                    'id' => 91,
                    'module_id' => 1,
                    'created_at' => '2018-12-30 09:43:58',
                    'updated_at' => '2018-12-30 09:43:58',
                    'deleted_at' => NULL,
                ],
            87 =>
                [
                    'id' => 92,
                    'module_id' => 17,
                    'created_at' => '2018-12-30 10:19:55',
                    'updated_at' => '2018-12-31 08:31:33',
                    'deleted_at' => NULL,
                ],
            88 =>
                [
                    'id' => 93,
                    'module_id' => 1,
                    'created_at' => '2018-12-30 10:52:11',
                    'updated_at' => '2018-12-30 10:52:11',
                    'deleted_at' => NULL,
                ],
            89 =>
                [
                    'id' => 94,
                    'module_id' => 28,
                    'created_at' => '2018-12-30 11:51:50',
                    'updated_at' => '2018-12-30 11:51:50',
                    'deleted_at' => NULL,
                ],
            90 =>
                [
                    'id' => 95,
                    'module_id' => 28,
                    'created_at' => '2018-12-30 11:52:43',
                    'updated_at' => '2018-12-30 11:52:43',
                    'deleted_at' => NULL,
                ],
            91 =>
                [
                    'id' => 96,
                    'module_id' => 28,
                    'created_at' => '2018-12-30 11:53:30',
                    'updated_at' => '2018-12-30 11:53:30',
                    'deleted_at' => NULL,
                ],
            92 =>
                [
                    'id' => 97,
                    'module_id' => 28,
                    'created_at' => '2018-12-30 11:54:23',
                    'updated_at' => '2018-12-30 11:54:23',
                    'deleted_at' => NULL,
                ],
            93 =>
                [
                    'id' => 98,
                    'module_id' => 1,
                    'created_at' => '2018-12-31 08:04:14',
                    'updated_at' => '2018-12-31 08:04:14',
                    'deleted_at' => NULL,
                ],
            94 =>
                [
                    'id' => 99,
                    'module_id' => 42,
                    'created_at' => '2018-12-31 08:23:34',
                    'updated_at' => '2018-12-31 08:23:34',
                    'deleted_at' => NULL,
                ],
            95 =>
                [
                    'id' => 100,
                    'module_id' => 17,
                    'created_at' => '2018-12-31 08:26:55',
                    'updated_at' => '2018-12-31 08:26:55',
                    'deleted_at' => NULL,
                ],
            96 =>
                [
                    'id' => 101,
                    'module_id' => 1,
                    'created_at' => '2018-12-31 09:00:03',
                    'updated_at' => '2018-12-31 09:00:03',
                    'deleted_at' => NULL,
                ],
            97 =>
                [
                    'id' => 102,
                    'module_id' => 42,
                    'created_at' => '2018-12-31 09:10:35',
                    'updated_at' => '2018-12-31 09:10:35',
                    'deleted_at' => NULL,
                ],
            98 =>
                [
                    'id' => 103,
                    'module_id' => 17,
                    'created_at' => '2018-12-31 10:14:46',
                    'updated_at' => '2018-12-31 10:14:46',
                    'deleted_at' => NULL,
                ],
            99 =>
                [
                    'id' => 104,
                    'module_id' => 17,
                    'created_at' => '2018-12-31 11:02:08',
                    'updated_at' => '2018-12-31 11:02:08',
                    'deleted_at' => NULL,
                ],
            100 =>
                [
                    'id' => 105,
                    'module_id' => 1,
                    'created_at' => '2018-12-31 11:19:35',
                    'updated_at' => '2018-12-31 11:19:35',
                    'deleted_at' => NULL,
                ],
            101 =>
                [
                    'id' => 106,
                    'module_id' => 1,
                    'created_at' => '2019-01-06 07:36:13',
                    'updated_at' => '2019-01-06 07:36:13',
                    'deleted_at' => NULL,
                ],
            102 =>
                [
                    'id' => 107,
                    'module_id' => 1,
                    'created_at' => '2019-01-06 07:55:29',
                    'updated_at' => '2019-01-06 07:55:29',
                    'deleted_at' => NULL,
                ],
            103 =>
                [
                    'id' => 108,
                    'module_id' => 1,
                    'created_at' => '2019-01-06 08:51:59',
                    'updated_at' => '2019-01-06 08:51:59',
                    'deleted_at' => NULL,
                ],
            104 =>
                [
                    'id' => 109,
                    'module_id' => 17,
                    'created_at' => '2019-01-06 09:17:52',
                    'updated_at' => '2019-01-06 09:17:52',
                    'deleted_at' => NULL,
                ],
            105 =>
                [
                    'id' => 110,
                    'module_id' => 1,
                    'created_at' => '2019-01-08 08:22:21',
                    'updated_at' => '2019-01-08 08:22:21',
                    'deleted_at' => NULL,
                ],
            106 =>
                [
                    'id' => 111,
                    'module_id' => 17,
                    'created_at' => '2019-01-08 09:06:55',
                    'updated_at' => '2019-01-08 09:06:55',
                    'deleted_at' => NULL,
                ],
            107 =>
                [
                    'id' => 112,
                    'module_id' => 17,
                    'created_at' => '2019-01-08 09:17:50',
                    'updated_at' => '2019-01-08 09:17:50',
                    'deleted_at' => NULL,
                ],
            108 =>
                [
                    'id' => 113,
                    'module_id' => 17,
                    'created_at' => '2019-01-08 09:42:49',
                    'updated_at' => '2019-01-08 09:42:49',
                    'deleted_at' => NULL,
                ],
            109 =>
                [
                    'id' => 114,
                    'module_id' => 17,
                    'created_at' => '2019-01-08 09:53:22',
                    'updated_at' => '2019-01-08 09:53:22',
                    'deleted_at' => NULL,
                ],
            110 =>
                [
                    'id' => 115,
                    'module_id' => 41,
                    'created_at' => '2019-01-08 12:01:34',
                    'updated_at' => '2019-01-08 12:01:34',
                    'deleted_at' => NULL,
                ],
            111 =>
                [
                    'id' => 116,
                    'module_id' => 1,
                    'created_at' => '2019-01-08 13:06:28',
                    'updated_at' => '2019-01-08 13:06:28',
                    'deleted_at' => NULL,
                ],
            112 =>
                [
                    'id' => 117,
                    'module_id' => 1,
                    'created_at' => '2019-01-08 13:19:51',
                    'updated_at' => '2019-01-08 13:19:51',
                    'deleted_at' => NULL,
                ],
            113 =>
                [
                    'id' => 118,
                    'module_id' => 1,
                    'created_at' => '2019-01-09 09:49:24',
                    'updated_at' => '2019-01-09 09:49:24',
                    'deleted_at' => NULL,
                ],
            114 =>
                [
                    'id' => 119,
                    'module_id' => 1,
                    'created_at' => '2019-01-12 11:20:23',
                    'updated_at' => '2019-01-12 11:20:23',
                    'deleted_at' => NULL,
                ],
            115 =>
                [
                    'id' => 120,
                    'module_id' => 43,
                    'created_at' => '2019-01-15 11:32:09',
                    'updated_at' => '2019-01-15 11:39:20',
                    'deleted_at' => '2019-01-15 11:39:20',
                ],
            116 =>
                [
                    'id' => 121,
                    'module_id' => 1,
                    'created_at' => '2019-01-20 11:49:19',
                    'updated_at' => '2019-01-20 11:49:19',
                    'deleted_at' => NULL,
                ],
            117 =>
                [
                    'id' => 122,
                    'module_id' => 44,
                    'created_at' => '2019-01-21 11:49:14',
                    'updated_at' => '2019-01-21 11:49:14',
                    'deleted_at' => NULL,
                ],
            118 =>
                [
                    'id' => 123,
                    'module_id' => 45,
                    'created_at' => '2019-01-22 08:24:03',
                    'updated_at' => '2019-01-22 08:24:03',
                    'deleted_at' => NULL,
                ],
            119 =>
                [
                    'id' => 124,
                    'module_id' => 46,
                    'created_at' => '2019-01-26 13:18:04',
                    'updated_at' => '2019-01-26 13:18:04',
                    'deleted_at' => NULL,
                ],
            120 =>
                [
                    'id' => 125,
                    'module_id' => 47,
                    'created_at' => '2019-01-28 11:22:13',
                    'updated_at' => '2019-01-28 11:22:13',
                    'deleted_at' => NULL,
                ],
        ]);
    }
}