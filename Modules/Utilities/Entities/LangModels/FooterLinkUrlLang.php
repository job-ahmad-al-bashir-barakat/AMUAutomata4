<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class FooterLinkUrlLang extends LangModel
{
    protected $fillable = ['lang_id', 'footer_link_id', 'text'];
}
