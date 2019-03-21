<?php

namespace Modules\Utilities\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Modules\Utilities\Entities\Video;

class VideoFactory extends GlobalFactory
{

    /**
     *  get data-table query
     */
    public function getDatatable($gallery, $request)
    {
        $query = Video::with(['file'])->allLangs();

        return $this->table
            ->queryConfig('datatable-video')
            ->queryDatatable($query)
            ->queryMultiLang(['name'])
            ->queryCustomButton('upload_videos', 'id', 'fa fa-file-video-o', '', 'onclick="showFileUploadModal(this)"')
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
            ->config('datatable-video',trans('utilities::app.videos'))
            ->addPrimaryKey('id','id')
            ->addMultiInputTextLangs(['name'] ,'req required')
            ->addActionButton(trans('utilities::app.upload_videos'), 'upload_videos', 'id', 'center all')
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
