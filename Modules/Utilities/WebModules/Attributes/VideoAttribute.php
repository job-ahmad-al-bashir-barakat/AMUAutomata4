<?php

namespace Modules\Utilities\WebModules\Attributes;

use Modules\Utilities\Entities\Video;

class VideoAttribute extends Attribute
{
    public $id = '31';
    public $code = 'video';
    public $viewName = 'video';
    public $title = 'video';
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

        $data = Video::findOrFail($this->data);

        $this->data = $data;
    }
}