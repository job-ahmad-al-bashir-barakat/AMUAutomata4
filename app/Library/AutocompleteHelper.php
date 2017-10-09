<?php

namespace App\Library;

use Illuminate\Http\Request;
use Modules\Utilities\Entities\SiteMenu;

class AutocompleteHelper
{
    function generalAutocomplete(Request $request ,$query)
    {
        $query = $query->TypegeneralCondition();

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

    function degreeAutocomplete(Request $request ,$query)
    {
        if($request->input('faculty' ,''))
            $query = $query->where('faculty_id' ,'=' ,$request->input('faculty'));

        return $query;
    }

    function departmentAutocomplete(Request $request ,$query)
    {
        if($request->input('faculty' ,''))
            $query = $query->where('faculty_id' ,'=' ,$request->input('faculty'));

        return $query;
    }

    function courseAutocomplete(Request $request ,$query)
    {
        if($request->input('course' ,''))
            $query = $query->where('id' ,'<>' ,$request->input('course'));

        if(request()->input('faculty' ,''))
            $query = $query->where('faculty_id' ,'=' ,$request->input('faculty'));

        return $query;
    }

    public function modulesAutocomplete(Request $request, $query)
    {
        return  $query->where('customized', '=', '1');
    }
}