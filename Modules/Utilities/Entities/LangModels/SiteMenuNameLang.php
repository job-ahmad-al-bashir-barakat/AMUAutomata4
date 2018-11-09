<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class SiteMenuNameLang extends LangModel
{
    protected $fillable = ['lang_id', 'site_menu_id', 'text'];
}
