<?php

namespace Modules\Utilities\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Utilities\Entities\LangModels\ModuleDescriptionLang;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\ModuleNameLang;

class Module extends Model
{
    use SoftDeletes, MultiLangs;

    protected $fillable = ['image_id', 'code', 'customized'];

    protected $appends  = ['lang_name', 'lang_description'];

    public function transName()
    {
        return $this->hasMany(ModuleNameLang::class);
    }

    public function transDescription()
    {
        return $this->hasMany(ModuleDescriptionLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy('lang_code');
    }

    public function getLangDescriptionAttribute()
    {
        return $this->transDescription->keyBy('lang_code');
    }

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class, 'module_attribute');
    }

    public function image()
    {
        return $this->hasOne(Image::class, 'id', 'image_id');
    }
}
