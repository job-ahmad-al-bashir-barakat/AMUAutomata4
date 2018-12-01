<?php

namespace Modules\Admin\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;
use Illuminate\Database\Eloquent\Model;

class ResearchJournalLang extends LangModel
{
    protected $fillable = ['lang_id' ,'text' ,'Research_id'];
}
