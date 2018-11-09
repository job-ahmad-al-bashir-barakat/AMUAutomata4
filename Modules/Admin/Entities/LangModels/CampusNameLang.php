<?php

namespace Modules\Admin\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class CampusNameLang extends LangModel
{
    protected $fillable = ['lang_id' ,'text' ,'campus_id'];
}
