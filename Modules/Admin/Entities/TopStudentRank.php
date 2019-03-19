<?php

namespace Modules\Admin\Entities;

use Aut\Eloquent\Models\Model;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\LangModels\TopStudentRankNameLang;

class TopStudentRank extends Model
{
    use SoftDeletes, MultiLangs;

    protected $fillable = ['rank'];

    protected $appends = ['lang_name'];

    public function transName()
    {
        return $this->hasMany(TopStudentRankNameLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy('lang_code');
    }
}
