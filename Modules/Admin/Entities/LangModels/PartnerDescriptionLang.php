<?php

namespace Modules\Admin\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class PartnerDescriptionLang extends LangModel
{
    protected $fillable = ['lang_id' ,'partner_id' ,'text'];
}
