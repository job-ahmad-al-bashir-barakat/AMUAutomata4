<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class LinkTextLang extends LangModel
{
    protected $fillable = ['lang_id', 'link_id', 'text'];
}
