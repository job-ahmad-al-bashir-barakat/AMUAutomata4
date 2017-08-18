<?php

namespace Modules\Admin\Entities\LangModels;

use Modules\Utilities\Traits\LangInfo;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudyYearNameLang extends \Eloquent
{
    use SoftDeletes ,LangInfo;

    protected $fillable = ['study_year_id' ,'lang_id' ,'text'];
}
