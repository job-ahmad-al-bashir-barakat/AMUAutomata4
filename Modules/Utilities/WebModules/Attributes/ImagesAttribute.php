<?php

namespace Modules\Utilities\WebModules\Attributes;

use Modules\Admin\Entities\Course;

class ImagesAttribute extends Attribute
{
    public $id = '13';
    public $code = 'images';
    public $viewName = 'images';
    public $title = 'images';
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
        dd($this->data, $this->values);
        // data its ['image_id' => '']
        // value ['image_id']
    }
}