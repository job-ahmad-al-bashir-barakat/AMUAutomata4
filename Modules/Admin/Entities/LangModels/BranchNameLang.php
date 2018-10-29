<?php

namespace Modules\Admin\Entities\LangModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Traits\LangInfo;

class BranchNameLang extends Model
{
    use SoftDeletes, LangInfo;

    protected $fillable = ['lang_id' ,'text' ,'branch_id'];
}
