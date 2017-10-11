<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhoneNumbers extends \Eloquent
{
    use SoftDeletes;

    protected $fillable = ['number' ,'type' ,'contact_id'];
}
