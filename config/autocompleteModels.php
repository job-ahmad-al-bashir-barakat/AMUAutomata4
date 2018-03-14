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
 *  |  'q'         => [                 |  'q'         => [
 *  |      'name_{langs}',              |      'transName' => 'text',
 *  |  ]                                |  ]
 *
 * ----------------------------------------------------------------------------------------------------
 * model     : define model for fetch data from it
 * ----------------------------------------------------------------------------------------------------
 * q : is array of relation => condition
 *
 * -- (just withLang) type {langs} with col this will loop over all lang to add them as condition
 * -- if you add q as item key\value in array this will be  $wheteHas => $col condition
 *
 *| 'q' => [
 *|      //ps: whereHas page => filter on code col
 *|      'page' => 'code',
 *|  ],
 *
 * -- if you add q as item just value in array this will be traditional where condition
 *
 *| 'q' => [
 *|      //ps: where code col
 *|      'code',
 *|  ],
 *
 * ps : if you need to make extra custom condition there is class AutocompleteHelperClass inside app/Library you can use it
 *9
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

    'permissions' => [
        'model' => \Modules\Utilities\Entities\Permission::class,
        'colId' => 'name',
    ],

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
        'q'     => ['code'],
        'colName'  => 'icon_html'
    ],

    'sliders' => [
        'model' => \Modules\Utilities\Entities\Slider::class,
        'q'     => [
            'sliderDetails' => 'id',
        ],
    ],

    'vertical-sliders' => [
        'model' => \Modules\Utilities\Entities\VerticalSlider::class,
        'q'     => [
            'verticalSliderDetails' => 'id',
        ],
    ],

    'blocks' => [
        'model' => \Modules\Utilities\Entities\Block::class,
        'q'     => [
            'blockDetails' => 'id',
        ],
    ],

    'steps' => [
        'model' => \Modules\Utilities\Entities\Step::class,
        'colName'  => 'transTitle->text',
        'q'        => [
            'transTitle' => 'text',
        ],
    ],

    'text-cards' => [
        'model' => \Modules\Utilities\Entities\TextCard::class,
        'colName'  => 'transTitle->text',
        'q'        => [
            'transTitle' => 'text',
        ],
    ],

    'faculty' => [
        'model' => \Modules\Admin\Entities\Faculty::class,
    ],

    'degree' => [
        'model' => \Modules\Admin\Entities\Degree::class,
        'conditions' => [
            ['faculty_id' ,'=' ,'request:faculty'],
        ],
    ],

    'department' => [
        'model' => \Modules\Admin\Entities\Department::class,
        'conditions' => [
            ['faculty_id' ,'=' ,'request:faculty'],
        ],
    ],

    'course' => [
        'model' => \Modules\Admin\Entities\Course::class,
        'conditions' => [
            ['id' ,'<>' ,'request:course'],
            ['faculty_id' ,'=' ,'request:faculty'],
        ],
    ],

    'person' => [
        'model' => \Modules\Admin\Entities\Person::class,
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
        'q'     => [
            'page' => 'control_page_code',
        ],
        'colName'  => 'page->control_page_code',
    ],

    'general' => [
        'model' => \Modules\Utilities\Entities\SiteMenu::class,
        //todo: fix this condition for menu autocompelte
        'q'       => false,
        'colName' => 'title_autocomplete',
        'colId'   => 'id',
    ],

    'study-year' => [
        'model'  => \Modules\Admin\Entities\StudyYear::class,
    ],

    'faculty-study-year' => [
        'model'   => \Modules\Admin\Entities\Faculty::class,
        'colId'   => 'pivot->id',
        'with'    => ['studyYear'],
        'data'    => 'studyYear',
        'q'       => [
            'studyYear.transName' => 'text'
        ],
        'conditions' => [
            ['id' ,'=' ,'request:faculty'],
        ],
    ],

    'hierarchy' => [
        'model' => \Modules\Admin\Entities\Hierarchy::class
    ],

    'hierarchy-type' => [
        'model' => \Modules\Admin\Entities\HierarchyType::class
    ],
];
