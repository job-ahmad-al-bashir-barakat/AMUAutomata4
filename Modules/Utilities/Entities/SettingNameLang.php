<?php

namespace Modules\Utilities\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Traits\LangInfo;

class SettingNameLang extends \Eloquent
{
    use SoftDeletes ,LangInfo;

    protected $fillable = ['setting_id' ,'lang_id' ,'text'];
}
