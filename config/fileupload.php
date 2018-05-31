<?php

return [

    'routeMiddleware' => ['web', 'localeSessionRedirect', 'localizationRedirect'],

    'setting' => [

        'image' => [
            'validate'         => 'required|mimes:jpeg,jpg,png,gif|ratio',
            'upload_directory' => 'upload\image',
        ],

        'relationType' => 'many', // one
        'relationName' => 'image'
    ],


    'user' => [
        'model'  => \Modules\Utilities\Entities\User::class,
        'ratio' => [
            'first_ratio'  => [ 'width'  => '60', 'height' => '60', ],
        ],
        'relationType' => 'one',
    ],

    'galleries' => [
        'model'  => \Modules\Utilities\Entities\Gallery::class,
        'ratio' => [
            'first_ratio'  => [ 'width'  => '570', 'height' => '390' ],
        ],
        'relationType' => 'many',
        'relationName' => 'image',
        'thumps' => [
            'small' => [ 'width'  => '280', 'height' => '191' ],
        ],
    ],

    'lang' => [
        'model'  => \Modules\Utilities\Entities\Lang::class,
        'ratio' => [
            'first_ratio'  => [ 'width'  => '18', 'height' => '12', ],
        ],
        'relationType' => 'one',
    ],

    'main-lab' => [
        'model'  => \Modules\Admin\Entities\Lab::class,
        'ratio' => [
            'first_ratio'  => [ 'width'  => '755', 'height' => '480', ],
        ],
        'relationType' => 'one',
        'relationName' => 'mainImage'
    ],

    'lab' => [
        'model'  => \Modules\Admin\Entities\Lab::class,
        'ratio' => [
            'first_ratio'  => [ 'width'  => '285', 'height' => '215', ],
            //'second_ratio' => [ 'width'  => '480', 'height' => '480', ],
        ],
        // 'thumps' => [
        //     's' => [ 'width'  => '100', 'height' => '100' ],
        //     'l' => [ 'width'  => '700', 'height' => '700' ],
        // ],

        // 'stopRelationSave' => true
    ],

    'person-260-230' => [
        'model'        => \Modules\Admin\Entities\Person::class,
        'ratio' => [
            'person_ratio' => ['width' => '260', 'height' => '230'],
        ],
        'relationType' => 'one',
        'relationId'    => 'image_260_id',
    ],

    'person-360-360' => [
        'model'        => \Modules\Admin\Entities\Person::class,
        'ratio' => [
            'person_ratio' => ['width' => '360', 'height' => '360'],
        ],
        'relationType' => 'one',
        'relationId'    => 'image_360_id',
    ],

    'slider' => [
        'model' => \Modules\Utilities\Entities\SliderDetail::class,
        'ratio' => [
            'size' => ['width' => '1920', 'height' => '1280'],
        ],
        'relationType' => 'one',
    ],

    'vertical_slider' => [
        'model' => \Modules\Utilities\Entities\VerticalSliderDetail::class,
        'ratio' => [
            'size' => ['width' => '100', 'height' => '100'],
        ],
        'relationType' => 'one',
        //'folderName' => 'sliders',
    ],

    'gallery' => [
        //'model' => \Modules\Utilities\Entities\SliderDetail::class,
        'ratio' => [
            'size' => ['width' => '100', 'height' => '100'],
        ],
        'stopRelationSave' => true,
    ],

    'small_gallery' => [
        'ratio' => [
            'first'  => [ 'width'  => '560', 'height' => '200', ],
            'second' => [ 'width'  => '275', 'height' => '197', ]
        ],
        'stopRelationSave' => true,
    ],

    'course-265-195' => [
        'model'        => \Modules\Admin\Entities\Course::class,
        'ratio' => [
            'course_265' => [ 'width'  => '265', 'height' => '195' ],
        ],
        'relationType'  => 'one',
        'relationId'    => 'image_265_id',
    ],

    'course-750-500' => [
        'model'        => \Modules\Admin\Entities\Course::class,
        'ratio' => [
            'course_750' => [ 'width'  => '750', 'height' => '500' ],
        ],
        'relationType'  => 'one',
        'relationId'    => 'image_750_id',
    ],

    'partner-large-image' => [
        'model' => \Modules\Admin\Entities\Partner::class,
        'ratio' => [
            'partner_large_image' => [ 'title' => 'admin::app.large', 'width'  => '755', 'height' => '480', ],
        ],
        'relationType'  => 'many',
        'relationParam' => ['image_type'],
    ],

    'partner-small-image' => [
        'model' => \Modules\Admin\Entities\Partner::class,
        'ratio' => [
            'partner_small_image' => [ 'title' => 'admin::app.small' ,'width'  => '320', 'height' => '300', ],
        ],
        'relationType'  => 'many',
        'relationParam' => ['image_type'],
    ],

    'news' => [
        'model'        => \Modules\Admin\Entities\News::class,
        'ratio' => [
            'news' => [ 'width'  => '750', 'height' => '500' ],
        ],
        'relationType'  => 'one',
    ]
];
