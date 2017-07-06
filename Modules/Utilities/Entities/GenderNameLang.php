<?php

namespace Modules\Utilities\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Traits\LangInfo;

class GenderNameLang extends Model
{
    use SoftDeletes, LangInfo;

    protected $fillable = ['lang_id' ,'gender_id' ,'text'];
}
