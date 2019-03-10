<?php

namespace Modules\Admin\Factories;

use Aut\DataTable\DataTableBuilder;
use Aut\DataTable\Factories\GlobalFactory;
use Modules\Admin\Entities\Faculty;
use RouteUrls;

class FacultyFactory extends GlobalFactory
{
    /**
     *  get datatable query
     */
    public function getDatatable($model ,$request)
    {
        $query = Faculty::with(['studyYear','campus'])->allLangs();

        return $this->table
            ->queryConfig('datatable-faculty')
            ->queryDatatable($query)
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryMultiLang(['name'])
            ->queryCustomButton('courses' ,'id' ,'icon-book-open' ,'ajax' ,pjax(RouteUrls::course()))
            ->queryCustomButton('labs' ,'id' ,'icon-chemistry' ,'ajax' ,pjax(RouteUrls::lab()))
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
            ->addAutocomplete('campus',trans('admin::app.campus'),'campus_id',"campus.lang_name.{$this->lang}.text","campus.lang_name.{$this->lang}.text" ,'req required')
            ->addMultiInputTextLangs(['name'], 'req required')
            ->relation('study_year', function (DataTableBuilder $table) {
                $table->addMultiAutocomplete('autocomplete/study-year', 'study_year_temp', trans('admin::app.study_year'), 'study_year.id', "study_year.lang_name.{$this->lang}.text", "study_year.lang_name.{$this->lang}.text", 'req required');
            })
            ->addActionButton(trans('admin::app.courses') ,'courses' ,'courses' ,'center all')
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
        $result->studyYear()->sync($request->input('study_year.id'));
    }
}
