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
            'second_ratio' => [ 'width'  => '480', 'height' => '480', ],
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
            'person_ratio' => [ 'width'  => '150', 'height' => '150', ],
        ],
        'relationType' => 'one',
    ],

    'slider' => [
        'model' => \Modules\Utilities\Entities\SliderDetail::class,
        'width' => '1920',
        'height' => '1280',
        'relationType' => 'one',
    ],

    'vertical_slider' => [
        'model' => \Modules\Utilities\Entities\VerticalSliderDetail::class,
        'width' => '100',
        'height' => '100',
        'relationType' => 'one',
        //'folderName' => 'sliders',
    ],

    'gallery' => [
        //'model' => \Modules\Utilities\Entities\SliderDetail::class,
        'width' => '100',
        'height' => '100',
        'stopRelationSave' => true,
    ],

    'small_gallery' => [
        'width' => '560',
        'height' => '200',
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