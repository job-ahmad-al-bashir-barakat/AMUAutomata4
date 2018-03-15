<?php

namespace Modules\Utilities\Factories;

use Aut\DataTable\Factories\GlobalFactory;

class PermissionFactory extends GlobalFactory
{

    /**
     *  get data-table query
     */
    public function getDatatable($permission, $request)
    {
        $query = $permission::allLangs()->get();

        return $this->table
            ->queryConfig('datatable-permissions')
            ->queryDatatable($query)
            ->queryMultiLang(['name'])
            ->queryUpdateButton()
            ->queryDeleteButton()
            ->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($permission, $request)
    {
        return $this->table
            ->config('datatable-permissions',trans('utilities::app.permissions'))
            ->addPrimaryKey('id','id')
            ->addMultiInputTextLangs(['name'] ,'req required')
            ->addInputText(trans('utilities::app.name'),'name','name', 'required req')
            ->addInputText(trans('utilities::app.guard_name'),'guard_name','guard_name')
            ->addActionButton($this->update,'update','update')
            ->addActionButton($this->delete,'delete','delete')
            ->addNavButton()
            ->render();
    }

    /**
     *  store action for save relation
     */
    public function storeDatatable($model = null ,$request = null ,$result = null)
    {
        //
    }

    /**
     *  store action for update relation
     */
    public function updateDatatable($model = null ,$request = null ,$result = null)
    {
        //
    }

    /**
     *  store action for destroy relation
     */
    public function destroyDatatable($model = null ,$request = null ,$result = null)
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
