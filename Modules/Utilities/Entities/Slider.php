<?php

namespace Modules\Utilities\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\SliderNameLang;

class Slider extends Model
{
    use SoftDeletes, MultiLangs;

    protected $fillable = ['id'];

    protected $appends = ['lang_name'];

    public function transName()
    {
        return $this->hasMany(SliderNameLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy('lang_code');
    }

    public function sliderDetails()
    {
        return $this->hasMany(SliderDetail::class);
    }
}
