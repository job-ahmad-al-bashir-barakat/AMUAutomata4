<?php

namespace Modules\Utilities\WebModules\Modules;


use Modules\Admin\Entities\Course;

class CoursesOneModule extends Module
{

    public $id = '7';

    public $code = 'courses_1';

    public $viewName = 'courses-one';

    public function getModuleData($data)
    {
        $data['courses'] = Course::whereIn('id', array_keys($data['courses']))->with(['department'])->get();
        return $data;
    }

}