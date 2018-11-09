<?php

namespace Modules\Admin\Entities;

use Aut\Eloquent\Models\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhoneNumbers extends Model
{
    use SoftDeletes;

    protected $fillable = ['number' ,'type' ,'contact_id'];
}
