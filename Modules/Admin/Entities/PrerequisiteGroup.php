<?php

namespace Modules\Admin\Entities;

use Aut\Eloquent\Models\Model;

class PrerequisiteGroup extends Model
{
    protected $fillable = ['id' , 'code' ,'course_id'];

    function courses()
    {
        return self::belongsToMany(Course::class ,'prerequisite');
    }
}
