<?php

namespace App\Library;

use Illuminate\Http\Request;

class AutocompleteHelper
{
    function generalAutocomplete(Request $request ,$query)
    {
        if(request('id'))
            return $query->where('id' ,'<>' ,request('id'))->whereNotDescendantOf(request('id'));
        else
            return $query;
    }

    function controlAutocomplete(Request $request ,$query)
    {
        if(request('id'))
            return $query->where('id' ,'<>' ,request('id'))->whereNotDescendantOf(request('id'));
        else
            return $query;
    }
}