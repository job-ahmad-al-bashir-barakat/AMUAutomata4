<?php

namespace Modules\Admin\Entities;

use Aut\Eloquent\Models\Model;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentAcademicInfo extends Model
{
    use SoftDeletes, MultiLangs;

    protected $table = 'student_academic_info';

    protected $fillable = ['person_id', 'faculty_id', 'graduate_semester_id', 'gpa'];

    protected $with = ['faculty'];

    function graduate()
    {
        return $this->belongsTo(StudySemester::class, 'graduate_semester_id');
    }

    function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }
}
