<?php

namespace Modules\Admin\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Modules\Admin\Entities\StudySemester;

class StudySemesterFactory extends GlobalFactory
{

    /**
     *  get datatable query
     */
    public function getDatatable($model, $request)
    {
        $query = StudySemester::allLangs();

        $this->table
            ->queryConfig('datatable-study-semester')
            ->queryDatatable($query)
            ->queryMultiLang(['name'])
            ->queryAddColumn('semester_type' ,function ($item){
                return $item->type == 'y' ? trans('app.year') : trans('app.semester');
            })
            ->queryUpdateButton('id')
            ->queryDeleteButton('id');

        return $this->table->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model, $request)
    {
        return $this->table
            ->config('datatable-study-semester', trans('admin::app.study_semester'))
            ->addPrimaryKey('id', 'id')
            ->addInputText(trans('app.semester_code'), 'semester', 'semester')
            ->addMultiInputTextLangs(['name'])
            ->addSelect(['y' => trans('app.year'), 's' => trans('app.semester')], trans('admin::app.type'), 'type', 'type', 'semester_type')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton([])
            ->render();
    }

    /**
     *  inline validate dialog form
     */
    public function validateDatatable()
    {
        return [];
    }
}
