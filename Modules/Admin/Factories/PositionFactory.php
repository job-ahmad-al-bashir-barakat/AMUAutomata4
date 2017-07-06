<?php

namespace Modules\Admin\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Modules\Admin\Entities\Position;

class PositionFactory extends GlobalFactory
{

    /**
     *  get datatable query
     */
    public function getDatatable($model ,$request)
    {
        $query = Position::allLangs();

        return $this->table
            ->queryConfig('datatable-position')
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
            ->config('datatable-position',trans('admin::app.position'))
            ->addPrimaryKey('id','id')
            ->addMultiInputs(['name'])
            ->addActionButton(trans('gen.update'),'update','update')
            ->addActionButton(trans('gen.delete'),'delete','delete')
            ->addNavButton()
            ->render();
    }

}
