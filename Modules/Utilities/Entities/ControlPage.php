<?php

namespace Modules\Utilities\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;

class ControlPage extends \Eloquent
{
    use SoftDeletes;

    protected $fillable = ['id' ,'control_page_code'];
}
