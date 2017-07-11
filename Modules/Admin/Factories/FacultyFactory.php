<?php

namespace Modules\Admin\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Modules\Admin\Entities\Faculty;

class FacultyFactory extends GlobalFactory
{
    /**
     *  get datatable query
     */
    public function getDatatable($model ,$request)
    {
        $query = Faculty::with(['studyYear'])->allLangs()->get();

        return $this->table
            ->queryConfig('datatable-faculty')
            ->queryDatatable($query)
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryMultiColumn(['name'])
            ->queryCustomButton('courses' ,'id' ,'icon-book-open' ,'ajax' ,pjax(localizeURL("admin/{id}/courses?faculty={faculty_name}")))
            ->queryCustomButton('labs' ,'id' ,'icon-chemistry' ,'ajax' ,pjax(localizeURL('admin/{id}/labs')))
            ->queryMultiAutocompleteTemplete('study_year_temp',"studyYear" ,"lang_name->{$this->lang}->text")
            ->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model ,$request)
    {
        return $this->table
            ->config('datatable-faculty' ,trans('admin::app.faculty'))
            ->addPrimaryKey('id','id')
            ->addMultiInputs(['name'],'text' ,'req required')
            ->startRelation('study_year')
                ->addMultiAutocomplete('autocomplete/study-year' ,'study_year_temp' ,trans('admin::app.study_year') ,'study_year.id' ,"study_year.lang_name.{$this->lang}.text" ,"study_year.lang_name.{$this->lang}.text" ,'req require' ,['multiple' => true])
            ->endRelation()
            ->addActionButton(trans('admin::app.courses') ,'courses' ,'courses')
            ->addActionButton(trans('admin::app.labs') ,'labs' ,'labs')
            ->addActionButton($this->update,'update','update')
            ->addActionButton($this->delete,'delete','delete')
            ->addNavButton()
            ->render();
    }

    public function storeDatatable($model ,$request ,$result)
    {
        $result->studyYear()->sync($request->input('study_year.id'));
    }

    public function updateDatatable($model ,$request ,$result)
    {

    }
}
