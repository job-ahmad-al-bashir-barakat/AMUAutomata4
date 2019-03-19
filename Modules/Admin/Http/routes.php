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
    Route::get('student', 'AdminController@table')->middleware('permission:students')->name('table.student');
    Route::get('author', 'AdminController@table')->middleware('permission:authors')->name('table.author');
    Route::get('books', 'AdminController@table')->middleware('permission:books')->name('table.books');
    Route::get('top-student-rank', 'AdminController@table')->middleware('permission:top-student-rank')->name('table.top-student-rank');
    Route::get('top-student', 'AdminController@table')->middleware('permission:top-students')->name('table.top-students');
    Route::get('management-staff', 'AdminController@table')->middleware('permission:management-staff')->name('table.management-staff');
    Route::get('study-semester', 'AdminController@table')->middleware('permission:study-semester')->name('table.study-semester');
    Route::get('study-year', 'AdminController@table')->middleware('permission:study-year')->name('table.study-year');
    Route::get('semester', 'AdminController@table')->middleware('permission:semester')->name('table.semester');
    Route::get('hierarchy-type', 'AdminController@table')->middleware('permission:hierarchy-type')->name('table.hierarchy-type');
    Route::get('news', 'AdminController@table')->middleware('permission:news')->name('table.news');
    Route::get('tenders', 'AdminController@table')->middleware('permission:tenders')->name('table.tenders');
    Route::get('status', 'AdminController@table')->middleware('permission:news-status')->name('table.status');

    Route::get('{view}/menu', 'AdminController@menu');

    Route::get('{id}/{view}', 'AdminController@subTable');
});
