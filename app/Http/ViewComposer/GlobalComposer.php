<?php
namespace App\Http\ViewComposer;

use Illuminate\Support\Str;
use Illuminate\View\View;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Modules\Utilities\Entities\ControlMenu;

class GlobalComposer
{
    public function compose(View $view)
    {
        $view->with([
            'module' => preg_replace("/.+\//" ,'' ,\Route::getCurrentRoute()->action['prefix']),
            'dir'    => LaravelLocalization::getCurrentLocaleDirection(),
            'lang'   => LaravelLocalization::getCurrentLocale(),
        ]);
    }

    public function path(View $view)
    {
        $viewPage =  \Route::getCurrentRoute()->parameter('view');
        $viewPage = $viewPage ? Str::slug($viewPage,'_') : 'home';

        $node = ControlMenu::whereHas('page' ,function ($query) use ($viewPage){
            $query->whereControlPageCode($viewPage);
        })->first();

        $view->with([
            'path'   => ControlMenu::whereAncestorOrSelf($node)->get()
        ]);
    }
}