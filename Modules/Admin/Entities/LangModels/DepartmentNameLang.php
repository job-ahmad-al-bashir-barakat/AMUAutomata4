<?php

namespace Modules\Admin\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class DepartmentNameLang extends LangModel
{
    protected $fillable = ['lang_id' ,'department_id' ,'text'];
}
