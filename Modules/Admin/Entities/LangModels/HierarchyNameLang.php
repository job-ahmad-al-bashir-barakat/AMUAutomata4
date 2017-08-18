<?php

namespace Modules\Admin\Entities\LangModels;

use Modules\Utilities\Traits\LangInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HierarchyNameLang extends Model
{
    use SoftDeletes ,LangInfo;

    protected $fillable = ['hierarchy_id' ,'lang_id' ,'text'];
}
