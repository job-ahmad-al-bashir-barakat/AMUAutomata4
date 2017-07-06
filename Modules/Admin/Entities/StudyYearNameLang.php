<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Traits\LangInfo;

class StudyYearNameLang extends \Eloquent
{
    use SoftDeletes ,LangInfo;

    protected $fillable = ['study_year_id' ,'lang_id' ,'text'];
}
