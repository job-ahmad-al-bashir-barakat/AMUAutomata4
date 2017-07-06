<?php

namespace Modules\Utilities\Entities\LangsModel;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Traits\LangInfo;

class SocialNetworkNameLang extends Model
{
    use SoftDeletes ,LangInfo;

    protected $fillable = ['social_network_id','lang_id', 'text'];
}
