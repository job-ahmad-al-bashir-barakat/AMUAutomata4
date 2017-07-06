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
                return $item->is_default ? trans('gen.yes') : trans('gen.no');
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
            ->config('datatable-langs',trans('admin::app.title_example'))
            ->addPrimaryKey('id','id')
            ->addInputText(trans('lang.code'),'lang_code','lang_code','required req')
            ->addInputText(trans('lang.name'),'name','name','required req')
            ->addInputText(trans('lang.native'),'native','native','required req')
            ->addSelect([0 => trans('gen.no') ,1 => trans('gen.yes')],trans('gen.active') ,'is_default' ,'is_default' ,'is_default_active')
            ->addActionButton(trans('gen.update'),'update','update')
            ->addActionButton(trans('gen.delete'),'delete','delete')
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
