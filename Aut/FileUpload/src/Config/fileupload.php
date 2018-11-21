<?php

/**
 * ------------------------Simple Doc-------------------------
 *
 * -----------------------------------------------------------
 */

return [

    'routeMiddleware' => ['web', 'localeSessionRedirect', 'localizationRedirect'],

    'trans'           => true,

    'datatable'       => true,

    'user_has_folder' => false,

    'user_has_field'  => false,
    'user_field'      => Aut\FileUpload\Handlers\ConfigHandler::class,

    'db_store'        => true,

    'setting' => [

        'image' => [
            'validate'         => 'required|mimes:jpeg,jpg,png,gif,bmp,png|ratio',
            'upload_directory' => 'upload\image',
        ],

        'video' => [
            'validate'         => 'required|mimes:flv,avi,mov,mp4,mpg,wmv,3gp,asf,rm,swf,mkv',
            'upload_directory' => 'upload\video',
        ],

        'image-video' => [
            'validate'         => 'required|mimes:jpeg,jpg,png,gif,bmp,png,flv,avi,mov,mp4,mpg,wmv,3gp,asf,rm,swf,mkv|ratio',
            'upload_directory' => 'upload\{type}',
        ],

        'file' => [
            'validate'         => 'required|ratio',
            'upload_directory' => 'upload\{type}',
        ],

        'relationType' => 'many', // one

        'relationName' => 'file'
    ],

    'route_model' => [

        // 'model'  => \Modules\Utilities\Entities\Model::class,

        // 'ratio' => [
        //     'first_ratio'  => [ 'title' => 'admin::app.large', 'width'  => '60', 'height' => '60', ],
        //     'second_ratio' => [ 'title' => 'admin::app.large', 'width'  => '480', 'height' => '480', ],
        // ],

        // 'thumps' => [
        //     's' => [ 'width'  => '100', 'height' => '100' ],
        //     'l' => [ 'width'  => '700', 'height' => '700' ],
        // ],

        // 'relationType'       => 'one', // 'many'
        // 'relationName'       => 'file',
        // 'relationParam'      => ['image_type'],
        // 'relationParamFixed' => '',
        // 'relationId'         => 'image_id',
        // 'stopRelationSave'   => true

        // 'db_store'           => true

        // 'upload_directory'   => 'path upload directory',
        // 'folderName'         => 'name',

        // 'user_has_folder'    => 'folder for user id'
        // 'user_has_field'     => 'user id with image',

        // 'model_field'        => 'true put model id instead of user id ex : 12_lajfusa_file_ex.png -- 12 will be news id',
    ]
];
