<?php

namespace Modules\Utilities\Entities\LangModels;

use Modules\Utilities\Traits\LangInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VerticalSliderDetailSmallTextLang extends Model
{
    use SoftDeletes ,LangInfo;

    protected $fillable = ['lang_id', 'vertical_slider_detail_id', 'text'];

}
