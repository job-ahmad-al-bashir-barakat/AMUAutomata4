<?php

namespace Modules\Admin\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class StatusNameLang extends LangModel
{
    protected $fillable = ['lang_id', 'text', 'status_id'];
}
