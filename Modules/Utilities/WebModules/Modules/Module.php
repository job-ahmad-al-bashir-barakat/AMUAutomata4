<?php

namespace Modules\Utilities\WebModules\Modules;


use Modules\Utilities\WebModules\Attributes\Attribute;

class Module
{
    public $id;
    public $code;
    public $viewName;

    private $baseViewPath = 'utilities::web-modules.modules';
    public $viewPath;

    public function __construct()
    {
        $this->viewPath = "{$this->baseViewPath}.{$this->viewName}";
    }


    public function getModuleAttributeHtml()
    {
        $data = \Modules\Utilities\Entities\Module::find($this->id)->with(['attributes'])->first();
        $moduleAttribute = $data->attributes;

        $htmlResult = '';

        foreach ($moduleAttribute as $attribute) {
            $htmlResult .= Attribute::setAttribute($attribute->id)->getAttributeHtml() . "<br>";
        }

        return $htmlResult;
    }


    public function getModuleHtml()
    {
        throw new \Exception('Method [getModuleHtml] must be override');
    }

    public static function setModule($moduleId)
    {
        switch ($moduleId) {
            case 2:
                return new TextEditorModule();
            default:
                throw new \Exception('Undefined Web Module');
        }
    }
}