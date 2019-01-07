<?php

namespace Modules\Utilities\Http\Controllers;

use function foo\func;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\Faculty;
use Modules\Utilities\Entities\MenuTables;
use Modules\Utilities\Entities\Module;
use Modules\Utilities\Entities\SiteMenu;
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

    public function menu(Request $request, $menu)
    {
        list($table, $view) = explode('.', $request->route()->getName());

        if($view === 'general') {

            $menuItems    = [];
            $group_count  = 1;
            $group_sourse = [];

            $siteMenuExceptIds = SiteMenu::where('menu_list_id',$menu)->whereNotNull('menuable_type')
                ->get(['menuable_id','menuable_type'])
                ->groupBy('menuable_type')
                ->map(function ($items){
                    return $items->pluck('menuable_id');
                });

            $tableItems = Table::pageable()->menuable()->orDynamic()->morphed()->get();
            $tableItems->each(function ($item) use (&$menuItems ,&$group,$siteMenuExceptIds){

                $class = $item->namespace;

                if($item->menuable) {

                    if(class_exists($class))
                        $obj = $class::whereNotIn('id',$siteMenuExceptIds->get($item->morph_code,[]))->get();

                } else  $obj = collect([]);

                $menuItems[$item->morph_code] = $obj;
            });

            $tableItemsDynamic       = $tableItems->groupBy('morph_code');
            $tableItemsDynamicFilter = $tableItemsDynamic->map(function ($items) use ($siteMenuExceptIds,&$group_count,&$group_sourse){
                $group_sourse[] = $group_count;
                $group_count++;
                return $items->whereNotIn('id',$siteMenuExceptIds->get('tables',[]));
            });
            $group_sourse = implode(',',$group_sourse);
        }

        if($request->ajax() && $request->input('load_link_items',false))
            return response()->json([
                'html' => view('utilities::page._general_tree_ajax',compact('menuItems' ,'tableItemsDynamic','tableItemsDynamicFilter','menu'))->render()
            ]);

        return view("utilities::page.menu", compact('view' ,'menuItems' ,'tableItemsDynamic','tableItemsDynamicFilter','group_sourse','group_count','menu'));
    }

    public function showModules()
    {
        $modules = Module::with(['image'])->get();
        $title = trans('utilities::app.modules');
        return view('utilities::page.modules', compact('modules', 'title'));
    }
}
