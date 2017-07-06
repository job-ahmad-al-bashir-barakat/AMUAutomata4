<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class PrerequisiteGroup extends Model
{
    protected $fillable = [];

    function course()
    {
        return self::belongsToMany(Course::class);
    }
}
