<?php

namespace Modules\Utilities\Entities;

use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Models\Role as SpatieRole;
use Modules\Utilities\Entities\LangModels\RoleNameLang;

class Role extends SpatieRole
{
    use SoftDeletes, MultiLangs;

    protected $fillable = ['name', 'guard_name'];

    protected $appends  = ['lang_name'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    public function transName()
    {
        return $this->hasMany(RoleNameLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy('lang_code');
    }
}
