<?php

namespace Modules\Utilities\WebModules\Modules;


use Illuminate\Database\Eloquent\Builder;
use Modules\Utilities\Entities\Event;
use Modules\Utilities\Entities\Icon;

class SliderUpcomingEventsModule extends Module
{

    public $id = '44';

    public $code = 'slider_upcoming_events';

    public $viewName = 'slider-upcoming-events';

    public function getModuleData($data)
    {
        $data = parent::getModuleData($data);

        if ($data['icon']) {
            $data['icon'] = Icon::query()->whereIn('id', array_keys($data['icon'][0]))->get()->first();
        }
        $data['events'] = Event::query()
            ->whereIn('event_group_id', array_keys($data['events_groups'] ?? []))
            ->where(function ($query){
                $query
                    ->where('start_date', '<=', now())
                    ->where(function (Builder $query) {
                        $query
                            ->whereNull('end_date')
                            ->orWhere('end_date', '>=', now());
                    });
            })
            ->orderBy('start_date', 'desc')
            ->limit($data['limit'])
            ->get();
        return $data;
    }

}