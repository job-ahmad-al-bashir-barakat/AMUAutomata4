<?php

namespace Modules\Admin\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class SemesterNameLang extends LangModel
{
    protected $fillable = ['lang_id' ,'semester_id' ,'text'];
}
