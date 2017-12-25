<?php

namespace Modules\Utilities\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Routing\Controller;
use Modules\Utilities\Entities\MenuTables;
use Modules\Utilities\Entities\SchemaTable;
use Modules\Utilities\Entities\Table;

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
        if($view === 'general') {

            $classes = function($name) {

                return [
                    'admin'     => "Modules\\Admin\\Entities\\$name",
                    'utilities' => "Modules\\Utilities\\Entities\\$name",
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

            $menu_items = $menu_items->groupBy('code');
        }

        return view("utilities::page.menu", compact('view' ,'menu_items','modules' ,'group'));
    }
}
