<?php

namespace Aut\DataTable\Http\Maker;

use Exception;

class BaseDataTableMaker
{

    public function callTable($factory ,$method ,$model = null ,$request = null)
    {
        return method_exists($factory ,$method) ? $factory->$method($model,$request) : new Exception("method $method not registered");
    }

    public function callOperation($factory ,$method ,$model = null ,$request = null ,$result = null)
    {
        return $factory->$method($model ,$request ,$result);
    }

    public function validate($factory ,$method)
    {
        return $factory->$method();
    }
}