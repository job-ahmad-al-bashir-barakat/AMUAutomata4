<?php

namespace Modules\Utilities\Entities;

use Illuminate\Database\Eloquent\Builder;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Models\Permission as SpatiePermission;
use Modules\Utilities\Entities\LangModels\PermissionNameLang;

class Permission extends SpatiePermission
{
    use SoftDeletes, MultiLangs;

    protected $fillable = ['name', 'guard_name', 'hidden'];

    protected $appends  = ['lang_name'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    public function transName()
    {
        return $this->hasMany(PermissionNameLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy('lang_code');
    }
}
