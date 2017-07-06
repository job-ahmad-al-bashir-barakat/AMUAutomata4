<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
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
        return view('admin::dashboard' ,['title' => 'Dashboard']);
    }

    public function table($view)
    {
        return view('admin::page.table',[
            'table' => $view,
            'param' => '',
            'title' => trans('app.'.str_replace('-','_',$view))
        ]);
    }

    public function subTable($id ,$view)
    {
        return view('admin::page.table',[
            'table' => $view,
            'param' => "?id=$id",
            'title' => trans('app.'.str_replace('-','_',$view))
        ]);
    }
}
