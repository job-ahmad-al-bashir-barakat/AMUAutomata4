<?php

namespace Modules\Utilities\WebModules\Attributes;


use Modules\Utilities\Entities\Slider;

class SlidersAttribute extends Attribute
{

    public $id = '5';
    public $code = 'sliders';
    public $viewName = 'sliders';
    public $title = 'slider';
    public $values = [];
    public $data = [];

    /**
     * @override This Function will fill the parameter $data with its value(s)
     *
     * @param $customModuleId
     * @param bool $forceQuery used the re-fill the parameter $data with its value from the DB
     */
    public function getAttributeValue($customModuleId, $forceQuery = false)
    {
        parent::getAttributeValue($customModuleId, $forceQuery);

        $data = Slider::find($this->data);
        $this->data = $data;
        /*$this->data = [
            [$data->id => $data->transName->first()->text],
        ];*/
    }
}