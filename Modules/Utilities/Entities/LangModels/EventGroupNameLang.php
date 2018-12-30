<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class EventGroupNameLang extends LangModel
{
    protected $fillable = ['id' ,'lang_id', 'event_group_id', 'text'];
}
