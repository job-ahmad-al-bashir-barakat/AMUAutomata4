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

    'permissions' => [
        'model'         => Modules\Utilities\Entities\Permission::class,
        'factory'       => Modules\Utilities\Factories\PermissionFactory::class,
    ],

    'roles' => [
        'model'         => Modules\Utilities\Entities\Role::class,
        'factory'       => Modules\Utilities\Factories\RoleFactory::class,
    ],

    'langs' => [
        'model'         => Modules\Utilities\Entities\Lang::class,
        'factory'       => Modules\Utilities\Factories\LangFactory::class,
    ],

    'tables' => [
        'model'         => Modules\Utilities\Entities\Table::class,
        'factory'       => Modules\Utilities\Factories\TableFactory::class,
    ],

    'language-tables' => [
        'model'         => Modules\Utilities\Entities\LanguageTable::class,
        'factory'       => Modules\Utilities\Factories\LanguageTableFactory::class,
    ],

    'schema-tables' => [
        'model'         => Modules\Utilities\Entities\Table::class,
        'factory'       => Modules\Utilities\Factories\SchemaTableFactory::class,
    ],

    'schema-language-tables' => [
        'model'         => Modules\Utilities\Entities\LanguageTable::class,
        'factory'       => Modules\Utilities\Factories\SchemaLanguageTableFactory::class,
    ],

    'attributes' => [
        'model'         => Modules\Utilities\Entities\Attribute::class,
        'factory'       => Modules\Utilities\Factories\AttributeFactory::class,
    ],

    'modules' => [
        'model'         => Modules\Utilities\Entities\Module::class,
        'factory'       => Modules\Utilities\Factories\ModuleFactory::class
    ],

    'galleries' => [
        'model'         => Modules\Utilities\Entities\Gallery::class,
        'factory'       => Modules\Utilities\Factories\GalleryFactory::class
    ],

    'event-groups' => [
        'model'         => Modules\Utilities\Entities\EventGroup::class,
        'factory'       => Modules\Utilities\Factories\EventGroupFactory::class
    ],

    'events' => [
        'model'         => Modules\Utilities\Entities\Event::class,
        'factory'       => Modules\Utilities\Factories\EventsFactory::class
    ],

    'footers' => [
        'model'         => Modules\Utilities\Entities\Footer::class,
        'factory'       => Modules\Utilities\Factories\FooterFactory::class
    ],

    'footers-links' => [
        'model'         => Modules\Utilities\Entities\FooterLink::class,
        'factory'       => Modules\Utilities\Factories\FooterLinksFactory::class
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

    'cards' => [
        'model'         => Modules\Utilities\Entities\Card::class,
        'factory'       => Modules\Utilities\Factories\CardFactory::class
    ],

    'links' => [
        'model'         => Modules\Utilities\Entities\Link::class,
        'factory'       => Modules\Utilities\Factories\LinkFactory::class
    ],

    'steps' => [
        'model'         => Modules\Utilities\Entities\Step::class,
        'factory'       => Modules\Utilities\Factories\StepFactory::class
    ],

    'text-cards' => [
        'model'         => Modules\Utilities\Entities\TextCard::class,
        'factory'       => Modules\Utilities\Factories\TextCardFactory::class
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

    /**
     *  Admin Module
     */
    'faculties' => [
        'model'         => Modules\Admin\Entities\Faculty::class,
        'factory'       => Modules\Admin\Factories\FacultyFactory::class,
    ],

    'campuses'  => [
        'model'         => Modules\Admin\Entities\Campus::class,
        'factory'       => Modules\Admin\Factories\CampusFactory::class,
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

    'course-books' => [
        'model'         => Modules\Admin\Entities\CourseBook::class,
        'factory'       => Modules\Admin\Factories\CourseBookFactory::class,
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

    'management-staff' => [
        'model'         => Modules\Admin\Entities\Person::class,
        'factory'       => Modules\Admin\Factories\PersonFactory::class,
        'stopOperation' => ['store']
    ],

    'staff' => [
        'model'         => Modules\Admin\Entities\Person::class,
        'factory'       => Modules\Admin\Factories\PersonFactory::class,
        'stopOperation' => ['store']
    ],

    'researches' => [
        'model'         => Modules\Admin\Entities\Research::class,
        'factory'       => Modules\Admin\Factories\ResearchFactory::class,
    ],

    'offices' => [
      'model'   => \Modules\Admin\Entities\UniversityOffice::class,
      'factory' => \Modules\Admin\Factories\UniversityOfficeFactory::class,
      'stopOperation' => ['store' ,'update']
    ],

    'partners' => [
        'model'   => \Modules\Admin\Entities\Partner::class,
        'factory' => \Modules\Admin\Factories\UniversityPartnerFactory::class,
        'stopOperation' => ['store']
    ],

    'contact-addresses' => [
        'model'    => \Modules\Admin\Entities\Contact::class,
        'factory'  => \Modules\Admin\Factories\ContactAddressesFactory::class,
        'stopOperation' => ['store' ,'update' ,'destroy']
    ],

    'contact-numbers' => [
        'model'   => \Modules\Admin\Entities\Contact::class,
        'factory' => \Modules\Admin\Factories\ContactNumbersFactory::class,
        'stopOperation' => ['store' ,'update' ,'destroy']
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

    'status' => [
        'model'   => \Modules\Admin\Entities\Status::class,
        'factory' => \Modules\Admin\Factories\StatusFactory::class,
    ],

    'news' => [
        'model'   => \Modules\Admin\Entities\News::class,
        'factory' => \Modules\Admin\Factories\NewsFactory::class,
    ],

    'tenders' => [
        'model'   => \Modules\Admin\Entities\Tender::class,
        'factory' => \Modules\Admin\Factories\TendersFactory::class,
    ],

    'list' => [
        'model'   => \Modules\Utilities\Entities\MenuList::class,
        'factory' => \Modules\Utilities\Factories\MenuListFactory::class,
    ],
];
