<?php

namespace App\Library;

use Illuminate\Http\Request;
use Modules\Utilities\Entities\SiteMenu;

class AutocompleteHelper
{
    function generalAutocomplete(Request $request ,$query)
    {
        $query = $query->TypeGeneralCondition();

        return $this->whereNotNodeAndChildren($query)->whereIsLink(false);
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

    public function modulesAutocomplete(Request $request, $query)
    {
        return  $query->where('customized', '=', '1');
    }
}