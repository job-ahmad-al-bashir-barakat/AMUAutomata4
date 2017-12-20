<?php

namespace Modules\Utilities\Entities\LangModels;

use Illuminate\Database\Eloquent\Model;

class AttributeNameLang extends Model
{
    protected $fillable = ['id' ,'lang_id', 'attribute_id', 'text'];
}
