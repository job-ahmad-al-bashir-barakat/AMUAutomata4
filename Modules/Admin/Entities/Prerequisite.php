<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prerequisite extends Model
{
    use SoftDeletes;

    protected $fillable = [];

    function course()
    {
        return self::hasOne(Course::class ,'id');
    }
}
