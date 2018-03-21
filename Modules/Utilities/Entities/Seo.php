<?php

namespace Modules\Utilities\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\SeoTitleLang;
use Modules\Utilities\Entities\LangModels\SeoDescriptionLang;

class Seo extends Model
{
    use SoftDeletes, MultiLangs;

    protected $fillable = [];

    protected $appends  = ['lang_title', 'lang_description'];

    public function transTitle()
    {
        return $this->hasMany(SeoTitleLang::class);
    }
    public function transDescription()
    {
        return $this->hasMany(SeoDescriptionLang::class);
    }

    public function getLangTitleAttribute()
    {
        return $this->transTitle->keyBy('lang_code');
    }

    public function getLangDescriptionAttribute()
    {
        return $this->transDescription->keyBy('lang_code');
    }
}
