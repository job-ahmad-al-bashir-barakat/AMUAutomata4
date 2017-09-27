<?php

namespace Modules\Utilities\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\SliderDetailBtnLang;
use Modules\Utilities\Entities\LangModels\SliderDetailHeadLang;
use Modules\Utilities\Entities\LangModels\SliderDetailTextLang;
use Modules\Utilities\Entities\LangModels\SliderDetailTitleLang;

class SliderDetail extends Model
{
    use SoftDeletes, MultiLangs;

    protected $fillable = ['slider_id', 'image_id', 'page_id', 'position'];

    protected $appends = ['lang_head', 'lang_title', 'lang_text', 'lang_btn'];

    public function transHead()
    {
        return $this->hasMany(SliderDetailHeadLang::class);
    }

    public function transTitle()
    {
        return $this->hasMany(SliderDetailTitleLang::class);
    }

    public function transText()
    {
        return $this->hasMany(SliderDetailTextLang::class);
    }

    public function transBtn()
    {
        return $this->hasMany(SliderDetailBtnLang::class);
    }

    public function getLangHeadAttribute()
    {
        return $this->transHead->keyBy('lang_code');
    }

    public function getLangTitleAttribute()
    {
        return $this->transTitle->keyBy('lang_code');
    }

    public function getLangTextAttribute()
    {
        return $this->transText->keyBy('lang_code');
    }

    public function getLangBtnAttribute()
    {
        return $this->transBtn->keyBy('lang_code');
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
