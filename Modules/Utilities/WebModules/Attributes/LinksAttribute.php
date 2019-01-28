<?php

namespace Modules\Utilities\WebModules\Attributes;

use Modules\Utilities\Entities\Link;

class LinksAttribute extends Attribute
{
    public $id = '30';
    public $code = 'links';
    public $viewName = 'links';
    public $title = 'links';
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
        $this->data = Link::whereIn('id', $this->data)->get()->pluck("lang_text.{$lang}.text", 'id')->toArray();
    }

}