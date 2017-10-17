<?php

namespace Modules\Utilities\Factories;

use Aut\DataTable\Factories\GlobalFactory;

class ModuleFactory extends GlobalFactory
{
    /**
     *  get data-table query
     */
    public function getDatatable($model, $request)
    {
        $query = $model::with(['attributes'])->allLangs()->get();

        return $this->table
            ->queryConfig('datatable-modules')
            ->queryDatatable($query)
            ->queryMultiLang(['name'])
            ->queryAddColumn('customized_show', function ($row) {
                return $row->customized ? trans('utilities::app.yes') : trans('utilities::app.no');
            })
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
            ->config('datatable-modules',trans('utilities::app.modules'))
            ->addPrimaryKey('id','id')
            ->addInputText(trans('utilities::app.code'),'code','code','required req')
            ->addMultiInputTextLangs(['name'] ,'req required')
            ->addSelect(['1' => trans('utilities::app.yes'), 0 => trans('utilities::app.no')], trans('utilities::app.customized'), 'customized', 'customized', 'customized_show')
            ->startRelation('attributes')
                ->addMultiAutocomplete('autocomplete/attributes' ,"attributes[ ,].lang_name.$this->lang.text",trans('utilities::app.attributes') , 'attributes.id', "attributes.lang_name.$this->lang.text", "attributes.lang_name.$this->lang.text" ,''/*'req required'*/ ,'multiple')
            ->endRelation()
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
        $attributeIds = $request->input('attributes.id');
        $result->attributes()->sync($attributeIds);
    }

    /**
     *  store action for update relation
     */
    public function updateDatatable($model = null ,$request = null ,$result = null)
    {
        //
        $attributeIds = $request->input('attributes.id');
        $result->attributes()->sync($attributeIds);
    }

    /**
     *  store action for destroy relation
     */
    public function destroyDatatable($model = null ,$request = null ,$result = null)
    {
        //
        dd($request);
    }

    /**
     *  inline validate dialog form
     */
    public function validateDatatable()
    {
        return [];
    }
}
