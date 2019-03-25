<?php

namespace Modules\Utilities\Factories;

use Aut\DataTable\Factories\GlobalFactory;

class GalleryFactory extends GlobalFactory
{

    /**
     *  get data-table query
     */
    public function getDatatable($gallery, $request)
    {
        $query = $gallery::with(['image'])->allLangs();

        return $this->table
            ->queryConfig('datatable-galleries')
            ->queryDatatable($query)
            ->queryMultiLang(['title'])
            ->queryCustomButton('upload_image', 'id', 'fa fa-image', '', 'onclick="showFileUploadModal(this)"')
            ->queryUpdateButton()
            ->queryDeleteButton()
            ->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($gallery, $request)
    {
        return $this->table
            ->config('datatable-galleries', trans('utilities::app.galleries'))
            ->addPrimaryKey('id', 'id')
            ->addMultiInputTextLangs(['title'])
            ->addActionButton(trans('utilities::app.upload_images'), 'upload_image', 'id', 'center all')
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
