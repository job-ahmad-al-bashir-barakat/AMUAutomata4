<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class PermissionNameLang extends LangModel
{
    protected $fillable = ['id' ,'lang_id', 'permission_id', 'text'];
}
