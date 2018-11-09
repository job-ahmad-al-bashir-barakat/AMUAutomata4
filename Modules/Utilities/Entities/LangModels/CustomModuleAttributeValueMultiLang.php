<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class CustomModuleAttributeValueMultiLang extends LangModel
{
    protected $fillable = ['lang_id', 'user_id', 'text'];
}
