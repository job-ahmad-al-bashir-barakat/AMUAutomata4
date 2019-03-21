<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class VideoNameLang extends LangModel
{
    protected $fillable = ['lang_id', 'video_id', 'text'];
}
