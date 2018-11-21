<?php

namespace Modules\Admin\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class AddressLocationLangs extends LangModel
{
    protected $fillable = ['lang_id' ,'text' ,'address_id'];
}
