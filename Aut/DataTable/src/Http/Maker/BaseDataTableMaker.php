<?php

namespace Aut\DataTable\Http\Maker;

use Aut\DataTable\Exceptions\UndefinedMethodCallException;

class BaseDataTableMaker
{

    public function callTable($factory ,$method ,$model = null ,$request = null)
    {
        return method_exists($factory ,$method) ? $factory->$method($model,$request) : new UndefinedMethodCallException("method $method not registered");
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