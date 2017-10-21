<?php

namespace Modules\Utilities\WebModules\Modules;

use Modules\Utilities\Entities\CustomModule;
use Modules\Utilities\Entities\Module as ModuleModel;
use Modules\Utilities\WebModules\Attributes\Attribute;

class Module
{
    use ModuleTrait;

    public $id;
    public $code;
    public $viewName;
    public $viewPath;
    public $customModuleId;
    public $data = [];

    const POSITION = [
        '' => '',
        'T' => 'Top',
        'B' => 'Bottom',
        'R' => 'Right',
        'L' => 'Left',
    ];

    private $baseViewPath = 'utilities::web-modules.modules';

    public function __construct()
    {
        $this->viewPath = "{$this->baseViewPath}.{$this->viewName}";
    }

    public function getModuleAttributeHtml($customModuleId = false)
    {
        $moduleAttribute = ModuleModel::find($this->id)->attributes()->get();
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
            $attribute->saveAttributeValue($customModule);
        }
    }

    public function getModuleHtml()
    {
        $data = [];
        return view($this->viewPath, compact('data'))->render();
    }

    public function setAttributeValueData()
    {
        foreach ($this->data as $code => $value) {
            $attribute = Attribute::setByAttributeCode($code);
            $this->data[$code] = $attribute->getAttributeRenderValue($this->customModuleId);
        }
    }

}