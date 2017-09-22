<?php

namespace Modules\Utilities\WebModules\Attributes;

use Modules\Utilities\Entities\Icon;

class IconAttribute extends Attribute
{
    public $id = '11';
    public $code = 'icon';
    public $viewName = 'icon';
    public $title = 'icon';
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

        $data = Icon::findOrFail($this->data);

        $this->data = [
            [$data->id => $data->icon_html],
        ];
    }

}