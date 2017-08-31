<?php
/**
 * Created by PhpStorm.
 * User: AA1992
 * Date: 8/24/2017
 * Time: 7:58 PM
 */

namespace Modules\Utilities\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BuilderController extends Controller
{
    public function pages()
    {
        return view('utilities::page.builder', [
            'title' => 'Builder: Pages',
        ]);
    }

    public function storePages(Request $request)
    {
        return $request->all();
    }
}