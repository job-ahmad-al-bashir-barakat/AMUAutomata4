<?php

namespace Modules\Admin\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class TenderTextLang extends LangModel
{
    protected $fillable = ['lang_id' ,'text' ,'tender_id'];
}
