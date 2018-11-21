<?php

namespace Modules\Utilities\WebModules\Modules;


class GalleriesModule extends Module
{
    public $id = '30';
    public $code = 'galleries';
    public $viewName = 'galleries';

    public function getModuleData($data)
    {
        if ($data['galleries']) {
            $data['galleries']->load('image');
        }
        return $data;
    }
}