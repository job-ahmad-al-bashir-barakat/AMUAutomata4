<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class BlockDetailUrlLang extends LangModel
{
    protected $fillable = ['lang_id', 'block_detail_id', 'text'];
}
