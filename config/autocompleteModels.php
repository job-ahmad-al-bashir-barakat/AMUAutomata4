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

    'faculty' => [
        'model' => \Modules\Admin\Entities\Faculty::class,
    ],

    'degree' => [
        'model' => \Modules\Admin\Entities\Degree::class,
    ],

    'department' => [
        'model' => \Modules\Admin\Entities\Department::class,
    ],

    'gender' => [
        'model' => \Modules\Admin\Entities\Gender::class,
    ],

    'position' => [
        'model' => \Modules\Admin\Entities\Position::class,
    ],

    'job-title' => [
        'model' => \Modules\Admin\Entities\JobTitle::class,
    ],

    'control-menu' => [
        'model' => \Modules\Utilities\Entities\ControlMenu::class,
        'has'   => [
            'page' => 'control_page_code',
        ],
        'colName'  => 'page->control_page_code',
    ],

    'study-year' => [
        'model' => \Modules\Admin\Entities\StudyYear::class
    ],
];
