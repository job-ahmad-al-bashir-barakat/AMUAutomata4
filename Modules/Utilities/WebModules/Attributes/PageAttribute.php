<?php

namespace Modules\Utilities\WebModules\Attributes;


use Modules\Utilities\Entities\Page;

class PageAttribute extends Attribute
{
    public $id = '16';
    public $code = 'page';
    public $viewName = 'page';
    public $title = 'page';
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

        $data = Page::findOrFail($this->data);
        $this->data = $data;
    }

}