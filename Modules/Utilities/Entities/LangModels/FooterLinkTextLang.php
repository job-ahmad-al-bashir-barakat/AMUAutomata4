<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class FooterLinkTextLang extends LangModel
{
    protected $fillable = ['id' ,'lang_id', 'footer_link_id', 'text'];
}
