<?php

namespace Modules\Utilities\WebModules\Attributes;

use Modules\Utilities\Entities\EventGroup;

class EventsGroupsAttribute extends Attribute
{
    public $id = '26';
    public $code = 'events_groups';
    public $viewName = 'events-groups';
    public $title = 'events_groups';
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
        if ($this->data) {
            $this->data = EventGroup::whereIn('id', $this->data)->get()->pluck("lang_name.{$lang}.text", 'id')->toArray();
        } else {
            $this->data = [];
        }
    }

}