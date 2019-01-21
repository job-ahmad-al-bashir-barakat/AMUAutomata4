<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class EventUrlLang extends LangModel
{
    protected $fillable = ['id' ,'lang_id', 'event_id', 'text'];
}
