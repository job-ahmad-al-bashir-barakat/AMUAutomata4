<?php

namespace Modules\Utilities\Entities\LangsModel;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Traits\LangInfo;

class UserNameLang extends Model
{
    use SoftDeletes ,LangInfo;

    protected $fillable = ['lang_id', 'user_id', 'text'];

}
