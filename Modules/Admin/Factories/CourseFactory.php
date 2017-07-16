<?php

namespace Modules\Admin\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Illuminate\Support\Facades\Input;
use Modules\Admin\Entities\Course;
use Modules\Admin\Entities\Faculty;

class CourseFactory extends GlobalFactory
{
    /**
     *  get datatable query
     */
    public function getDatatable($model ,$request)
    {
        $query = Course::all();

        return $this->table
            ->queryConfig('datatable-course')
            ->queryDatatable($query)
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryMultiColumn(['name'])
            ->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model ,$request)
    {
        $factory = Faculty::findOrFail(request('id'))->lang_name['en']['text'];

        return $this->table
            ->config('datatable-course',trans('admin::app.course'))
            ->addPrimaryKey('id','id')
            ->addInputTextDialog(trans('admin::app.faculty') ,'faculty' ,'faculty' , $factory,'' ,'disabled')
            ->addAutocomplete('autocomplete/department' ,trans('admin::app.department'), "department_id" ,'department.lang_name.'.$this->lang.'.text' ,'department.lang_name.'.$this->lang.'.text')
            ->addAutocomplete('autocomplete/degree' ,trans('admin::app.degree'), "degree_id" ,'degree.lang_name.'.$this->lang.'.text' ,'degree.lang_name.'.$this->lang.'.text')
            ->addMultiInputs(['name'])
            ->addInputText(trans('admin::app.code'),'code' ,'code')
            ->addInputNumber(trans('admin::app.credit'),'credit' ,'credit')
            ->addActionButton($this->update,'update','update')
            ->addActionButton($this->delete,'delete','delete')
            ->addNavButton()
            ->render();
    }
}
