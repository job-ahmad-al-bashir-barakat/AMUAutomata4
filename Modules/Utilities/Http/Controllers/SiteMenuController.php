<?php

namespace Modules\Utilities\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Utilities\Entities\Table;

class SiteMenuController extends Controller
{
    public function index()
    {
        //dd(bcrypt('405@AUT'));
        $lang = app()->getLocale();
        $dataSource = Table::menuable()->get()->pluck("lang_name.{$lang}.text", 'id');
        return view('utilities::page.site-menu', compact('dataSource'));
    }
}