<?php

namespace Modules\Utilities\WebModules\Attributes;


class TitleAttribute extends Attribute
{
    public $id = '10';
    public $code = 'title';
    public $viewName = 'title';
    public $title = 'title';
    public $data;

    protected $multiLang = true;
}