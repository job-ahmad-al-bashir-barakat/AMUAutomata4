<?php

namespace Modules\Admin\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Modules\Admin\Entities\Department;

class DepartmentFactory extends GlobalFactory
{
    /**
     *  get datatable query
     */
    public function getDatatable($model ,$request)
    {
        $query = Department::with('faculty')->allLangs();

        return $this->table
            ->queryConfig('datatable-department')
            ->queryDatatable($query)
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryMultiLang(['name'])
            ->queryRender(true);
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model ,$request)
    {
        return $this->table
            ->config('datatable-department',trans('admin::app.department'))
            ->addPrimaryKey('id','id')
            ->addAutocomplete('autocomplete/faculty',trans('admin::app.faculty') ,'faculty_id' ,'faculty.lang_name.'.$this->lang.'.text' ,'faculty.lang_name.'.$this->lang.'.text' ,'req required')
            ->addMultiInputTextLangs(['name'] ,'req required')
            ->addActionButton($this->update,'update','update')
            ->addActionButton($this->delete,'delete','delete')
            ->addNavButton()
            ->render();
    }
}
