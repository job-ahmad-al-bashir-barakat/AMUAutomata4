<?php

namespace Modules\Utilities\WebModules\Modules;


use Modules\Utilities\Entities\Event;

class EventsCarouselModule extends Module
{
    public $id = '52';

    public $code = 'events_carousel';

    public $viewName = 'events-carousel';

    public function getModuleData($data)
    {
        $data = parent::getModuleData($data);

        $groupIds = $data['events_groups'] ? array_keys($data['events_groups']) : [];

        $events = Event::query()->whereIn('event_group_id', $groupIds)->get();

        $data['events'] = $events;

        return $data;
    }
}