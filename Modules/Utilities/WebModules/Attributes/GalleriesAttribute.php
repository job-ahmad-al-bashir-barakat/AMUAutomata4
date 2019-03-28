<?php

namespace Modules\Utilities\WebModules\Attributes;

use Modules\Utilities\Entities\Gallery;

class GalleriesAttribute extends Attribute
{
    public $id = '21';
    public $code = 'galleries';
    public $viewName = 'galleries';
    public $title = 'galleries';
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
        $this->data = Gallery::whereIn('id', $this->data)->orderBy('created_at', 'desc')->get();
    }

}