<?php

namespace Modules\Admin\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class HierarchyNameLang extends LangModel
{
    protected $fillable = ['hierarchy_id' ,'lang_id' ,'text'];
}
