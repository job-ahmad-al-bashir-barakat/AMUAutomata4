<?php

namespace Modules\Utilities\Entities;

use Modules\Utilities\Traits\MultiLangs;
use Spatie\Permission\Models\Role as Rol;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\RoleNameLang;

class Role extends Rol
{
    use SoftDeletes, MultiLangs;

    protected $fillable = ['name'];

    protected $appends  = ['lang_name'];

    public function transName()
    {
        return $this->hasMany(RoleNameLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy('lang_name');
    }
}
