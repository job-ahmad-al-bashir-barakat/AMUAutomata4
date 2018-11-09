<?php

namespace Modules\Utilities\Entities;

use Aut\Eloquent\Models\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ControlPage extends Model
{
    use SoftDeletes;

    protected $fillable = ['id' ,'control_page_code'];
}
