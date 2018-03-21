<?php

namespace Modules\Utilities\Entities\LangModels;

use Modules\Utilities\Traits\LangInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermissionNameLang extends Model
{
    use SoftDeletes, LangInfo;

    protected $fillable = ['id' ,'lang_id', 'permission_id', 'text'];
}
