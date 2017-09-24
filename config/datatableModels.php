<?php

/**
 *  you must add here route and model and view foreach
 *
 *  model             : you must add model for datatable
 *  dataTableFunc     : default funcName is get_datatable // add name for maker method ,this name will be used in maker class or in repository class as get_func / build_func / store_func / update_fund / destroy_func
 *  middlewares       : you can make auth by pass string or array to this property
 *  middlewaresOption : this option allow you to only make auth on on action or except action from auth by pass array
 *  request           : this is must be Form Request Class
 *  stopOperation     : for stop normal oper and add custom oper ['store','update','destroy']
 *  factory           : the default factory is  modelFactory unless you add you own factory property
 *
 */


return [

    /**
     *  Utilities Module
     */
    'users' => [
        'model'         => Modules\Utilities\Entities\User::class,
        'factory'       => Modules\Utilities\Factories\UserFactory::class,
    ],

    'langs' => [
        'model'         => Modules\Utilities\Entities\Lang::class,
        'factory'       => Modules\Utilities\Factories\LangFactory::class,
    ],

    'attributes' => [
        'model'         => Modules\Utilities\Entities\Attribute::class,
        'factory'       => Modules\Utilities\Factories\AttributeFactory::class,
    ],

    'modules' => [
        'model'         => Modules\Utilities\Entities\Module::class,
        'factory'       => Modules\Utilities\Factories\ModuleFactory::class
    ],

    'custom-modules' => [
        'model'         => Modules\Utilities\Entities\CustomModule::class,
        'factory'       => Modules\Utilities\Factories\CustomModuleFactory::class
    ],

    'pages' => [
        'model'         => Modules\Utilities\Entities\Page::class,
        'factory'       => Modules\Utilities\Factories\PageFactory::class
    ],

    'icons' => [
        'model'         => Modules\Utilities\Entities\Icon::class,
        'factory'       => Modules\Utilities\Factories\IconFactory::class
    ],

    'sliders' => [
        'model'         => Modules\Utilities\Entities\Slider::class,
        'factory'       => Modules\Utilities\Factories\SliderFactory::class
    ],

    'vertical-sliders' => [
        'model'         => Modules\Utilities\Entities\VerticalSlider::class,
        'factory'       => Modules\Utilities\Factories\VerticalSliderFactory::class
    ],

    'slider' => [
        'model'         => Modules\Utilities\Entities\SliderDetail::class,
        'factory'       => Modules\Utilities\Factories\SliderDetailFactory::class
    ],

    'vertical-slider' => [
        'model'         => Modules\Utilities\Entities\VerticalSliderDetail::class,
        'factory'       => Modules\Utilities\Factories\VerticalSliderDetailFactory::class
    ],

    'blocks' => [
        'model'         => Modules\Utilities\Entities\Block::class,
        'factory'       => Modules\Utilities\Factories\BlockFactory::class
    ],

    'block' => [
        'model'         => Modules\Utilities\Entities\BlockDetail::class,
        'factory'       => Modules\Utilities\Factories\BlockDetailFactory::class
    ],

    'builder-pages' => [
        'model'         => Modules\Utilities\Entities\BuilderPage::class,
        'factory'       => Modules\Utilities\Factories\BuilderPageFactory::class
    ],

    'social-network' => [
        'model'         => Modules\Utilities\Entities\SocialNetwork::class,
        'factory'       => Modules\Utilities\Factories\SocialNetworkFactory::class,
    ],

    'gender' => [
        'model'         => Modules\Utilities\Entities\Gender::class,
        'factory'       => Modules\Utilities\Factories\GenderFactory::class,
    ],

    'position' => [
        'model'         => Modules\Utilities\Entities\Position::class,
        'factory'       => Modules\Utilities\Factories\PositionFactory::class,
    ],

    'job-title' => [
        'model'         => Modules\Utilities\Entities\JobTitle::class,
        'factory'       => Modules\Utilities\Factories\JobTitleFactory::class,
    ],

    'general-setting' => [
        'model'         => Modules\Utilities\Entities\Setting::class,
        'factory'       => Modules\Utilities\Factories\SettingFactory::class,
    ],

    'menu-tables' => [
        'model'         => Modules\Utilities\Entities\MenuTables::class,
        'factory'       => Modules\Utilities\Factories\MenuTablesFactory::class,
    ],

    /**
     *  Admin Module
     */
    'faculties' => [
        'model'         => Modules\Admin\Entities\Faculty::class,
        'factory'       => Modules\Admin\Factories\FacultyFactory::class,
    ],

    'labs' => [
        'model'         => Modules\Admin\Entities\Lab::class,
        'factory'       => Modules\Admin\Factories\LabFactory::class,
        'stopOperation' => ['store']
    ],

    'degrees' => [
        'model'         => Modules\Admin\Entities\Degree::class,
        'factory'       => Modules\Admin\Factories\DegreeFactory::class,
    ],

    'departments' => [
        'model'         => Modules\Admin\Entities\Department::class,
        'factory'       => Modules\Admin\Factories\DepartmentFactory::class,
    ],

    'courses' => [
        'model'         => Modules\Admin\Entities\Course::class,
        'factory'       => Modules\Admin\Factories\CourseFactory::class,
    ],

    'prerequisite' => [
        'model'         => Modules\Admin\Entities\PrerequisiteGroup::class,
        'factory'       => Modules\Admin\Factories\PrerequisiteFactory::class,
    ],

    'board-of-trustees' => [
        'model'         => Modules\Admin\Entities\Person::class,
        'factory'       => Modules\Admin\Factories\PersonFactory::class,
        'stopOperation' => ['store']
    ],

    'university-council' => [
        'model'         => Modules\Admin\Entities\Person::class,
        'factory'       => Modules\Admin\Factories\PersonFactory::class,
        'stopOperation' => ['store']
    ],

    'semester' => [
        'model'   => \Modules\Admin\Entities\Semester::class,
        'factory' => \Modules\Admin\Factories\SemesterFactory::class,
    ],

    'study-year' => [
        'model'   => \Modules\Admin\Entities\StudyYear::class,
        'factory' => \Modules\Admin\Factories\StudyYearFactory::class,
    ],

    'hierarchy-type' => [
        'model'   => \Modules\Admin\Entities\HierarchyType::class,
        'factory' => \Modules\Admin\Factories\HierarchyTypeFactory::class,
    ],
];
