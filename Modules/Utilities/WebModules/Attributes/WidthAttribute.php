<?php

namespace Modules\Utilities\WebModules\Attributes;


class WidthAttribute extends Attribute
{

    public $id = '2';
    public $code = 'width';
    public $viewName = 'width';
    public $title = 'Width';
    public $values = [
        '' => '',
        '1' => '1',
        '2' => '2',
        '3' => '3',
        '4' => '4',
        '5' => '5',
        '6' => '6',
        '7' => '7',
        '8' => '8',
        '9' => '9',
        '10' => '10',
        '11' => '11',
        '12' => '12',
        '13' => 'Full Width',
    ];
    public $data;
}