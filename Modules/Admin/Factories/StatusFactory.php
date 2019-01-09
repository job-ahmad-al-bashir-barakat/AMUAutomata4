<?php

namespace Modules\Admin\Factories;

use Modules\Admin\Entities\Status;
use Aut\DataTable\Factories\GlobalFactory;

class StatusFactory extends GlobalFactory
{
    /**
     *  get datatable query
     */
    public function getDatatable($model ,$request)
    {
        $query = Status::allLangs();

        return $this->table
            ->queryConfig('datatable-status')
            ->queryDatatable($query)
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryMultiLang(['name'])
            ->queryRender(true);
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model ,$request)
    {
        return $this->table
            ->config('datatable-status',trans('admin::app.status'))
            ->addPrimaryKey('id','id')
            ->addMultiInputTextLangs(['name'] ,'req required')
            ->addActionButton($this->update,'update','update')
            ->addActionButton($this->delete,'delete','delete')
            ->addNavButton()
            ->render();
    }
}
