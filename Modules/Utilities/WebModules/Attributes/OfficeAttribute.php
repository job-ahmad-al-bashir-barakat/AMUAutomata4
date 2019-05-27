<?php

namespace Modules\Utilities\WebModules\Attributes;


use Modules\Admin\Entities\UniversityOffice;

class OfficeAttribute extends Attribute
{
    public $id = '32';
    public $code = 'office';
    public $viewName = 'office';
    public $title = 'office';
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
        $this->data = UniversityOffice::find($this->data);
    }
}