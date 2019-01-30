<?php

namespace Modules\Utilities\Entities;

use Aut\Eloquent\Models\Model;
use Aut\FileUpload\Entities\Image;
use DateTime;
use Modules\Utilities\Entities\LangModels\EventUrlLang;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\EventTitleLang;
use \MaddHatter\LaravelFullcalendar\Event as EventCalendar;

class Event extends Model implements EventCalendar
{
    use SoftDeletes, MultiLangs;

    const IMAGE_PATH = 'storage/upload/image/';

    protected $fillable = ['event_group_id', 'start_date', 'end_date', 'color', 'image_id'];

    protected $dates = ['created_at', 'updated_at', 'deleted_at', 'start_date', 'end_date'];

    protected $appends  = ['lang_title', 'lang_url', 'image_path'];

    public function transTitle()
    {
        return $this->hasMany(EventTitleLang::class);
    }

    public function getLangTitleAttribute()
    {
        return $this->transTitle->keyBy('lang_code');
    }

    public function transUrl()
    {
        return $this->hasMany(EventUrlLang::class);
    }

    public function getLangUrlAttribute()
    {
        return $this->transUrl->keyBy('lang_code');
    }

    function image()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }

    public function getImagePathAttribute()
    {
        if ($this->image) {
            return self::IMAGE_PATH . 'events/' . $this->image->hash_name;
        }
        return null;
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
            'url' => $this->lang_url[app()->getLocale()]->text ?? null,
        ];
    }

}
