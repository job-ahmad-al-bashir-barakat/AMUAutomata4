<?php

namespace Modules\Utilities\WebModules\Attributes;


class LimitAttribute extends Attribute
{
    public $id = '3';
    public $code = 'limit';
    public $title = 'limit';
    public $values = ['min' => 1];
    public $viewName = 'limit';
    public $validationRules = 'min:1';
    public $data;
}