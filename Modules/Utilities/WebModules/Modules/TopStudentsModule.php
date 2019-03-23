<?php

namespace Modules\Utilities\WebModules\Modules;

use Modules\Admin\Entities\StudySemester;
use Modules\Admin\Entities\TopStudent;

class TopStudentsModule extends Module
{
    public $id = '51';
    public $code = 'top_students';
    public $viewName = 'top-students';

    public function getModuleData($data)
    {
        $facultyId = $data['faculty']->id;

        $students = TopStudent::whereHas('student.academic', function ($query) use ($facultyId) {
            $query->where('faculty_id', $facultyId);
        })->with(['student', 'studySemester', 'rank', 'studyYear']);

        $students = $students->get();

        $data['students'] = $students->groupBy('study_year_id');

        $semestersIds = array_keys($students->groupBy('studySemester.id')->toArray());
        $data['semesters'] = StudySemester::whereIn('id', $semestersIds)->get();

        return $data;
    }
}