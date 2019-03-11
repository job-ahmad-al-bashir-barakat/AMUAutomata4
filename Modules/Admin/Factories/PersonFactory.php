<?php

namespace Modules\Admin\Factories;

use Aut\DataTable\DataTableBuilder;
use Aut\DataTable\Factories\GlobalFactory;
use Illuminate\Support\Str;
use Modules\Admin\Entities\Contact;
use Modules\Admin\Entities\Person;
use Modules\Utilities\Entities\SocialNetwork;

class PersonFactory extends GlobalFactory
{
    protected $allowedResearches = ['staff'];

    /**
     *  get datatable query
     */
    public function getDatatable($model ,$request)
    {
        $query = Person::with(['contact' => function($query) {
            return $query->allLangs();
        },'faculty.transName'])->allLangs()->Type();

        $tableId = 'datatable-persons-'.Str::snake(\Route::input('model'));

        $type = Str::snake(\Route::input('model'));

        $this->table
            ->queryConfig($tableId)
            ->queryDatatable($query)
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryMultiLang(['name', 'summary', 'experience', 'contact' => 'address'])
            ->when(in_array($type, $this->allowedResearches), function (DataTableBuilder $table) {
                $table->queryCustomButton('btn-researches', 'id', 'fa fa-book', 'btn-researches', "href='javascript:void(0);' onclick='researchesModal(this)'");
            })
            ->queryCustomButton('upload_image', 'id', 'fa fa-image', '', "onclick='showFileUploadModal(this)' data-tableid='#$tableId'");

        return $this->table->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model ,$request)
    {
        $socialNetworks = SocialNetwork::all();

        $type = Str::snake(\Route::input('model'));

        $table = $this->table
            ->config("datatable-persons-$type", trans('admin::app.' . Str::slug(\Route::input('model'), '_')), ['withTab' => true, 'gridSystem' => true, 'dialogWidth' => "60%"])
            ->addPrimaryKey('id', 'id')
            ->addHiddenInput('type', 'type', $type, false, true)
            ->gridSystemConfig(false)
            ->setGridNormalCol(12, 'lg')
            ->tab(trans('admin::app.personal_Info'), function (DataTableBuilder $table) use ($type) {
                $table
                    ->startHorizontalTab()
                    ->when(Person::PERSON_STAFF == \Route::input('model'), function ($table) {
                        $table->addAutocomplete('autocomplete/faculty', trans('admin::app.faculty'), 'faculty_id', "faculty.transName.text", "faculty.lang_name.$this->lang.text", 'req');
                    })
                    ->horizontalTab("name-$type", $this->name, function (DataTableBuilder $table) {
                        $table->addMultiInputTextLangs(['name'], 'req required');
                    }, 'req', true)
                    ->horizontalTab("summary-$type", $this->summary, function (DataTableBuilder $table) {
                        $table->addMultiTextareaLangs(['summary'], 'req required none text-editor');
                    }, 'req')
                    ->horizontalTab("experience-$type", trans('admin::app.experience'), function (DataTableBuilder $table) {
                        $table->addMultiTextareaLangs(['experience'], 'none text-editor');
                    })
                    ->horizontalTab("extra-$type", trans('admin::app.extra_info'), function (DataTableBuilder $table) {
                        $table
                            ->addAutocomplete('autocomplete/gender', trans('admin::app.gender'), 'gender_id', "gender.transName.text", "gender.lang_name.$this->lang.text", 'req required none', '', '', true, false, true, false)
                            ->addAutocomplete('autocomplete/position', trans('utilities::app.position'), 'position_id', "position.transName.text", "position.lang_name.$this->lang.text", 'req required none', '', '', true, false, true, false)
                            ->relation('jobTitle', function (DataTableBuilder $table) {
                                $table->addMultiAutocomplete('autocomplete/job-title', "job_title[,].lang_name.$this->lang.text", trans('utilities::app.job_title'), 'job_title.id', "job_title.transName.text", "job_title.lang_name.$this->lang.text", 'req required none', '', '', true, false, false, false);
                            });
                    }, 'req')
                    ->endHorizontalTab();
            }, 'fa fa-user fa-2x')
            ->tab(trans('admin::app.contact'), function (DataTableBuilder $table) use ($type) {
                $table->relation('contact', function (DataTableBuilder $table) use ($type) {
                    $table->horizontalTabCont(function (DataTableBuilder $table) use ($type) {
                        $table
                            ->horizontalTab("contact-$type", trans('admin::app.general'), function (DataTableBuilder $table) {
                                $table
                                    ->addInputEmail(trans('admin::app.email'), 'contact.email', 'contact.email')
                                    ->addInputText(trans('admin::app.phone'), 'contact.phone', 'contact.phone', '', ['data-masked', 'data-inputmask-type' => "phone"])
                                    ->addInputText(trans('admin::app.mobile'), 'contact.mobile', 'contact.mobile', '', ['data-masked', 'data-inputmask-type' => "mobile"])
                                    ->addInputGroup(trans('admin::app.gelocation'), 'contact.gelocation', 'contact.gelocation', '', 'icon-location-pin', 'input-location hand', ['data-modal' => '#modal-persons-input-location']);
                            }, '', true)
                            ->horizontalTab("address-$type", trans('app.address'), function (DataTableBuilder $table) {
                                $table->addMultiTextareaLangs(['address'], 'none');
                            });
                    });
                });
            }, 'fa fa-phone fa-2x')
            ->tab(trans('admin::app.social_media'), function (DataTableBuilder $table) use ($socialNetworks) {
                $table->each($socialNetworks, function (DataTableBuilder $table, $socialNetwork) {
                    $table->relation('contact[social][' . $socialNetwork->id . ']', function (DataTableBuilder $table) use ($socialNetwork) {
                        $table->setDefaultValue('#')->addInputText($socialNetwork->lang_name[$this->lang]['text'], 'contact.social.' . $socialNetwork->code . '.pivot.url', 'contact.social.' . $socialNetwork->code . '.pivot.url', 'none', '', '', true, false, true, false);
                    });
                });
            }, 'fa fa-facebook fa-2x')
            ->when(in_array($type, $this->allowedResearches), function ($table) {
                $table->addActionButton(trans('admin::app.researches'), 'btn-researches', 'btn-researches', 'center all', '80px');
            })
            ->addActionButton(trans('admin::app.upload_images'), 'upload_image', 'upload_image', 'center all', '100px')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton();

        return $table->render();
    }

    public function storeDatatable($model ,$request ,$result)
    {
        $contact = Contact::create($request->input('contact'));

        $contact->socialNetwork()->sync($request->input('contact.social'));

        $person = Person::create(array_merge($request->input(),['contact_id' => $contact->id]));

        $person->jobTitle()->sync(request()->input('jobTitle.id'));
    }

    public function updateDatatable($model ,$request ,$result)
    {
        $result->jobTitle()->sync(request()->input('jobTitle.id'));

        $result->contact()->update($request->input('contact'));

        $result->contact->socialNetwork()->sync($request->input('contact.social'));
    }
}
