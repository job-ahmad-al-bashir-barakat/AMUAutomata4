<?php

namespace Modules\Admin\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class DegreeNameLang extends LangModel
{
    protected $fillable = ['lang_id' ,'text' ,'degree_id'];
}
