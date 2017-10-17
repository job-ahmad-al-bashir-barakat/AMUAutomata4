<?php

namespace Modules\Utilities\Entities\LangModels;

use Modules\Utilities\Traits\LangInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TextCardTitleLang extends Model
{
    use SoftDeletes ,LangInfo;

    protected $fillable = ['lang_id', 'text_card_id', 'text'];

}
