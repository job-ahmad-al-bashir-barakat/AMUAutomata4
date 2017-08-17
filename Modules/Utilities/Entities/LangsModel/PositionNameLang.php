<?php

namespace Modules\Utilities\Entities\LangsModel;

use Modules\Utilities\Traits\LangInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PositionNameLang extends Model
{
    use SoftDeletes ,LangInfo;

    protected $fillable = ['lang_id' ,'position_id' ,'text'];
}
