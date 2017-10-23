<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\LangModels\CourseNameLang;
use Modules\Utilities\Traits\MultiLangs;

class Course extends \Eloquent
{
    use SoftDeletes ,MultiLangs;

    protected $fillable = ['id' ,'code' ,'credit' ,'faculty_id' ,'department_id' ,'degree_id' ,'semester_id' ,'faculty_study_year_id'];

    protected $appends = ['lang_name'];

    public function transName()
    {
        return $this->hasMany(CourseNameLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy('lang_code');
    }

    /*
     * relation
     */
    function department()
    {
        return $this->belongsTo(Department::class);
    }

    function degree()
    {
        return $this->belongsTo(Degree::class);
    }

    function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    function facultyStudyYear()
    {
        return $this->belongsTo(FacultyStudyYear::class);
    }

    function semester()
    {
        return $this->belongsTo(Semester::class);
    }

    public function prerequisiteGroup()
    {
        return self::hasMany(PrerequisiteGroup::class);
    }

    public function prerequisite()
    {
        return self::belongsToMany(PrerequisiteGroup::class ,'prerequisite');
    }
}
