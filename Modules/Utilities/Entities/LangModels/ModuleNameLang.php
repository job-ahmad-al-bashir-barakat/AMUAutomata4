<?php

namespace Modules\Utilities\Entities\LangModels;

use Illuminate\Database\Eloquent\Model;
use Modules\Utilities\Traits\LangInfo;

class ModuleNameLang extends Model
{
    use LangInfo;

    protected $fillable = ['id' ,'lang_id', 'module_id', 'text'];

}