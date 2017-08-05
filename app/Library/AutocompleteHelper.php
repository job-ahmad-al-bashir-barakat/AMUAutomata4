<?php

namespace App\Library;

use Illuminate\Http\Request;

class AutocompleteHelper
{
    function generalAutocomplete(Request $request ,$query)
    {
        return $this->whereNotNodeAndChildren($query);
    }

    function controlAutocomplete(Request $request ,$query)
    {
        return $this->whereNotNodeAndChildren($query);
    }

    function hierarchyAutocomplete(Request $request ,$query)
    {
        return $this->whereNotNodeAndChildren($query);
    }

    /**
     *
     * this func is for autocomplete tree filter
     *
     * @param $query
     * @return mixed
     *
     */
    function whereNotNodeAndChildren($query)
    {
        if(request('id'))
            return $query->where('id' ,'<>' ,request('id'))->whereNotDescendantOf(request('id'));
        else
            return $query;
    }
}