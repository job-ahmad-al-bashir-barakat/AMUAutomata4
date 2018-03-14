<?php

namespace Modules\Utilities\Entities\LangModels;

use Modules\Utilities\Traits\LangInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoleNameLang extends Model
{
    use SoftDeletes, LangInfo;

    protected $fillable = ['id' ,'lang_id', 'role_id', 'text'];
}
