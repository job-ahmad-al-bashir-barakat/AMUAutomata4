<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class StepTitleLang extends LangModel
{
    protected $fillable = ['lang_id' ,'step_id' ,'text'];
}
