<?php

namespace Modules\Utilities\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Modules\Utilities\Entities\Gender;

class GenderFactory extends GlobalFactory
{
    /**
     *  get datatable query
     */
    public function getDatatable($model ,$request)
    {
        $query = Gender::allLangs();

        return $this->table
            ->queryConfig('datatable-gender')
            ->queryDatatable($query)
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryMultiColumn(['name'])
            ->queryRender(true);
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model ,$request)
    {
        return $this->table
            ->config('datatable-gender',trans('admin::app.gender'))
            ->addPrimaryKey('id','id')
            ->addMultiInputs(['name'])
            ->addActionButton($this->update,'update','update')
            ->addActionButton($this->delete,'delete','delete')
            ->addNavButton()
            ->render();
    }
}
