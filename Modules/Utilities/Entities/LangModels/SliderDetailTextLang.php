<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class SliderDetailTextLang extends LangModel
{
    protected $fillable = ['lang_id', 'slider_detail_id', 'text'];
}
