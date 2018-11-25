<?php

namespace Aut\FileUpload\Entities\LangModels;

use Aut\Eloquent\Models\LangModel;

class FileAltLang extends LangModel
{
    protected $fillable = ['lang_id' ,'file_id' ,'text'];
}
