<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class MenuTableNameLang extends LangModel
{
    protected $fillable = ['lang_id', 'menu_table_id', 'text'];
}
