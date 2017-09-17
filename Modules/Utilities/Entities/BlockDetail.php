<?php

namespace Modules\Utilities\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\BlockDetailBtnLang;
use Modules\Utilities\Entities\LangModels\BlockDetailTextLang;
use Modules\Utilities\Entities\LangModels\BlockDetailTitleLang;

class BlockDetail extends Model
{
    use SoftDeletes, MultiLangs;

    protected $fillable = ['block_id', 'page_id', 'icon_id'];

    protected $appends = ['lang_title', 'lang_text', 'lang_btn'];

    public function transTitle()
    {
        return $this->hasMany(BlockDetailTitleLang::class);
    }

    public function transText()
    {
        return $this->hasMany(BlockDetailTextLang::class);
    }

    public function transBtn()
    {
        return $this->hasMany(BlockDetailBtnLang::class);
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
}
