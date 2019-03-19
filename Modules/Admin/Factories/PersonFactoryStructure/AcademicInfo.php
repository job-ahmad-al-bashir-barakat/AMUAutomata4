<?php

namespace Modules\Admin\Factories\PersonFactoryStructure;


use Aut\DataTable\DataTableBuilder;
use Modules\Admin\Entities\Person;

class AcademicInfo
{
    protected $lang;

    public function __construct($lang)
    {
        $this->lang = $lang;
    }

    public function __invoke(DataTableBuilder $table)
    {
        $table->relation('academic', function (DataTableBuilder $table){
            $table
                ->addAutocomplete('autocomplete/faculty', trans('admin::app.faculty'), 'academic.faculty_id', "academic.faculty.transName.text", "academic.faculty.lang_name.$this->lang.text", 'none', '', '', true, false, false, false)
                ->addAutocomplete('autocomplete/study-semester', trans('admin::app.graduate_semester'), 'academic.graduate_semester_id', "academic.graduate.transName.text", "academic.graduate.lang_name.$this->lang.text", 'none', '', '', true, false, false, false)
                ->addInputText(trans('admin::app.gpa'), 'academic.gpa', 'academic.gpa')
            ;
        });
    }
}