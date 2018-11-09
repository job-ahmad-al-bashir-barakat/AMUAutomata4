<?php

namespace Modules\Admin\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class FacultyNameLang extends LangModel
{
    protected $fillable = ['lang_id' ,'text' ,'faculty_id'];
}
