<?php

namespace Modules\Utilities\WebModules\Modules;


use Modules\Utilities\Entities\Event;

class EventsListModule extends Module
{

    public $id = '48';

    public $code = 'events_list';

    public $viewName = 'events-list';


    /*public function getModuleData($data)
    {
        $data['events'] = Event::with(['image'])->latest()->get();
        return $data;
    }*/
}