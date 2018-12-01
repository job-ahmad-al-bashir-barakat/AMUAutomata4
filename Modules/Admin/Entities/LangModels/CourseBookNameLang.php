<?php

namespace Modules\Admin\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;
use Illuminate\Database\Eloquent\Model;

class CourseBookNameLang extends LangModel
{
    protected $fillable = ['lang_id' ,'text' ,'course_book_id'];
}
