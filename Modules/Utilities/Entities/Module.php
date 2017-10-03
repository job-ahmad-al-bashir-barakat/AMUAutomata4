<?php

namespace Modules\Utilities\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\ModuleNameLang;

class Module extends Model
{
    use SoftDeletes, MultiLangs;

    protected $fillable = ['code', 'customized'];

    protected $appends  = ['lang_name'];

    public function transName()
    {
        return $this->hasMany(ModuleNameLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy('lang_code');
    }

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class, 'module_attribute');
    }
}
