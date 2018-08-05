<?php
return [
    'graph_types' => [
        'website' => 'Website',
        'article' => 'Article',
        'profile' => 'Profile',
        'book' => 'Book',
        /*'Music' => [
            'music.song' => 'Song',
            'music.album' => 'Album',
            'music.playlist' => 'Playlist',
            'music.radio_station' => 'Radio Station',
        ],
        'Video' => [
            'video.movie' => 'Movie',
            'video.episode' => 'Episode',
            'video.tv_show' => 'Tv Show',
            'video.other' => 'Other',
        ],*/
    ],

    'card_types' => [
        'summary_large_image' => 'Summary with large Image (300x157)',
        'summary' => 'Summary (144x144)',
//        'app' => 'App',
//        'player' => 'Player',
    ],

    'attributes' => [
        /*
         * Music
         */
        'music_song' => [
            'music:duration' => 'Duration',
            'music:album' => 'Album',
            'music:album:disc' => 'Disc',
            'music:album:track' => 'Track',
            'music:musician' => 'Musicians',
        ],
        'music_album' => [
            'music:song' => 'Song',
            'music:song:disc' => 'Disc',
            'music:song:track' => 'Track',
            'music:musician' => 'Musicians',
            'music:release_date' => 'Release Date',
        ],
        'music_playlist' => [
            'music:song' => 'Song',
            'music:song:disc' => 'Disc',
            'music:song:track' => 'Track',
            'music:creator' => 'Creators',
        ],
        'music.radio_station' => [
            'music:creator' => 'Creators',
        ],
        /*
         * Video
         */
        'video_movie' => [
            'video:actor' => 'Actors',
            'video:actor:role' => 'Role',
            'video:director' => 'Director',
            'video:writer' => 'Writer',
            'video:duration' => 'Duration',
            'video:release_date' => 'Release Date',
            'video:tag' => 'Tags',
        ],
        'video_episode' => [
            'video:actor' => 'Actors',
            'video:actor:role' => 'Role',
            'video:director' => 'Director',
            'video:writer' => 'Writer',
            'video:duration' => 'Duration',
            'video:release_date' => 'Release Date',
            'video:tag' => 'Tags',
            'video:series' => 'Series',
        ],
        'video_tv_show' => [

        ],
        'video_other' => [

        ],
        /*
         * another types
         */
        'article' => [
            'article:published_time' => 'Published Time',
            'article:modified_time' => 'Modified Time',
            'article:expiration_time' =>  'Expiration Time',
            'article:author' => 'Author',
            'article:section' => 'Section',
            'article:tag' => 'Tags',
        ],
        'book' => [
            'book:author' => 'Author',
            'book:isbn' => 'ISBN',
            'book:release_date' => 'Release Date',
            'book:tag' => 'Tags',
        ],
        'profile' => [
            'profile:first_name' => 'First Name',
            'profile:last_name' => 'Last Name',
            'profile:username' => 'User Name',
            'profile:gender' => 'Gender',
        ],
        'website' => [

        ],
    ],

    'options' => [
        'male' => 'Male',
        'female' => 'Female',
    ],
];