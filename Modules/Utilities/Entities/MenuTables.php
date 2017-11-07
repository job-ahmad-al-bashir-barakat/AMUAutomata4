<?php

namespace Modules\Utilities\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\MenuTableNameLang;
use Modules\Utilities\Traits\MultiLangs;

class MenuTables extends \Eloquent
{
    use SoftDeletes, MultiLangs;

    protected $fillable = ['code'];

    protected $appends = ['lang_name'];

    protected $with = ['columns'];

    public function transName()
    {
        return $this->hasMany(MenuTableNameLang::class ,'menu_table_id');
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy('lang_code');
    }

    public function columns()
    {
        return $this->hasMany(MenuTableColumns::class ,'menu_table_id');
    }

}
