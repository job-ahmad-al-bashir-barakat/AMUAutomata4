<?php

namespace Aut\Autocomplete\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Route;

class AutocompleteController
{
    protected  $model;

    protected  $cols;

    protected $langs;

    protected $extraColValue;

    protected $withCondition;

    protected $has;

    protected $colId;

    protected $colName;

    public $limit = 5;

    public function __construct()
    {
        $this->initModel();
    }

    private function _autocomplete($modal ,$cols)
    {
        $result   = [];

        $colsShow = [];

        foreach ($cols as $index => $col)
        {
            if(preg_match('/:.+[^\']/',$col ,$match))
            {
                $col  = preg_replace('/:.+[^\']/','',$col);

                if($match[0] == ':key')
                {
                    $final['id'] = $col;

                    continue;
                }

                foreach ($this->langs as $lang)
                {
                    $result[] = "{$col}_{$lang}";
                }

                $colsShow[] = autAutocompleteLang($col);
            }
            else
                $result[] = $col;
        }

        $final['name'] = DB::raw("CONCAT(".implode(', " ," ,' ,$colsShow).") As name");

        if(!array_has($final , 'id'))  {  $modalInstance = new $modal(); $final['id'] = $modalInstance->getKeyName(); }

        if(!empty($this->withCondition)) $result = $this->withCondition;

        $data = $modal::where(function($query) use($result) {
            $q = explode(' ', request()->input('q', ''), $this->limit);
            foreach ($result as $index => $item)
            {
                if($index == 0) {
                    for ($i = 0; $i < count($q); $i++) {
                        $query->where($item, 'like', '%' . $q[$i] . '%');
                    }
                }
                else {
                    for ($i = 0; $i < count($q); $i++) {
                        $query->orWhere($item, 'like', '%' . $q[$i] . '%');
                    }
                }
            }

        })->get($final);

        return $data;
    }

    private function _autocompleteLangs(Request $request, $modal)
    {
        $object = new $modal();

        // $has => where
        foreach ($this->has as $whereHas => $cond)
        {
            $object = $object->whereHas($whereHas ,function ($query) use ($cond) {
                $q = explode(' ', request()->input('q', ''), $this->limit);
                for ($i = 0; $i < count($q); $i++) {
                    $query->where($cond, 'like', '%' . $q[$i] . '%');
                }
            });
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

        $result = [];
        $data->each(function ($item ,$index) use (&$result ,$nameFunc) {

            $id = $item;
            foreach (explode('->', $this->colId) as $col)
                $id = isset($id->$col) ? $id->$col : $id->first()[$col];

             //prev error
            //$id = is_object($id->$col) ? $id->$col : $id[$col];
            //$id = is_object($id->$col) ? $id->$col->first() : $id[$col];

            $name = $item;
            if(is_array($this->colName))
            {
                $nameResult = [];
                foreach ($this->colName as $col)
                    $nameResult[] = $nameFunc($name ,$col);

                $nameResult = implode(' ,' ,$nameResult);
            }
            else
                $nameResult = $nameFunc($name ,$this->colName);

            $result[$index]['id']   = $id;
            $result[$index]['name'] = $nameResult;
        });

        return $result;
    }

    public function autocompleteLangs(Request $request ,$modal)
    {
        $modal = $this->model;

        $data = $this->_autocompleteLangs($request ,$modal);

        return array('items' => $data);
    }

    public function autocomplete($model)
    {
        $modal = $this->model;

        $cols = $this->cols;

        $data = $this->_autocomplete($modal ,$cols);

        return array('items' => $data);
    }


    private function initModel()
    {
        if(Route::getCurrentRoute() !== null)
        {
            $model = Route::getCurrentRoute()->parameter('model');

            $tableSet = config('autocompleteModels.' . $model);

            if (!$tableSet) {
                throw new Exception('This model not registered');
            }

            $this->autocomplete  = $model;
            $this->model         = isset($tableSet['model'])          ? $tableSet['model']         : '';

            if(!config('autocomplete.isLangs'))
            {
                $this->cols          = isset($tableSet['cols'])           ? $tableSet['cols']          : [];
                $this->extraColValue = isset($tableSet['extraColValue'])  ? $tableSet['extraColValue'] : [];
                $this->withCondition = isset($tableSet['withCondition'])  ? $tableSet['withCondition'] : [];
                $this->langs = \LaravelLocalization::getSupportedLanguagesKeys();
            }
            else
            {
                $this->has           = isset($tableSet['has'])     ? $tableSet['has']     : config('autocomplete.default.has');
                $this->colId         = isset($tableSet['colId'])   ? $tableSet['colId']   : config('autocomplete.default.colId');
                $this->colName       = isset($tableSet['colName']) ? $tableSet['colName'] : config('autocomplete.default.colName');
            }
        }
    }
}