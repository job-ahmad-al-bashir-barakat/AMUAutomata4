<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class AttributeNameLang extends LangModel
{
    protected $fillable = ['id' ,'lang_id', 'attribute_id', 'text'];
}
