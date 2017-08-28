<?php

Route::group(
    [
        'middleware' => ['web', 'localeSessionRedirect', 'localizationRedirect'],
        'prefix'     => LaravelLocalization::setLocale().'/admin',
        'namespace'  => 'Modules\Admin\Http\Controllers'
    ],
function() {

    Route::get('/', 'AdminController@index');

    Route::resource('study-plan' ,'StudyPlanController');

    Route::get('{view}/menu' ,'AdminController@menu');

    Route::get('{view}','AdminController@table');

    Route::get('{id}/{view}','AdminController@subTable');
});
