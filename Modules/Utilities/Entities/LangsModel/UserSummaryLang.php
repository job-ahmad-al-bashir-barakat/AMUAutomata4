<?php

namespace Modules\Utilities\Entities\LangsModel;

use Illuminate\Database\Eloquent\Model;
use Modules\Utilities\Traits\LangInfo;

class UserSummaryLang extends Model
{
    use LangInfo;

    protected $fillable = ['lang_id', 'user_id', 'text'];
}
