<?php

namespace Modules\Utilities\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Modules\Utilities\Entities\Event;

class EventsFactory extends GlobalFactory
{

    /**
     * @param string|Event $table
     * @param $request
     * @return mixed
     */
    public function getDatatable($table, $request)
    {
        $query = $table::allLangs()->with(['image'])->whereEventGroupId($request->get('event_group_id'));

        return $this->table
            ->queryConfig('datatable-events')
            ->queryDatatable($query)
            ->queryMultiLang(['title', 'url'])
            ->queryCustomButton('upload_image', 'id', 'fa fa-image', '', 'onclick="showFileUploadModal(this)"')
            ->queryUpdateButton()
            ->queryDeleteButton()
            ->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($table, $request)
    {
        return $this->table
            ->config('datatable-events', trans('utilities::app.events'))
            ->addPrimaryKey('id', 'id')
            ->addHiddenInput('event_group_id', 'event_group_id', $request->get('event_group_id'), false, true)
            ->addMultiInputTextLangs(['title', 'url'])
            ->addInputColor(trans('app.color'), 'color', 'color')
            ->addInputDate(trans('app.start_date'), 'start_date', 'start_date')
            ->addInputDate(trans('app.end_date'), 'end_date', 'end_date')
            ->addActionButton(trans('utilities::app.upload_image'), 'upload_image', 'upload_image', 'center all', '60px')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
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
