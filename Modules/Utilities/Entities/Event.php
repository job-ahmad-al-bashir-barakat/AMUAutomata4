<?php

namespace Modules\Utilities\Entities;

use Aut\Eloquent\Models\Model;
use DateTime;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\EventTitleLang;
use \MaddHatter\LaravelFullcalendar\Event as EventCalendar;

class Event extends Model implements EventCalendar
{
    use SoftDeletes, MultiLangs;

    protected $fillable = ['event_group_id', 'start_date', 'end_date', 'color'];

    protected $dates = ['created_at', 'updated_at', 'deleted_at', 'start_date', 'end_date'];

    protected $appends  = ['lang_title'];

    public function transTitle()
    {
        return $this->hasMany(EventTitleLang::class);
    }

    public function getLangTitleAttribute()
    {
        return $this->transTitle->keyBy('lang_code');
    }

    /**
     * Get the event's title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->lang_title[app()->getLocale()]->text;
    }

    /**
     * Is it an all day event?
     *
     * @return bool
     */
    public function isAllDay()
    {
        return false;
    }

    /**
     * Get the start time
     *
     * @return DateTime
     */
    public function getStart()
    {
        return $this->start_date;
    }

    /**
     * Get the end time
     *
     * @return DateTime
     */
    public function getEnd()
    {
        return $this->end_date;
    }

    /**
     * Optional FullCalendar.io settings for this event
     *
     * @return array
     */
    public function getEventOptions()
    {
        return [
            'color' => $this->color ?? null,
        ];
    }

}
