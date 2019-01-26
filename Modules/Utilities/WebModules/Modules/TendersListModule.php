<?php

namespace Modules\Utilities\WebModules\Modules;


use Modules\Admin\Entities\Tender;

class TendersListModule extends Module
{

    public $id = '46';

    public $code = 'tenders_list';

    public $viewName = 'tenders-list';


    public function getModuleData($data)
    {
        $data['tenders'] = Tender::with(['image'])->get();
        return $data;
    }
}