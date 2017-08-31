<?php

namespace Modules\Utilities\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\PageNameLang;

class BuilderPage extends Model
{
    use SoftDeletes;

    protected $fillable = ['page_id', 'custom_module_id', 'position', 'order'];

}
