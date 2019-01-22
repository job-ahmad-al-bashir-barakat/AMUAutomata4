<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'page_code' => 'home',
                'route' => 'home',
                'created_at' => '2017-08-23 09:20:56',
                'updated_at' => '2017-10-29 13:24:20',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'page_code' => 'about_us',
                'route' => 'about-us',
                'created_at' => '2017-08-31 09:34:17',
                'updated_at' => '2017-08-31 09:34:17',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'page_code' => 'university_message',
                'route' => 'university-message',
                'created_at' => '2017-10-14 08:58:05',
                'updated_at' => '2018-11-07 05:19:32',
                'deleted_at' => '2018-11-07 05:19:32',
            ),
            3 => 
            array (
                'id' => 4,
                'page_code' => 'university_in_glance',
                'route' => 'university-in-glance',
                'created_at' => '2017-10-14 08:59:01',
                'updated_at' => '2017-10-29 13:24:53',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'page_code' => 'university_council',
                'route' => 'university-council',
                'created_at' => '2017-10-14 09:03:13',
                'updated_at' => '2017-10-29 13:25:07',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'page_code' => 'trusted_council',
                'route' => 'trusted-council',
                'created_at' => '2017-10-14 09:04:01',
                'updated_at' => '2017-10-29 13:25:20',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'page_code' => 'tender',
                'route' => 'tender',
                'created_at' => '2017-10-14 09:05:24',
                'updated_at' => '2018-10-03 03:07:03',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'page_code' => 'location',
                'route' => 'location',
                'created_at' => '2017-10-14 09:06:10',
                'updated_at' => '2017-10-14 09:06:10',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'page_code' => 'location',
                'route' => 'location',
                'created_at' => '2017-10-14 09:06:12',
                'updated_at' => '2017-10-14 09:08:34',
                'deleted_at' => '2017-10-14 09:08:34',
            ),
            9 => 
            array (
                'id' => 10,
                'page_code' => 'university-departments',
                'route' => 'university-departments',
                'created_at' => '2017-10-14 09:06:46',
                'updated_at' => '2018-10-03 06:31:21',
                'deleted_at' => '2018-10-03 06:31:21',
            ),
            10 => 
            array (
                'id' => 11,
                'page_code' => 'degrees-infomatic',
                'route' => 'degrees-infomatic',
                'created_at' => '2017-10-14 09:16:05',
                'updated_at' => '2018-12-08 08:48:03',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'page_code' => 'courses',
                'route' => 'courses',
                'created_at' => '2017-10-14 09:16:26',
                'updated_at' => '2018-11-11 08:14:27',
                'deleted_at' => '2018-11-11 08:14:27',
            ),
            12 => 
            array (
                'id' => 13,
                'page_code' => 'study-plan-ite',
                'route' => 'study-plan-ite',
                'created_at' => '2017-10-14 09:17:00',
                'updated_at' => '2018-12-09 08:30:29',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'page_code' => 'message_and_goals',
                'route' => 'message-and-goals',
                'created_at' => '2017-10-14 09:20:17',
                'updated_at' => '2017-10-29 13:26:28',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'page_code' => 'instructors',
                'route' => 'instructors',
                'created_at' => '2017-10-14 09:20:40',
                'updated_at' => '2017-10-14 09:20:40',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'page_code' => 'labs',
                'route' => 'labs',
                'created_at' => '2017-10-14 09:21:01',
                'updated_at' => '2017-10-14 09:21:01',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'page_code' => 'contact_us',
                'route' => 'contact-us',
                'created_at' => '2017-10-14 09:25:07',
                'updated_at' => '2017-10-29 13:26:01',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'page_code' => 'news',
                'route' => 'news',
                'created_at' => '2017-10-14 09:25:21',
                'updated_at' => '2017-10-14 09:25:21',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'page_code' => 'gallery',
                'route' => 'gallery',
                'created_at' => '2017-10-14 09:25:39',
                'updated_at' => '2017-10-14 09:25:39',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'page_code' => 'admission_rules',
                'route' => 'admission-rules',
                'created_at' => '2017-10-14 09:47:09',
                'updated_at' => '2017-10-29 13:26:45',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'page_code' => 'admission_process',
                'route' => 'admission-process',
                'created_at' => '2017-10-14 09:47:59',
                'updated_at' => '2017-10-29 13:27:02',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'page_code' => 'fees',
                'route' => 'fees',
                'created_at' => '2017-10-14 09:48:22',
                'updated_at' => '2017-10-14 09:48:22',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'page_code' => 'scholarship',
                'route' => 'scholarship',
                'created_at' => '2017-10-14 09:48:43',
                'updated_at' => '2017-10-14 09:48:43',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'page_code' => 'university_calendar',
                'route' => 'university-calendar',
                'created_at' => '2017-10-14 09:49:43',
                'updated_at' => '2017-11-15 14:56:39',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'page_code' => 'courses_list',
                'route' => 'courses-list',
                'created_at' => '2017-10-14 09:50:13',
                'updated_at' => '2017-10-29 13:27:39',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'page_code' => 'exams',
                'route' => 'exams',
                'created_at' => '2017-10-14 09:50:34',
                'updated_at' => '2017-10-14 09:50:34',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'page_code' => 'person',
                'route' => 'person',
                'created_at' => '2017-11-15 12:10:31',
                'updated_at' => '2017-11-15 12:10:31',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 29,
                'page_code' => 'hierarchy',
                'route' => 'hierarchy',
                'created_at' => '2018-03-26 11:34:15',
                'updated_at' => '2018-03-26 11:34:15',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 30,
                'page_code' => 'ٍUniversity President',
                'route' => 'ٍUniversity President',
                'created_at' => '2018-07-16 01:07:20',
                'updated_at' => '2018-10-21 07:12:08',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 31,
                'page_code' => 'scientific_agreements',
                'route' => 'under_dev',
                'created_at' => '2018-07-23 14:17:32',
                'updated_at' => '2018-07-23 14:17:32',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 32,
                'page_code' => 'Courses',
                'route' => 'Courses',
                'created_at' => '2018-10-04 04:02:59',
                'updated_at' => '2018-11-11 08:09:36',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 33,
                'page_code' => 'info',
                'route' => 'info',
                'created_at' => '2018-10-06 03:49:47',
                'updated_at' => '2018-10-10 02:02:09',
                'deleted_at' => '2018-10-10 02:02:09',
            ),
            32 => 
            array (
                'id' => 34,
                'page_code' => 'Albramkeh',
                'route' => 'D-Albramkeh',
                'created_at' => '2018-10-08 02:03:01',
                'updated_at' => '2018-11-04 09:33:06',
                'deleted_at' => '2018-11-04 09:33:06',
            ),
            33 => 
            array (
                'id' => 35,
                'page_code' => 'Mazraa',
                'route' => 'Mazraa',
                'created_at' => '2018-10-08 02:04:58',
                'updated_at' => '2018-11-04 09:32:53',
                'deleted_at' => '2018-11-04 09:32:53',
            ),
            34 => 
            array (
                'id' => 36,
                'page_code' => 'Altal',
                'route' => 'Altal',
                'created_at' => '2018-10-08 02:06:35',
                'updated_at' => '2018-11-04 09:32:46',
                'deleted_at' => '2018-11-04 09:32:46',
            ),
            35 => 
            array (
                'id' => 37,
                'page_code' => 'Cornish',
                'route' => 'Cornish',
                'created_at' => '2018-10-08 02:09:51',
                'updated_at' => '2018-11-04 09:32:39',
                'deleted_at' => '2018-11-04 09:32:39',
            ),
            36 => 
            array (
                'id' => 38,
                'page_code' => 'Alsalibeh',
                'route' => 'Alsalibeh',
                'created_at' => '2018-10-08 02:11:04',
                'updated_at' => '2018-11-04 09:32:33',
                'deleted_at' => '2018-11-04 09:32:33',
            ),
            37 => 
            array (
                'id' => 39,
                'page_code' => 'lw_fac',
                'route' => 'lw_fac',
                'created_at' => '2018-10-31 09:32:58',
                'updated_at' => '2018-11-04 09:32:28',
                'deleted_at' => '2018-11-04 09:32:28',
            ),
            38 => 
            array (
                'id' => 40,
                'page_code' => 'Information-Dean',
                'route' => 'Information-Dean',
                'created_at' => '2018-11-07 05:22:08',
                'updated_at' => '2018-12-04 13:33:06',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 41,
                'page_code' => 'S-Research',
                'route' => 'S-Research',
                'created_at' => '2018-11-07 05:25:34',
                'updated_at' => '2018-11-07 05:25:34',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 42,
                'page_code' => 'C-Mess-ite',
                'route' => 'C-Mess-ite',
                'created_at' => '2018-11-11 08:05:39',
                'updated_at' => '2018-12-08 08:45:48',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 43,
                'page_code' => 'F-Members-information',
                'route' => 'F-Members-information',
                'created_at' => '2018-11-11 08:15:58',
                'updated_at' => '2018-12-08 08:47:02',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 44,
                'page_code' => 'Rights-Dean',
                'route' => 'Rights-Dean',
                'created_at' => '2018-12-04 13:34:43',
                'updated_at' => '2018-12-04 13:34:43',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 45,
                'page_code' => 'Contact-Us-ite',
                'route' => 'Contact-Us-ite',
                'created_at' => '2018-12-08 08:49:59',
                'updated_at' => '2018-12-08 08:50:42',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 46,
                'page_code' => 'law-dean',
                'route' => 'law-dean',
                'created_at' => '2018-12-09 09:08:24',
                'updated_at' => '2018-12-09 09:08:24',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 47,
                'page_code' => 'C-Mess-law',
                'route' => 'C-Mess-law',
                'created_at' => '2018-12-09 09:09:35',
                'updated_at' => '2018-12-09 09:09:35',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 48,
                'page_code' => 'Degrees-law',
                'route' => 'Degrees-law',
                'created_at' => '2018-12-09 09:11:07',
                'updated_at' => '2018-12-09 09:11:07',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 49,
                'page_code' => 'study-plan-law',
                'route' => 'study-plan-law',
                'created_at' => '2018-12-09 09:13:12',
                'updated_at' => '2018-12-09 09:13:12',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 50,
                'page_code' => 'f-members-law',
                'route' => 'f-members-law',
                'created_at' => '2018-12-09 09:15:09',
                'updated_at' => '2018-12-09 09:15:09',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 51,
                'page_code' => 'contact-us-law',
                'route' => 'contact-us-law',
                'created_at' => '2018-12-09 09:19:47',
                'updated_at' => '2018-12-09 09:19:47',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 52,
                'page_code' => 'Administrative Sciences-dean',
                'route' => 'Administrative Sciences-dean',
                'created_at' => '2018-12-09 12:20:56',
                'updated_at' => '2018-12-09 12:20:56',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 53,
                'page_code' => 'C-Mess-AS',
                'route' => 'C-Mess-AS',
                'created_at' => '2018-12-09 12:22:17',
                'updated_at' => '2018-12-09 12:22:17',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 54,
                'page_code' => 'Degrees-AS',
                'route' => 'Degrees-AS',
                'created_at' => '2018-12-09 12:23:03',
                'updated_at' => '2018-12-09 12:23:03',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 55,
                'page_code' => 'Study Plan-AS',
                'route' => 'Study Plan-AS',
                'created_at' => '2018-12-09 12:23:57',
                'updated_at' => '2018-12-09 12:23:57',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 56,
                'page_code' => 'F-Members-AS',
                'route' => 'F-Members-AS',
                'created_at' => '2018-12-09 12:25:03',
                'updated_at' => '2018-12-09 12:25:03',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 57,
                'page_code' => 'Contact-Us-AS',
                'route' => 'Contact-Us-AS',
                'created_at' => '2018-12-09 12:25:48',
                'updated_at' => '2018-12-09 12:25:48',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 58,
                'page_code' => 'International Relations and Diplomacy-dean',
                'route' => 'International Relations and Diplomacy-dean',
                'created_at' => '2018-12-09 13:23:54',
                'updated_at' => '2018-12-09 13:23:54',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 59,
                'page_code' => 'C-Mess-IRD',
                'route' => 'C-Mess-IRD',
                'created_at' => '2018-12-09 13:24:48',
                'updated_at' => '2018-12-09 13:24:48',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 60,
                'page_code' => 'Degrees-IRD',
                'route' => 'Degrees-IRD',
                'created_at' => '2018-12-09 13:25:43',
                'updated_at' => '2018-12-09 13:25:43',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 61,
                'page_code' => 'Study Plan-IRD',
                'route' => 'Study Plan-IRD',
                'created_at' => '2018-12-09 13:26:36',
                'updated_at' => '2018-12-09 13:26:36',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 62,
                'page_code' => 'F-Members-IRD',
                'route' => 'F-Members-IRD',
                'created_at' => '2018-12-09 13:28:02',
                'updated_at' => '2018-12-09 13:28:02',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 63,
                'page_code' => 'Contact-Us-IRD',
                'route' => 'Contact-Us-IRD',
                'created_at' => '2018-12-09 13:28:44',
                'updated_at' => '2018-12-09 13:28:44',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 64,
                'page_code' => 'Dentistry-Dean',
                'route' => 'Dentistry-Dean',
                'created_at' => '2018-12-09 13:40:51',
                'updated_at' => '2018-12-09 13:40:51',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 65,
                'page_code' => 'C-Mess- Dentistry',
                'route' => 'C-Mess- Dentistry',
                'created_at' => '2018-12-09 13:41:53',
                'updated_at' => '2018-12-09 13:41:53',
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 66,
                'page_code' => 'Degrees- Dentistry',
                'route' => 'Degrees- Dentistry',
                'created_at' => '2018-12-09 13:42:32',
                'updated_at' => '2018-12-09 13:42:32',
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 67,
                'page_code' => 'Study Plan- Dentistry',
                'route' => 'Study Plan- Dentistry',
                'created_at' => '2018-12-09 13:43:14',
                'updated_at' => '2018-12-09 13:43:14',
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 68,
                'page_code' => 'F-Members- Dentistry',
                'route' => 'F-Members- Dentistry',
                'created_at' => '2018-12-09 13:44:16',
                'updated_at' => '2018-12-10 07:54:33',
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 69,
                'page_code' => 'Contact-Us- Dentistry',
                'route' => 'Contact-Us- Dentistry',
                'created_at' => '2018-12-09 13:45:19',
                'updated_at' => '2018-12-09 13:45:19',
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 70,
                'page_code' => 'Medicine-Dean',
                'route' => 'Medicine-Dean',
                'created_at' => '2018-12-10 07:37:06',
                'updated_at' => '2018-12-10 07:37:06',
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 71,
                'page_code' => 'C-Mess- Medicine',
                'route' => 'C-Mess- Medicine',
                'created_at' => '2018-12-10 07:37:55',
                'updated_at' => '2018-12-10 07:37:55',
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 72,
                'page_code' => 'Degrees- Medicine',
                'route' => 'Degrees- Medicine',
                'created_at' => '2018-12-10 07:38:46',
                'updated_at' => '2018-12-10 07:38:46',
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 73,
                'page_code' => 'Study-Plan- Medicine',
                'route' => 'Study-Plan- Medicine',
                'created_at' => '2018-12-10 07:53:44',
                'updated_at' => '2018-12-10 07:53:44',
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 74,
                'page_code' => 'F-Members- Medicine',
                'route' => 'F-Members- Medicine',
                'created_at' => '2018-12-10 07:55:48',
                'updated_at' => '2018-12-10 07:55:48',
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 75,
                'page_code' => 'Contact-Us- Medicine',
                'route' => 'Contact-Us- Medicine',
                'created_at' => '2018-12-10 07:56:30',
                'updated_at' => '2018-12-10 07:56:30',
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 76,
                'page_code' => 'Pharmacy-Dean',
                'route' => 'Pharmacy-Dean',
                'created_at' => '2018-12-10 08:12:39',
                'updated_at' => '2018-12-10 08:12:39',
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 77,
                'page_code' => 'C-Mess- Pharmacy',
                'route' => 'C-Mess- Pharmacy',
                'created_at' => '2018-12-10 08:13:27',
                'updated_at' => '2018-12-10 08:13:27',
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 78,
                'page_code' => 'Degrees- Pharmacy',
                'route' => 'Degrees- Pharmacy',
                'created_at' => '2018-12-10 08:14:05',
                'updated_at' => '2018-12-10 08:14:05',
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 79,
                'page_code' => 'Study-Plan- Pharmacy',
                'route' => 'Study-Plan- Pharmacy',
                'created_at' => '2018-12-10 08:14:54',
                'updated_at' => '2018-12-10 08:14:54',
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 80,
                'page_code' => 'F-Members Pharmacy',
                'route' => 'F-Members Pharmacy',
                'created_at' => '2018-12-10 08:16:31',
                'updated_at' => '2018-12-10 08:16:31',
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 81,
                'page_code' => 'Contact-Us- Pharmacy',
                'route' => 'Contact-Us- Pharmacy',
                'created_at' => '2018-12-10 08:17:24',
                'updated_at' => '2018-12-10 08:17:24',
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 82,
                'page_code' => 'council_ite',
                'route' => 'council_ite',
                'created_at' => '2018-12-19 13:03:42',
                'updated_at' => '2018-12-19 13:03:42',
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 83,
                'page_code' => 'council_law',
                'route' => 'council_law',
                'created_at' => '2018-12-19 13:04:18',
                'updated_at' => '2018-12-19 13:04:18',
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 84,
                'page_code' => 'council_AS',
                'route' => 'council_AS',
                'created_at' => '2018-12-19 13:04:54',
                'updated_at' => '2018-12-19 13:04:54',
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 85,
                'page_code' => 'council_IRD',
                'route' => 'council_IRD',
                'created_at' => '2018-12-19 13:05:39',
                'updated_at' => '2018-12-19 13:05:39',
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 86,
                'page_code' => 'council_ Medicine',
                'route' => 'council_ Medicine',
                'created_at' => '2018-12-19 13:06:42',
                'updated_at' => '2018-12-19 13:06:42',
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 87,
                'page_code' => 'council_ Pharmacy',
                'route' => 'council_ Pharmacy',
                'created_at' => '2018-12-19 13:08:01',
                'updated_at' => '2018-12-19 13:08:01',
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 88,
                'page_code' => 'council_ dentistry',
                'route' => 'council_ dentistry',
                'created_at' => '2018-12-19 13:08:54',
                'updated_at' => '2018-12-19 13:08:54',
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 89,
                'page_code' => 'Dentistry-Dean-la',
                'route' => 'Dentistry-Dean-la',
                'created_at' => '2018-12-29 13:22:13',
                'updated_at' => '2018-12-29 13:22:13',
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 90,
                'page_code' => 'C-Mess- Dentistry-la',
                'route' => 'C-Mess- Dentistry-la',
                'created_at' => '2018-12-29 13:23:48',
                'updated_at' => '2018-12-29 13:23:48',
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 91,
                'page_code' => 'Degrees- Dentistry-la',
                'route' => 'Degrees- Dentistry-la',
                'created_at' => '2018-12-29 13:24:43',
                'updated_at' => '2018-12-29 13:24:43',
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 92,
                'page_code' => 'Study Plan- Dentistry-la',
                'route' => 'Study Plan- Dentistry-la',
                'created_at' => '2018-12-29 13:25:48',
                'updated_at' => '2018-12-29 13:25:48',
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 93,
                'page_code' => 'F-Members- Dentistry-la',
                'route' => 'F-Members- Dentistry-la',
                'created_at' => '2018-12-29 13:28:20',
                'updated_at' => '2018-12-29 13:28:20',
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 94,
                'page_code' => 'Contact-Us- Dentistry-la',
                'route' => 'Contact-Us- Dentistry-la',
                'created_at' => '2018-12-29 13:29:18',
                'updated_at' => '2018-12-29 13:29:18',
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 95,
                'page_code' => 'council_ dentistry-la',
                'route' => 'council_ dentistry-la',
                'created_at' => '2018-12-29 13:30:33',
                'updated_at' => '2018-12-29 13:30:33',
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 96,
                'page_code' => 'Pharmacy-Dean-la',
                'route' => 'Pharmacy-Dean-la',
                'created_at' => '2018-12-29 13:41:48',
                'updated_at' => '2018-12-29 13:41:48',
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 97,
                'page_code' => 'C-Mess- Pharmacy-la',
                'route' => 'C-Mess- Pharmacy-la',
                'created_at' => '2018-12-29 13:43:13',
                'updated_at' => '2018-12-29 13:43:13',
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 98,
                'page_code' => 'Degrees- Pharmacy-la',
                'route' => 'Degrees- Pharmacy-la',
                'created_at' => '2018-12-29 13:43:58',
                'updated_at' => '2018-12-29 13:43:58',
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 99,
                'page_code' => 'Study-Plan- Pharmacy-la',
                'route' => 'Study-Plan- Pharmacy-la',
                'created_at' => '2018-12-29 13:45:24',
                'updated_at' => '2018-12-29 13:45:24',
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 100,
                'page_code' => 'F-Members Pharmacy-la',
                'route' => 'F-Members Pharmacy-la',
                'created_at' => '2018-12-29 13:46:18',
                'updated_at' => '2018-12-29 13:46:18',
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 101,
                'page_code' => 'Contact-Us- Pharmacy-la',
                'route' => 'Contact-Us- Pharmacy-la',
                'created_at' => '2018-12-29 13:47:09',
                'updated_at' => '2018-12-29 13:47:09',
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 102,
                'page_code' => 'council_ Pharmacy_la',
                'route' => 'council_ Pharmacy_la',
                'created_at' => '2018-12-29 13:48:43',
                'updated_at' => '2018-12-29 13:48:43',
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 103,
                'page_code' => 'Administrative Sciences-dean-la',
                'route' => 'Administrative Sciences-dean-la',
                'created_at' => '2018-12-30 07:23:29',
                'updated_at' => '2018-12-30 07:23:29',
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 104,
                'page_code' => 'C-Mess-AS-la',
                'route' => 'C-Mess-AS-la',
                'created_at' => '2018-12-30 07:38:14',
                'updated_at' => '2018-12-30 07:38:14',
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 105,
                'page_code' => 'Degrees-AS-la',
                'route' => 'Degrees-AS-la',
                'created_at' => '2018-12-30 07:38:51',
                'updated_at' => '2018-12-30 07:38:51',
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 106,
                'page_code' => 'Study Plan-AS-la',
                'route' => 'Study Plan-AS-la',
                'created_at' => '2018-12-30 07:39:38',
                'updated_at' => '2018-12-30 07:39:38',
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 107,
                'page_code' => 'F-Members-AS-la',
                'route' => 'F-Members-AS-la',
                'created_at' => '2018-12-30 07:40:49',
                'updated_at' => '2018-12-30 07:40:49',
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 108,
                'page_code' => 'Contact-Us-AS-la',
                'route' => 'Contact-Us-AS-la',
                'created_at' => '2018-12-30 07:41:38',
                'updated_at' => '2018-12-30 07:41:38',
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 109,
                'page_code' => 'council_AS-la',
                'route' => 'council_AS-la',
                'created_at' => '2018-12-30 07:42:20',
                'updated_at' => '2018-12-30 07:42:20',
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 110,
                'page_code' => 'law-dean-la',
                'route' => 'law-dean-la',
                'created_at' => '2018-12-30 07:49:23',
                'updated_at' => '2018-12-30 07:49:23',
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 111,
                'page_code' => 'C-Mess-law-la',
                'route' => 'C-Mess-law-la',
                'created_at' => '2018-12-30 07:50:12',
                'updated_at' => '2018-12-30 07:50:12',
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 112,
                'page_code' => 'Degrees-law-la',
                'route' => 'Degrees-law-la',
                'created_at' => '2018-12-30 07:50:48',
                'updated_at' => '2018-12-30 07:50:48',
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 113,
                'page_code' => 'study-plan-law-la',
                'route' => 'study-plan-law-la',
                'created_at' => '2018-12-30 07:51:32',
                'updated_at' => '2018-12-30 07:51:32',
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 114,
                'page_code' => 'f-members-law-la',
                'route' => 'f-members-law-la',
                'created_at' => '2018-12-30 07:52:22',
                'updated_at' => '2018-12-30 07:52:22',
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 115,
                'page_code' => 'contact-us-law-la',
                'route' => 'contact-us-law-la',
                'created_at' => '2018-12-30 07:53:16',
                'updated_at' => '2018-12-30 07:53:16',
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 116,
                'page_code' => 'council_law-la',
                'route' => 'council_law-la',
                'created_at' => '2018-12-30 07:54:08',
                'updated_at' => '2018-12-30 07:54:08',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}