<?php

namespace Modules\Utilities\WebModules\Attributes;

class ImageAttribute extends Attribute
{
    public $id = '23';
    public $code = 'image';
    public $viewName = 'image';
    public $title = 'image';
    public $values = [];
    public $data = [];

    public function __construct()
    {
        throw new \Exception('Image Attribute not build yet', 500);
    }
}