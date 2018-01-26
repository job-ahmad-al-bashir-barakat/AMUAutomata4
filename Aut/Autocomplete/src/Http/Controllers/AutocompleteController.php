<?php

namespace Aut\Autocomplete\Http\Controllers;

use function foo\func;
use Illuminate\Support\Str;
use Modules\Admin\Entities\Department;
use Modules\Admin\Entities\Faculty;
use Route;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AutocompleteController
{
    protected $model;

    protected $with;

    protected $data;

    protected $langs;

    protected $isLang;

    protected $q;

    protected $conditions;

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

        if($this->q)
            foreach ($this->q as $whereHasOrIndex => $col)
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
                        {
                            $col_lang = str_replace('{langs}', $lang, $col);

                            $object = $object->where($col_lang, 'like', '%' . $q . '%');
                        }
                    }
                    else
                        $object = $object->where($col, 'like', '%' . $q . '%');
                }
            }

        if(!empty($this->conditions))
            foreach ($this->conditions as $whereHasOrIndex => $condition) {

                $pattern = '/.+:/';
                // get real value
                $value = preg_replace($pattern ,'',$condition[2]);
                // get value type
                preg_match($pattern ,$condition[2] ,$type);
                if(!empty($type)) {

                    $type = substr($type[0], 0, -1);
                    switch ($type) {
                        case 'request' : $value = \request()->input($value ,'');
                    }
                }

                // condition
                if(!is_numeric($whereHasOrIndex)) {

                    if($value)
                        $object = $object->whereHas($whereHasOrIndex ,function ($query) use ($condition ,$value) {

                            $query->where($condition[0] ,$condition[1] ,$value);
                        });

                } else {

                    if($value)
                        $object = $object->where($condition[0] ,$condition[1] ,$value);
                }
            }

        $helper = function ($request ,$object ,$prefix = 'Autocomplete') {

            $autocompleteHelperClass = config('autocomplete.AutocompleteHelperClass');

            if($autocompleteHelperClass)
            {
                $method = camel_case("{$this->autocomplete}$prefix");

                $factory = new $autocompleteHelperClass();

                if(method_exists($factory ,$method))
                    $object = $factory->$method($request ,$object);
            }

            return $object;
        };

        $object = $helper($request ,$object);

        if(!empty($this->with))
            $object->with($this->with);

        $data = $object->get();

        if($object->count() && $this->data)
            $data = $object->first()->{$this->data};

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
            $this->model     = isset($tableSet['model'])     ? $tableSet['model']      : '';
            $this->data      = isset($tableSet['data'])      ? $tableSet['data']       : false;
            $this->with      = isset($tableSet['with'])      ? $tableSet['with']       : [];
            $this->q         = isset($tableSet['q'])         ? $tableSet['q']          : config("autocomplete.default.$withOrNot.q");
            $this->conditions= isset($tableSet['conditions'])? $tableSet['conditions'] : [];
            $this->colId     = isset($tableSet['colId'])     ? $tableSet['colId']      : config("autocomplete.default.$withOrNot.colId");
            $this->colName   = isset($tableSet['colName'])   ? $tableSet['colName']    : config("autocomplete.default.$withOrNot.colName");
        }
    }
}