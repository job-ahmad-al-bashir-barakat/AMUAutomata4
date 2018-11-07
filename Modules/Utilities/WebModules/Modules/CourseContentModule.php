<?php

namespace Modules\Utilities\WebModules\Modules;


class CourseContentModule extends Module
{
    public $id = '33';
    public $code = 'course_content';
    public $viewName = 'course-content';

    public function getModuleData($data)
    {
        $courseId = array_keys($data['course'][0])[0];
        $course = \Modules\Admin\Entities\Course::find($courseId);
        $data['course'] = $course;
        return $data;
    }
}