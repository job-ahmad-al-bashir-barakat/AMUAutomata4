<?php

namespace Modules\Utilities\WebModules\Modules;


class FacultyInstructorsModule extends Module
{
    public $id = '28';
    public $code = 'faculty_instructors';
    public $viewName = 'faculty-instructors';

    public function getModuleData($data)
    {
        $data['facultyId'] = $data['faculty']->id ?? null;
        return $data;
    }
}