<?php

namespace Modules\Utilities\WebModules\Attributes;


class Attribute
{
    public $id;
    public $code;
    public $viewPath;
    public $viewName;

    protected $multiLang = false;

    private $baseViewPath = 'utilities::web-modules.attributes';


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
            case 1:
                return new StatusAttribute();
            case 2:
                return new WidthAttribute();
            case 3:
                return new LimitAttribute();
            case 4:
                return new TextEditorAttribute();

            default:
                throw new \Exception('Undefined Attributes');
        }
    }
}