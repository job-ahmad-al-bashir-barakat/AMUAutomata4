<?php

namespace Modules\Utilities\Entities\LangModels;

use Modules\Utilities\Traits\LangInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SeoProfileFirstNameLang extends Model
{
    use SoftDeletes, LangInfo;

    protected $fillable = ['id' ,'lang_id', 'seo_id', 'text'];
}
