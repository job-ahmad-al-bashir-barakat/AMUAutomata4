<?php

namespace Modules\Utilities\Entities\LangsModel;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Traits\LangInfo;

class UserSummaryLang extends Model
{
    use SoftDeletes ,LangInfo;

    protected $fillable = ['lang_id', 'user_id', 'text'];
}
