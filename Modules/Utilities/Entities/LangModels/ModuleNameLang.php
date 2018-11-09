<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class ModuleNameLang extends LangModel
{
    protected $fillable = ['id' ,'lang_id', 'module_id', 'text'];
}
