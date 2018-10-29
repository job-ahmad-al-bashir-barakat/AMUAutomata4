<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\LangModels\BranchNameLang;
use Modules\Utilities\Traits\MultiLangs;

class Branch extends Model
{
    use MultiLangs, SoftDeletes;

    protected $fillable = ['id'];

    protected $appends = ['lang_name'];

    public function transName()
    {
        return $this->hasMany(BranchNameLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy("lang_code");
    }
}
