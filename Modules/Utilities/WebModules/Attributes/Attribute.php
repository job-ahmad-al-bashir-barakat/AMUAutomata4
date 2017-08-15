<?php

namespace Modules\Utilities\WebModules\Attributes;


class Attribute
{
    public $id;
    public $code;
    public $viewName;

    private $baseViewPath = 'utilities::web-modules.attributes';
    public $viewPath;

    public function __construct()
    {
        $this->viewPath = "{$this->baseViewPath}.{$this->viewName}";
    }

    public function getAttributeHtml()
    {
        throw new \Exception('Method [getAttributeHtml] must be override');
    }

    public static function setAttribute($attributeId)
    {
        switch ($attributeId) {
            case 2:
                return new TextEditorAttribute();

            default:
                throw new \Exception('Undefined Attributes');
        }
    }
}