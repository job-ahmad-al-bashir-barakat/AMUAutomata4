<?php

namespace Modules\Admin\Factories;

use Aut\DataTable\DataTableBuilder;
use Aut\DataTable\Factories\GlobalFactory;
use Modules\Admin\Entities\Faculty;
use Modules\Admin\Entities\TopStudentRank;
use RouteUrls;

class TopStudentRankFactory extends GlobalFactory
{
    /**
     *  get datatable query
     */
    public function getDatatable($model, $request)
    {
        $query = TopStudentRank::allLangs();

        return $this->table
            ->queryConfig('datatable-top-student-rank')
            ->queryDatatable($query)
            ->queryMultiLang(['name'])
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model, $request)
    {
        return $this->table
            ->config('datatable-top-student-rank', trans('admin::app.top_student_rank'))
            ->addPrimaryKey('id', 'id')
            ->addInputNumber(trans('app.rank'), 'rank', 'rank', 'req required')
            ->addMultiInputTextLangs(['name'])
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton()
            ->render();
    }

    public function storeDatatable($model, $request, $result)
    {

    }

    public function updateDatatable($model, $request, $result)
    {

    }
}
