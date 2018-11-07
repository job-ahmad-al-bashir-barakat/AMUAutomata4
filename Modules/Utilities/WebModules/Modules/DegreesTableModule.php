<?php

namespace Modules\Utilities\WebModules\Modules;


class DegreesTableModule extends Module
{

    public $id = '25';

    public $code = 'degrees_table';

    public $viewName = 'degrees-table';

    public function getModuleData($data)
    {
        $facultySlug = \Route::input('faculty');
        $facultyId = getIdFromSlug($facultySlug);
        $data['degrees'] = \Modules\Admin\Entities\Degree::whereFacultyId($facultyId)->get();

        return $data;
    }
}