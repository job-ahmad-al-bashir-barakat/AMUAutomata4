<?php

namespace Modules\Admin\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class UniversityOfficeNameLang extends LangModel
{
    protected $fillable = ['lang_id' ,'university_office_id' ,'text'];
}
