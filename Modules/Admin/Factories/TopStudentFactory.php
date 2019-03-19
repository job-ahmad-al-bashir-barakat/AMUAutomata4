<?php

namespace Modules\Admin\Factories;

use Modules\Admin\Entities\TopStudent;
use Aut\DataTable\Factories\GlobalFactory;

class TopStudentFactory extends GlobalFactory
{
    /**
     *  get datatable query
     */
    public function getDatatable($model, $request)
    {
        $query = TopStudent::with(['studySemester', 'studyYear', 'student', 'rank']);

        $this->table
            ->queryConfig('datatable-top-student')
            ->queryDatatable($query)
            ->queryUpdateButton('id')
            ->queryDeleteButton('id');

        return $this->table->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model, $request)
    {
        $this->table
            ->config('datatable-top-student', trans('admin::app.top_students'))
            ->addPrimaryKey('id', 'id')
            ->addAutocomplete('autocomplete/study-semester', trans('admin::app.semester'), 'study_semester_id', 'study_semester.transName.text', "study_semester.lang_name.$this->lang.text")
            ->addAutocomplete('autocomplete/study-year', trans('admin::app.study_level'), 'study_year_id', 'study_year.transName.text', "study_year.lang_name.$this->lang.text")
            ->addAutocomplete('autocomplete/students', trans('admin::app.student'), 'student_id', 'student.transName.text', "student.lang_name.$this->lang.text")
            ->addAutocomplete('autocomplete/top-ranks', trans('admin::app.top_student_rank'), 'rank_id', 'rank.transName.text', "rank.lang_name.$this->lang.text")
            ->addInputNumber(trans('admin::app.gpa'), 'gpa', 'gpa')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton();

        return $this->table->render();
    }
}
