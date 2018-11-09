<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class CustomModuleNameLang extends LangModel
{
    protected $fillable = ['id' ,'lang_id', 'custom_module_id', 'text'];
}
