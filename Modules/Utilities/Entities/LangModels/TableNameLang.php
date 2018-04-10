<?php

namespace Modules\Utilities\Entities\LangModels;

use Modules\Utilities\Traits\LangInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TableNameLang extends Model
{
    use SoftDeletes, LangInfo;

    protected $fillable = ['id' ,'lang_id', 'table_id', 'text'];
}
