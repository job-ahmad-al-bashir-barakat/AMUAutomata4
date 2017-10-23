<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class FacultyStudyYear extends Model
{
    protected $table = 'faculty_study_year';

    function studyYear()
    {
        return $this->belongsTo(StudyYear::class);
    }
}
