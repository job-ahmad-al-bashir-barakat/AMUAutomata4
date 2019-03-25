<?php

namespace Modules\Utilities\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Modules\Utilities\Entities\EventGroup;

class EventGroupFactory extends GlobalFactory
{

    /**
     * @param string|EventGroup $table
     * @param $request
     * @return mixed
     */
    public function getDatatable($table, $request)
    {
        $query = $table::allLangs();

        return $this->table
            ->queryConfig('datatable-event-groups')
            ->queryDatatable($query)
            ->queryMultiLang(['name'])
            ->queryCustomButton('events', 'id', 'fa fa-list', 'events', "href='javascript:void(0);' onclick='eventsModal(this)'")
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
            ->config('datatable-event-groups', trans('utilities::app.calender'))
            ->addPrimaryKey('id', 'id')
            ->addMultiInputTextLangs(['name'])
            ->addActionButton(trans('utilities::app.events'), 'events', 'events')
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
