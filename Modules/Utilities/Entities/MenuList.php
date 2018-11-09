<?php

namespace Modules\Utilities\Entities;

use Aut\Eloquent\Models\Model;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\MenuListNameLang;

class MenuList extends Model
{
    use SoftDeletes, MultiLangs;

    protected $fillable = ['id', 'is_default'];

    protected $appends  = ['lang_name'];

    public function transName()
    {
        return $this->hasMany(MenuListNameLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy('lang_code');
    }

    public function siteMenu()
    {
        return $this->hasMany(SiteMenu::class);
    }
}
