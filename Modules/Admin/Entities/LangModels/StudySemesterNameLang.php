<?php

namespace Modules\Admin\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class StudySemesterNameLang extends LangModel
{
    protected $fillable = ['study_semester_id' ,'lang_id' ,'text'];
}
