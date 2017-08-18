<?php

namespace Modules\Utilities\Entities\LangModels;

use Illuminate\Database\Eloquent\Model;
use Modules\Utilities\Traits\LangInfo;

class CustomModuleNameLang extends Model
{
    use LangInfo;

    protected $fillable = ['id' ,'lang_id', 'custom_module_id', 'text'];

}
