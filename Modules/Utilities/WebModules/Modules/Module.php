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
        //todo each attribute class must have save function and the module save use it
        //todo in attribute class must Use "withoutTrans" | "stopTransSaveOper" to stop trying saving multi in none multi attributes

        foreach ($customModuleAttributeValues as $attCode => $customModuleAttributeValue) {
            $attribute = Attribute::setByAttributeCode($attCode);
            $attribute->data = $customModuleAttributeValue;
            //todo try to make multi insert to make one insert query
            $attribute->saveAttributeValue($customModule);
        }

        /*request()->merge(['stopTransSaveOper' => false]);
        foreach ($customModuleAttributeValues as $attCode => $customModuleAttributeValue) {
            $att = AttrModel::where('code' ,'=', $attCode)->first();
            $custModAttVal = new CustomModuleAttributeValue();
            $custModAttVal->fill(['attribute_id' => $att->id, 'value' => $customModuleAttributeValue]);
            $customModule->attributeValues()->save($custModAttVal);
        }*/
    }

    public function getModuleHtml()
    {
        throw new \Exception('Method [getModuleHtml] must be override');
    }
}