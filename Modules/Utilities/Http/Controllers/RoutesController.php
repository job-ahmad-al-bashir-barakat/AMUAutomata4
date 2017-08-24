<?php
/**
 * Created by PhpStorm.
 * User: AA1992
 * Date: 8/24/2017
 * Time: 7:58 PM
 */

namespace Modules\Utilities\Http\Controllers;

use Illuminate\Routing\Controller;

class RoutesController extends Controller
{
    public function index()
    {
        return view('utilities::page.website-links', [
            'title' => 'Website Links'
        ]);
    }
}