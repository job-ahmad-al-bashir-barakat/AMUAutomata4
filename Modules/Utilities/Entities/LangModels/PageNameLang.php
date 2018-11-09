<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class PageNameLang extends LangModel
{
    protected $fillable = ['lang_id', 'page_id', 'text'];
}
