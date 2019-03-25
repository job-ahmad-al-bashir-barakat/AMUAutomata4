<?php

namespace Modules\Utilities\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Illuminate\Support\Facades\DB;
use Modules\Utilities\Entities\ActivityLog;

class ActivityLogFactory extends GlobalFactory
{

    /**
     *  get data-table query
     */
    public function getDatatable($activityLog, $request)
    {
        $query = ActivityLog::with([/*'subject',*/
            'causer'])->orderBy('updated_at', 'desc');

        return $this->table
            ->queryConfig('datatable-activity-log')
            ->queryDatatable($query)
            ->queryAddColumn('changes', function ($item) {
                return view('utilities::activity-log.changes', [
                    'attributes' => $item->properties['attributes'],
                    'old' => $item->properties['old'],
                ])->render();
            })
            ->queryDeleteButton()
            ->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($activityLog, $request)
    {
        return $this->table
            ->config('datatable-activity-log', trans('utilities::app.activity_log'))
            ->addPrimaryKey('id', 'id')
            ->addInputText('User', 'causer.name', 'causer.name')
            ->addInputText('Action', 'description', 'description')
            ->addInputText('Change', 'subject_type', 'subject_type')
            ->addInputText('Changes', 'changes', 'changes', 'none')
            ->addInputText('At', 'created_at', 'created_at')
            //->addInputText('updated_at', 'updated_at', 'updated_at')
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
