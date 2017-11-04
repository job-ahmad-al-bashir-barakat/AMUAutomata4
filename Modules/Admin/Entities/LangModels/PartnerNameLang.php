<?php

namespace Modules\Admin\Entities\LangModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Traits\LangInfo;

class PartnerNameLang extends Model
{
    use LangInfo ,SoftDeletes;

    protected $fillable = ['lang_id' ,'partner_id' ,'text'];
}
