<?php

namespace Modules\Utilities\Entities\LangModels;

use Modules\Utilities\Traits\LangInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StepTextLang extends Model
{
    use SoftDeletes ,LangInfo;

    protected $fillable = ['lang_id' ,'step_id' ,'text'];
}
