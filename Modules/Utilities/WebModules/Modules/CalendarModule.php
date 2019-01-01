<?php

namespace Modules\Utilities\WebModules\Modules;


use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use Modules\Utilities\Entities\Event;

class CalendarModule extends Module
{
    public $id = '42';

    public $code = 'calendar';

    public $viewName = 'calendar';

    public function getModuleData($data)
    {
        $data = parent::getModuleData($data);

        $groupIds = $data['events_groups'] ? array_keys($data['events_groups']) : [];

        $events = Event::query()->whereIn('event_group_id', $groupIds)->get();

        $calendar = Calendar::addEvents($events);

        $data['calendar'] = $calendar;

        return $data;
    }
}