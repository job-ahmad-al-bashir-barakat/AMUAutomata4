<?php

namespace Modules\Admin\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class HierarchyTypeNameLang extends LangModel
{
    protected $fillable = ['lang_id' ,'hierarchy_type_id' ,'text'];
}
