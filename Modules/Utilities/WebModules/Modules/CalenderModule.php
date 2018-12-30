<?php

namespace Modules\Utilities\WebModules\Modules;


use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use Modules\Utilities\Entities\Event;

class CalenderModule extends Module
{
    public $id = '42';

    public $code = 'calender';

    public $viewName = 'calender';

    public function getModuleData($data)
    {
        $data = parent::getModuleData($data);

        $groupIds = $data['events_groups'] ? array_keys($data['events_groups']) : [];

        $events = Event::query()->whereIn('event_group_id', $groupIds)->get();
        $calendarEvents = [];
        /*foreach ($events as $event) {
            $calendarEvents[] = Calendar::event($event);
        }*/
        $calendar = Calendar::addEvents($events);

        $data['calendar'] = $calendar;

        return $data;
    }
}