<?php

namespace Modules\Admin\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Modules\Admin\Entities\Course;
use Modules\Admin\Entities\PrerequisiteGroup;

class PrerequisiteFactory extends GlobalFactory
{

    /**
     *  get datatable query
     */
    public function getDatatable($model ,$request)
    {
        $query = PrerequisiteGroup::with(['courses'])->where('course_id','=' ,request('course'))->get();

        return $this->table
            ->queryConfig('datatable-prerequisite')
            ->queryDatatable($query)
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryMultiAutocompleteTemplete('courses_temp' ,'courses' , 'code')
            ->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model ,$request)
    {
        $course = request('course');
        $faculty = request('parent');

        return $this->table
            ->config('datatable-prerequisite',trans('admin::app.prerequisite'))
            ->addPrimaryKey('id' ,'id')
            ->addHiddenInput('course_id' ,'course_id' ,$course ,'' ,true)
            ->startRelation('courses')
                ->addMultiAutocomplete('autocomplete/course' ,'courses_temp' ,trans('admin::app.courses') ,'courses.id' ,"courses.lang_name.$this->lang.text" ,"courses.lang_name.$this->lang.text" ,'req required' ,["data-remote-param" => "course=$course,faculty=$faculty"])
            ->endRelation()
            ->addInputText(trans('admin::app.code') ,'code' ,'code' ,'req required')
            ->addActionButton($this->update,'update','update')
            ->addActionButton($this->delete,'delete','delete')
            ->addNavButton()
            ->render();
    }

    /**
     *  store action for save relation
     */
    public function storeDatatable($model = null, $request = null, $result = null)
    {
        $result->courses()->sync($request->input('courses.id'));
    }

    /**
     *  store action for update relation
     */
    public function updateDatatable($model = null, $request = null, $result = null)
    {
        $result->courses()->sync($request->input('courses.id'));
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
        $id = request('id');

        $put = "";
        if(request()->method() == 'PUT')
            $put = ",code,$id,id";

        return [
            'code' => "required|unique:prerequisite_groups$put"
        ];
    }
}
