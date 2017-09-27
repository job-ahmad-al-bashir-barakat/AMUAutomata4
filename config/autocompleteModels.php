<?php

/**
 *
 *                             Autocompelte Doc ----- >>>  ^_^
 *
 *
 *  |  ------------------------------   |  -----------------------------
 *  |       default withoutLang         |       default withLang
 *  |  ------------------------------   |  -----------------------------
 *  |  'colId'     => 'id',             |  'colId'     => 'id',
 *  |  'colName'   => 'name_{lang}',    |  'colName'   => 'transName->text',
 *  |  'condition' => [                 |  'condition' => [
 *  |      'name_{langs}',              |      'transName' => 'text',
 *  |  ]                                |  ]
 *
 * ----------------------------------------------------------------------------------------------------
 * model     : define model for fetch data from it
 * ----------------------------------------------------------------------------------------------------
 * condition : is array of relation => condition
 *
 * -- (just withLang) type {langs} with col this will loop over all lang to add them as condition
 * -- if you add condition as item key\value in array this will be  $wheteHas => $col condition
 *
 *| 'condition' => [
 *|      //ps: whereHas page => filter on code col
 *|      'page' => 'code',
 *|  ],
 *
 * -- if you add condition as item just value in array this will be traditional where condition
 *
 *| 'condition' => [
 *|      //ps: where code col
 *|      'code',
 *|  ],
 *
 * ps : if you need to make extra custom condition there is class AutocompleteHelperClass inside app/Library you can use it
 *
 *|  this class has function name of tow part
 *|  1: general model route param and
 *|  2: Autocomplete
 *|
 *|  'general' => [
 *|      'model' => APP\Entities\General::class,
 *|  ]
 *|
 *|  function generalAutocomplete(Request $request ,$query) {
 *|
 *|      return $query->where('id' ,'<>' ,$request->input('id'));
 *|  }
 *
 * ----------------------------------------------------------------------------------------------------
 * colId     : id string for autocompelte
 * ----------------------------------------------------------------------------------------------------
 * colName   : is string|array of cols that will display on autocompelte
 * | (just withLang) type {lang} with col this will replace with current lang
 * | you can pass array to show as name title ['name' ,'code']
 * | you can pass custom complex property make on model
 * ----------------------------------------------------------------------------------------------------
 *
 * ps : anywhere you need to get name from relation or make condition on col inside relation
 *      just type your col like this model->relation->name
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
        'colId' => 'id',
        'colName' => 'code',

    ],

    'sliders' => [
        'model' => \Modules\Utilities\Entities\Slider::class,
        'condition'   => [
            'sliderDetails' => 'id',
        ],
    ],

    'blocks' => [
        'model' => \Modules\Utilities\Entities\Block::class,
        'condition'   => [
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
        'condition'   => [
            'page' => 'control_page_code',
        ],
        'colName'  => 'page->control_page_code',
    ],

    'general' => [
        'model' => \Modules\Utilities\Entities\SiteMenu::class,
        //todo: fix this condition for menu autocompelte
        'condition' => false,
        'colName' => 'title',
        'colId' => 'id',
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
