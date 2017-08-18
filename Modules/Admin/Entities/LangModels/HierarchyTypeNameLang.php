<?php

namespace Modules\Admin\Entities\LangModels;

use Modules\Utilities\Traits\LangInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HierarchyTypeNameLang extends Model
{
    use SoftDeletes ,LangInfo;

    protected $fillable = ['lang_id' ,'hierarchy_type_id' ,'text'];
}
