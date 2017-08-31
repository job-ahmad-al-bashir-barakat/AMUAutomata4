<?php

namespace Modules\Utilities\WebModules\Modules;

use Modules\Utilities\Entities\CustomModule;
use Modules\Utilities\WebModules\Attributes\Attribute;
use Modules\Utilities\Entities\Module as ModuleModel;
use Modules\Utilities\Entities\Attribute as AttrModel;
use Modules\Utilities\Entities\CustomModuleAttributeValue;

class Module
{
    use ModuleTrait;

    public $id;
    public $code;
    public $viewName;

    const POSITION = [
        '' => '',
        'T' => 'Top',
        'B' => 'Bottom',
        'R' => 'Right',
        'L' => 'Left',
    ];

    private $baseViewPath = 'utilities::web-modules.modules';
    public $viewPath;

    public function __construct()
    {
        $this->viewPath = "{$this->baseViewPath}.{$this->viewName}";
    }

    public function getModuleAttributeHtml($customModuleId = false)
    {
        $data = ModuleModel::find($this->id)->with(['attributes'])->first();
        $moduleAttribute = $data->attributes;

        $htmlResult = '';
        foreach ($moduleAttribute as $attribute) {
            $attribute = Attribute::setAttribute($attribute->id);
            if($customModuleId) {
                $attribute->getAttributeValue($customModuleId);
            }
            $htmlResult .= $attribute->getAttributeHtml();
        }
        return $htmlResult;
    }

    public function saveModuleAttributesValue(CustomModule $customModule, $customModuleAttributeValues)
    {
        foreach ($customModuleAttributeValues as $attCode => $customModuleAttributeValue) {
            $attribute = Attribute::setByAttributeCode($attCode);
            $attribute->data = $customModuleAttributeValue;
            //todo try to make multi insert to make one insert query
            $attribute->saveAttributeValue($customModule);
        }
    }

    public function getModuleHtml()
    {
        throw new \Exception('Method [getModuleHtml] must be override');
    }

}