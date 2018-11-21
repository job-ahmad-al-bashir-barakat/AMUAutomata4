<?php

namespace Modules\Utilities\WebModules\Modules;


class LabPageModule extends Module
{

    public $id = '35';

    public $code = 'lab_page';

    public $viewName = 'lab-page';

    public function getModuleData($data)
    {
        $labSlug = \Route::input('lab');
        $labId = getIdFromSlug($labSlug);
        $lab = \Modules\Admin\Entities\Lab::find($labId);
        if ($lab) {
            $lab->load('image');
        } else {
            $lab = [];
        }
        $data['lab'] = $lab;
        return $data;
    }
}