<?php

return [

    'setting' => [

        'image' => [
            'validate'         => 'mimes:jpeg,jpg,png|ratio',
            'upload_directory' => 'public\upload\image',
        ],

        'relationType' => 'many', //one
    ],

    'lab' => [
        'model' => \Modules\Admin\Entities\Lab::class,
        'width' => '1366',
        'height' => '768',
        //'stopRelationSave' => true
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
//        'folderName' => 'sliders',
    ],

    'gallery' => [
//        'model' => \Modules\Utilities\Entities\SliderDetail::class,
        'width' => '100',
        'height' => '100',
        'stopRelationSave' => true,
    ],

];