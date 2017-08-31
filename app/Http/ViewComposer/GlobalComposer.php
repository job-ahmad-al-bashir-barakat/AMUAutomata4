<?php
namespace App\Http\ViewComposer;

use Illuminate\View\View;
use Illuminate\Support\Str;
use Modules\Utilities\Entities\ControlMenu;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class GlobalComposer
{
    public function compose(View $view)
    {
        $route = request()->segment(2);
        $view->with([
            'module' => $route,
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