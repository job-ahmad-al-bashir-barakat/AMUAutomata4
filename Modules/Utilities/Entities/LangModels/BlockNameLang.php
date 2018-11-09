<?php

namespace Modules\Utilities\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class BlockNameLang extends LangModel
{
    protected $fillable = ['lang_id', 'block_id', 'text'];

}
