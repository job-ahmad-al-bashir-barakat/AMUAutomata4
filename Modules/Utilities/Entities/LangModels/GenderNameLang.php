<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class GenderNameLang extends LangModel
{
    protected $fillable = ['lang_id' ,'gender_id' ,'text'];
}
