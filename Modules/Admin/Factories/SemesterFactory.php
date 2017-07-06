<?php

namespace Modules\Admin\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Modules\Admin\Entities\Semester;

class SemesterFactory extends GlobalFactory
{

    /**
     *  get datatable query
     */
    public function getDatatable($model, $request)
    {
        $query = Semester::allLangs();

        return $this->table
            ->queryConfig('datatable-semester')
            ->queryDatatable($query)
            ->queryMultiColumn(['name'])
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryRender(true);
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model, $request)
    {
        return $this->table
            ->config('datatable-semester',trans('admin::app.semester'))
            ->addPrimaryKey('id','id')
            ->addMultiInputs(['name'])
            ->addActionButton(trans('gen.update'),'update','update')
            ->addActionButton(trans('gen.delete'),'delete','delete')
            ->addNavButton()
            ->render();
    }
}
