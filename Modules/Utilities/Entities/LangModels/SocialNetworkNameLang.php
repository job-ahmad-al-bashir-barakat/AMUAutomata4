<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class SocialNetworkNameLang extends LangModel
{
    protected $fillable = ['social_network_id','lang_id', 'text'];
}
