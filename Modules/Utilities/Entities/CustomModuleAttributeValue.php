<?php

namespace Modules\Utilities\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\CustomModuleAttributeValueMultiLang;

class CustomModuleAttributeValue extends Model
{
    use SoftDeletes, MultiLangs;

    protected $fillable = ['custom_module_id', 'attribute_id', 'value'];

    protected $appends = ['lang_multi'];

    public function transMulti()
    {
        return $this->hasMany(CustomModuleAttributeValueMultiLang::class);
    }

    public function getLangMultiAttribute()
    {
        return $this->transmulti->keyBy('lang_code');
    }

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}
