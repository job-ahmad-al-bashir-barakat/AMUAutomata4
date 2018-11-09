<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class SliderNameLang extends LangModel
{
    protected $fillable = ['lang_id', 'slider_id', 'text'];
}
