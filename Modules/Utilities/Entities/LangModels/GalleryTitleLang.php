<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class GalleryTitleLang extends LangModel
{
    protected $fillable = ['lang_id', 'image_id', 'text'];
}
