<?php

/**
 *
 *                                   Autocompelte Doc ----- >>>  ^_^
 * /////////////////
 * Without Lang ////
 * /////////////////
 * ----------------------------------------------------------------------------------------------------
 * model           : define model for fetch data from it
 * ----------------------------------------------------------------------------------------------------
 * cols            : define id:key,name:lang col or just name name:value used to get data on select
 *                   [condition will be on all name lang like name_en , name_ar .... ex]
 * ----------------------------------------------------------------------------------------------------
 * withCondition   : define custom condtion for all col this prop will exit all prev condition prop
 * ----------------------------------------------------------------------------------------------------
 *
 * Example :
 *
 * 'example' => [
 *     'model'          => Example::class,
 *     'cols'           => ['id:key', 'name:lang']
 * ],
 *
 * //////////////////
 *  With Langs //////
 * //////////////////
 * ----------------------------------------------------------------------------------------------------
 * model   : define model for fetch data from it
 * ----------------------------------------------------------------------------------------------------
 * has     : is array of relation => condition
 * ----------------------------------------------------------------------------------------------------
 * colId   : id string for autocompelte
 * ----------------------------------------------------------------------------------------------------
 * colName : is string|array of cols that will display on autocompelte
 * ----------------------------------------------------------------------------------------------------
 * attention : any col you need to display you must type him in this way
 * if it isn't relation type him normally
 * if it is relation type him like this model->id or modal->code ...et
 * ----------------------------------------------------------------------------------------------------
 *
 */

return [

    'attributes' => [
        'model' => \Modules\Utilities\Entities\Attribute::class,
    ],

    'modules' => [
        'model' => \Modules\Utilities\Entities\Module::class,
    ],

    'custom-modules' => [
        'model' => \Modules\Utilities\Entities\CustomModule::class,
    ],

    'pages' => [
        'model' => \Modules\Utilities\Entities\Page::class,
    ],

    'icons' => [
        'model' => \Modules\Utilities\Entities\Icon::class,
        'cols'  => ['id:id', 'name:code']
    ],

    'sliders' => [
        'model' => \Modules\Utilities\Entities\Slider::class,
        'has'   => [
            'sliderDetails' => 'id',
        ],
    ],

    'blocks' => [
        'model' => \Modules\Utilities\Entities\Block::class,
        'has'   => [
            'blockDetails' => 'id',
        ],
    ],

    'faculty' => [
        'model' => \Modules\Admin\Entities\Faculty::class,
    ],

    'degree' => [
        'model' => \Modules\Admin\Entities\Degree::class,
    ],

    'department' => [
        'model' => \Modules\Admin\Entities\Department::class,
    ],

    'course' => [
        'model' => \Modules\Admin\Entities\Course::class,
    ],

    'gender' => [
        'model' => \Modules\Utilities\Entities\Gender::class,
    ],

    'position' => [
        'model' => \Modules\Utilities\Entities\Position::class,
    ],

    'job-title' => [
        'model' => \Modules\Utilities\Entities\JobTitle::class,
    ],

    'control' => [
        'model' => \Modules\Utilities\Entities\ControlMenu::class,
        'has'   => [
            'page' => 'control_page_code',
        ],
        'colName'  => 'page->control_page_code',
    ],

    'general' => [
        'model' => \Modules\Utilities\Entities\SiteMenu::class,
        'has'   => [
            'page' => 'page_code',
        ],
        'colName'  => 'page->page_code'
    ],

    'study-year' => [
        'model' => \Modules\Admin\Entities\StudyYear::class
    ],

    'hierarchy' => [
        'model' => \Modules\Admin\Entities\Hierarchy::class
    ],

    'hierarchy-type' => [
        'model' => \Modules\Admin\Entities\HierarchyType::class
    ],
];
