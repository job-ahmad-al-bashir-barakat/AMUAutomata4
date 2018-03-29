<?php

namespace Modules\Utilities\WebModules\Attributes;


class RotateAttribute extends Attribute
{
    public $id = '20';
    public $code = 'rotate';
    public $viewName = 'rotate';
    public $title = 'rotate';
    public $values = [
        '' => '',
        'V' => 'Vertical',
        'H' => 'Horizontal',
    ];
    public $data;
}