<?php

use Illuminate\Database\Seeder;

class ModuleDescriptionLangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('module_description_langs')->delete();
        
        \DB::table('module_description_langs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'module_id' => 1,
                'lang_id' => 2,
                'text' => 'محرر نصوص يمكن من خلاله كتابة النصوص المختلفة وتنسيقها مع إمكانية تغيير نوع الخط وحجمه ولونه مع إمكانية تضمين صور والتحكم بحجمها ومكان ظهورها كما يمكن من خلاله إضافة فيديوهات وروابط خارجية والكثير من الميزات الأخرى موجودة فيه  له ثلاثة خصائص:

1. الحالة : لها قيمتين مفعل وغير مفعل في حال اختيار غير مفعل فلن يظهر محتوى القالب في جميع الأماكن التي تم استخدامه فيها.

2. العرض: العرض الذي سيأخذه القالب عند ظهوره، يمكن اختيار قيمة بين 1 و 12 حيث يتم تقسيم حجم الشاشة الى 12 عمود فإذا تم اختيار 6 مثلاً فسيأخذ القالب نصف الحجم المتاح وإذا تم اختيار 3 مثلاً فسيأخذ القالب ربع الحجم المتاح وهكذا...

3. محرر النصوص:  النص  الذي سوف يظهر ويجب إدخاله لجميع اللغات الفعالة للموقع.',
                'created_at' => '2019-01-01 06:11:45',
                'updated_at' => '2019-01-01 06:11:45',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'module_id' => 2,
                'lang_id' => 2,
                'text' => 'معلومات قصيرة: يمكن استخدامه  كملخص لمحتويات صفحة ما وهو عبارة عن نص مع عنوان وزر وله خمسة خصائص:

1. العرض: العرض الذي سيأخذه القالب عند ظهوره، يمكن اختيار قيمة بين 1 و 12 حيث يتم تقسيم حجم الشاشة الى 12 عمود فإذا تم اختيار 6 مثلاً فسيأخذ القالب نصف الحجم المتاح وإذا تم اختيار 3 مثلاً فسيأخذ القالب ربع الحجم المتاح وهكذا...

2. الحالة : لها قيمتين مفعل وغير مفعل في حال اختيار غير مفعل فلن يظهر محتوى القالب في جميع الأماكن التي تم استخدامه فيها.

3. العنوان: يظهر في بداية النص وبخط كبير ويجب إدخاله بجميع اللغات الفعالة.

4. محرر نصوص: النص الذي سوف يظهر في القالب ويجب إدخاله بجميع اللغات الفعالة.

5. الصفحة: يجب اختيار الصفحة التي سيتم الانتقال إليها عند الضغط على الزر.',
                'created_at' => '2019-01-01 06:30:57',
                'updated_at' => '2019-01-01 06:30:57',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'module_id' => 5,
                'lang_id' => 2,
                'text' => 'مجموعة من الصور يتم عرضها بشكل شرائح حيث يتم الانتقال بين الصور بشكل تلقائي خلال فترة زمنية محددة له خاصيتين:

1. الحالة : لها قيمتين مفعل وغير مفعل في حال اختيار غير مفعل فلن يظهر محتوى القالب في جميع الأماكن التي تم استخدامه فيها.

2. شرائح : وهي عبارة عن مجموعة الشرائح التي سيتم عرضها عن طريق هذا القالب.

مجموعات الشرائح يتم إضافتها من خلال رابط مجموعات الشرائح الموجود ضمن قائمة الباني',
                'created_at' => '2019-01-01 06:35:47',
                'updated_at' => '2019-01-01 06:35:47',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'module_id' => 6,
                'lang_id' => 2,
                'text' => 'مجموعة صناديق تظهر بجانب بعضها كل صندوق يتألف من وجهين أمامي وخلفي عند مرور مؤشر الفأرة فوق صندوق ما يظهر الوجه الخلفي، قالب الكتل له خاصيتين:

1. الحالة : لها قيمتين مفعل وغير مفعل في حال اختيار غير مفعل فلن يظهر محتوى القالب في جميع الأماكن التي تم استخدامه فيها.

2. الكتل: مجموعة الكتل التي ستظهر في هذا القالب والتي يتم إضافتها من رابط الكتل ضمن قائمة الباني.

من الممكن بناء أكثر من قالب كتل وعرضها بشكل تسلسلي للحصول على أي شكل مطلوب كما يمكن استخدام القالب (كتل فارغة) مع هذا القالب للحصول على تموضع معين للكتل.',
                'created_at' => '2019-01-01 06:55:51',
                'updated_at' => '2019-01-01 06:55:51',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'module_id' => 9,
                'lang_id' => 2,
                'text' => 'مجموعة من الشرائح تظهر بشكل عامودي مع وجود أسهم في الأعلى للانتقال بين الشرائح، هذا القالب له ستة خصائص:

1. الحالة : لها قيمتين مفعل وغير مفعل في حال اختيار غير مفعل فلن يظهر محتوى القالب في جميع الأماكن التي تم استخدامه فيها.

2. شرائح عمودية: مجموعة الشرائح التي ستظهر في القالب والتي يتم إضافتها من رابط الشرائح العامودية ضمن قائمة الباني.

3. العنوان: عنوان مجموعة الشرائح ويجب إدخاله لجميع اللغات المفعلة. 

4. أيقونة: أيقونة تظهر بجانب العنوان وتعبر عن طبيعة الشرائح.

5. العرض: العرض الذي سيأخذه القالب عند ظهوره، يمكن اختيار قيمة بين 1 و 12 حيث يتم تقسيم حجم الشاشة الى 12 عمود فإذا تم اختيار 6 مثلاً فسيأخذ القالب نصف الحجم المتاح وإذا تم اختيار 3 مثلاً فسيأخذ القالب ربع الحجم المتاح وهكذا...

6. إظهار: عدد الشرائح التي ستظهر في المرة الواحدة الشرائح الأخرى لاتظهر إلا عن طريق التنقل بواسطة الأسهم.',
                'created_at' => '2019-01-01 07:22:53',
                'updated_at' => '2019-01-01 07:22:53',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'module_id' => 39,
                'lang_id' => 2,
            'text' => 'يتم فيه عرض آخر الأخبار على شكل شرائح بحيث يتم التنقل بين الأخبار بشكل تلقائي كل فترة زمنية معينة، كما يمكن لزائر الموقع التنقل بين الأخبار عبر الأسهم، يتم عرض الأخبار حسب تسلسلها الزمني (الأحدث أولاً).
هذا القالب له خاصيتين:

1. لها قيمتين مفعل وغير مفعل في حال اختيار غير مفعل فلن يظهر محتوى القالب في جميع الأماكن التي تم استخدامه فيها.

2. إظهار: هنا يجب إدخال عدد الأخبار المراد إظهارها في هذا القالب. (في حال وضع 5 سيتم جلب آخر 5 أخبار تم إدخالها).',
                'created_at' => '2019-01-07 06:28:16',
                'updated_at' => '2019-01-07 06:39:42',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'module_id' => 40,
                'lang_id' => 2,
                'text' => 'يتم استخدام هذا القالب لتنسيق الكتل بالشكل المطلوب، هذا القالب لايظهر أي شيء سوى مساحة فارغة لتنسيق الكتل، له خاصية واحدة:

1. الحالة: لها قيمتين مفعل وغير مفعل في حال اختيار غير مفعل فلن يظهر محتوى القالب في جميع الأماكن التي تم استخدامه فيها.',
                'created_at' => '2019-01-07 06:34:43',
                'updated_at' => '2019-01-07 06:34:43',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'module_id' => 42,
                'lang_id' => 2,
                'text' => 'يتم عرض هذا القالب على شكل رزنامة من الممكن استخدامه لعرض الأحداث والعطل وأشياء أخرى، في البداية يتم بناء مجموعة أحداث من رابط التقويم الموجود في قائمة الباني ثم يجب تعريف الأحداث الخاصة بكل مجموعة، هذا القالب له ثلاثة خصائص:

1.  الحالة : لها قيمتين مفعل وغير مفعل في حال اختيار غير مفعل فلن يظهر محتوى القالب في جميع الأماكن التي تم استخدامه فيها


2. مجموعة الأحداث: هنا يجب اختيار مجموعة الأحداث المراد إظهارها في هذا القالب، حيث من الممكن اختيار أكثر من مجموعة أحداث لتظهر في رزنامة واحدة حيث يتم دمج أحداث هذه المجموعات وعرضها... من الممكن الاستفادة من هذه الخاصية بحيث يتم بناء مجموعة أحداث عامة تحوي الأحداث العامة والعطل ثم بناء مجموعة أحداث خاصة بكل كلية، ودمج المجموعتين لتظهر جميع الأحداث بنفس الرزنامة.

3. العرض: العرض الذي سيأخذه القالب عند ظهوره، يمكن اختيار قيمة بين 1 و 12 حيث يتم تقسيم حجم الشاشة الى 12 عمود فإذا تم اختيار 6 مثلاً فسيأخذ القالب نصف الحجم المتاح وإذا تم اختيار 3 مثلاً فسيأخذ القالب ربع الحجم المتاح وهكذا...',
                'created_at' => '2019-01-07 06:58:48',
                'updated_at' => '2019-01-07 06:58:48',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'module_id' => 41,
                'lang_id' => 2,
                'text' => 'يتم من خلال هذا القالب عرض جميع الأبحاث العلمية للمدرسين في كلية معينة، هذا القالب له ثلاثة خصائص:

1. الحالة : لها قيمتين مفعل وغير مفعل في حال اختيار غير مفعل فلن يظهر محتوى القالب في جميع الأماكن التي تم استخدامه فيها.

2. العرض: العرض الذي سيأخذه القالب عند ظهوره، يمكن اختيار قيمة بين 1 و 12 حيث يتم تقسيم حجم الشاشة الى 12 عمود فإذا تم اختيار 6 مثلاً فسيأخذ القالب نصف الحجم المتاح وإذا تم اختيار 3 مثلاً فسيأخذ القالب ربع الحجم المتاح وهكذا...

3. الكلية: هنا يجب تحديد الكلية المراد إظهار أبحاث مدرسيها في هذا القالب.',
                'created_at' => '2019-01-07 07:03:50',
                'updated_at' => '2019-01-07 07:03:50',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'module_id' => 32,
                'lang_id' => 2,
                'text' => 'يظهر هذا القالب خريطة توضح موقع مكان محدد  مع إمكانية التكبير والتصغير لعرض تفاصيل أقل أو أكثر للموقع، له ثلاثة خصائص:

1. الحالة : لها قيمتين مفعل وغير مفعل في حال اختيار غير مفعل فلن يظهر محتوى القالب في جميع الأماكن التي تم استخدامه فيها. 

2. العرض: العرض الذي سيأخذه القالب عند ظهوره، يمكن اختيار قيمة بين 1 و 12 حيث يتم تقسيم حجم الشاشة الى 12 عمود فإذا تم اختيار 6 مثلاً فسيأخذ القالب نصف الحجم المتاح وإذا تم اختيار 3 مثلاً فسيأخذ القالب ربع الحجم المتاح وهكذا... 

3. الموقع الجغرافي: هنا يجب تحديد خطوط الطول والعرض للموقع المراد إظهاره، من الممكن اختيار هذه القيم عن طريق الخريطة أيضاً باستخدام الزر الذي يظهر بجانب خاصية المقع الجغرافي.',
                'created_at' => '2019-01-07 07:10:18',
                'updated_at' => '2019-01-07 07:10:18',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'module_id' => 38,
                'lang_id' => 2,
                'text' => 'هذا القالب هو المسؤول عن طريقة عرض صفحة الخبر..

ملاحظة 1: لايمكن التعديل على بنية هذا القالب... ولكن بالإمكان إضافة قوالب أخرى معه عن طريق تخصيص خبر معين من خلال قائمة الباني رابط محتوى الصفحات ثم ضمن جدول الأخبار يتم اختيار القوالب المراد إظهارها مع هذا القالب مع إمكانية ترتيب القوالب بالشكل المطلوب..

ملاحظة 2: لايمكن استخدام هذا القالب إلا في صفحات الأخبار واستخدامه في مكان آخر سوف يؤدي الى ظهور مشاكل. 

لهذا القالب خاصيتين:

1.  الحالة : لها قيمتين مفعل وغير مفعل في حال اختيار غير مفعل فلن يظهر محتوى القالب في جميع الأماكن التي تم استخدامه فيها


2.  العرض: العرض الذي سيأخذه القالب عند ظهوره، يمكن اختيار قيمة بين 1 و 12 حيث يتم تقسيم حجم الشاشة الى 12 عمود فإذا تم اختيار 6 مثلاً فسيأخذ القالب نصف الحجم المتاح وإذا تم اختيار 3 مثلاً فسيأخذ القالب ربع الحجم المتاح وهكذا...',
                'created_at' => '2019-01-07 08:09:26',
                'updated_at' => '2019-01-07 08:12:49',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'module_id' => 37,
                'lang_id' => 2,
                'text' => 'يعرض قائمة بأحدث الأخبار المدخلة مع إمكانية عرض الأخبار السابقة بالضغط على زر عرض المزيد الذي يظهر مع هذا القالب بشكل افتراضي، لهذا القالب خاصيتين:

1.  الحالة : لها قيمتين مفعل وغير مفعل في حال اختيار غير مفعل فلن يظهر محتوى القالب في جميع الأماكن التي تم استخدامه فيها


2.  العرض: العرض الذي سيأخذه القالب عند ظهوره، يمكن اختيار قيمة بين 1 و 12 حيث يتم تقسيم حجم الشاشة الى 12 عمود فإذا تم اختيار 6 مثلاً فسيأخذ القالب نصف الحجم المتاح وإذا تم اختيار 3 مثلاً فسيأخذ القالب ربع الحجم المتاح وهكذا...',
                'created_at' => '2019-01-07 08:28:24',
                'updated_at' => '2019-01-07 08:28:24',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'module_id' => 3,
                'lang_id' => 2,
                'text' => 'وظيفة هذا القالب هي تقسيم الصفحة الى أقسام عن طريق إضافية مساحة فارغة صغيرة، حيث يجب إضافته قبل أي قالب آخر وهذا القالب مرتبط مع القالب section_end ويجب حصراً أن يكون لكل قالب section_start قالب آخر section_end.

لهذا القالب خاصية واحدة:

1.  الحالة : لها قيمتين مفعل وغير مفعل في حال اختيار غير مفعل فلن يظهر محتوى القالب في جميع الأماكن التي تم استخدامه فيها.',
                'created_at' => '2019-01-07 08:32:29',
                'updated_at' => '2019-01-07 08:32:29',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'module_id' => 4,
                'lang_id' => 2,
                'text' => 'وظيفة هذا القالب هي تقسيم الصفحة الى أقسام عن طريق إضافية مساحة فارغة صغيرة، حيث يجب إضافته بعد أي قالب آخر وهذا القالب مرتبط مع القالب section_start ويجب حصراً أن يكون لكل قالب section_start قالب آخر section_end.

لهذا القالب خاصية واحدة:

1.  الحالة : لها قيمتين مفعل وغير مفعل في حال اختيار غير مفعل فلن يظهر محتوى القالب في جميع الأماكن التي تم استخدامه فيها.',
                'created_at' => '2019-01-07 08:33:12',
                'updated_at' => '2019-01-07 08:33:12',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'module_id' => 10,
                'lang_id' => 2,
                'text' => 'يمكن من خلال هذا القالب عرض لمجموعة من الصور بشكل متناسق بالإضافة لإمكانية عرض صورة بشكل منفصل عن طريق الضغط عليها... لهذا القالب خمسة خصائص:

1.  الحالة : لها قيمتين مفعل وغير مفعل في حال اختيار غير مفعل فلن يظهر محتوى القالب في جميع الأماكن التي تم استخدامه فيها


2.  العرض: العرض الذي سيأخذه القالب عند ظهوره، يمكن اختيار قيمة بين 1 و 12 حيث يتم تقسيم حجم الشاشة الى 12 عمود فإذا تم اختيار 6 مثلاً فسيأخذ القالب نصف الحجم المتاح وإذا تم اختيار 3 مثلاً فسيأخذ القالب ربع الحجم المتاح وهكذا...

3. أيقونة: الأيقونة التي تظهر بجانب عنوان معرض الصور ويجب اختيار أيقونة مناسبة للعنوان الذي تم اختياره.

4. عنوان: هو عنوان معرض الصور الذي سيتم إظهاره.

5. صور:  يجب رفع الصور التي سوف تظهر ضمن المعرض.',
                'created_at' => '2019-01-07 08:53:44',
                'updated_at' => '2019-01-07 08:53:44',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'module_id' => 12,
                'lang_id' => 2,
                'text' => 'يمكن من خلال هذا القالب عرض 3 صور فقط وتظهر بشكل متناسق، يمكن استخدام هذا القالب بجانب نص ما    للدلالة عليه وتوضيحه،
لهذا القالب ثلاث خصائص:

1. الحالة : لها قيمتين مفعل وغير مفعل في حال اختيار غير مفعل فلن يظهر محتوى القالب في جميع الأماكن التي تم استخدامه فيها 

2. العرض: العرض الذي سيأخذه القالب عند ظهوره، يمكن اختيار قيمة بين 1 و 12 حيث يتم تقسيم حجم الشاشة الى 12 عمود فإذا تم اختيار 6 مثلاً فسيأخذ القالب نصف الحجم المتاح وإذا تم اختيار 3 مثلاً فسيأخذ القالب ربع الحجم المتاح وهكذا... 

3. صور: يجب رفع الصور التي سوف تظهر ضمن المعرض.',
                'created_at' => '2019-01-07 09:11:10',
                'updated_at' => '2019-01-07 09:11:10',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'module_id' => 30,
                'lang_id' => 2,
                'text' => 'يمكن من خلال هذا القالب عرض لمجموعة من معارض الصور بشكل متناسق، حيث يوفر هذا القالب إمكانية عرض صور لمعرض صور واحد أو دمج معارض الصور مع بعضها، بالإضافة لإمكانية عرض صورة بشكل منفصل عن طريق الضغط عليها... 

لهذا القالب أربعة خصائص: 

1. الحالة : لها قيمتين مفعل وغير مفعل في حال اختيار غير مفعل فلن يظهر محتوى القالب في جميع الأماكن التي تم استخدامه فيها 

2. الحدود: عدد الصور التي سوف تظهر من كل معرض صور عند اختيار عرض الكل.

3. العرض: العرض الذي سيأخذه القالب عند ظهوره، يمكن اختيار قيمة بين 1 و 12 حيث يتم تقسيم حجم الشاشة الى 12 عمود فإذا تم اختيار 6 مثلاً فسيأخذ القالب نصف الحجم المتاح وإذا تم اختيار 3 مثلاً فسيأخذ القالب ربع الحجم المتاح وهكذا... 

4. معارض الصور: هنا يجب اختيار معارض الصور التي يجب أن تظهر في هذا القالب.

ملاحظة: يتم إضافة معارض الصور من قائمة الباني رابط معرض الصور.',
                'created_at' => '2019-01-07 09:45:04',
                'updated_at' => '2019-01-08 12:48:16',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'module_id' => 13,
                'lang_id' => 2,
                'text' => 'يستخدم هذا القالب لعرض مجموعة من الخطوات المتسلسلة بحيث يتم عرضها بشكل تسلسلي ويمكن رؤية التفاصيل لكل خطوة على حدى.

هذا القالب له خمسة خصائص:

1. الحالة: لها قيمتين مفعل وغير مفعل في حال اختيار غير مفعل فلن يظهر محتوى القالب في جميع الأماكن التي تم استخدامه فيها.

2.العرض: العرض الذي سيأخذه القالب عند ظهوره، يمكن اختيار قيمة بين 1 و 12 حيث يتم تقسيم حجم الشاشة الى 12 عمود فإذا تم اختيار 6 مثلاً فسيأخذ القالب نصف الحجم المتاح وإذا تم اختيار 3 مثلاً فسيأخذ القالب ربع الحجم المتاح وهكذا...

3.عنوان: عنوان عام للخطوات التي سيتم عرضها.

4.محرر نصوص: مساحة نصية لكتابة وصف عن الخطوات المراد عرضها.

5.خطوات: هنا يجب اختيار الخطوات المراد عرضها ضمن هذا القالب.

ملاحظة: يتم إضافة الخطوات من قائمة الباني رابط الخطوات.',
                'created_at' => '2019-01-07 09:57:51',
                'updated_at' => '2019-01-07 09:57:51',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'module_id' => 19,
                'lang_id' => 2,
                'text' => 'هذا القالب هو المسؤول عن طريقة عرض صفحة الشخص.. 

ملاحظة 1: لايمكن التعديل على بنية هذا القالب... ولكن بالإمكان إضافة قوالب أخرى معه عن طريق تخصيص شخص معين من خلال قائمة الباني رابط محتوى الصفحات ثم ضمن جدول الأشخاص يتم اختيار القوالب المراد إظهارها مع هذا القالب مع إمكانية ترتيب القوالب بالشكل المطلوب.. 

ملاحظة 2: لايمكن استخدام هذا القالب إلا في صفحات الأشخاص واستخدامه في مكان آخر سوف يؤدي الى ظهور مشاكل.

لهذا القالب خاصيتين:

1. الحالة : لها قيمتين مفعل وغير مفعل في حال اختيار غير مفعل فلن يظهر محتوى القالب في جميع الأماكن التي تم استخدامه فيها.

2. العرض: العرض الذي سيأخذه القالب عند ظهوره، يمكن اختيار قيمة بين 1 و 12 حيث يتم تقسيم حجم الشاشة الى 12 عمود فإذا تم اختيار 6 مثلاً فسيأخذ القالب نصف الحجم المتاح وإذا تم اختيار 3 مثلاً فسيأخذ القالب ربع الحجم المتاح وهكذا...',
                'created_at' => '2019-01-07 11:24:32',
                'updated_at' => '2019-01-07 11:24:32',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'module_id' => 22,
                'lang_id' => 2,
                'text' => 'يتم عرض أعضاء مجلس الجامعة في هذا القالب، يتم إدخال أعضاء مجلس الجامعة من قائمة الجامعة ثم رابط مجلس الجامعة.

ملاحظة: يعرض القالب مجموعة من الأعضاء مع زر رؤية المزيد لعرض بقية الأعضاء.

لهذا القالب خاصيتين: 

1. الحالة : لها قيمتين مفعل وغير مفعل في حال اختيار غير مفعل فلن يظهر محتوى القالب في جميع الأماكن التي تم استخدامه فيها.

2. العرض: العرض الذي سيأخذه القالب عند ظهوره، يمكن اختيار قيمة بين 1 و 12 حيث يتم تقسيم حجم الشاشة الى 12 عمود فإذا تم اختيار 6 مثلاً فسيأخذ القالب نصف الحجم المتاح وإذا تم اختيار 3 مثلاً فسيأخذ القالب ربع الحجم المتاح وهكذا...',
                'created_at' => '2019-01-07 11:38:29',
                'updated_at' => '2019-01-07 11:38:29',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'module_id' => 23,
                'lang_id' => 2,
                'text' => 'يتم عرض أعضاء مجلس الأمناء في هذا القالب، يتم إدخال أعضاء مجلس الأمناء من قائمة الجامعة ثم رابط مجلس الأمناء.

ملاحظة: يعرض القالب مجموعة من الأعضاء مع زر رؤية المزيد لعرض بقية الأعضاء.

لهذا القالب خاصيتين: 

1. الحالة : لها قيمتين مفعل وغير مفعل في حال اختيار غير مفعل فلن يظهر محتوى القالب في جميع الأماكن التي تم استخدامه فيها.

2. العرض: العرض الذي سيأخذه القالب عند ظهوره، يمكن اختيار قيمة بين 1 و 12 حيث يتم تقسيم حجم الشاشة الى 12 عمود فإذا تم اختيار 6 مثلاً فسيأخذ القالب نصف الحجم المتاح وإذا تم اختيار 3 مثلاً فسيأخذ القالب ربع الحجم المتاح وهكذا...',
                'created_at' => '2019-01-07 11:39:06',
                'updated_at' => '2019-01-07 11:39:06',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'module_id' => 24,
                'lang_id' => 2,
                'text' => 'يتم عرض الشركاء في هذا القالب، يتم إدخال الشركاء  من قائمة الجامعة ثم رابط الشركاء . 

ملاحظة: يعرض القالب مجموعة من الشركاء مع زر رؤية المزيد لعرض بقية الشركاء.

لهذا القالب خاصيتين:

1. الحالة : لها قيمتين مفعل وغير مفعل في حال اختيار غير مفعل فلن يظهر محتوى القالب في جميع الأماكن التي تم استخدامه فيها. 

2. العرض: العرض الذي سيأخذه القالب عند ظهوره، يمكن اختيار قيمة بين 1 و 12 حيث يتم تقسيم حجم الشاشة الى 12 عمود فإذا تم اختيار 6 مثلاً فسيأخذ القالب نصف الحجم المتاح وإذا تم اختيار 3 مثلاً فسيأخذ القالب ربع الحجم المتاح وهكذا...',
                'created_at' => '2019-01-07 11:42:02',
                'updated_at' => '2019-01-07 11:42:02',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'module_id' => 36,
                'lang_id' => 2,
                'text' => 'يعرض قائمة بمكاتب الجامعة  المدخلة مع إمكانية عرض كل المكاتب بالضغط على زر عرض المزيد الذي يظهر مع هذا القالب بشكل افتراضي، لهذا القالب خاصيتين: 

1. الحالة : لها قيمتين مفعل وغير مفعل في حال اختيار غير مفعل فلن يظهر محتوى القالب في جميع الأماكن التي تم استخدامه فيها.

2. العرض: العرض الذي سيأخذه القالب عند ظهوره، يمكن اختيار قيمة بين 1 و 12 حيث يتم تقسيم حجم الشاشة الى 12 عمود فإذا تم اختيار 6 مثلاً فسيأخذ القالب نصف الحجم المتاح وإذا تم اختيار 3 مثلاً فسيأخذ القالب ربع الحجم المتاح وهكذا...


ملاحظة: يتم إدخال مكاتب الجامعة من قائمة الجامعة رابط مكاتب الجامعة.',
                'created_at' => '2019-01-08 08:39:44',
                'updated_at' => '2019-01-08 08:39:44',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'module_id' => 8,
                'lang_id' => 2,
                'text' => 'يعرض مجموعة محددة من بطاقات الأشخاص على شكل شرائح يتم الانتقال بينها بشكل آلي خلا فترات زمنية محددة.

لهذا القالب ستة خصائص:

1. الحالة : لها قيمتين مفعل وغير مفعل في حال اختيار غير مفعل فلن يظهر محتوى القالب في جميع الأماكن التي تم استخدامه فيها. 

2. الحدود: عدد الأشخاص التي سوف تظهر في هذا القالب.

3. العرض: العرض الذي سيأخذه القالب عند ظهوره، يمكن اختيار قيمة بين 1 و 12 حيث يتم تقسيم حجم الشاشة الى 12 عمود فإذا تم اختيار 6 مثلاً فسيأخذ القالب نصف الحجم المتاح وإذا تم اختيار 3 مثلاً فسيأخذ القالب ربع الحجم المتاح وهكذا... 

4. إظهار: عدد البطاقات التي سوف تظهر في المرة الواحدة، مثلاً تم اختيار 3 سيتم إظهار ثلاثة بطاقات ثم سيتم الانتقال بين البطاقات خلال فترات زمنية معينة.

5. أشخاص: هنا يجب اختيار الأشخاص المراد إظهارهم في هذا القالب.

6. عنوان: العنوان الذي سوف يظهر لقائمة الأشخاص.',
                'created_at' => '2019-01-08 09:17:13',
                'updated_at' => '2019-01-08 09:17:13',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'module_id' => 28,
                'lang_id' => 2,
                'text' => 'يتم من خلاله عرض قائمة ببطاقات مدرسين كلية معينة.. لهذا القالب ثلاثة خصائص:

1. الحالة : لها قيمتين مفعل وغير مفعل في حال اختيار غير مفعل فلن يظهر محتوى القالب في جميع الأماكن التي تم استخدامه فيها.

2. العرض: العرض الذي سيأخذه القالب عند ظهوره، يمكن اختيار قيمة بين 1 و 12 حيث يتم تقسيم حجم الشاشة الى 12 عمود فإذا تم اختيار 6 مثلاً فسيأخذ القالب نصف الحجم المتاح وإذا تم اختيار 3 مثلاً فسيأخذ القالب ربع الحجم المتاح وهكذا... 

3. الكلية: يجب تحديد الكلية المراد عرض أعضاء كادرها التدريسي ضمن هذا القالب..',
                'created_at' => '2019-01-08 13:50:19',
                'updated_at' => '2019-01-08 13:50:19',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}