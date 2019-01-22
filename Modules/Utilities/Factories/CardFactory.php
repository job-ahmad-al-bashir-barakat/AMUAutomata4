<?php

namespace Modules\Utilities\Factories;

use Aut\DataTable\Factories\GlobalFactory;

class CardFactory extends GlobalFactory
{
    /**
     *  get datatable query
     */
    public function getDatatable($model, $request)
    {
        $query = $model::allLangs();

        return $this->table
            ->queryConfig('datatable-cards')
            ->queryDatatable($query)
            ->queryMultiLang(['name', 'title', 'text', 'url', 'link'])
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
        return $this->table
            ->config('datatable-cards', trans('utilities::app.cards'))
            ->addPrimaryKey('id', 'id')
            ->addMultiInputTextLangs(['name'], 'req required')
            ->addMultiInputTextLangs(['title'])
            ->addMultiTextareaLangs(['text'])
            ->addMultiInputTextLangs(['url', 'link'])
            ->addActionButton(trans('utilities::app.upload_images'), 'upload_image', 'upload_image', 'center all', '60px')
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
