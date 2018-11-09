<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class TextCardTitleLang extends LangModel
{
    protected $fillable = ['lang_id', 'text_card_id', 'text'];
}
