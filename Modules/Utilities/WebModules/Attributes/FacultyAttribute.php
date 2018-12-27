<?php

namespace Modules\Utilities\WebModules\Attributes;

use Modules\Admin\Entities\Faculty;

class FacultyAttribute extends Attribute
{
    public $id = '25';
    public $code = 'faculty';
    public $viewName = 'faculty';
    public $title = 'faculty';
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

        $data = Faculty::find($this->data);
        $this->data = $data;
        /*if (!$data || !$data->count()) {
            $this->data = [];
            return ;
        }
        $this->data = [
            [$data->id => $data->lang_name[$this->lang]->text],
        ];*/
    }
}