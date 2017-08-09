<?php

Route::group(
    [
        'middleware' => ['web', 'localeSessionRedirect', 'localizationRedirect'],
        'prefix' => LaravelLocalization::setLocale().'/utilities',
        'namespace' => 'Modules\Utilities\Http\Controllers'
    ],
function() {
   /* Route::get('users', function () {
        return \Modules\Utilities\Entities\User::allLangs()->get();
        return \Modules\Utilities\Entities\User::translated('1', ['transName' => function ($query){
            $query->where('text', 'like', 'Abdulbasset');
        }])->get();
    });*/

    Route::group(['prefix' => 'attribute'], function () {
        Route::get('html', 'AttributesController@attributeHtml');
    });

    Route::group([], function (){// for super admin
    });
    Route::group([], function (){// for admin
    });

    Route::get('{view}', 'UtilitiesController@table');

    Route::get('{view}/menu' ,'UtilitiesController@menu');

    Route::resource('{treeModel}/tree' ,'TreeController');
});
