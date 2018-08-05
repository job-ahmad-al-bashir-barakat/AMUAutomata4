<?php
return [

    'graph_types' => [
        'website',
        'article',
        'profile',
        'book',
        /*
         * music
         */
        'music.song',
        'music.album',
        'music.playlist',
        'music.radio_station',
        /*
         * video
         */
        'video.movie',
        'video.episode',
        'video.tv_show',
        'video.other',
    ],

    'card_types' => [
        'summary_large_image',
        'summary',
        'app',
        'player',
    ],

    'attributes' => [
        /*
         * Music
         */
        'music.song' => [
            'music:duration',// integer >= 1
            'music:album',// array ex: <meta music:album><meta music:album><meta music:album>....
            'music:album:disc',// integer >= 1
            'music:album:track',// integer >= 1
            'music:musician',// array of profile [one of the graph type]
        ],
        'music.album' => [
            'music:song',//music.song attribute
            'music:song:disc',// integer >= 1
            'music:song:track',// integer >= 1
            'music:musician',// array of profile [one of the graph type]
            'music:release_date',//(year, month, day) optional time (hours, minutes)
        ],
        'music.playlist' => [
            'music:song',// same as music.album
            'music:song:disc',// integer >= 1
            'music:song:track',// integer >= 1
            'music:creator',// profile [one of the graph type]
        ],
        'music.radio_station' => [
            'music:creator',// profile [one of the graph type]
        ],
        /*
         * Video
         */
        'video.movie' => [
            'video:actor',// array of profile
            'video:actor:role',// string
            'video:director',// array of profile
            'video:writer',// array of profile
            'video:duration',// integer >= 1
            'video:release_date',// datetime
            'video:tag',// array of string
        ],
        'video.episode' => [ // same as video.movie
            'video:actor',
            'video:actor:role',
            'video:director',
            'video:writer',
            'video:duration',
            'video:release_date',
            'video:tag',
            'video:series',// video.tv_show one of the graph type
        ],
        'video.tv_show' => [// multi video.episode

        ],
        'video.other' => [// same as video.movie

        ],
        /*
         * another types
         */
        'article' => [
            'article:published_time' => [
                'type' => 'datetime',
                'multi_lang' => false,
                'name' => 'article_published_time'
            ],//  datetime
            'article:modified_time' => [
                'type' => 'datetime',
                'multi_lang' => false,
                'name' => 'article_modified_time'
            ],//  datetime
            'article:expiration_time' => [
                'type' => 'datetime',
                'multi_lang' => false,
                'name' => 'article_expiration_time'
            ],//  datetime
            'article:author' => 'profile',// array of profile
            'article:section' => [
                'type' => 'string',
                'multi_lang' => true,
                'name' => 'article_section'
            ],// string
            'article:tag' => [
                'type' => 'array_string',
                'multi_lang' => true,
                'name' => 'article_tag'
            ],// array of string
        ],
        'book' => [
            'book:author' => 'profile',// array of profile
            'book:isbn' => [
                'type' => 'string',
                'multi_lang' => false,
                'name' => 'book_isbn'
            ],// string
            'book:release_date' => [
                'type' => 'datetime',
                'multi_lang' => false,
                'name' => 'book_release_date'
            ],// datetime
            'book:tag' => [
                'type' => 'array_string',
                'multi_lang' => true,
                'name' => 'book_tag'
            ],// array of string
        ],
        'profile' => [
            'profile:first_name' => [
                'type' => 'string',
                'multi_lang' => true,
                'name' => 'profile_first_name'
            ],// string
            'profile:last_name' => [
                'type' => 'string',
                'multi_lang' => true,
                'name' => 'profile_last_name',
            ],// string
            'profile:username' => [
                'type' => 'short_string',
                'multi_lang' => false,
                'name' => 'profile_username',
            ],// short string
            'profile:gender' => [
                'type' => 'select',
                'multi_lang' => false,
                'options' => [
                    'male',
                    'female',
                ],
                'name' => 'profile_gender',
            ],// (male, female)
        ],
        'website' => [

        ],
        /*
         * Cards Attributes
         */
        'summary_large_image' => [

        ],
        'player' => [
            'player:width' => [],
            'player:height' => [],
        ]
    ],
];