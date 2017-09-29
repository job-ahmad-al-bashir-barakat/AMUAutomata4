<?php

return [

    'setting' => [

        'image' => [
            'validate'         => 'mimes:jpeg,jpg,png|ratio',
            'upload_directory' => 'app\public\upload\image',
        ],

        'relationType' => 'many', //one
    ],

    'lab' => [
        'model' => \Modules\Admin\Entities\Lab::class,
        'width' => '1366',
        'height' => '768',
    ],

    'slider' => [
        'model' => \Modules\Utilities\Entities\SliderDetail::class,
        'width' => '1920',
        'height' => '1280',
        'relationType' => 'one',
        'folderName' => 'sliders',
    ],
];