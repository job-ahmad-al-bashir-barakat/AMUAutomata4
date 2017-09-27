<?php

namespace Modules\Utilities\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use Modules\Utilities\Entities\MenuTables;

class UtilitiesController extends Controller
{
    public function table($view)
    {
        $subPage = \View::exists("utilities::page.table-sub.$view") ? "utilities::page.table-sub.$view" : false;

        return view('utilities::page.table',[
            'table' => $view,
            'param' => '',
            'title' => trans('utilities::app.' . str_replace('-', '_', $view)),
            'subPage' => $subPage,
        ]);
    }

    public function menu($view)
    {
        $modules = [];
        if(view()->exists("utilities::page._{$view}_sub_section")) {

            $classes = function($name) {

                return [
                    'admin'     => "Modules\Admin\Entities\\$name",
                    'utilities' => "Modules\Utilities\Entities\\$name",
                ];
            };
            $menu_items = MenuTables::all();
            $menu_items->each(function ($item) use (&$modules ,$classes){
                $name  = Str::studly($item->code);
                foreach ($classes($name) as $index => $class)
                    if(class_exists($class))
                        $modules[$index][$item->code] = $class::all();
            });
        }

        return view("utilities::page.menu", compact('view' ,'modules'));
    }
}
