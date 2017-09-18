<?php

namespace Modules\Utilities\Entities\LangModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Traits\LangInfo;

class ImageAltLang extends Model
{
    use LangInfo ,SoftDeletes;

    protected $fillable = ['lang_id' ,'image_id' ,'text'];
}
