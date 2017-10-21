<?php

namespace Modules\Utilities\WebModules\Attributes;

use Modules\Utilities\Entities\TextCard;

class TextCardsOneAttribute extends Attribute
{
    public $id = '18';
    public $code = 'text_cards_1';
    public $viewName = 'text-cards-1';
    public $title = 'text-cards-1';
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
//        $this->data = TextCard::whereIn('id', $this->data)->get()->pluck("lang_title.{$lang}.text", 'id')->toArray();
        $this->data = TextCard::whereIn('id', $this->data)->get();
    }

}