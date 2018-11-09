<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class RoleNameLang extends LangModel
{
    protected $fillable = ['id' ,'lang_id', 'role_id', 'text'];
}
