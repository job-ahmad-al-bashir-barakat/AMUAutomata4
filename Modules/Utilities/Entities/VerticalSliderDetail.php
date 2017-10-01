<?php

namespace Modules\Utilities\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\VerticalSliderDetailTextLang;
use Modules\Utilities\Entities\LangModels\VerticalSliderDetailSubTextLang;
use Modules\Utilities\Entities\LangModels\VerticalSliderDetailSmallTextLang;

class VerticalSliderDetail extends Model
{
    use SoftDeletes, MultiLangs;

    protected $fillable = ['vertical_slider_id', 'image_id'];

    protected $appends = ['lang_text', 'lang_sub_text', 'lang_small_text'];

    public function transText()
    {
        return $this->hasMany(VerticalSliderDetailTextLang::class);
    }

    public function transSubText()
    {
        return $this->hasMany(VerticalSliderDetailSubTextLang::class);
    }

    public function transSmallText()
    {
        return $this->hasMany(VerticalSliderDetailSmallTextLang::class);
    }

    public function getLangTextAttribute()
    {
        return $this->transText->keyBy('lang_code');
    }

    public function getLangSubTextAttribute()
    {
        return $this->transSubText->keyBy('lang_code');
    }

    public function getLangSmallTextAttribute()
    {
        return $this->transSmallText->keyBy('lang_code');
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
