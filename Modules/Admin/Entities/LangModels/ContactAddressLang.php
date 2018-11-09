<?php

namespace Modules\Admin\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class ContactAddressLang extends LangModel
{
    protected $fillable = ['lang_id' ,'text' ,'contact_id'];
}
