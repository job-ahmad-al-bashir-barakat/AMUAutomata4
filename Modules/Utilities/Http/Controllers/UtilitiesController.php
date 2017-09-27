<?php

namespace Modules\Utilities\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use Modules\Utilities\Entities\MenuTables;
use Modules\Utilities\Entities\SiteMenu;

class UtilitiesController extends Controller
{
    public function table($view)
    {
        return view('utilities::page.table',[
            'table' => $view,
            'param' => '',
            'title' => trans('utilities::app.'.str_replace('-','_',$view))
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

            $group = [ 'count' => 0 ];
            $menu_items = MenuTables::all();
            $menu_items->each(function ($item) use (&$modules ,$classes ,&$group){
                $name  = Str::studly($item->code);
                foreach ($classes($name) as $index => $class)
                    if(class_exists($class)) {

                        $obj = $class::all();
                        if($obj->count()) {

                            $group['count'] = $group['count'] + 1;
                            array_push($group ,$group['count']);
                        }

                        $modules[$index][$item->code] = $obj;
                    }
            });
        }

        return view("utilities::page.menu", compact('view' ,'modules' ,'group'));
    }
}
