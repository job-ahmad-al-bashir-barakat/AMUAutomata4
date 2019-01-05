<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class FooterNameLang extends LangModel
{
    protected $fillable = ['id' ,'lang_id', 'footer_id', 'text'];
}
