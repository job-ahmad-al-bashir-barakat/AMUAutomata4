<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class FooterTextLang extends LangModel
{
    protected $fillable = ['id' ,'lang_id', 'footer_id', 'text'];
}
