<?php

namespace Modules\Utilities\Entities;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
use Modules\Utilities\Traits\MultiLangs;

class ControlMenu extends \Eloquent
{
    use NodeTrait ,MultiLangs;

    protected $with = ['page'];

    protected $fillable = ['id' ,'control_page_id' ,'parent_id' ,'url_path'];

    function page()
    {
        return $this->belongsTo(ControlPage::class ,'control_page_id');
    }
}
