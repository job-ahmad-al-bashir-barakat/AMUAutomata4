<?php

namespace Modules\Utilities\Entities;

use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\SeoTitleLang;
use Modules\Utilities\Entities\LangModels\SeoKeywordLang;
use Modules\Utilities\Entities\LangModels\SeoDescriptionLang;

class Seo extends \Eloquent
{
    use SoftDeletes, MultiLangs;

    protected $fillable = ['buildable_id', 'buildable_type', 'optional_id'];

    protected $appends  = ['lang_title', 'lang_description', 'lang_keyword'];

    public function scopePageSeo($query, $page = false)
    {
        if ($page) {
            list($buildableType, $buildableId, $optionalId) = explode('.', $page);
        } else {
            $route = request()->route();
            list($buildableType, $buildableId, $optionalId) = explode('.', $route->getName());
        }

        $query->whereBuildableId($buildableId)->whereBuildableType($buildableType);
        if ($optionalId) {
            $query->whereOptionalId($optionalId);
        } else {
            $query->whereNull('optional_id');
        }
        return $query;
    }
    public function buildable()
    {
        return $this->morphTo();
    }

    public function transTitle()
    {
        return $this->hasMany(SeoTitleLang::class);
    }

    public function transDescription()
    {
        return $this->hasMany(SeoDescriptionLang::class);
    }

    public function transKeyword()
    {
        return $this->hasMany(SeoKeywordLang::class);
    }

    public function getLangTitleAttribute()
    {
        return $this->transTitle->keyBy('lang_code');
    }

    public function getLangDescriptionAttribute()
    {
        return $this->transDescription->keyBy('lang_code');
    }

    public function getLangKeywordAttribute()
    {
        return $this->transKeyword->keyBy('lang_code');
    }
}
