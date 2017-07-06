<?php
namespace App\Http\ViewComposer;


use Illuminate\View\View;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class GlobalComposer
{
    public function compose(View $view)
    {
        $view->with([
            'dir' => LaravelLocalization::getCurrentLocaleDirection(),
            'lang' => LaravelLocalization::getCurrentLocale(),
        ]);
    }
}