<?php

namespace Modules\Utilities\Entities\LangModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Traits\LangInfo;

class MenuTableNameLang extends Model
{
    use SoftDeletes ,LangInfo;

    protected $fillable = ['lang_id', 'menu_table_id', 'text'];
}
