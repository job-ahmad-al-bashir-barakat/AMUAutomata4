<?php

namespace Modules\Admin\Factories;

use Aut\DataTable\Factories\GlobalFactory;

class TendersFactory extends GlobalFactory
{

    /**
     *  get datatable query
     */
    public function getDatatable($model, $request)
    {
        $query = $model::allLangs()->with(['image']);

        return $this->table
            ->queryConfig('datatable-tenders')
            ->queryDatatable($query)
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryMultiLang(['text'])
            ->queryCustomButton('upload_image', 'id', 'fa fa-image', '', 'onclick="showFileUploadModal(this)"')
            ->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model, $request)
    {
        return $this->table
            ->config('datatable-tenders', trans('admin::app.tenders'))
            ->addPrimaryKey('id', 'id')
            ->addMultiTextareaLangs(['text'])
            ->addActionButton(trans('admin::app.upload_image'), 'upload_image', 'upload_image', 'center all', '60px')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton()
            ->render();
    }


    /**
     *  store action for save relation
     */
    public function storeDatatable($Branch = null, $request = null, $result = null)
    {
        //
    }

    /**
     *  update action for update relation
     */
    public function updateDatatable($Branch = null, $request = null, $result = null)
    {
        //
    }

    /**
     *  destroy action for destroy relation
     */
    public function destroyDatatable($Branch = null, $request = null, $result = null)
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
