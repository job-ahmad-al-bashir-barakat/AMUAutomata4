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
        $menu = \Modules\Utilities\Entities\SiteMenu::orderBy('order')->get()->toTree();
        return view('welcome')->withMenu($menu);
    })->name('home');

    // Authentication Routes...
    $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
    $this->post('login', 'Auth\LoginController@login');
    $this->post('logout', 'Auth\LoginController@logout')->name('logout');
    $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

    // lockscreen Route
    Route::get('lockscreen', '\Modules\Utilities\Http\Controllers\LockScreenController@lock')->name('lock');
    Route::post('unlockscreen', '\Modules\Utilities\Http\Controllers\LockScreenController@unlock')->name('unlock');
});