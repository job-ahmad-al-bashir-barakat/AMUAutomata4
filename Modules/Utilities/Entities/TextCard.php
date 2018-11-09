<?php

namespace Modules\Utilities\Entities;

use Aut\Eloquent\Models\Model;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\TextCardTitleLang;

class TextCard extends Model
{
    use SoftDeletes, MultiLangs;

    protected $fillable = ['icon_id', 'url'];

    protected $appends = ['lang_title'];

    public function transTitle()
    {
        return $this->hasMany(TextCardTitleLang::class);
    }

    public function getLangTitleAttribute()
    {
        return $this->transTitle->keyBy('lang_code');
    }

    public function icon()
    {
        return $this->belongsTo(Icon::class);
    }
}
