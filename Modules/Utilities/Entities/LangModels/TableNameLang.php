<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class TableNameLang extends LangModel
{
    protected $fillable = ['id' ,'lang_id', 'table_id', 'text'];
}
