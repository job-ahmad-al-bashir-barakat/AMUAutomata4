<?php

namespace Modules\Utilities\Entities;

use Aut\Eloquent\Models\Model;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\StepTextLang;
use Modules\Utilities\Entities\LangModels\StepTitleLang;

class Step extends Model
{
    use SoftDeletes, MultiLangs;

    protected $fillable = ['id'];

    protected $appends = ['lang_title', 'lang_text'];

    public function transTitle()
    {
        return $this->hasMany(StepTitleLang::class);
    }

    public function transText()
    {
        return $this->hasMany(StepTextLang::class);
    }

    public function getLangTitleAttribute()
    {
        return $this->transTitle->keyBy('lang_code');
    }

    public function getLangTextAttribute()
    {
        return $this->transText->keyBy('lang_code');
    }
}
