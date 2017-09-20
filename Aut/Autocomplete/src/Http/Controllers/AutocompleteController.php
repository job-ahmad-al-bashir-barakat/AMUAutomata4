<?php

namespace Aut\Autocomplete\Http\Controllers;

use function foo\func;
use Illuminate\Support\Str;
use Modules\Admin\Entities\Department;
use Route;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AutocompleteController
{
    protected $model;

    protected $langs;

    protected $isLang;

    protected $condition;

    protected $colId;

    protected $colName;

    public function __construct()
    {
        $this->initModel();
    }

    function autocomplete(Request $request, $model)
    {
        $model = $this->model;

        $object = new $model();

        // $condition
        foreach ($this->condition as $whereHasOrIndex => $col)
        {
            $q = str_replace(' ', '%', request()->input('q', ''));

            if(!is_numeric($whereHasOrIndex))
            {
                $object = $object->whereHas($whereHasOrIndex ,function ($query) use ($col ,$q) {

                    if(!$this->isLang && Str::contains($col ,'{langs}'))
                    {
                        foreach ($this->langs as $lang)
                            $query->where("{$col}_{$lang}", 'like', '%' . $q . '%');
                    }
                    else
                        $query->where($col, 'like', '%' . $q . '%');
                });
            }
            else
            {
                if(!$this->isLang && Str::contains($col ,'{langs}'))
                {
                    foreach ($this->langs as $lang)
                        $object = $object->where($col, 'like', '%' . $q . '%');
                }
                else
                    $object = $object->where($col, 'like', '%' . $q . '%');
            }
        }

        $autocompleteHelperClass = config('autocomplete.AutocompleteHelperClass');

        if($autocompleteHelperClass)
        {
            $method = camel_case("{$this->autocomplete}Autocomplete");

            $factory = new $autocompleteHelperClass();

            if(method_exists($factory ,$method))
                $object = $factory->$method($request ,$object);
        }

        $data = $object->get();

        $nameFunc = function ($name ,$colName) {

            foreach (explode('->', $colName) as $col)
                $name = isset($name->$col) ? $name->$col : $name->first()[$col];

            return $name;
        };

        $replaceColName = function ($colName) {

            return str_replace('{lang}' ,\App::getLocale() ,$colName);
        };

        $result = [];
        $data->each(function ($item ,$index) use (&$result ,$nameFunc ,$replaceColName) {

            $id = $item;
            foreach (explode('->', $this->colId) as $col)
                $id = isset($id->$col) ? $id->$col : $id->first()[$col];

            $name = $item;
            if(is_array($this->colName))
            {
                $nameResult = [];
                foreach ($this->colName as $col)
                    $nameResult[] = $nameFunc($name ,$replaceColName($col));

                $nameResult = implode(' ,' ,$nameResult);
            }
            else
                $nameResult = $nameFunc($name ,$replaceColName($this->colName));

            $result[$index]['id']   = $id;
            $result[$index]['name'] = $nameResult;
        });

        return array('items' => $result);
    }

    private function initModel()
    {
        if(Route::getCurrentRoute() !== null)
        {
            $this->autocomplete = Route::getCurrentRoute()->parameter('model');

            $tableSet = config('autocompleteModels.' . $this->autocomplete);

            if (!$tableSet) {
                throw new Exception('This model not registered');
            }

            $this->isLang    = config('autocomplete.isLangs');
            $this->langs     = \LaravelLocalization::getSupportedLanguagesKeys();
            $withOrNot       = $this->isLang ? 'withLang' : 'withoutLang';
            $this->model     = isset($tableSet['model']) ? $tableSet['model'] : '';
            $this->condition = isset($tableSet['condition']) ? $tableSet['condition'] : config("autocomplete.default.$withOrNot.condition");
            $this->colId     = isset($tableSet['colId'])   ? $tableSet['colId']   : config("autocomplete.default.$withOrNot.colId");
            $this->colName   = isset($tableSet['colName']) ? $tableSet['colName'] : config("autocomplete.default.$withOrNot.colName");
        }
    }
}