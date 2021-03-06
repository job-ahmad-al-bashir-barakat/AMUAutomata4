<?php

namespace Modules\Utilities\Entities;

use Aut\Eloquent\Models\Model;
use Illuminate\Support\Collection;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\CustomModuleNameLang;

/**
 * @property int module_id
 * @property CustomModuleAttributeValue|Collection attributeValues
 */
class CustomModule extends Model
{
    use SoftDeletes, MultiLangs;

    protected $fillable = ['module_id'];

    protected $appends  = ['lang_name'];

    public function transName()
    {
        return $this->hasMany(CustomModuleNameLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy('lang_code');
    }

    public function modules()
    {
        return $this->belongsTo(Module::class, 'module_id');
    }

    public function attributeValues()
    {
        return $this->hasMany(CustomModuleAttributeValue::class);
    }

    /*public function attributes()
    {
        return $this->belongsToMany(Attribute::class, 'custom_module_attribute_value');
    }*/
}
