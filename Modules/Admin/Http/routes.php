<?php

Route::group(
[
    'middleware' => ['web', 'localeSessionRedirect', 'localizationRedirect', 'auth', 'lock'],
    'prefix' => LaravelLocalization::setLocale() . '/admin',
    'namespace' => 'Modules\Admin\Http\Controllers'
],
function ()
{
    Route::get('/', 'AdminController@index')->name('home');

    Route::resource('study-plan', 'StudyPlanController', [
        'names' => [
            'index' => 'study-plan',
        ],
        'middleware' => [
            'permission:study-plan',
        ],
    ]);

    Route::get('faculties', 'AdminController@table')->middleware('permission:faculties')->name('table.faculties');
    Route::get('campuses', 'AdminController@table')->middleware('permission:campuses')->name('table.campuses');
    Route::get('departments', 'AdminController@table')->middleware('permission:departments')->name('table.departments');
    Route::get('degrees', 'AdminController@table')->middleware('permission:degrees')->name('table.degrees');
    Route::get('offices', 'AdminController@table')->middleware('permission:offices')->name('table.offices');
    Route::get('partners', 'AdminController@table')->middleware('permission:partners')->name('table.partners');
    Route::get('university-council', 'AdminController@table')->middleware('permission:university-council')->name('table.university-council');
    Route::get('board-of-trustees', 'AdminController@table')->middleware('permission:board-of-trustees')->name('table.board-of-trustees');
    Route::get('staff', 'AdminController@table')->middleware('permission:staff')->name('table.staff');
    Route::get('study-year', 'AdminController@table')->middleware('permission:study-year')->name('table.study-year');
    Route::get('semester', 'AdminController@table')->middleware('permission:semester')->name('table.semester');
    Route::get('hierarchy-type', 'AdminController@table')->middleware('permission:hierarchy-type')->name('table.hierarchy-type');
    Route::get('news', 'AdminController@table')->middleware('permission:news')->name('table.news');
    Route::get('status', 'AdminController@table')->middleware('permission:news-status')->name('table.status');

    Route::get('{view}/menu', 'AdminController@menu');

    Route::get('{id}/{view}', 'AdminController@subTable');
});
