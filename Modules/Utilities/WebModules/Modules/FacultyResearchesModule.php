<?php

namespace Modules\Utilities\WebModules\Modules;


use Modules\Admin\Entities\Person;

class FacultyResearchesModule extends Module
{
    public $id = '41';
    public $code = 'faculty_researches';
    public $viewName = 'faculty-researches';

    public function getModuleData($data)
    {
        $faculty = $data['faculty'];
        $instructors = Person::staff()->where('faculty_id', $faculty->id)->get();
        $data['instructors'] = $instructors;
        return $data;
    }
}