<?php

namespace Modules\Admin\Entities;

use Aut\Eloquent\Models\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TopStudent extends Model
{
    use SoftDeletes;

    protected $fillable = ['study_semester_id', 'study_year_id', 'student_id', 'rank_id', 'gpa'];

    public function studySemester()
    {
        return $this->belongsTo(StudySemester::class);
    }

    public function studyYear()
    {
        return $this->belongsTo(StudyYear::class);
    }

    public function student()
    {
        return $this->belongsTo(Person::class, 'student_id')->where('type', 'student');
    }

    public function rank()
    {
        return $this->belongsTo(TopStudentRank::class, 'rank_id');
    }
}
