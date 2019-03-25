<?php

namespace Modules\Utilities\Factories;

use Aut\DataTable\Factories\GlobalFactory;

class LinkFactory extends GlobalFactory
{

    /**
     *  get data-table query
     */
    public function getDatatable($link, $request)
    {
        $query = $link::with(['icon'])->allLangs();

        return $this->table
            ->queryConfig('datatable-links')
            ->queryDatatable($query)
            ->queryMultiLang(['text', 'url'])
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
            ->config('datatable-links', trans('utilities::app.links'))
            ->addPrimaryKey('id', 'id')
            ->addAutocomplete('autocomplete/icons', trans('utilities::app.icon'), 'icon_id', 'icon.code', 'icon.icon_html')
            ->addMultiInputTextLangs(['url'])
            ->addInputColor(trans('utilities::app.bg_color'), 'bg_color', 'bg_color')
            ->addMultiTextareaLangs(['text'])
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
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
