<?php

namespace Modules\Admin\Entities;

use Aut\Eloquent\Models\Model;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\LangModels\CampusNameLang;

class Campus extends Model
{
    use MultiLangs, SoftDeletes;

    protected $fillable = ['id'];

    protected $appends = ['lang_name'];

    public function transName()
    {
        return $this->hasMany(CampusNameLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy("lang_code");
    }
}
