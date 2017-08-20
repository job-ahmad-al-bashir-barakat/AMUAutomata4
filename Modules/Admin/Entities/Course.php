<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\LangModels\CourseNameLang;
use Modules\Utilities\Traits\MultiLangs;

class Course extends Model
{
    use SoftDeletes ,MultiLangs;

    protected $fillable = [];

    public function transName()
    {
        return $this->hasMany(CourseNameLang::class);
    }

    function prerequisiteGroup()
    {
        return self::belongsToMany(PrerequisiteGroup::class);
    }
}
