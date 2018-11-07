<?php

namespace Modules\Utilities\WebModules\Modules;


use Modules\Admin\Entities\Course;

class CoursesTableModule extends Module
{
    public $id = '26';
    public $code = 'courses_table';
    public $viewName = 'courses-table';

    public function getModuleData($data)
    {
        $facultyId = getRouteOptionalValue();
        $data['courses'] = Course::with(['degree', 'department', 'prerequisiteGroup.courses'])->whereFacultyId($facultyId)->get();
        return $data;
    }
}