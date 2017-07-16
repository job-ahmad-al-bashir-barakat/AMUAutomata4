<?php

namespace Modules\Utilities\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

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
        return view("utilities::page.menu", compact('view'));
    }
}
