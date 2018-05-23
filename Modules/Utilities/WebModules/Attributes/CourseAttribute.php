<?php

namespace Modules\Utilities\WebModules\Attributes;

use Modules\Admin\Entities\Course;

class CourseAttribute extends Attribute
{
    public $id = '24';
    public $code = 'course';
    public $viewName = 'course';
    public $title = 'course';
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

        $data = Course::findOrFail($this->data);

        $this->data = [
            [$data->id => $data->lang_name[$this->lang]->text],
        ];
    }
}