<?php

namespace Modules\Admin\Entities;

use Aut\Eloquent\Models\Model;
use Kalnoy\Nestedset\NodeTrait;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\LangModels\HierarchyNameLang;

class Hierarchy extends Model
{
    use NodeTrait ,MultiLangs ,SoftDeletes;

    protected $fillable = ['id' ,'hierarchy_type_id' ,'parent_id' ,'order'];

    protected $appends = ['lang_name'];

    protected $with = ['hierarchyType'];

    public function transName()
    {
        return $this->hasMany(HierarchyNameLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy('lang_code');
    }

    function hierarchyType()
    {
        return $this->belongsTo(HierarchyType::class);
    }
}
