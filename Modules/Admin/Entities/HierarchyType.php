<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\LangModels\HierarchyTypeNameLang;

class HierarchyType extends Model
{
    use MultiLangs ,SoftDeletes;

    protected $fillable = ['id'];

    protected $appends = ['lang_name'];

    public function transName()
    {
        return $this->hasMany(HierarchyTypeNameLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy('lang_code');
    }
}
