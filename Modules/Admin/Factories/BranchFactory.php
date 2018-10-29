<?php

namespace Modules\Admin\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Modules\Admin\Entities\Branch;

class BranchFactory extends GlobalFactory
{

    /**
     *  get datatable query
     */
    public function getDatatable($model ,$request)
    {
        $query = Branch::all();

        return $this->table
            ->queryConfig('datatable-branch')
            ->queryDatatable($query)
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryMultiLang(['name'])
            ->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model ,$request)
    {
        return $this->table
            ->config('datatable-branch' ,trans('admin::app.branch'))
            ->addPrimaryKey('id','id')
            ->addMultiInputTextLangs(['name'], 'req required')
            ->addActionButton($this->update,'update','update')
            ->addActionButton($this->delete,'delete','delete')
            ->addNavButton()
            ->render();
    }


    /**
     *  store action for save relation
     */
    public function storeDatatable($Branch = null, $request = null, $result = null)
    {
        //
    }

    /**
     *  update action for update relation
     */
    public function updateDatatable($Branch = null, $request = null, $result = null)
    {
        //
    }

    /**
     *  destroy action for destroy relation
     */
    public function destroyDatatable($Branch = null, $request = null, $result = null)
    {
        //
    }

    /**
     *  inline validate dialog form
     */
    public function validateDatatable()
    {
        return [];
    }
}
