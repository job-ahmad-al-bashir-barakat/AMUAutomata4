<?php

namespace Modules\Admin\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class CourseNameLang extends LangModel
{
    protected $fillable = ['lang_id' ,'text' ,'course_id'];
}
