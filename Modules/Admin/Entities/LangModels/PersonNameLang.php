<?php

namespace Modules\Admin\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class PersonNameLang extends LangModel
{
    protected $fillable = ['lang_id' ,'person_id' ,'text'];
}
