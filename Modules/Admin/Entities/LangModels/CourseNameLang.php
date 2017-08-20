<?php

namespace Modules\Admin\Entities\LangModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Traits\LangInfo;

class CourseNameLang extends Model
{
    use SoftDeletes ,LangInfo;

    protected $fillable = [];
}
