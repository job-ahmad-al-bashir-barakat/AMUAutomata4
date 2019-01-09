<?php

namespace Modules\Utilities\Factories;

use Aut\DataTable\Factories\GlobalFactory;

class TextCardFactory extends GlobalFactory
{
    /**
     *  get datatable query
     */
    public function getDatatable($model, $request)
    {
        $query = $model::with(['icon'])->allLangs();

        return $this->table
            ->queryConfig('datatable-text-cards')
            ->queryDatatable($query)
            ->queryMultiLang(['title'])
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryRender(true);
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model, $request)
    {
        $blockId = request('blockId');

        return $this->table
            ->config('datatable-text-cards',trans('utilities::app.text-cards'))
            ->addPrimaryKey('id','id')
            ->addMultiInputTextLangs(['title'], 'req required')
            ->addInputText(trans('utilities::app.url'), 'url', 'url', 'req required')
            ->addAutocomplete('autocomplete/icons', 'Icon', 'icon_id', 'icon.code', 'icon.icon_html', 'req required')
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
