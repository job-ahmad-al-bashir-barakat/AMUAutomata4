<?php

namespace Modules\Utilities\Entities\LangsModel;

use Modules\Utilities\Traits\LangInfo;
use Illuminate\Database\Eloquent\SoftDeletes;

class SettingNameLang extends \Eloquent
{
    use SoftDeletes ,LangInfo;

    protected $fillable = ['setting_id' ,'lang_id' ,'text'];
}
