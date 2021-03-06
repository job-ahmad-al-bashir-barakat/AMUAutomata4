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
    public $lang;
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

    public function __construct(/*$id, $code, $view*/)
    {
        /*$this->id = $id;
        $this->code = $code;
        $this->viewName = $view;*/
        $this->viewPath = "{$this->baseViewPath}.{$this->viewName}";
        $this->lang = app()->getLocale();
    }

    public function getModuleAttributeHtml($customModuleId = false)
    {
        $module = ModuleModel::find($this->id);
        $moduleCode = $module->code;
        $moduleAttribute = $module->attributes()->get();
        $htmlResult = '';
        foreach ($moduleAttribute as $attribute) {
            $attribute = Attribute::setAttribute($attribute->id);
            if($customModuleId) {
                $attribute->getAttributeValue($customModuleId);
            }
            $htmlResult .= $attribute->getAttributeHtml($moduleCode);
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
        $data = $this->getModuleData($this->data);
        $lang = $this->lang;
        if ($data['status'] == 'D') {
            return '';
        }
        return view($this->viewPath, compact('data', 'lang'))->render();
    }

    public function getAttributeValue()
    {
        foreach ($this->data as $code => $value) {
            $attribute = Attribute::setByAttributeCode($code);
            $attribute->getAttributeValue($this->customModuleId);
            $this->data[$code] = $attribute->data;
        }
        $this->data['id'] = $this->customModuleId;
    }

    public function getModuleData($data)
    {
        return $data ?: [];
    }
}