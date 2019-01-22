<?php

use Illuminate\Database\Seeder;

class BlockDetailTextLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('block_detail_text_langs')->delete();
        
        \DB::table('block_detail_text_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'block_detail_id' => 1,
                'lang_id' => 1,
                'text' => 'Sed gravida, ligula eget aliquam elementum, justo nisl mattis neque, in molestie ipsum dolor eu justo. Duis nec aliquam nulla. Sed interdum orci non mi porttitor, a dapibus ante varius.',
                'created_at' => '2017-09-10 06:58:35',
                'updated_at' => '2017-09-10 06:58:35',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'block_detail_id' => 1,
                'lang_id' => 2,
            'text' => 'أولاً: لوحة التحكم(خاصة بالشركة الصانعة للموقع الالكتروني) ليس لدينا سماحية للدخول اليها ثانيا: أدوات شاملة: ويتضمن مايلي: •	اللغات: هنا يتم إضافة اللغة التي يدعمها الموقع وبالنسبة للموقع الخاص بالجامعة لدينا قمنا باضافة لغتين العربية واللغة الانكليزية',
                'created_at' => '2017-09-10 06:58:35',
                'updated_at' => '2018-11-04 05:50:00',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'block_detail_id' => 2,
                'lang_id' => 1,
                'text' => 'Sed gravida, ligula eget aliquam elementum, justo nisl mattis neque, in molestie ipsum dolor eu justo. Duis nec aliquam nulla. Sed interdum orci non mi porttitor, a dapibus ante varius',
                'created_at' => '2017-09-10 06:59:38',
                'updated_at' => '2017-09-10 06:59:38',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'block_detail_id' => 2,
                'lang_id' => 2,
                'text' => 'Sed gravida, ligula eget aliquam elementum, justo nisl mattis neque, in molestie ipsum dolor eu justo. Duis nec aliquam nulla. Sed interdum orci non mi porttitor, a dapibus ante varius',
                'created_at' => '2017-09-10 06:59:38',
                'updated_at' => '2017-09-10 06:59:38',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'block_detail_id' => 3,
                'lang_id' => 1,
                'text' => 'Sed gravida, ligula eget aliquam elementum, justo nisl mattis neque, in molestie ipsum dolor eu justo. Duis nec aliquam nulla. Sed interdum orci non mi porttitor, a dapibus ante varius.',
                'created_at' => '2017-09-10 07:00:19',
                'updated_at' => '2017-09-10 07:00:19',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'block_detail_id' => 3,
                'lang_id' => 2,
                'text' => 'Sed gravida, ligula eget aliquam elementum, justo nisl mattis neque, in molestie ipsum dolor eu justo. Duis nec aliquam nulla. Sed interdum orci non mi porttitor, a dapibus ante varius.',
                'created_at' => '2017-09-10 07:00:19',
                'updated_at' => '2017-09-10 07:00:19',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'block_detail_id' => 4,
                'lang_id' => 1,
                'text' => 'Test',
                'created_at' => '2018-08-03 10:37:40',
                'updated_at' => '2018-08-03 10:38:59',
                'deleted_at' => '2018-08-03 10:38:59',
            ),
            7 => 
            array (
                'id' => 8,
                'block_detail_id' => 4,
                'lang_id' => 2,
                'text' => 'تجريبي',
                'created_at' => '2018-08-03 10:37:40',
                'updated_at' => '2018-08-03 10:38:59',
                'deleted_at' => '2018-08-03 10:38:59',
            ),
            8 => 
            array (
                'id' => 9,
                'block_detail_id' => 5,
                'lang_id' => 1,
                'text' => 'Three Departments',
                'created_at' => '2018-10-03 05:31:19',
                'updated_at' => '2018-10-03 05:31:19',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'block_detail_id' => 5,
                'lang_id' => 2,
                'text' => 'هندسة البرمجيات',
                'created_at' => '2018-10-03 05:31:19',
                'updated_at' => '2018-10-03 05:31:19',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'block_detail_id' => 6,
                'lang_id' => 1,
                'text' => 'Faculty Of Medicine',
                'created_at' => '2018-10-03 05:32:10',
                'updated_at' => '2018-10-03 05:32:10',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'block_detail_id' => 6,
                'lang_id' => 2,
                'text' => 'كلية الطب البشري',
                'created_at' => '2018-10-03 05:32:10',
                'updated_at' => '2018-10-03 05:32:10',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'block_detail_id' => 7,
                'lang_id' => 1,
                'text' => 'Damascuse - Bramka',
                'created_at' => '2018-10-06 05:02:06',
                'updated_at' => '2018-11-06 05:59:30',
                'deleted_at' => '2018-11-06 05:59:30',
            ),
            13 => 
            array (
                'id' => 14,
                'block_detail_id' => 7,
                'lang_id' => 2,
                'text' => 'دمشق - برامكة جانب ملعب تشرين',
                'created_at' => '2018-10-06 05:02:06',
                'updated_at' => '2018-11-06 05:59:30',
                'deleted_at' => '2018-11-06 05:59:30',
            ),
            14 => 
            array (
                'id' => 15,
                'block_detail_id' => 8,
                'lang_id' => 1,
                'text' => '-',
                'created_at' => '2018-10-06 05:02:57',
                'updated_at' => '2018-11-11 06:18:39',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'block_detail_id' => 8,
                'lang_id' => 2,
                'text' => 'تسعى كلية الحقوق في جامعة الشام الخاصة على تحقيق رسالتها في خدمة المجتمع, وتنمية الوعي الفكري والقانوني لدى ابنائها , كما تسعى إلى إعداد كفاءات ذات دور ريادي وفعال, والارتقاء بالأداء إلى المستويات القياسية, من حيث السلوك المهني والأخلاقي وفقا لمعايير الجودة والاعتمادية الوطنية والعالمية',
                'created_at' => '2018-10-06 05:02:57',
                'updated_at' => '2018-11-11 06:19:41',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'block_detail_id' => 9,
                'lang_id' => 1,
                'text' => '-',
                'created_at' => '2018-10-06 05:04:17',
                'updated_at' => '2018-11-11 06:24:15',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'block_detail_id' => 9,
                'lang_id' => 2,
                'text' => 'تسعى كلية العلاقات الدولية والدبلوماسية إلى بناء شخصية الطالب, وإعداد وتأهيل كفاءات علمية متميزة, قادر على القيام بدور فاعل في المجالين السياسي والدبلوماسي, بحيث تشكل رديفا لمراكز اتخاذ القرار على الصعيدين الوطني والدولي',
                'created_at' => '2018-10-06 05:04:17',
                'updated_at' => '2018-11-11 06:27:50',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'block_detail_id' => 10,
                'lang_id' => 1,
                'text' => '-',
                'created_at' => '2018-10-08 01:31:12',
                'updated_at' => '2018-11-11 06:31:07',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'block_detail_id' => 10,
                'lang_id' => 2,
                'text' => 'تسعى كلية العلوم الإدارية على تحقيق رسالتها من خلال تأهيل طلابها وإكسابهم العلوم المعرفية الحديثة من خلال اعتماد طرائق التفكير والتحليل والتركيب والمبادرة والتعليم التفاعلي في علوم الإدارة الحديثة لمواجهة التحديات التي تعترضهم في هذا المجال',
                'created_at' => '2018-10-08 01:31:12',
                'updated_at' => '2018-11-11 06:31:07',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'block_detail_id' => 11,
                'lang_id' => 1,
                'text' => 'Damascuse - Mazraa',
                'created_at' => '2018-10-08 01:44:58',
                'updated_at' => '2018-11-06 05:59:23',
                'deleted_at' => '2018-11-06 05:59:23',
            ),
            21 => 
            array (
                'id' => 22,
                'block_detail_id' => 11,
                'lang_id' => 2,
                'text' => 'دمشق - المزرعة',
                'created_at' => '2018-10-08 01:44:58',
                'updated_at' => '2018-11-06 05:59:23',
                'deleted_at' => '2018-11-06 05:59:23',
            ),
            22 => 
            array (
                'id' => 23,
                'block_detail_id' => 12,
                'lang_id' => 1,
                'text' => 'Damascuse - Mazraa',
                'created_at' => '2018-10-08 01:45:54',
                'updated_at' => '2018-11-06 05:59:19',
                'deleted_at' => '2018-11-06 05:59:19',
            ),
            23 => 
            array (
                'id' => 24,
                'block_detail_id' => 12,
                'lang_id' => 2,
                'text' => 'دمشق - المزرعة',
                'created_at' => '2018-10-08 01:45:54',
                'updated_at' => '2018-11-06 05:59:19',
                'deleted_at' => '2018-11-06 05:59:19',
            ),
            24 => 
            array (
                'id' => 25,
                'block_detail_id' => 13,
                'lang_id' => 1,
                'text' => 'Rif Demashq - Altal',
                'created_at' => '2018-10-08 01:46:30',
                'updated_at' => '2018-11-06 05:59:15',
                'deleted_at' => '2018-11-06 05:59:15',
            ),
            25 => 
            array (
                'id' => 26,
                'block_detail_id' => 13,
                'lang_id' => 2,
                'text' => 'ريف دمشق - التل',
                'created_at' => '2018-10-08 01:46:30',
                'updated_at' => '2018-11-06 05:59:15',
                'deleted_at' => '2018-11-06 05:59:15',
            ),
            26 => 
            array (
                'id' => 27,
                'block_detail_id' => 14,
                'lang_id' => 1,
                'text' => '.',
                'created_at' => '2018-10-14 09:17:24',
                'updated_at' => '2018-10-14 09:17:44',
                'deleted_at' => '2018-10-14 09:17:44',
            ),
            27 => 
            array (
                'id' => 28,
                'block_detail_id' => 14,
                'lang_id' => 2,
                'text' => '.',
                'created_at' => '2018-10-14 09:17:24',
                'updated_at' => '2018-10-14 09:17:44',
                'deleted_at' => '2018-10-14 09:17:44',
            ),
            28 => 
            array (
                'id' => 29,
                'block_detail_id' => 15,
                'lang_id' => 1,
                'text' => '-',
                'created_at' => '2018-11-06 06:03:38',
                'updated_at' => '2018-11-10 08:11:40',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'block_detail_id' => 15,
                'lang_id' => 2,
                'text' => 'يهدف القسم الى تدريس منهج قياسي ومتطور في الهندسة المعلوماتية , وتأهيل مهندسين أكفاء لشغل مناصب تتطلبها حاجات العمل والتطوير التقني المحلية أو العالمية. كما يحرص القسم على مواكبة تحديث منهاجه التعليمي  مع التطوؤ التقاني العالمي وبشكل دائم ومستمر',
                'created_at' => '2018-11-06 06:03:38',
                'updated_at' => '2018-11-10 08:13:05',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'block_detail_id' => 16,
                'lang_id' => 1,
                'text' => '-',
                'created_at' => '2018-11-06 06:07:03',
                'updated_at' => '2018-11-06 06:07:03',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'block_detail_id' => 16,
                'lang_id' => 2,
                'text' => 'تسعى كلية الطب البشري في جامعة الشام الخاصة إلى التميز في إعداد  الخريج ذي الكفاءة العالية علميا وأخلاقيا والقادر على تطوير  مهاراته ومعلوماته باستمرار وفق آخر المعطيات العلمية  العالمية, ليضعها في خدمة تطوير نوعية الرعاية الصحية المقدمة للمواطنين في الجمهورية العربية السورية',
                'created_at' => '2018-11-06 06:07:03',
                'updated_at' => '2018-11-11 05:59:50',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'block_detail_id' => 17,
                'lang_id' => 1,
                'text' => '-',
                'created_at' => '2018-11-06 06:08:50',
                'updated_at' => '2018-11-06 06:08:50',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'block_detail_id' => 17,
                'lang_id' => 2,
                'text' => 'تسعى كلية طب الأسنان في جامعة الشام الخاصة إلى التميز في إعداد الخريج ذي الكفاءة العالمية علميا وأخلاقيا والقادر على تطوير مهاراته ومعلوماته باستمرار وفق آخر المعطيات العلمية العالمية, ليضعها في خدمة تطوير نوعية الرعاية الصحية السنية المقدمة للمواطنين , وسيتم من خلال تعزيز الخدمات المقدمة للمجتمع بفئاته المختلفة',
                'created_at' => '2018-11-06 06:08:50',
                'updated_at' => '2018-11-11 06:32:27',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'block_detail_id' => 18,
                'lang_id' => 1,
                'text' => '-',
                'created_at' => '2018-11-06 06:09:39',
                'updated_at' => '2018-11-06 06:09:39',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'block_detail_id' => 18,
                'lang_id' => 2,
                'text' => 'تسعى كلية الصيدلة في جامعة الشام الخاصة إلى التميز في إعداد الخريج  ذي الكفاءة العالية علميا وأخلاقيا والقادر على تطوير مهاراته ومعلوماته بإستمرار وفق آخر المعطيات العلمية العالمية وتحقيق التميز العلمي والأكاديمي لخريجيها في مجالات العلوم الصيدلانية كافة, وذلك من خلال بناء شخصية الطالب وتوسيع مداركه',
                'created_at' => '2018-11-06 06:09:39',
                'updated_at' => '2018-11-11 06:35:09',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'block_detail_id' => 19,
                'lang_id' => 1,
                'text' => '-',
                'created_at' => '2018-11-06 07:17:54',
                'updated_at' => '2018-11-07 06:17:23',
                'deleted_at' => '2018-11-07 06:17:23',
            ),
            37 => 
            array (
                'id' => 38,
                'block_detail_id' => 19,
                'lang_id' => 2,
                'text' => '-',
                'created_at' => '2018-11-06 07:17:54',
                'updated_at' => '2018-11-07 06:17:23',
                'deleted_at' => '2018-11-07 06:17:23',
            ),
        ));
        
        
    }
}