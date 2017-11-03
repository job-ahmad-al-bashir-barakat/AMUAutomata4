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

        // faculties -- Message & Goals -- this is same as university in glance
        //admission rules   ||| Text :: this is same as university in glance
        //admission way     ||| Text :: this is same as university in glance
        //fees              ||| Text :: this is same as university in glance
        //scholarship       ||| Text :: this is same as university in glance

        //university calendar ||| coming soon
        //Courses List        ||| coming soon
        //Exams               ||| coming soon
        //News                ||| coming soon

        Route::get('contact-us' ,function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view('modules' ,compact('modules', 'menu'));
        })->name('contact_us');

        Route::get('university-message' ,function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
//            return view('page.university_message' ,compact('modules', 'menu'));
            return view('modules' ,compact('modules', 'menu'));
        })->name('university_message');

        Route::get('university-in-glance',function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
//            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view('page.university_in_glance'  ,compact('modules', 'menu'));
        });

        Route::get('university-council' ,function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view('modules'  ,compact('modules', 'menu'));
        })->name('university_council');

        Route::get('university-council-detail' ,function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
//            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view('page.university_council_detail'  ,compact('modules', 'menu'));
        });
        Route::get('trusted-council' ,function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = [];
            return view('page.trusted_council'  ,compact('modules', 'menu'));
        });

        Route::get('trusted-council-detail' ,function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
//            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view('page.trusted_council_detail'  ,compact('modules', 'menu'));
        });

        Route::get('university-partner' ,function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
//            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view('page.university_partner'  ,compact('modules', 'menu'));
        });

        // -- labs : same as university-offices and university-offices-detail
        Route::get('university-offices' ,function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = [];
            return view('page.university_offices'  ,compact('modules', 'menu'));
        });

        Route::get('university-offices-detail' ,function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = [];
            return view('page.university_offices_detail'  ,compact('modules', 'menu'));
        });

        Route::get('error-404' ,function () {
            return view('page.404');
        });

        Route::get('gallery' ,function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
//            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view('page.gallery' ,compact('modules', 'menu'));
        });

        Route::get('coming-soon' ,function () {
            return view('page.coming_soon');
        });

        Route::get('news' ,function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
//            $modules = \Modules\Utilities\Entities\BuilderPage::pageModules()->get()->pluck('module');
            return view('page.news'  ,compact('modules', 'menu'));
        });

        function call ($hierarchy) {
            $obj = [];
            foreach ($hierarchy as $index => $item) {
                $obj[$index]['name'] = $item->lang_name[App::getLocale()]['text'];
                if($item->children->count()){
                    $obj[$index]['children'] = call($item->children);
                } else {
                    $obj[$index]['size'] = rand(10,1000);
                }
            }
            return $obj;
        }

        Route::get('hierarchy' ,function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = [];

            return view('page.hierarchy' ,compact('modules', 'menu' ));
        });

        Route::get('hierarchy/data' ,function () {
            $hierarchy = \Modules\Admin\Entities\Hierarchy::orderBy('order')->get()->toTree();
            $hierarchyJson = collect(call($hierarchy));
            return response()->json(collect($hierarchyJson)->first());
        });

        Route::get('degrees' ,function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = [];
            $degrees = \Modules\Admin\Entities\Degree::all();
            return view('page.degrees' ,compact('modules', 'menu' ,'degrees' ));
        });

        Route::get('courses' ,function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = [];
            $courses = \Modules\Admin\Entities\Course::with(['degree' ,'department' ,'prerequisiteGroup.courses'])->get();

            return view('page.courses' ,compact('modules', 'menu', 'courses'));
        });

        Route::get('labs' ,function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = [];

            return view('page.labs' ,compact('modules', 'menu' ));
        });

        Route::get('instructors' ,function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = [];

            return view('page.instructors'  ,compact('modules', 'menu' ));
        });

        Route::get('location' ,function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = [];

            return view('page.location'  ,compact('modules', 'menu' ));
        });

        Route::get('study-plan' ,function () {
            $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
            $modules = [];

            $studyYears = \Modules\Admin\Entities\Course::with(['degree' ,'department' ,'semester' ,'facultyStudyYear.studyYear'])->where('faculty_id' ,'=' ,6)->whereNotNull('faculty_study_year_id')->whereNotNull('semester_id')->get();

            $degrees = $studyYears->pluck('degree.lang_name.'.App::getLocale().'.text' ,'degree_id');

            $studyYears = $studyYears->sortBy(function ($item) {
                return $item->faculty_study_year_id;
            })->groupBy(function ($item) {
                return $item->facultyStudyYear->studyYear->lang_name[App::getLocale()]['text'];
            })->map(function ($item) {
                return $item->sortBy(function ($item) {
                    return $item->semester_id;
                })->groupBy(function ($item) {
                    return $item->semester->lang_name[App::getLocale()]['text'];
                });
            });

            return view('page.study_plan'  ,compact('modules', 'menu' ,'studyYears' ,'studyYearsCount' ,'degrees' ,'departments'));
        });

        // Authentication Routes...
        $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
        $this->post('login', 'Auth\LoginController@login');
        $this->post('logout', 'Auth\LoginController@logout')->name('logout');

        // Registration Routes...
        $this->get('register', function (){
            return Redirect::route('login');
        });

        // Password Reset Routes...
        $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
        $this->post('password/reset', 'Auth\ResetPasswordController@reset');
    });