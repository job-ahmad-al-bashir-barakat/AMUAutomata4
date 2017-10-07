<?php

namespace Modules\Utilities\WebModules\Attributes;

use Modules\Utilities\Entities\Step;

class StepsAttribute extends Attribute
{
    public $id = '17';
    public $code = 'steps';
    public $viewName = 'steps';
    public $title = 'steps';
    public $values = [];
    public $data = [];

    protected $multiVal = true;

    /**
     * @override This Function will fill the parameter $data with its value(s)
     *
     * @param $customModuleId
     * @param bool $forceQuery used the re-fill the parameter $data with its value from the DB
     */
    public function getAttributeValue($customModuleId, $forceQuery = false)
    {
        parent::getAttributeValue($customModuleId, $forceQuery);

        $lang = app()->getLocale();
        $this->data = Step::whereIn('id', $this->data)->get()->pluck("lang_title.{$lang}.text", 'id')->toArray();
    }

}