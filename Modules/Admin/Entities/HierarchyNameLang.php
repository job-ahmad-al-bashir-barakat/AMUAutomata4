<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Traits\LangInfo;

class HierarchyNameLang extends Model
{
    use SoftDeletes ,LangInfo;

    protected $fillable = ['hierarchy_id' ,'lang_id' ,'text'];
}
