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

        Route::get('university-message' ,function () {
            return view('page.university_message');
        });

        Route::get('contact' ,function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            return view('page.contact', compact('menu'));
        });

        Route::get( 'university-in-glance',function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            return view('page.university_in_glance', compact('menu'));
        });

        Route::get('university-council' ,function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            return view('page.university_council', compact('menu'));

        });
    });