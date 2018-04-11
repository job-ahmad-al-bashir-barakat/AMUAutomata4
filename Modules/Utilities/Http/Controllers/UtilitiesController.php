<?php

namespace Modules\Utilities\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\Faculty;
use Modules\Utilities\Entities\MenuTables;
use Modules\Utilities\Entities\Table;

class UtilitiesController extends Controller
{
    public function table(Request $request)
    {
        list($table, $view) = explode('.', $request->route()->getName());
        $subPage = \View::exists("utilities::page.table-sub.$view") ? "utilities::page.table-sub.$view" : false;

        return view('utilities::page.table',[
            'table' => $view,
            'param' => '',
            'title' => trans('utilities::app.' . str_replace('-', '_', $view)),
            'subPage' => $subPage,
        ]);
    }

    public function menu(Request $request)
    {
        list($table, $view) = explode('.', $request->route()->getName());
        $modules = [];
        if($view === 'general') {

            $group = [ 'count' => 0 ];

            $menu_items = Table::pageable()->menuable()->morphed()->get();
            $menu_items->each(function ($item) use (&$modules ,&$group){

                $class = $item->namespace;

                if(class_exists($class)) {

                    $obj = $class::with('siteMenus')->get();

                    if($obj->count()) {
                        $group['count'] = $group['count'] + 1;
                        array_push($group ,$group['count']);
                    }

                    $modules[$item->morph_code] = $obj;
                }
            });

            $menu_items = $menu_items->groupBy('morph_code');
        }

        return view("utilities::page.menu", compact('view' ,'menu_items','modules' ,'group'));
    }
}
