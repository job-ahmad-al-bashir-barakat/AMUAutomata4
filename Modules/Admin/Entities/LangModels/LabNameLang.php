<?php

namespace Modules\Admin\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class LabNameLang extends LangModel
{
    protected $fillable = ['lang_id' ,'lab_id' ,'text'];
}
