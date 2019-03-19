<?php

namespace Modules\Admin\Factories\PersonFactoryStructure;


use Aut\DataTable\DataTableBuilder;
use Modules\Admin\Entities\Person;

class PersonalInfo
{
    protected $type, $name, $summary, $lang;

    protected $shortInfo = ['author'];

    public function __construct($type, $name, $summary, $lang)
    {
        $this->type = $type;
        $this->name = $name;
        $this->lang = $lang;
        $this->summary = $summary;
    }

    public function __invoke(DataTableBuilder $table)
    {
        $table->horizontalTabCont(function (DataTableBuilder $table) {
            $table
                ->when(Person::PERSON_STAFF == \Route::input('model'), function (DataTableBuilder $table) {
                    $table->addAutocomplete('autocomplete/faculty', trans('admin::app.faculty'), 'faculty_id', "faculty.transName.text", "faculty.lang_name.$this->lang.text", 'req');
                })
                ->horizontalTab("name-{$this->type}", $this->name, function (DataTableBuilder $table) {
                    $table->addMultiInputTextLangs(['name'], 'req required');
                }, 'req', true)
                ->when(!in_array($this->type, $this->shortInfo), function (DataTableBuilder $table) {
                    $table
                        ->horizontalTab("summary-{$this->type}", $this->summary, function (DataTableBuilder $table) {
                            $table->addMultiTextareaLangs(['summary'], 'none text-editor');
                        })
                        ->horizontalTab("experience-{$this->type}", trans('admin::app.experience'), function (DataTableBuilder $table) {
                            $table->addMultiTextareaLangs(['experience'], 'none text-editor');
                        });
                })
                ->horizontalTab("extra-{$this->type}", trans('admin::app.extra_info'), function (DataTableBuilder $table) {
                    $table
                        ->addAutocomplete('autocomplete/gender', trans('admin::app.gender'), 'gender_id', "gender.transName.text", "gender.lang_name.$this->lang.text", 'req required none', '', '', true, false, true, false)
                        ->when(!in_array($this->type, $this->shortInfo), function (DataTableBuilder $table) {
                            $table
                                ->addAutocomplete('autocomplete/position', trans('utilities::app.position'), 'position_id', "position.transName.text", "position.lang_name.$this->lang.text", 'none', '', '', true, false, true, false)
                                ->relation('jobTitle', function (DataTableBuilder $table) {
                                    $table->addMultiAutocomplete('autocomplete/job-title', "job_title[,].lang_name.$this->lang.text", trans('utilities::app.job_title'), 'job_title.id', "job_title.transName.text", "job_title.lang_name.$this->lang.text", 'none', '', '', true, false, false, false);
                                });
                        });
                }, 'req');
        });
    }
}