<?php

Route::group(
    [
        'middleware' => ['web', 'localeSessionRedirect', 'localizationRedirect' ,'auth'],
        'prefix' => LaravelLocalization::setLocale() . '/utilities',
        'namespace' => 'Modules\Utilities\Http\Controllers'
    ],
function () {

    Route::get('test', function (){
//        $data = [];
//        DB::table('icons')->insert($data);
        return \Modules\Utilities\Entities\Icon::all();
    });

    Route::group(['prefix' => 'builder'], function () {
        Route::get('pages', 'BuilderController@pages');
        Route::post('pages', 'BuilderController@storePages');
        Route::get('modules/{pageId}', 'BuilderController@getPages');

        Route::get('sliders', 'BuilderController@sliders');
        Route::get('sliders/{slider}', 'BuilderController@slider');

        Route::get('vertical-sliders', 'BuilderController@verticalSliders');
        Route::get('vertical-sliders/{verticalSlider}', 'BuilderController@verticalSlider');

        Route::get('blocks', 'BuilderController@blocks');
        Route::get('blocks/{block}', 'BuilderController@block');

        Route::get('steps', 'BuilderController@steps');
        Route::get('text-cards', 'BuilderController@textCards');
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
    Route::get('{model}/{type}/ratio' ,'UploadController@ratio');

//    Route::group([], function () {/*for super admin*/});
//    Route::group([], function () {/*for admin*/});
});