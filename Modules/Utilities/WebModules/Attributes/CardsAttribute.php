<?php

namespace Modules\Utilities\WebModules\Attributes;

use Modules\Utilities\Entities\Card;

class CardsAttribute extends Attribute
{
    public $id = '29';
    public $code = 'cards';
    public $viewName = 'cards';
    public $title = 'cards';
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
        $this->data = Card::whereIn('id', $this->data)->get()->pluck("lang_name.{$lang}.text", 'id')->toArray();
    }

}