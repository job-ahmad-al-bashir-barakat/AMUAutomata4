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
    protected $multiVal = false;
    protected $supportedLangs = [];
    protected $lang;

    private $baseViewPath = 'utilities::web-modules.attributes';

    public function __construct()
    {
        $this->viewPath = "{$this->baseViewPath}.{$this->viewName}";
        $this->supportedLangs = \LaravelLocalization::getSupportedLocales();
        $this->lang = \LaravelLocalization::getCurrentLocale();
        $this->title = trans("utilities::web-modules.{$this->title}");
    }
    
    /**
     * This Function will render the view of the attribute
     * will pass the $id, $code, $title, $values, $data, supportedLangs and Lang to the view
     *
     *
     * @return string Html
     */
    public function getAttributeHtml($moduleCode)
    {
        return view($this->viewPath,
            [
                'id'=> $this->id,
                'code' => $this->code,
                'title' => $this->title,
                'values' => $this->values,
                'data' => $this->data,
                'supportedLangs' => $this->supportedLangs,
                'lang' => $this->lang,
                'moduleCode' => $moduleCode,
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

        request()->merge(['transSaveOper' => $this->multiLang]);
        if ($this->multiLang) {
            $req = [];
            foreach ($this->supportedLangs as $langCode => $lang) {
                $req["multi_{$langCode}"] = $this->data[$langCode];
            }
            request()->merge(['trans_multi' => $req]);
            $this->data = '';
        }
        if($this->multiVal){
            $this->data = json_encode($this->data);
        }
        $cusModAttVal = $customModule->attributeValues()->where('attribute_id', '=', $this->id)->first();
        if($cusModAttVal){
            $cusModAttVal->value = $this->data;
        } else {
            $cusModAttVal = new CustomModuleAttributeValue(['attribute_id' => $this->id, 'value' => $this->data]);
        }
        return $customModule->attributeValues()->save($cusModAttVal);
    }

    /**
     * This Function will fill the parameter $data with its value(s)
     *
     * @param $customModuleId
     * @param bool $forceQuery used the re-fill the parameter $data with its value from the DB
     */
    public function getAttributeValue($customModuleId, $forceQuery = false)
    {
        if(!$this->data || $forceQuery){
            $customModuleAttributeValue = CustomModuleAttributeValue::where('custom_module_id', '=', $customModuleId)->where('attribute_id', '=', $this->id)->first();
            if (!$customModuleAttributeValue) {
                $this->data = [];
                return;
            }
            if ($this->multiLang) {
                if($customModuleAttributeValue){
                    foreach ($customModuleAttributeValue->lang_multi as $langCode => $multi) {
                        $this->data[$langCode] = $multi->text;
                    }
                }
                return;
            }
            if($this->multiVal) {
                $this->data = json_decode($customModuleAttributeValue->value);
                return;
            }
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