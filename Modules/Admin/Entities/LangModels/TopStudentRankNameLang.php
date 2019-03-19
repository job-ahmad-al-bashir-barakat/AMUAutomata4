<?php

namespace Modules\Admin\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class TopStudentRankNameLang extends LangModel
{
    protected $fillable = ['lang_id', 'top_student_rank_id', 'text'];
}
