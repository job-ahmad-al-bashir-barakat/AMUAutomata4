<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('admin::dashboard' ,['title' => trans('app.dashboard')]);
    }

    public function table($view)
    {
        $subPage = Str::slug($view ,'_');
        $subPage = \View::exists("admin::table.$subPage") ? "admin::table.$subPage" : false;

        return view('admin::page.table',[
            'table' => $view,
            'param' => '',
            'title' => trans('admin::app.'.str_replace('-','_',$view)),
            'subPage' => $subPage,
        ]);
    }

    public function subTable($id ,$view)
    {
        $subPage = \View::exists("admin::table.$view") ? "admin::table.$view" : false;

        $param = http_build_query(request()->except('_pjax'));;

        return view('admin::page.table',[
            'table'   => $view,
            'param'   => "?id={$id}&{$param}",
            'title'   => trans('admin::app.'.str_replace('-','_',$view)),
            'subPage' => $subPage,
        ]);
    }

    public function menu($view)
    {
        return view("admin::page.hierarchy", compact('view'));
    }
}
