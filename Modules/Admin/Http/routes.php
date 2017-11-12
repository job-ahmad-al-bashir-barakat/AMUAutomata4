<?php

Route::group(
    [
        'middleware' => ['web', 'localeSessionRedirect', 'localizationRedirect' ,'auth' ,'lock'],
        'prefix'     => LaravelLocalization::setLocale().'/admin',
        'namespace'  => 'Modules\Admin\Http\Controllers'
    ],
function() {

    Route::get('/', 'AdminController@index')->name('home');

    Route::resource('study-plan' ,'StudyPlanController' ,[
        'names' => [
            'index' => 'study-plan',
        ]
    ]);

    Route::get('{view}/menu' ,'AdminController@menu');

    Route::get('{view}','AdminController@table');

    Route::get('{id}/{view}','AdminController@subTable');
});
