<?php

namespace Modules\Admin\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class StudyYearNameLang extends LangModel
{
    protected $fillable = ['study_year_id' ,'lang_id' ,'text'];
}
