<?php

namespace Modules\Admin\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class PersonExperienceLang extends LangModel
{
    protected $fillable = ['lang_id' ,'person_id' ,'text'];
}
