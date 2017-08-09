<?php

namespace Modules\Utilities\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AttributesController extends Controller
{

    public function attributeHtml(Request $request)
    {
        return $request->input();
    }


}
