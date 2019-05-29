<?php

namespace Modules\Utilities\WebModules\Modules;

use Route;
use Modules\Admin\Entities\UniversityOffice;

class OfficePageModule extends Module
{

    public $id = '20';

    public $code = 'office_page';

    public $viewName = 'office-page';

    public function getModuleData($data)
    {
        if (!$data->get('office', false)) {
            $officeSlug = Route::input('office');
            $officeId = getIdFromSlug($officeSlug);
            if ($officeId) {
                $data['office'] = UniversityOffice::find($officeId);
            }
        }
        $data['office']->load(['person', 'contact.phoneNumbers']);

        return $data;
    }
}