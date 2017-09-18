<?php

namespace Modules\Utilities\WebModules\Attributes;

use Modules\Admin\Entities\Course;

class CoursesAttribute extends Attribute
{
    public $id = '7';
    public $code = 'courses';
    public $viewName = 'courses';
    public $title = 'courses';
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
        $this->data = Course::whereIn('id', $this->data)->get()->pluck("lang_name.{$lang}.text", 'id')->toArray();
    }

}