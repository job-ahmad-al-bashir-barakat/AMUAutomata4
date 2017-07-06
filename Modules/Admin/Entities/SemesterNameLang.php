<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Traits\LangInfo;

class SemesterNameLang extends \Eloquent
{
    use SoftDeletes ,LangInfo;

    protected $fillable = ['lang_id' ,'semester_id' ,'text'];
}
