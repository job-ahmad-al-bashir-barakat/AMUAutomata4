<?php

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
            'validate'         => 'required|mimes:jpeg,jpg,png,gif,bmp,png,webp|ratio',
            'upload_directory' => 'upload\image',
        ],

        'video' => [
            'validate'         => 'required|mimes:flv,avi,mov,mp4,mpg,wmv,3gp,asf,rm,swf,mkv',
            'upload_directory' => 'upload\video',
        ],

        'image-video' => [
            'validate'         => 'required|mimes:jpeg,jpg,png,gif,bmp,png,flv,avi,mov,mp4,mpg,wmv,3gp,asf,rm,swf,mkv,webp|ratio',
            'upload_directory' => 'upload\{type}',
        ],

        'file' => [
            'validate'         => 'required|ratio',
            'upload_directory' => 'upload\{type}',
        ],

        'relationType' => 'many', // one

        'relationName' => 'file'
    ],

    'user' => [
        'model' => \Modules\Utilities\Entities\User::class,
        'ratio' => [
            'first_ratio' => ['width' => '60', 'height' => '60',],
        ],
        'relationType' => 'one',
        'relationName' => 'image'
    ],

    'footer_logo' => [
        'model' => \Modules\Utilities\Entities\Footer::class,
        'ratio' => [],
        'relationType' => 'one',
        'relationName' => 'image'
    ],

    'modules' => [
        'model' => \Modules\Utilities\Entities\Module::class,
        'relationType' => 'one',
        'validate' => 'required|mimes:jpeg,jpg,png,gif',
    ],

    'galleries' => [
        'model' => \Modules\Utilities\Entities\Gallery::class,
        'ratio' => [
            'first_ratio' => ['width' => '570', 'height' => '390'],
        ],
        'relationType' => 'many',
        'relationName' => 'image',
        'thumps' => [
            'small' => ['width' => '280', 'height' => '191'],
        ],
    ],

    'videos' => [
        'model' => \Modules\Utilities\Entities\Video::class,
        'relationType' => 'many',
        'relationName' => 'file',
        'relationId'   => 'file_id',
    ],

    'lang' => [
        'model' => \Modules\Utilities\Entities\Lang::class,
        'ratio' => [
            'first_ratio' => ['width' => '18', 'height' => '12',],
        ],
        'relationType' => 'one',
        'relationName' => 'image',
    ],

    'main-lab' => [
        'model' => \Modules\Admin\Entities\Lab::class,
        'ratio' => [
            'first_ratio' => ['width' => '755', 'height' => '480',],
        ],
        'relationType' => 'one',
        'relationName' => 'mainImage'
    ],

    'lab' => [
        'model' => \Modules\Admin\Entities\Lab::class,
        'ratio' => [
            'first_ratio' => ['width' => '285', 'height' => '215',],
            //'second_ratio' => [ 'width'  => '480', 'height' => '480', ],
        ],
        'relationName' => 'image',
        // 'thumps' => [
        //     's' => [ 'width'  => '100', 'height' => '100' ],
        //     'l' => [ 'width'  => '700', 'height' => '700' ],
        // ],

        // 'stopRelationSave' => true
    ],

    'person-260-230' => [
        'model' => \Modules\Admin\Entities\Person::class,
        'ratio' => [
            'person_ratio' => ['width' => '260', 'height' => '230'],
        ],
        'relationType' => 'one',
        'relationName' => 'image',
        'relationId'   => 'image_260_id',
    ],

    'person-360-360' => [
        'model' => \Modules\Admin\Entities\Person::class,
        'ratio' => [
            'person_ratio' => ['width' => '360', 'height' => '360'],
        ],
        'relationType' => 'one',
        'relationName' => 'image',
        'relationId'   => 'image_360_id',
    ],

    'slider' => [
        'model' => \Modules\Utilities\Entities\SliderDetail::class,
        'ratio' => [
            'size' => ['width' => '1920', 'height' => '1280'],
        ],
        'relationType' => 'one',
        'relationName' => 'image',
    ],

    'vertical_slider' => [
        'model' => \Modules\Utilities\Entities\VerticalSliderDetail::class,
        'ratio' => [
            'size' => ['width' => '100', 'height' => '100'],
        ],
        'relationType' => 'one',
        'relationName' => 'image',
        //'folderName' => 'sliders',
    ],

    'gallery' => [
        //'model' => \Modules\Utilities\Entities\SliderDetail::class,
        'ratio' => [
            'size' => ['width' => '450', 'height' => '250'],
        ],
        'thumps' => [
            'small' => ['width' => '280', 'height' => '160'],
        ],
        'stopRelationSave' => true,
        'relationName' => 'image',
    ],

    'logo_image' => [
        'ratio' => [],
        'stopRelationSave' => true,
        'relationName' => 'logo',
        'relationType' => 'one',
    ],

    'graph_image' => [
        'ratio' => [
            'size' => ['width' => '100', 'height' => '100'],
        ],
        'stopRelationSave' => true,
        'relationName' => 'image',
    ],

    'card_image' => [
        'ratio' => [
            'summary' => ['width' => '144', 'height' => '144'],
            'summary_large_image' => ['title' => 'app.summary_large_image', 'width' => '300', 'height' => '157'],
        ],
        'stopRelationSave' => true,
        'relationName' => 'image',
    ],

    'small_gallery' => [
        'ratio' => [
            'first' => ['width' => '560', 'height' => '200',],
            'second' => ['width' => '275', 'height' => '197',]
        ],
        'stopRelationSave' => true,
        'relationName' => 'image',
    ],

    'course-265-195' => [
        'model' => \Modules\Admin\Entities\Course::class,
        'ratio' => [
            'course_265' => ['width' => '265', 'height' => '195'],
        ],
        'relationType' => 'one',
        'relationName' => 'image',
        'relationId' => 'image_265_id',
    ],

    'course-750-500' => [
        'model' => \Modules\Admin\Entities\Course::class,
        'ratio' => [
            'course_750' => ['width' => '750', 'height' => '500'],
        ],
        'relationType' => 'one',
        'relationName' => 'image',
        'relationId' => 'image_750_id',
    ],

    'course-book' => [
        'model' => \Modules\Admin\Entities\CourseBook::class,
        'relationType' => 'one',
        'relationId'   => 'file_id',
    ],

    'university-office' => [
        'model' => \Modules\Admin\Entities\UniversityOffice::class,
        'ratio' => [
            'office' => ['width' => '265', 'height' => '250'],
        ],
        'stopResize' => true,
        'relationType' => 'one',
        'relationName' => 'image',
    ],

    'block-front' => [
        'model' => \Modules\Utilities\Entities\BlockDetail::class,
        'ratio' => [
            'block_front' => ['width' => '250', 'height' => '250'],
        ],
        'stopResize' => true,
        'relationType' => 'one',
        'relationName' => 'image',
        'relationId' => 'front_image_id',
    ],

    'block-back' => [
        'model' => \Modules\Utilities\Entities\BlockDetail::class,
        'ratio' => [
            'block_back' => ['width' => '250', 'height' => '250'],
        ],
        'relationType' => 'one',
        'relationName' => 'image',
        'relationId'   => 'back_image_id',
    ],

    'cards' => [
        'model' => \Modules\Utilities\Entities\Card::class,
        'ratio' => [
            'card' => ['width' => '600', 'height' => '300'],
        ],
        'relationType' => 'one',
        'relationName' => 'image',
        'relationId'   => 'image_id',
    ],

    'partner-large-image' => [
        'model' => \Modules\Admin\Entities\Partner::class,
        'ratio' => [
            'partner_large_image' => ['title' => 'admin::app.large', 'width' => '755', 'height' => '480',],
        ],
        'relationType' => 'many',
        'relationName' => 'image',
        'relationParam' => ['image_type'],
    ],

    'partner-small-image' => [
        'model' => \Modules\Admin\Entities\Partner::class,
        'ratio' => [
            'partner_small_image' => ['title' => 'admin::app.small', 'width' => '320', 'height' => '300',],
        ],
        'relationType' => 'many',
        'relationName' => 'image',
        'relationParam' => ['image_type'],
    ],

    'tenders' => [
        'model' => \Modules\Admin\Entities\Tender::class,
        'ratio' => [
            'news' => ['width' => '570', 'height' => '390'],
        ],
        'thumps' => [
            'small' => ['width' => '280', 'height' => '160'],
        ],
        'relationType' => 'one',
        'relationName' => 'image',
    ],

    'book_cover' => [
        'model' => \Modules\Admin\Entities\Book::class,
        'ratio' => [
            'news' => ['width' => '570', 'height' => '390'],
        ],
        'thumps' => [
            'small' => ['width' => '280', 'height' => '160'],
        ],
        'relationType' => 'one',
        'relationName' => 'image',
    ],

    'book' => [
        'model' => \Modules\Admin\Entities\Book::class,
        'relationType' => 'one',
        'relationId'   => 'file_id',
    ],

    'events' => [
        'model' => \Modules\Utilities\Entities\Event::class,
        'ratio' => [
            'news' => ['width' => '570', 'height' => '390'],
        ],
        'relationType' => 'one',
        'relationName' => 'image',
        'relationId' => 'image_id',
    ],

    'news-570-390' => [
        'model' => \Modules\Admin\Entities\News::class,
        'ratio' => [
            'news' => ['width' => '570', 'height' => '390'],
        ],
        'relationType' => 'one',
        'relationName' => 'image',
        'relationId' => 'image_570_id',
    ],

    'news-1920-1280' => [
        'model' => \Modules\Admin\Entities\News::class,
        'ratio' => [
            'news' => ['width' => '1920', 'height' => '1280'],
        ],
        'relationType' => 'one',
        'relationName' => 'image',
        'relationId' => 'image_1920_id',
    ],
];
