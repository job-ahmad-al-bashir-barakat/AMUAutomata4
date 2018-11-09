<?php

namespace Modules\Admin\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class NewsDescriptionLang extends LangModel
{
    protected $fillable = ['lang_id' ,'text' ,'news_id'];
}
