<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class PositionNameLang extends LangModel
{
    protected $fillable = ['lang_id' ,'position_id' ,'text'];
}
