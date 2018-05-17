<?php

namespace Modules\Admin\Entities\LangModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Traits\LangInfo;

class StatusNameLang extends Model
{
    use SoftDeletes ,LangInfo;

    protected $fillable = ['lang_id', 'text', 'status_id'];
}
