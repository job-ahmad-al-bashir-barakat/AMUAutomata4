<?php

namespace Modules\Admin\Http\Controllers;

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
        return view('admin::page.table',[
            'table' => $view,
            'param' => '',
            'title' => trans('admin::app.'.str_replace('-','_',$view))
        ]);
    }

    public function subTable($id ,$view)
    {
        $param = '';
        foreach (request()->except('_pjax') as $index => $value)
            $param .=  "&$index=$value";

        return view('admin::page.table',[
            'table' => $view,
            'param' => "?id=$id{$param}",
            'title' => trans('admin::app.'.str_replace('-','_',$view))
        ]);
    }

    public function menu($view)
    {
        return view("admin::page.hierarchy", compact('view'));
    }
}
