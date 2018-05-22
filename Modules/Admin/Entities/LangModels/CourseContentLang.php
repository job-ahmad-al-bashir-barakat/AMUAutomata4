<?php

namespace Modules\Admin\Entities\LangModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Traits\LangInfo;

class CourseContentLang extends Model
{
    use SoftDeletes, LangInfo;

    protected $fillable = ['lang_id' ,'text' ,'course_id'];
}
