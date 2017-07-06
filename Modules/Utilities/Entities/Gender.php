<?php

namespace Modules\Utilities\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Traits\MultiLangs;

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
