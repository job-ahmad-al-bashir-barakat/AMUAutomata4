<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class JobTitleNameLang extends LangModel
{
    protected $fillable = ['lang_id' ,'job_title_id' ,'text'];
}
