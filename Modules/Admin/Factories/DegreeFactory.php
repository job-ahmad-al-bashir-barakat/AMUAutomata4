<?php

namespace Modules\Admin\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Modules\Admin\Entities\Degree;

class DegreeFactory extends GlobalFactory
{
    /**
     *  get datatable query
     */
    public function getDatatable($model ,$request)
    {
        $query = Degree::with('faculty')->allLangs()->get();

        return $this->table
            ->queryConfig('datatable-degree')
            ->queryDatatable($query)
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryMultiColumn(['name'])
            ->queryRender(true);
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model ,$request)
    {
        return $this->table
            ->config('datatable-degree',trans('admin::app.degree'))
            ->addPrimaryKey('id','id')
            ->addAutocomplete('autocomplete/faculty',trans('app.faculty') ,'faculty_id' ,'faculty_id','faculty.lang_name.'.$this->lang.'.text' ,'req required')
            ->addMultiInputs(['name'] ,'text' ,'req required')
            ->addActionButton(trans('gen.update'),'update','update')
            ->addActionButton(trans('gen.delete'),'delete','delete')
            ->addNavButton()
            ->render();
    }
}
