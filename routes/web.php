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
        $lang = app()->getLocale();
        return redirect("{$lang}/home");
    });

    Route::get('courses/{course}', function ($slug) {
        $courseId = getIdFromSlug($slug);

        $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
        $modules = \Modules\Utilities\Entities\BuilderPage::pageModules("course.{$courseId}.")->get()->pluck('module');
        $seo = \Modules\Utilities\Entities\Seo::pageSeo("course.{$courseId}.")->first();

        return view("modules", compact('menu', 'modules', 'seo'));
    });

    Route::get('university/staff/{person}', function ($slug) {
        $staffId = getIdFromSlug($slug);

        $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
        $modules = \Modules\Utilities\Entities\BuilderPage::pageModules("person.{$staffId}.")->get()->pluck('module');
        $seo = \Modules\Utilities\Entities\Seo::pageSeo("person.{$staffId}.")->first();

        return view("modules", compact('menu', 'modules', 'seo'));
    });

    Route::get('labs/{lab}', function ($slug) {
        $labId = getIdFromSlug($slug);

        $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
        $modules = \Modules\Utilities\Entities\BuilderPage::pageModules("lab.{$labId}.")->get()->pluck('module');
        $seo = \Modules\Utilities\Entities\Seo::pageSeo("lab.{$labId}.")->first();

        return view("modules", compact('menu', 'modules', 'seo'));
    });

    Route::get('news/{news}', function ($slug) {
        $newsId = getIdFromSlug($slug);

        $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
        $modules = \Modules\Utilities\Entities\BuilderPage::pageModules("news.{$newsId}.")->get()->pluck('module');
        $seo = \Modules\Utilities\Entities\Seo::pageSeo("news.{$newsId}.")->first();

        return view("modules", compact('menu', 'modules', 'seo'));
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

    Route::get('hierarchy/data', function () {
        $hierarchy = \Modules\Admin\Entities\Hierarchy::orderBy('order')->get()->toTree();
        $hierarchyJson = collect(call($hierarchy));
        return response()->json(collect($hierarchyJson)->first());
    });

    Route::get('university-offices1', function () {
        $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
        $modules = [];
        return view('page.university_offices', compact('modules', 'menu'));
    })->name('university_offices');

    Route::get('university-office-detail', function () {
        $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
        $modules = [];
        return view('page.university_offices_detail', compact('modules', 'menu'));
    })->name('university_offices_detail');

    Route::get('faculty/{faculty}/labs1', function () {
        $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
        $modules = [];
        return view('page.lab_detail', compact('modules', 'menu'));
    })->name('lab-detail');

    // Authentication Routes...
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

    // lockscreen Route
    Route::get('lockscreen', '\Modules\Utilities\Http\Controllers\LockScreenController@lock')->name('lock');
    Route::post('unlockscreen', '\Modules\Utilities\Http\Controllers\LockScreenController@unlock')->name('unlock');
});