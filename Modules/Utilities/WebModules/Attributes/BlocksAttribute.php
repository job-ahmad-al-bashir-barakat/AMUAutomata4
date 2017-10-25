<?php

namespace Modules\Utilities\WebModules\Attributes;


use Modules\Utilities\Entities\Block;

class BlocksAttribute extends Attribute
{

    public $id = '6';
    public $code = 'blocks';
    public $viewName = 'blocks';
    public $title = 'block';
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

        $data = Block::findOrFail($this->data);
        $this->data = $data;
    }
}