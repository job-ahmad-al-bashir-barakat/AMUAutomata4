<?php

Route::group(
    [
        'middleware' => ['web', 'localeSessionRedirect', 'localizationRedirect'],
        'prefix' => LaravelLocalization::setLocale() . '/utilities',
        'namespace' => 'Modules\Utilities\Http\Controllers'
    ],
    function () {
        Route::get('website-routes', 'RoutesController@index');

        Route::group(['prefix' => 'attribute'], function () {
            Route::get('html', 'AttributesController@attributeHtml');
        });

        Route::group(['prefix' => 'module'], function () {
            Route::get('attributes', 'ModulesController@attributeInput');
        });

        Route::get('{view}', 'UtilitiesController@table');
        Route::get('{view}/menu', 'UtilitiesController@menu');
        Route::resource('{treeModel}/tree', 'TreeController');

        Route::group([], function () {/*for super admin*/});
        Route::group([], function () {/*for admin*/});
    });