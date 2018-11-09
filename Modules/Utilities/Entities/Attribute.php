<?php

namespace Modules\Utilities\Entities;

use Aut\Eloquent\Models\Model;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\AttributeNameLang;

class Attribute extends Model
{
    use SoftDeletes, MultiLangs;

    protected $fillable = ['code'];

    protected $appends  = ['lang_name'];

    public function transName()
    {
        return $this->hasMany(AttributeNameLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy('lang_code');
    }
}
