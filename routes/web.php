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

        //admission rules   ||| Text :: this is same as university in glance
        //admission way     ||| Text :: this is same as university in glance
        //fees              ||| Text :: this is same as university in glance
        //scholarship       ||| Text :: this is same as university in glance

        //university calendar ||| coming soon
        //Courses List        ||| coming soon
        //Exams               ||| coming soon
        //News                ||| coming soon

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

        Route::get('university-offices' ,function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view('page.university_offices'  ,compact('modules', 'menu'));
        });

        Route::get('error-404' ,function () {
            return view('page.404');
        });

        Route::get('gallery' ,function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view('page.gallery' ,compact('modules', 'menu'));
        });

        Route::get('coming-soon' ,function () {
            return view('page.coming_soon');
        });

        Route::get('news' ,function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view('page.news'  ,compact('modules', 'menu'));
        });

        //faculties
        //-- Message & Goals -- this is same as university in glance
        //location
        //hierarchy

        // work now
        Route::get('hierarchy' ,function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            $hierarchy = \Modules\Admin\Entities\Hierarchy::orderBy('order')->get()->toTree();
            return view('page.hierarchy' ,compact('modules', 'menu' ,'hierarchy'));
        });

    });