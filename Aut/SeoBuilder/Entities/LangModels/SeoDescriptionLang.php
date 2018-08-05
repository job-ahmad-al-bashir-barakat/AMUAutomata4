<?php

namespace Aut\SeoBuilder\Entities\LangModels;

use Modules\Utilities\Traits\LangInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SeoDescriptionLang extends Model
{
    use SoftDeletes, LangInfo;

    protected $fillable = ['id' ,'lang_id', 'seo_id', 'text'];
}
