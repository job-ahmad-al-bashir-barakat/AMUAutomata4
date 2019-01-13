<?php

namespace Modules\Utilities\WebModules\Modules;


class PersonTwoModule extends Module
{
    public $id = '43';
    public $code = 'person_2';
    public $viewName = 'persons-two';

    public function getModuleData($data)
    {
        return $data;
    }
}