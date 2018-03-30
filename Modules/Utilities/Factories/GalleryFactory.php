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
        $query = $gallery::allLangs()->get();

        return $this->table
            ->queryConfig('datatable-galleries')
            ->queryDatatable($query)
            ->queryMultiLang(['title'])
            ->queryAddColumn('images', function ($row){
                return "<i class='fa fa-image hand' data-gallery_id='{$row->id}' data-toggle='modal' data-target='#gallory_images'></i>";
            })
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
            ->config('datatable-galleries',trans('utilities::app.galleries'))
            ->addPrimaryKey('id','id')
            ->addMultiInputTextLangs(['title'] ,'req required')
            ->addActionButton('images', 'images')
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
