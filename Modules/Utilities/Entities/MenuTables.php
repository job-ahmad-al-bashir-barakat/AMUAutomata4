<?php

namespace Modules\Utilities\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\MenuTableNameLang;
use Modules\Utilities\Traits\MultiLangs;

class MenuTables extends Model
{
    use SoftDeletes, MultiLangs;

    protected $fillable = ['code'];

    protected $appends = ['lang_name'];

    public function transName()
    {
        return $this->hasMany(MenuTableNameLang::class ,'menu_table_id');
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy('lang_code');
    }

}
