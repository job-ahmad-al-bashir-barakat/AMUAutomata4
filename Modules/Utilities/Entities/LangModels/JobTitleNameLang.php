<?php

namespace Modules\Utilities\Entities\LangModels;

use Modules\Utilities\Traits\LangInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobTitleNameLang extends Model
{
    use SoftDeletes ,LangInfo;

    protected $fillable = ['lang_id' ,'job_title_id' ,'text'];
}
