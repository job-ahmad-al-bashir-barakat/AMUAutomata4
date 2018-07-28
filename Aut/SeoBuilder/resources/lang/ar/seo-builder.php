<?php
return [
    'graph_types' => [
        'website' => 'موقع',
        'article' => 'مقالة',
        'profile' => 'ملف اشخاص',
        'book' => 'كتاب',
        'موسيقا' => [
            'music.song' => 'اغنية',
            'music.album' => 'البوم',
            'music.playlist' => 'قائمة اغاني',
            'music.radio_station' => 'محطة اذاعة',
        ],
        'فيديو' => [
            'video.movie' => 'فلم',
            'video.episode' => 'حلقة',
            'video.tv_show' => 'مسلسل',
            'video.other' => 'اخرى',
        ],
    ],

    'card_types' => [
        'summary_large_image' => 'ملخص مع صورة كبيرة',
        'summary' => 'ملخص',
        'app' => 'تطبيق',
        'player' => 'player',
    ],

    'attributes' => [
        /*
         * Music
         */
        'music_song' => [
            'music:duration' => 'المدة',
            'music:album' => 'الالبوم',
            'music:album:disc' => 'القرص',
            'music:album:track' => 'مسار',
            'music:musician' => 'الموسيفار',
        ],
        'music_album' => [
            'music:song' => 'الغنية',
            'music:song:disc' => 'القرص',
            'music:song:track' => 'المسار',
            'music:musician' => 'الموسيقار',
            'music:release_date' => 'تاريخ الاصدار',
        ],
        'music_playlist' => [
            'music:song' => 'الغنية',
            'music:song:disc' => 'القرص',
            'music:song:track' => 'المسار',
            'music:creator' => 'الصانع',
        ],
        'music.radio_station' => [
            'music:creator' => 'الصانع',
        ],
        /*
         * Video
         */
        'video_movie' => [
            'video:actor' => 'الممثل',
            'video:actor:role' => 'الدور',
            'video:director' => 'المخرج',
            'video:writer' => 'الكاتب',
            'video:duration' => 'المدة',
            'video:release_date' => 'تاريخ الاصدار',
            'video:tag' => 'وسوم',
        ],
        'video_episode' => [
            'video:actor' => 'الممثل',
            'video:actor:role' => 'الدور',
            'video:director' => 'المخرج',
            'video:writer' => 'الكاتب',
            'video:duration' => 'المدة',
            'video:release_date' => 'تاريخ الاصدار',
            'video:tag' => 'الوسوم',
            'video:series' => 'المسلسل',
        ],
        'video_tv_show' => [

        ],
        'video_other' => [

        ],
        /*
         * another types
         */
        'article' => [
            'article:published_time' => 'وقت النشر',
            'article:modified_time' => 'وقت التعديل',
            'article:expiration_time' =>  'وقت الانتهاء',
            'article:author' => 'المؤلف',
            'article:section' => 'القسم',
            'article:tag' => 'الوسوم',
        ],
        'book' => [
            'book:author' => 'المؤلف',
            'book:isbn' => 'ISBN',
            'book:release_date' => 'تاريخ الاصدار',
            'book:tag' => 'الوسوم',
        ],
        'profile' => [
            'profile:first_name' => 'الاسم الاول',
            'profile:last_name' => 'الاسم الاخير',
            'profile:username' => 'اسم المستخدم',
            'profile:gender' => 'الجنس',
        ],
        'website' => [

        ],
    ],

    'options' => [
        'male' => 'ذكر',
        'female' => 'انثى',
    ],
];