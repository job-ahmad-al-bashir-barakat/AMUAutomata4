<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class CardUrlLang extends LangModel
{
    protected $fillable = ['lang_id', 'card_id', 'text'];
}
