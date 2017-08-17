<?php

namespace Modules\Utilities\Entities;

use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangsModel\GenderNameLang;

class Gender extends \Eloquent
{
    use SoftDeletes ,MultiLangs;

    protected $fillable = ['id'];

    protected $appends = ['lang_name'];

    public function transName()
    {
        return $this->hasMany(GenderNameLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy('lang_code');
    }
}
