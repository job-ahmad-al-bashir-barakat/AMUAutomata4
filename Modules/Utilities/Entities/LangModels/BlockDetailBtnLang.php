<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class BlockDetailBtnLang extends LangModel
{
    protected $fillable = ['lang_id', 'block_detail_id', 'text'];
}
