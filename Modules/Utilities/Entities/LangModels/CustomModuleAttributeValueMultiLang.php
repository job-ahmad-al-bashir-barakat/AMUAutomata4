<?php

namespace Modules\Utilities\Entities\LangModels;

use Modules\Utilities\Traits\LangInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomModuleAttributeValueMultiLang extends Model
{
    use SoftDeletes ,LangInfo;

    protected $fillable = ['lang_id', 'user_id', 'text'];

}
