<?php

namespace Modules\Utilities\WebModules\Modules;


class OfficePageModule extends Module
{

    public $id = '20';

    public $code = 'office_page';

    public $viewName = 'office-page';

    public function getModuleData($data)
    {
        $data['office']->load(['person', 'contact.phoneNumbers']);
        return $data;
    }
}