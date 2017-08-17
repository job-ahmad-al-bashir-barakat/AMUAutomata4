<?php

namespace Modules\Utilities\Entities\LangsModel;

use Modules\Utilities\Traits\LangInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GenderNameLang extends Model
{
    use SoftDeletes, LangInfo;

    protected $fillable = ['lang_id' ,'gender_id' ,'text'];
}
