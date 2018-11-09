<?php

namespace Modules\Admin\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class CourseDescriptionLang extends LangModel
{
    protected $fillable = ['lang_id' ,'course_id' ,'text'];
}
