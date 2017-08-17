<?php

namespace Modules\Utilities\WebModules\Modules;

use Modules\Utilities\Entities\CustomModule;
use Modules\Utilities\Entities\CustomModuleAttributeValue;
use Modules\Utilities\WebModules\Attributes\Attribute;
use Modules\Utilities\Entities\Attribute as AttrModel;

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


    public function getModuleAttributeHtml($id = false)
    {
        $data = \Modules\Utilities\Entities\Module::find($this->id)->with(['attributes'])->first();
        $moduleAttribute = $data->attributes;

        $htmlResult = '';

        foreach ($moduleAttribute as $attribute) {
            $htmlResult .= Attribute::setAttribute($attribute->id)->getAttributeHtml();
        }

        return $htmlResult;
    }

    public function saveModuleAttributesValue(CustomModule $customModule, $customModuleAttributeValues)
    {
        // todo each attribute class must have save function and the module save use it
        // todo in attribute class must Use "withoutTrans" | "stopTransSaveOper" to stop trying saving multi in none multi attributes
        request()->merge(['stopTransSaveOper' => false]);

        foreach ($customModuleAttributeValues as $attCode => $customModuleAttributeValue) {
            $att = AttrModel::where('code' ,'=', $attCode)->first();
            $custModAttVal = new CustomModuleAttributeValue();
            $custModAttVal->fill(['attribute_id' => $att->id, 'value' => $customModuleAttributeValue]);
            $customModule->attributeValues()->save($custModAttVal);
        }
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