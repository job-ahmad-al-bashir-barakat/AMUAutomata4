<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class MenuListNameLang extends LangModel
{
    protected $fillable = ['lang_id', 'menu_list_id', 'text'];
}
