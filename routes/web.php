<?php

Route::get('test', function () {
    return \Modules\Utilities\Entities\SchemaLanguageTable::with(['languageTable'])->tablesOf('users')->get();
});

Route::group(
    [
        'middleware' => ['web', 'localeSessionRedirect', 'localizationRedirect'],
        'prefix' => LaravelLocalization::setLocale()
    ],
    function () {
        Route::get('load-more/{model}', 'LoadMoreController@getHtml');

        Route::get('/', function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            return view('welcome')->withMenu($menu);
        })->name('home');

        Route::get('home', function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view('modules', compact('modules', 'menu'));
        })->name('home');

        /*
         * Temp By Ahmed
         */

        // faculties -- Message & Goals -- this is same as university in glance
        //admission rules   ||| Text :: this is same as university in glance
        //admission way     ||| Text :: this is same as university in glance
        //fees              ||| Text :: this is same as university in glance
        //scholarship       ||| Text :: this is same as university in glance

        //university calendar ||| coming soon
        //Courses List        ||| coming soon
        //Exams               ||| coming soon
        //News                ||| coming soon

        Route::get('contact-us', function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view('modules', compact('modules', 'menu'));
        })->name('contact_us');

        Route::get('university-message', function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
//            return view('page.university_message' ,compact('modules', 'menu'));
            return view('modules', compact('modules', 'menu'));
        })->name('university_message');

        Route::get('university-in-glance', function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
//            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view('page.university_in_glance', compact('modules', 'menu'));
        });

        Route::get('university-council', function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view('modules', compact('modules', 'menu'));
        })->name('university_council');

        Route::get('university/staff/{person}', function () {//university-council-detail
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view(/*'page.university_council_detail'*/
                'modules', compact('modules', 'menu'));
        })->name('person');

        Route::get('trusted-council', function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view('modules', compact('modules', 'menu'));
        })->name('trusted_council');
        /*
                Route::get('trusted-council-detail' ,function () {
                    $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
        //            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
                    return view('page.trusted_council_detail'  ,compact('modules', 'menu'));
                })->name('person');*/

        Route::get('university-partner', function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view('modules', compact('modules', 'menu'));
        })->name('university_partner');

        // -- labs : same as university-offices and university-offices-detail
        Route::get('university-offices', function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = [];
            return view('page.university_offices', compact('modules', 'menu'));
        })->name('university_offices');

        Route::get('university-offices-detail', function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = [];
            return view('page.university_offices_detail', compact('modules', 'menu'));
        });

        Route::get('gallery', function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
//            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view('page.gallery', compact('modules', 'menu'));
        });

        Route::get('coming-soon', function () {
            return view('page.coming_soon');
        });

        Route::get('news', function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
//            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view('page.news', compact('modules', 'menu'));
        });

        function call($hierarchy)
        {
            $obj = [];
            foreach ($hierarchy as $index => $item) {
                $obj[$index]['name'] = $item->lang_name[App::getLocale()]['text'];
                if ($item->children->count()) {
                    $obj[$index]['children'] = call($item->children);
                } else {
                    $obj[$index]['size'] = rand(10, 1000);
                }
            }
            return $obj;
        }

        Route::get('hierarchy', function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = [];

            return view('page.hierarchy', compact('modules', 'menu'));
        });

        Route::get('hierarchy/data', function () {
            $hierarchy = \Modules\Admin\Entities\Hierarchy::orderBy('order')->get()->toTree();
            $hierarchyJson = collect(call($hierarchy));
            return response()->json(collect($hierarchyJson)->first());
        });

        Route::get('faculty/{faculty}/degrees', function ($faculty) {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view('modules', compact('modules', 'menu', 'degrees'));
        })->name('degrees');

        Route::get('faculty/{faculty}/courses', function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            //$courses = \Modules\Admin\Entities\Course::with(['degree' ,'department' ,'prerequisiteGroup.courses'])->get();
            return view('modules', compact('modules', 'menu'));
        })->name('courses');

        Route::get('faculty/{faculty}/labs', function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = [];
            return view('page.labs', compact('modules', 'menu'));
        })->name('labs');

        Route::get('faculty/{faculty}/instructors', function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view('modules', compact('modules', 'menu'));
        })->name('instructors');

        Route::get('location', function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = [];

            return view('page.location', compact('modules', 'menu'));
        });

        Route::get('faculty/{faculty}/study-plan', function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view('modules', compact('modules', 'menu'));
        })->name('study_plan');

        // Authentication Routes...
        $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
        $this->post('login', 'Auth\LoginController@login');
        $this->post('logout', 'Auth\LoginController@logout')->name('logout');
        $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
        $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

        // lockscreen Route
        Route::get('lockscreen', '\Modules\Utilities\Http\Controllers\LockScreenController@lock')->name('lock');
        Route::post('unlockscreen', '\Modules\Utilities\Http\Controllers\LockScreenController@unlock')->name('unlock');
    });