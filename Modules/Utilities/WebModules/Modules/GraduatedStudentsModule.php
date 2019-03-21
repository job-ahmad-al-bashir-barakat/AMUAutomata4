<?php

namespace Modules\Utilities\WebModules\Modules;

use Modules\Admin\Entities\Person;
use Modules\Admin\Entities\StudySemester;

class GraduatedStudentsModule extends Module
{
    public $id = '50';
    public $code = 'graduated_students';
    public $viewName = 'graduated-students';

    public function getModuleData($data)
    {
        $query = Person::whereHas('academic.graduate', function ($query) use ($data){
            $query->where('faculty_id', $data['faculty']->id);
        })->with('academic.graduate')->student();

        $data['graduated'] = $query->get();
        $semestersIds = array_keys($data['graduated']->groupBy('academic.graduate.id')->toArray());

        $data['semesters'] = StudySemester::whereIn('id', $semestersIds)->get();

        return $data;
    }
}