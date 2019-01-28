<?php

namespace Modules\Utilities\Entities;

use Aut\Eloquent\Models\Model;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\LinkUrlLang;
use Modules\Utilities\Entities\LangModels\LinkTextLang;

class Link extends Model
{
    use SoftDeletes, MultiLangs;

    protected $fillable = ['icon_id', 'bg_color'];

    protected $appends  = ['lang_url', 'lang_text'];

    public function transUrl()
    {
        return $this->hasMany(LinkUrlLang::class);
    }

    public function getLangUrlAttribute()
    {
        return $this->transUrl->keyBy('lang_code');
    }

    public function transText()
    {
        return $this->hasMany(LinkTextLang::class);
    }

    public function getLangTextAttribute()
    {
        return $this->transText->keyBy('lang_code');
    }

    public function icon()
    {
        return $this->belongsTo(Icon::class);
    }
}
