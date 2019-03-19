<?php

namespace Modules\Admin\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class BookNameLang extends LangModel
{
    protected $fillable = ['lang_id' ,'text' ,'book_id'];
}
