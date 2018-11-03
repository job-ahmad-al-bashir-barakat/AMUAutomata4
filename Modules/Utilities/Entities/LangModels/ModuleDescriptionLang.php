<?php

namespace Modules\Utilities\Entities\LangModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Traits\LangInfo;

class ModuleDescriptionLang extends Model
{
    use LangInfo, SoftDeletes;

    protected $fillable = ['id' ,'lang_id', 'module_id', 'text'];

}
