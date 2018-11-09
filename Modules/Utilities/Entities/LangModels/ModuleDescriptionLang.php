<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class ModuleDescriptionLang extends LangModel
{
    protected $fillable = ['id' ,'lang_id', 'module_id', 'text'];
}
