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
 *  repository        : the default repository is  modelRepository unless you add you own repository property
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
        'factory' => Modules\Utilities\Factories\ModuleFactory::class
    ],

    'social-network' => [
        'model'         => Modules\Utilities\Entities\SocialNetwork::class,
        'factory'       => Modules\Utilities\Factories\SocialNetworkFactory::class,
    ],

    'gender' => [
        'model'         => Modules\Utilities\Entities\Gender::class,
        'factory'       => Modules\Utilities\Factories\GenderFactory::class,
    ],

    'general-setting' => [
        'model'         => Modules\Utilities\Entities\Setting::class,
        'factory'       => Modules\Utilities\Factories\SettingFactory::class,
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

    'prerequisite-courses' => [
        'model'         => Modules\Admin\Entities\Course::class,
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

    'position' => [
        'model'         => Modules\Admin\Entities\Position::class,
        'factory'       => Modules\Admin\Factories\PositionFactory::class,
    ],

    'job-title' => [
        'model'         => Modules\Admin\Entities\JobTitle::class,
        'factory'       => Modules\Admin\Factories\JobTitleFactory::class,
    ],

    'semester' => [
        'model'   => \Modules\Admin\Entities\Semester::class,
        'factory' => \Modules\Admin\Factories\SemesterFactory::class,
    ],

    'study-year' => [
        'model'   => \Modules\Admin\Entities\StudyYear::class,
        'factory' => \Modules\Admin\Factories\StudyYearFactory::class,
    ],
];
