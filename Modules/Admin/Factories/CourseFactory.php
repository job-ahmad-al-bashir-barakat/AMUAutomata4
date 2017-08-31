<?php

namespace Modules\Admin\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Modules\Admin\Entities\Course;
use Modules\Admin\Entities\Faculty;

class CourseFactory extends GlobalFactory
{
    /**
     *  get datatable query
     */
    public function getDatatable($model ,$request)
    {
        $query = Course::where('faculty_id' ,'=' ,$request->get('id'))->with(['department' ,'degree'])->allLangs()->get();

        return $this->table
            ->queryConfig('datatable-course')
            ->queryDatatable($query)
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryCustomButton('btn-prerequisite' ,'id' ,'fa fa-cubes' ,'btn-prerequisite' ,"href='javascript:void(0);' onclick='prerequisiteModal(this)'")
            ->queryMultiLang(['name'])
            ->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model ,$request)
    {
        $faculty_id = $request->get('id');

        return $this->table
            ->config('datatable-course',trans('admin::app.course'))
            ->addPrimaryKey('id','id')
            ->addHiddenInput('faculty_id' ,'faculty_id' ,$faculty_id ,false ,true)
            ->addAutocomplete('autocomplete/department' ,trans('admin::app.department'), "department_id" ,'department.lang_name.'.$this->lang.'.text' ,'department.lang_name.'.$this->lang.'.text' ,'' ,['data-remote-param' => 'faculty='.$faculty_id])
            ->addAutocomplete('autocomplete/degree' ,trans('admin::app.degree'), "degree_id" ,'degree.lang_name.'.$this->lang.'.text' ,'degree.lang_name.'.$this->lang.'.text' ,'' ,['data-remote-param' => 'faculty='.$faculty_id])
            ->addMultiInputTextLangs(['name'] ,'req required')
            ->addInputText(trans('admin::app.code'),'code' ,'code' ,'req required')
            ->addInputNumber(trans('admin::app.credit'),'credit' ,'credit' ,'req required')
            ->addActionButton(trans('admin::app.prerequisite'),'btn-prerequisite','btn-prerequisite' ,'center all' , '80px')
            ->addActionButton($this->update,'update','update')
            ->addActionButton($this->delete,'delete','delete')
            ->addNavButton()
            ->render();
    }

    /**
     *  inline validate dialog form
     */
    public function validateDatatable()
    {
        $id = request('id');

        $put = "";
        if(request()->method() == 'PUT')
            $put = ",code,$id,id";

        return [
            'code' => "required|unique:courses$put"
        ];
    }
}
