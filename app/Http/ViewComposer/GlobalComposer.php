<?php
namespace App\Http\ViewComposer;

use Illuminate\View\View;
use Illuminate\Support\Str;
use Modules\Utilities\Entities\Lang;
use Modules\Utilities\Entities\ControlMenu;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class GlobalComposer
{
    public function compose(View $view)
    {
        $view->with([
            'currentModule' => $this->getCurrentModule(),
            'dir'           => LaravelLocalization::getCurrentLocaleDirection(),
            'lang'          => LaravelLocalization::getCurrentLocale(),
            'user'          => \Auth::user(),
        ]);
    }

    public function getCurrentModule()
    {
        $module = request()->segment(2);
        if(\Module::find($module))
            return $module;
        return '';
    }

    public function path(View $view)
    {
        $viewPage =  \Route::getCurrentRoute()->parameter('view');

        if(preg_match("/\./", \Route::getCurrentRoute()->getName()))
            list($table, $routeName) = explode('.', \Route::getCurrentRoute()->getName());
        else
            $routeName = \Route::getCurrentRoute()->getName();

        $viewPage = empty($viewPage) ? $routeName : $viewPage;
        $viewPage = $viewPage ? Str::slug($viewPage,'_') : 'home';

        $node = ControlMenu::whereHas('page' ,function ($query) use ($viewPage){
            $query->whereControlPageCode($viewPage);
        })->first();

        $view->with([
            'path' => ControlMenu::defaultOrder()->whereAncestorOrSelf($node)->get()
        ]);
    }

    public function langs(View $view)
    {
        $view->with([
            'langs'  => Lang::all(),
        ]);
    }
}