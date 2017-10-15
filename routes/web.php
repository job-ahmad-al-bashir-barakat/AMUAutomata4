<?php


Route::group(
    [
        'middleware' => ['web', 'localeSessionRedirect', 'localizationRedirect'],
        'prefix' => LaravelLocalization::setLocale()
    ],
    function () {
        Route::get('/', function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            return view('welcome')->withMenu($menu);
        });

        Route::get('home', function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view('modules', compact('modules', 'menu'));
        })->name('home');


        /*
         * Temp By Ahmed
         */
        Route::get('contact' ,function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view('page.contact' ,compact('modules', 'menu'));
        });

        Route::get('university-message' ,function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view('page.university_message' ,compact('modules', 'menu'));
        });

        /**
         * Text
         */
        //admission rules   ||| this is same as university in glance
        //admission way     ||| this is same as university in glance
        //fees              ||| this is same as university in glance
        //scholarship       ||| this is same as university in glance
        Route::get( 'university-in-glance',function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view('page.university_in_glance'  ,compact('modules', 'menu'));
        });

        Route::get('university-council' ,function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view('page.university_council'  ,compact('modules', 'menu'));
        });

        Route::get('university-council-detail' ,function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view('page.university_council_detail'  ,compact('modules', 'menu'));
        });

        Route::get('trusted-council' ,function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view('page.trusted_council'  ,compact('modules', 'menu'));
        });

        Route::get('trusted-council-detail' ,function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view('page.trusted_council_detail'  ,compact('modules', 'menu'));
        });

        Route::get('university-partner' ,function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view('page.university_partner'  ,compact('modules', 'menu'));
        });

        Route::get('error-404' ,function () {
            return view('page.404');
        });

        //Gallery
        //university_partner
        //university_offices
        //faculties
        //login
        //register
        //mega menu

        /**
         * Coming Soon
         */
        Route::get('coming-soon' ,function () {
            return view('page.coming_soon');
        });

        Route::get('news' ,function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view('page.news'  ,compact('modules', 'menu'));
        });

        //university calendar ||| coming soon
        //Courses List        ||| coming soon
        //Exams               ||| coming soon
        //News                ||| coming soon
    });