<?php

namespace Modules\Utilities\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;

class Lang extends \Eloquent
{
    use SoftDeletes;

    protected $fillable = ['lang_code','short_code','name','native','is_default'];
}
