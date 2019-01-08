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
        $query = $model::with(['attributes.transName', 'image'])->allLangs()->get();

        return $this->table
            ->queryConfig('datatable-modules')
            ->queryDatatable($query)
            ->queryMultiLang(['name', 'description'])
            ->queryAddColumn('customized_show', function ($row) {
                return $row->customized ? trans('utilities::app.yes') : trans('utilities::app.no');
            })
            ->queryMultiAutocompleteFilter('attributes_filter','attributes',"lang_name->{$this->lang}->text")
            ->queryCustomButton('upload_image', 'id', 'fa fa-image', '', 'onclick="showFileUploadModal(this)"')
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryRender(true);
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model, $request)
    {
        $isAutomata = auth()->user()->can('automata');
        $this->table
            ->config('datatable-modules', trans('utilities::app.modules'))
            ->filterWay('client')
            ->addPrimaryKey('id', 'id')
            ->addInputText(trans('utilities::app.code'), 'code', 'code', 'required req')
            ->addMultiInputTextLangs(['name'], 'req required')
            ->addMultiTextareaLangs(['description']);
        if ($isAutomata) {
            $this->table
                ->addSelect([1 => trans('utilities::app.yes'), 0 => trans('utilities::app.no')], trans('utilities::app.customized'), 'customized', 'customized_show', 'customized_show');
        }
        $this->table
            ->startRelation('attributes')
                ->addMultiAutocomplete('autocomplete/attributes', "attributes[ ,].lang_name.$this->lang.text", trans('utilities::app.attributes'), 'attributes.id', "attributes_filter", "attributes.lang_name.$this->lang.text", ''/*'req required'*/)
            ->endRelation()
            ->addActionButton(trans('utilities::app.upload_images'), 'upload_image', 'upload_image', 'center all', '60px');
        if ($isAutomata) {
            $this->table
                ->addActionButton($this->update, 'update', 'update')
                ->addActionButton($this->delete, 'delete', 'delete')
                ->addNavButton();
        }
        return $this->table->render();
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
        $response = $result->attributes()->sync($attributeIds);
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
