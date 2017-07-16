<?php

namespace Modules\Utilities\Factories;

use Aut\DataTable\Factories\GlobalFactory;

class SettingFactory extends GlobalFactory
{

    /**
     *  get datatable query
     */
    public function getDatatable($model, $request)
    {
        $query = $model::allLangs();

        return $this->table
            ->queryConfig('datatable-settings')
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
            ->config('datatable-settings',trans('utilities::app.settings'))
            ->addPrimaryKey('id','id')
            ->addMultiInputs(['name'] ,'text' ,'req required')
            ->addInputText(trans('utilities::app.code'),'code','code','required req')
            ->addInputText(trans('utilities::app.value'),'value','value','required req')
            ->addActionButton($this->update,'update','update')
            ->addActionButton($this->delete,'delete','delete')
            ->addNavButton()
            ->render();
    }

    /**
     *  store action for save relation
     */
    public function storeDatatable($model = null, $request = null, $result = null)
    {
        //
    }

    /**
     *  store action for update relation
     */
    public function updateDatatable($model = null, $request = null, $result = null)
    {
        //
    }

    /**
     *  store action for destroy relation
     */
    public function destroyDatatable($model = null, $request = null, $result = null)
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
