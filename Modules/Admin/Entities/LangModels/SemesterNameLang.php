<?php

namespace Modules\Admin\Entities\LangModels;

use Modules\Utilities\Traits\LangInfo;
use Illuminate\Database\Eloquent\SoftDeletes;

class SemesterNameLang extends \Eloquent
{
    use SoftDeletes ,LangInfo;

    protected $fillable = ['lang_id' ,'semester_id' ,'text'];
}
