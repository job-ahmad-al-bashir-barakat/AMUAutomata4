<?php

namespace Modules\Utilities\WebModules\Attributes;


use Modules\Utilities\Entities\VerticalSlider;

class VerticalSlidersAttribute extends Attribute
{

    public $id = '12';
    public $code = 'vertical_sliders';
    public $viewName = 'vertical-sliders';
    public $title = 'vertical-slider';
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

        $data = VerticalSlider::findOrFail($this->data);

        $this->data = [
            [$data->id => $data->transName->first()->text],
        ];
    }
}