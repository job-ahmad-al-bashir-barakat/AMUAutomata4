<?php

namespace Modules\Utilities\Factories;

use Aut\DataTable\Factories\GlobalFactory;

class AttributeFactory extends GlobalFactory
{

    /**
     *  get data-table query
     */
    public function getDatatable($attribute, $request)
    {
        $query = $attribute::allLangs();

        return $this->table
            ->queryConfig('datatable-attributes')
            ->queryDatatable($query)
            ->queryMultiLang(['name'])
            ->queryUpdateButton()
            ->queryDeleteButton()
            ->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($attribute, $request)
    {
        return $this->table
            ->config('datatable-attributes',trans('utilities::app.attributes'))
            ->addPrimaryKey('id','id')
            ->addInputText(trans('utilities::app.code'),'code','code','required req')
            ->addMultiInputTextLangs(['name'] ,'req required')
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
