<?php

namespace Modules\Utilities\WebModules\Attributes;

use Modules\Admin\Entities\Person;

class PersonsAttribute extends Attribute
{
    public $id = '9';
    public $code = 'persons';
    public $viewName = 'persons';
    public $title = 'persons';
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
        $this->data = Person::whereIn('id', $this->data)->get()->pluck("lang_name.{$lang}.text", 'id')->toArray();
    }

}