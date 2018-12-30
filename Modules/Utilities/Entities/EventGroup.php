<?php

namespace Modules\Utilities\Entities;

use Aut\Eloquent\Models\Model;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\EventGroupNameLang;

class EventGroup extends Model
{
    use SoftDeletes, MultiLangs;

    protected $fillable = [''];

    protected $appends  = ['lang_name'];

    public function transName()
    {
        return $this->hasMany(EventGroupNameLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy('lang_code');
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
