<?php

namespace Modules\Admin\Entities\LangModels;

use Modules\Utilities\Traits\LangInfo;
use Illuminate\Database\Eloquent\SoftDeletes;

class LabNameLang extends \Eloquent
{
    use SoftDeletes ,LangInfo;

    protected $fillable = ['lang_id' ,'lab_id' ,'text'];
}
