<?php

namespace Modules\Admin\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class NewsContentLang extends LangModel
{
    protected $fillable = ['lang_id' ,'text' ,'news_id'];
}
