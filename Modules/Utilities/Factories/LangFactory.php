<?php

namespace Modules\Utilities\Factories;

use Aut\DataTable\Factories\GlobalFactory;

class LangFactory extends GlobalFactory
{

    /**
     *  get datatable query
     */
    public function getDatatable($lang ,$request)
    {
        //todo This code is repeated and can be set as default action to get the query
        $query = $lang::all();

        return $this->table
            ->queryConfig('datatable-langs')
            ->queryDatatable($query)
            ->queryAddColumn('is_default_active' ,function ($item){
                return $item->is_default ? trans('utilities::app.yes') : trans('utilities::app.no');
            })
            ->queryUpdateButton()
            ->queryDeleteButton()
            ->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($lang ,$request)
    {
        //todo This code is repeated and can be set as default action to get the Html and the cols can be get from the fillable array, try to get the cols type form the migration
        return $this->table
            ->config('datatable-langs',trans('utilities::app.langs'))
            ->addPrimaryKey('id','id')
            ->addInputText(trans('utilities::app.code'),'lang_code','lang_code','required req')
            ->addInputText($this->name ,'name','name','required req')
            ->addInputText(trans('utilities::app.native'),'native','native','required req')
            ->addSelect([0 => trans('utilities::app.no') ,1 => trans('utilities::app.yes')],trans('utilities::app.active') ,'is_default' ,'is_default' ,'is_default_active')
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
