<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class SettingNameLang extends LangModel
{
    protected $fillable = ['setting_id' ,'lang_id' ,'text'];
}
