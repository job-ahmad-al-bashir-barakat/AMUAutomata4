<?php

Route::group([
    'middleware' => ['web', 'auth.basic'],
    'prefix' => 'server',
    'namespace' => 'Modules\Utilities\Http\Controllers'
], function () {
    Route::get('up','MaintenanceController@up');
    Route::get('down','MaintenanceController@down');
    Route::get('md5/{code}','MaintenanceController@md5');
});

Route::group(
    [
        'middleware' => ['web', 'localeSessionRedirect', 'localizationRedirect' ,'auth' ,'lock'],
        'prefix' => LaravelLocalization::setLocale() . '/utilities',
        'namespace' => 'Modules\Utilities\Http\Controllers'
    ],
function () {

    Route::get('test', function (){
        //return \Modules\Utilities\Entities\MenuTables::all();
//        $data = [];
//        DB::table('icons')->insert($data);
        return \Modules\Utilities\Entities\Icon::all();
    });

    Route::group(['prefix' => 'builder'], function ()
    {
        Route::get('pages', 'BuilderController@pages')->middleware('permission:page-builder')->name('pages');
        Route::post('pages', 'BuilderController@storePages')->middleware('permission:page-builder');

        Route::get('seo', 'BuilderController@getSeo')->middleware('permission:page-builder');
        Route::post('seo', 'BuilderController@storeSeo')->middleware('permission:page-builder');
        Route::put('seo', 'BuilderController@updateSeo')->middleware('permission:page-builder');

        Route::get('modules/{tableName}/{pageId}/{objectId?}', 'BuilderController@getPages');

        Route::get('sliders', 'BuilderController@sliders')->middleware('permission:sliders')->name('sliders');
        Route::get('sliders/{slider}', 'BuilderController@slider')->middleware('permission:sliders')->name('slider-detail');

        Route::get('vertical-sliders', 'BuilderController@verticalSliders')->middleware('permission:vertical-sliders')->name('vertical-sliders');
        Route::get('vertical-sliders/{verticalSlider}', 'BuilderController@verticalSlider')->middleware('permission:vertical-sliders')->name('vertical-slider-detail');

        Route::get('blocks', 'BuilderController@blocks')->middleware('permission:blocks')->name('blocks');
        Route::get('blocks/{block}', 'BuilderController@block')->middleware('permission:blocks')->name('block-detail');

        Route::get('steps', 'BuilderController@steps')->middleware('permission:steps')->name('steps');

        Route::get('text-cards', 'BuilderController@textCards')->middleware('permission:text-cards')->name('text-cards');

        Route::get('galleries', 'BuilderController@galleries')->middleware('permission:galleries')->name('galleries');
    });

    Route::group(['prefix' => 'attribute'], function () {
        Route::get('html', 'AttributesController@attributeHtml');
    });

    Route::group(['prefix' => 'module'], function () {
        Route::get('attributes', 'ModulesController@attributeInput');
    });

    Route::group(['middleware' => ['permission:automata']], function () {
        Route::get('schema-tables', 'UtilitiesController@table')->name('table.schema-tables');
        Route::get('tables', 'UtilitiesController@table')->name('table.tables');
        Route::get('attributes', 'UtilitiesController@table')->name('table.attributes');
        Route::get('modules', 'UtilitiesController@table')->name('table.modules');
        Route::get('permissions', 'UtilitiesController@table')->name('table.permissions');
    });

    Route::get('langs', 'UtilitiesController@table')->middleware('permission:languages')->name('table.langs');
    Route::get('icons', 'UtilitiesController@table')->middleware('permission:icons')->name('table.icons');
    Route::get('pages', 'UtilitiesController@table')->middleware('permission:pages')->name('table.pages');
    Route::get('roles', 'UtilitiesController@table')->middleware('permission:roles')->name('table.roles');
    Route::get('users', 'UtilitiesController@table')->middleware('permission:users')->name('table.users');
    Route::get('custom-modules', 'UtilitiesController@table')->middleware('permission:custom-modules')->name('table.custom-modules');
    Route::get('general-setting', 'UtilitiesController@table')->middleware('permission:general-setting')->name('table.general-setting');
    Route::get('social-network', 'UtilitiesController@table')->middleware('permission:social-network')->name('table.social-network');
    Route::get('gender', 'UtilitiesController@table')->middleware('permission:gender')->name('table.gender');
    Route::get('position', 'UtilitiesController@table')->middleware('permission:position')->name('table.position');
    Route::get('job-title', 'UtilitiesController@table')->middleware('permission:job-title')->name('table.job-title');


    Route::get('menu-tables', 'UtilitiesController@table')->middleware('permission:automata')->name('table.menu-tables');
    Route::get('general/menu', 'UtilitiesController@menu')->middleware('permission:website-menu')->name('menu.general');
    Route::get('control/menu', 'UtilitiesController@menu')->middleware('permission:control-panel-menu')->name('menu.control');

    Route::put('{treeModel}/tree/order/{id?}', 'TreeController@order');
    Route::resource('{treeModel}/tree', 'TreeController');

    Route::post('{model}/{type}/upload' ,'UploadController@upload');
    Route::post('{model}/{type}/destroy' ,'UploadController@destroy');
    Route::get('{model}/{type}/upload' ,'UploadController@index');
});