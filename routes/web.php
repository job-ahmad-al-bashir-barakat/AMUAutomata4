<?php
Route::get('test', function () {
    /*return \Modules\Utilities\Entities\CustomModule::whereIn('module_id',
            \Modules\Utilities\Entities\Module::where('customized', true)->pluck('id')
        )->delete();
    return view('test');
    return \Modules\Utilities\Entities\SchemaLanguageTable::with(['languageTable'])->tablesOf('users')->get();*/
    return \Modules\Utilities\Entities\ActivityLog::with(['subject', 'causer'])->get();
    return ['empty' => 'there is nothing set to do'];
});

Route::group(
    [
        'middleware' => ['web', 'localeSessionRedirect', 'localizationRedirect', 'translateDynamicRoute'],
        'prefix' => LaravelLocalization::setLocale()
    ],
    function () {
        Route::get('load-more/{model}', 'LoadMoreController@getHtml');

        Route::get('/', function () {
            $lang = app()->getLocale();
            return redirect("{$lang}/home");
        });

        Route::get('courses/{course}', function ($slug) {
            return returnPageModule($slug, 'course');
        });

        Route::get('university/staff/{person}', function ($slug) {
            return returnPageModule($slug, 'person');
        });

        Route::get('labs/{lab}', function ($slug) {
            return returnPageModule($slug, 'lab');
        });

        Route::get('news/{news}', function ($slug) {
            return returnPageModule($slug, 'news');
        });

        if (!function_exists('call')) {

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
        }

        Route::get('hierarchy/data', function () {
            $hierarchy = \Modules\Admin\Entities\Hierarchy::orderBy('order')->get()->toTree();
            $hierarchyJson = collect(call($hierarchy));
            return response()->json(collect($hierarchyJson)->first());
        });

        if (function_exists('makeTempHierarchy')) {

            function makeTempHierarchy($hierarchy)
            {
                // $obj = [];
                $html = '';
                foreach ($hierarchy as $index => $item) {
                    $html .= view('page._hierarchy',compact('item'))->render();
                    // $obj[$index]['name'] = $item->lang_name[App::getLocale()]['text'];
                    if ($item->children->count()) {
                        // $obj[$index]['children'] = makeTempHierarchy($item->children);
                        $html .= makeTempHierarchy($item->children);
                    }
                }
                return $html;
            }
        }

        Route::get('hierarchy-page', function () {
            $footer = getFooter();
            $menu = [];
            $modules = [];
            $hierarchy = \Modules\Admin\Entities\Hierarchy::all();
            $hierarchyType = $hierarchy->groupBy('hierarchyType.code');
            $hierarchy = makeTempHierarchy($hierarchy->toTree());

            return view('page.hierarchy', compact('hierarchyType','hierarchy','modules', 'menu', 'footer'));
        })->name('hierarchy-page');

        Route::get('university-offices1', function () {
            $menu = [];
            $footer = getFooter();
            $modules = [];
            return view('page.university_offices', compact('modules', 'menu', 'footer'));
        })->name('university_offices');

        Route::get('university-office-detail', function () {
            $menu = [];
            $footer = getFooter();
            $modules = [];
            return view('page.university_offices_detail', compact('modules', 'menu', 'footer'));
        })->name('university_offices_detail');

        Route::get('faculty/{faculty}/labs1', function () {
            $menu = [];
            $footer = getFooter();
            $modules = [];
            return view('page.lab_detail', compact('modules', 'menu', 'footer'));
        })->name('lab-detail');

        // Authentication Routes...
        Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
        Route::get('login/{user}', 'Auth\LoginController@loginAs')->middleware('permission:automata')->name('login-as');
        Route::post('login', 'Auth\LoginController@login');
        Route::post('logout', 'Auth\LoginController@logout')->name('logout');
        Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
        Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

        // lockscreen Route
        Route::get('lockscreen', '\Modules\Utilities\Http\Controllers\LockScreenController@lock')->name('lock');
        Route::post('unlockscreen', '\Modules\Utilities\Http\Controllers\LockScreenController@unlock')->name('unlock');
    });

Route::group([
    'middleware' => [
        'auth',
        'web',
        '\UniSharp\LaravelFilemanager\Middlewares\MultiUser',
        '\UniSharp\LaravelFilemanager\Middlewares\CreateDefaultFolder',
    ],
    'prefix'     => LaravelLocalization::setLocale(). '/laravel-filemanager'
], function () {
    Route::get('/', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show')->name('');
    Route::get('/errors', '\UniSharp\LaravelFilemanager\Controllers\LfmController@getErrors')->name('getErrors');
    Route::any('/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload')->name('upload');
    Route::get('/jsonitems', '\UniSharp\LaravelFilemanager\Controllers\ItemsController@getItems')->name('getItems');
    Route::get('/newfolder', '\UniSharp\LaravelFilemanager\Controllers\FolderController@getAddfolder')->name('getAddfolder');
    Route::get('/deletefolder', '\UniSharp\LaravelFilemanager\Controllers\FolderController@getDeletefolder')->name('getDeletefolder');
    Route::get('/folders', '\UniSharp\LaravelFilemanager\Controllers\FolderController@getFolders')->name('getFolders');
    Route::get('/crop', '\UniSharp\LaravelFilemanager\Controllers\CropController@getCrop')->name('getCrop');
    Route::get('/cropimage', '\UniSharp\LaravelFilemanager\Controllers\CropController@getCropimage')->name('getCropimage');
    Route::get('/cropnewimage', '\UniSharp\LaravelFilemanager\Controllers\CropController@getNewCropimage')->name('getNewCropimage');
    Route::get('/rename', '\UniSharp\LaravelFilemanager\Controllers\RenameController@getRename')->name('getRename');
    Route::get('/resize', '\UniSharp\LaravelFilemanager\Controllers\ResizeController@getResize')->name('getResize');
    Route::get('/doresize', '\UniSharp\LaravelFilemanager\Controllers\ResizeController@performResize')->name('performResize');
    Route::get('/download', '\UniSharp\LaravelFilemanager\Controllers\DownloadController@getDownload')->name('getDownload');
    Route::get('/delete', '\UniSharp\LaravelFilemanager\Controllers\DeleteController@getDelete')->name('getDelete');
});

if (!function_exists('getMenuTree')) {
    function getMenuTree($id = null, $color = null, $logoPath = null)
    {
        $query = \Modules\Utilities\Entities\MenuList::with(['siteMenu' => function ($query) {
            $query->orderBy('order');
        }]);

        if (is_null($id)) {
            $query->where('is_default', true);
        } else {
            $query->where('id', $id);
        }

        return [
            'menu' => $query->get()->first()->siteMenu->toTree(),
            'color' => $color,
            'logoPath' => $logoPath,
        ];
    }
}
if (!function_exists('getPageMenu')) {
    function getPageMenu($pageName)
    {
        $menuPage = \Modules\Utilities\Entities\MenuPage::pageMenu($pageName)->first();
        if ($menuPage && $menuPage->count()) {
            $color = $menuPage->color;
            $logoPath = null;
            if ($menuPage->logoPath) {
                $logoPath = $menuPage->logoPath;
            }
            return getMenuTree($menuPage->menu_id, $color, $logoPath);
        }
        return getMenuTree();
    }
}

if (!function_exists('getFooter')) {

    function getFooter()
    {
        return \Modules\Utilities\Entities\Footer::with(['footerLinks', 'contact', 'image'])->where('is_default', true)->get()->first();
    }
}

function returnPageModule($slug, $morphCode)
{
    $id = getIdFromSlug($slug);
    $data = getPageMenu("{$morphCode}.{$id}.");
    $menu = $data['menu'];
    $color = $data['color'];
    $logoPath = $data['logoPath'];
    $footer = getFooter();
    $modules = \Modules\Utilities\Entities\BuilderPage::pageModules("{$morphCode}.{$id}.")->get()->pluck('module');
    $seo = \Aut\SeoBuilder\Entities\Seo::pageSeo("{$morphCode}.{$id}.")->first();

    return view("modules", compact('menu', 'modules', 'seo', 'footer', 'color', 'logoPath'));
}