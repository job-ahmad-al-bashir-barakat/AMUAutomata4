<?php

namespace Modules\Admin\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class NewsTitleLang extends LangModel
{
    protected $fillable = ['lang_id' ,'text' ,'news_id'];
}
