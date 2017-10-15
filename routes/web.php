<?php


Route::group(
    [
        'middleware' => ['web', 'localeSessionRedirect', 'localizationRedirect'],
        'prefix' => LaravelLocalization::setLocale()
    ],
    function () {
        Route::get('/', function () {
            return view('welcome');
        });

        Route::get('home', function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->allLangs()->get()->toTree();
            return $menu;
            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view('modules')->withModules($modules);
        })->name('home');

        Route::get('university-message' ,function () {
            return view('page.university_message');
        });

        Route::get('contact' ,function () {
            return view('page.contact');
        });

        Route::get( 'university-in-glance',function () {
            return view('page.university_in_glance');
        });
    });