<?php

namespace Modules\Utilities\Entities\LangModels;

use Illuminate\Database\Eloquent\Model;
use Modules\Utilities\Traits\LangInfo;

class AttributeNameLang extends Model
{
    use LangInfo;

    protected $fillable = ['id' ,'lang_id', 'attribute_id', 'text'];

}
