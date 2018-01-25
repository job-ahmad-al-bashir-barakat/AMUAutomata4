<?php

Route::group([
    'middleware' => ['web'],
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

    Route::group(['prefix' => 'builder'], function () {
        Route::get('pages', 'BuilderController@pages')->name('pages');
        Route::post('pages', 'BuilderController@storePages');
        Route::get('modules/{tableName}/{pageId}/{objectId?}', 'BuilderController@getPages');

        Route::get('sliders', 'BuilderController@sliders')->name('sliders');
        Route::get('sliders/{slider}', 'BuilderController@slider')->name('slider-detail');

        Route::get('vertical-sliders', 'BuilderController@verticalSliders')->name('vertical-sliders');
        Route::get('vertical-sliders/{verticalSlider}', 'BuilderController@verticalSlider')->name('vertical-slider-detail');

        Route::get('blocks', 'BuilderController@blocks')->name('blocks');
        Route::get('blocks/{block}', 'BuilderController@block')->name('block-detail');

        Route::get('steps', 'BuilderController@steps')->name('steps');
        Route::get('text-cards', 'BuilderController@textCards')->name('text-cards');
    });

    Route::group(['prefix' => 'attribute'], function () {
        Route::get('html', 'AttributesController@attributeHtml');
    });

    Route::group(['prefix' => 'module'], function () {
        Route::get('attributes', 'ModulesController@attributeInput');
    });
    
    Route::get('{view}', 'UtilitiesController@table');
    Route::get('{view}/menu', 'UtilitiesController@menu');
    Route::put('{treeModel}/tree/order/{id?}', 'TreeController@order');
    Route::resource('{treeModel}/tree', 'TreeController');
    Route::post('{model}/{type}/upload' ,'UploadController@upload');
    Route::post('{model}/{type}/destroy' ,'UploadController@destroy');
    Route::get('{model}/{type}/upload' ,'UploadController@index');

//    Route::group([], function () {/*for super admin*/});
//    Route::group([], function () {/*for admin*/});
});