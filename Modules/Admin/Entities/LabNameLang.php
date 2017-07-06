<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Traits\LangInfo;

class LabNameLang extends \Eloquent
{
    use SoftDeletes ,LangInfo;

    protected $fillable = ['lang_id' ,'lab_id' ,'text'];
}
