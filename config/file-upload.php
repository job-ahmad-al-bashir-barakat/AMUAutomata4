<?php

return [

    'setting' => [

        'image' => [
            'validate'         => 'required|mimes:jpeg,jpg,png|ratio',
            'upload_directory' => 'upload\image',
        ],

        'relationType' => 'many', //one
    ],

    'lab' => [
        'model'  => \Modules\Admin\Entities\Lab::class,
        'ratio' => [
            'first_ratio'  => [ 'width'  => '1366', 'height' => '768', ],
            //'second_ratio' => [ 'width'  => '480', 'height' => '480', ],
        ],
        // 'thumps' => [
        //     's' => [ 'width'  => '100', 'height' => '100' ],
        //     'l' => [ 'width'  => '700', 'height' => '700' ],
        // ],

        // 'stopRelationSave' => true
    ],

    'person' => [
        'model'        => \Modules\Admin\Entities\Person::class,
        'ratio' => [
            'person_ratio' => ['width' => '260', 'height' => '230'],
        ],
        'relationType' => 'one',
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

    'course' => [
        'model'        => \Modules\Admin\Entities\Course::class,
        'ratio' => [
            'person_ratio' => [ 'width'  => '265', 'height' => '195', ],
        ],
        'relationType' => 'one',
    ],
];