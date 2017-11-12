<?php
namespace App\Http\ViewComposer;

use Illuminate\Support\Str;
use Illuminate\View\View;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Modules\Utilities\Entities\ControlMenu;
use Modules\Utilities\Entities\Lang;
use Nwidart\Modules\Exceptions\ModuleNotFoundException;
use Nwidart\Modules\Facades\Module;

class GlobalComposer
{
    public function compose(View $view)
    {
        $view->with([
            'currentModule' => $this->getCurrentModule(),
            'dir'    => LaravelLocalization::getCurrentLocaleDirection(),
            'lang'   => LaravelLocalization::getCurrentLocale(),
        ]);
    }

    public function getCurrentModule()
    {
        $module = request()->segment(2);
        if(\Module::find($module));
            return $module;
    }

    public function path(View $view)
    {
        $viewPage =  \Route::getCurrentRoute()->parameter('view');
        $viewPage = empty($viewPage) ? \Route::getCurrentRoute()->getName() : $viewPage;
        $viewPage = $viewPage ? Str::slug($viewPage,'_') : 'home';

        $node = ControlMenu::whereHas('page' ,function ($query) use ($viewPage){
            $query->whereControlPageCode($viewPage);
        })->first();

        $view->with([
            'path'   => ControlMenu::defaultOrder()->whereAncestorOrSelf($node)->get()
        ]);
    }

    public function langs(View $view)
    {
        $view->with([
            'langs'  => Lang::all(),
        ]);
    }
}