<?php

namespace Modules\Utilities\Entities;

use Aut\Eloquent\Models\Model;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\FooterLinkTextLang;
use Modules\Utilities\Entities\LangModels\FooterLinkUrlLang;

class FooterLink extends Model
{
    use SoftDeletes, MultiLangs;

    protected $fillable = ['footer_id'];

    protected $appends  = ['lang_text', 'lang_url'];

    public function transText()
    {
        return $this->hasMany(FooterLinkTextLang::class);
    }

    public function getLangTextAttribute()
    {
        return $this->transText->keyBy('lang_code');
    }

    public function transUrl()
    {
        return $this->hasMany(FooterLinkUrlLang::class);
    }

    public function getLangUrlAttribute()
    {
        return $this->transUrl->keyBy('lang_code');
    }
}
