<?php

namespace Modules\Utilities\WebModules\Attributes;

use Modules\Utilities\Entities\CustomModule;
use Modules\Utilities\Entities\CustomModuleAttributeValue;

class Attribute
{
    use AttributeTrait;

    public $id;
    public $code;
    public $title;
    public $values;
    public $viewPath;
    public $viewName;
    public $validationRules;
    public $data;

    protected $multiLang = false;

    private $baseViewPath = 'utilities::web-modules.attributes';

    public function __construct()
    {
        $this->viewPath = "{$this->baseViewPath}.{$this->viewName}";
    }

    /**
     * This Function will render the view of the attribute
     * will pass the $id, $code, $title, $values and $data to the view
     *
     * @return string Html
     */
    public function getAttributeHtml()
    {
        return view($this->viewPath,
            [
                'id'=> $this->id,
                'code' => $this->code,
                'title' => $this->title,
                'values' => $this->values,
                'data' => $this->data,
            ]
        )->render();
    }

    /**
     * This Function will save the attribute value|values
     *
     * @param CustomModule $customModule
     * @return false|\Illuminate\Database\Eloquent\Model
     */
    public function saveAttributeValue(CustomModule $customModule)
    {
        //todo in attribute class must Use "withoutTrans" | "stopTransSaveOper" to stop trying saving multi in none multi attributes
        //todo update it after fixing Multilangs Trait "save function"
        //todo Solve in this function if the attribute is  multi values
        request()->merge(['transSaveOper' => $this->multiLang]);

        $cusModAttVal = $customModule->attributeValues()->where('attribute_id', '=', $this->id)->first();
        if($cusModAttVal){
            $cusModAttVal->value = $this->data;
        } else {
            $cusModAttVal = new CustomModuleAttributeValue(['attribute_id' => $this->id, 'value' => $this->data]);
//            $cusModAttVal->fill(['attribute_id' => $this->id, 'value' => $this->data]);
        }
        return $customModule->attributeValues()->save($cusModAttVal);
    }

    /**
     * This Function will fill the parameter $data with its value
     *
     * @param $customModuleId
     * @param bool $forceQuery used the re-fill the parameter $data with its value from the DB
     */
    public function getAttributeValue($customModuleId, $forceQuery = false)
    {
        //todo Solve in this function if the attribute is  multi values [return all the multi | return one of the multi]
        if(!$this->data || $forceQuery){
            $customModuleAttributeValue = CustomModuleAttributeValue::where('custom_module_id', '=', $customModuleId)->where('attribute_id', '=', $this->id)->first();
        }

        $this->data = isset($customModuleAttributeValue) ? $customModuleAttributeValue->value : $this->data;
    }

    /**
     * @param mixed $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }
}