<?php

namespace Modules\Utilities\Entities;

use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Models\Permission as Perm;
use Modules\Utilities\Entities\LangModels\PermissionNameLang;

class Permission extends Perm
{
    use SoftDeletes, MultiLangs;

    protected $fillable = ['name'];

    protected $appends  = ['lang_name'];

    public function transName()
    {
        return $this->hasMany(PermissionNameLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy('lang_name');
    }
}
