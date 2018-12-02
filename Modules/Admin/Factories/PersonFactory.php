<?php

namespace Modules\Admin\Factories;

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
        }])->allLangs()->Type();

        $tableId = 'datatable-persons-'.Str::snake(\Route::input('model'));

        $type = Str::snake(\Route::input('model'));

        $this->table
            ->queryConfig($tableId)
            ->queryDatatable($query)
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryMultiLang(['name' ,'summary','experience','contact' => 'address']);
        if (in_array($type, $this->allowedResearches)) {
            $this->table->queryCustomButton('btn-researches' ,'id' ,'fa fa-book' ,'btn-researches' ,"href='javascript:void(0);' onclick='researchesModal(this)'");
        }

        $this->table->queryCustomButton('upload_image' ,'id' ,'fa fa-image' ,'' ,"onclick='showFileUploadModal(this)' data-tableid='#$tableId'");

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
            ->config("datatable-persons-$type",trans('admin::app.'.Str::slug(\Route::input('model'),'_')),['withTab' => true ,'gridSystem' => true ,'dialogWidth' => "60%"])
            ->addPrimaryKey('id','id')
            ->addHiddenInput('type' ,'type' ,$type ,false ,true)
            ->gridSystemConfig(false)
            ->setGridNormalCol(12 ,'lg')
            ->startTab(trans('admin::app.personal_Info'),'fa fa-user fa-2x')
                ->startHorizontalTab();

        if( Person::PERSON_STAFF == \Route::input('model'))
             $table =  $table->addAutocomplete('autocomplete/faculty' ,trans('admin::app.faculty'),'faculty_id',"faculty.lang_name.$this->lang.text","faculty.lang_name.$this->lang.text",'req');

        $table = $table->openHorizontalTab("name-$type" ,$this->name ,'req',true)
                    ->addMultiInputTextLangs(['name'] ,'req required')
                    ->closeHorizontalTab()
                    ->openHorizontalTab("summary-$type" ,$this->summary ,'req')
                        ->addMultiTextareaLangs(['summary'] ,'req required none')
                    ->closeHorizontalTab()
                    ->openHorizontalTab("experience-$type" ,trans('admin::app.experience') ,'req')
                        ->addMultiTextareaLangs(['experience'] ,'req required none')
                    ->closeHorizontalTab()
                    ->openHorizontalTab("extra-$type" ,trans('admin::app.extra_info') ,'req')
                        ->addAutocomplete('autocomplete/gender' ,trans('admin::app.gender') , 'gender_id', "gender.lang_name.$this->lang.text", "gender.lang_name.$this->lang.text" ,'req required none' ,'' , '' ,true ,false ,true ,false)
                        ->addAutocomplete('autocomplete/position' ,trans('utilities::app.position') , 'position_id', "position.lang_name.$this->lang.text", "position.lang_name.$this->lang.text" ,'req required none' ,'' , '' ,true ,false ,true ,false)
                        ->startRelation('jobTitle')
                            ->addMultiAutocomplete('autocomplete/job-title' ,"job_title[ ,].lang_name.$this->lang.text",trans('utilities::app.job_title') , 'job_title.id', "job_title.lang_name.$this->lang.text", "job_title.lang_name.$this->lang.text" ,'req required none' ,'' , '' ,true ,false ,false ,false)
                        ->endRelation()
                    ->closeHorizontalTab()
                ->endHorizontalTab()
            ->endTab()
            ->startTab(trans('admin::app.contact'),'fa fa-phone fa-2x')
                ->startRelation('contact')
                    ->startHorizontalTab()
						->openHorizontalTab("contact-$type" ,trans('admin::app.general') ,'',true)
							->addInputEmail(trans('admin::app.email'),'contact.email','contact.email')
							->addInputText(trans('admin::app.phone'),'contact.phone' ,'contact.phone' ,'' ,['data-masked' , 'data-inputmask-type' => "phone"])
							->addInputText(trans('admin::app.mobile'),'contact.mobile' ,'contact.mobile' ,'' ,['data-masked' , 'data-inputmask-type' => "mobile"])
							->addInputGroup(trans('admin::app.gelocation'),'contact.gelocation' ,'contact.gelocation' ,'' ,'icon-location-pin' ,'input-location hand' ,['data-modal' => '#modal-persons-input-location'])
						->closeHorizontalTab()
                        ->openHorizontalTab("address-$type" ,trans('app.address'))
                            ->addMultiTextareaLangs(['address'] ,'none')
                        ->closeHorizontalTab()
                    ->endHorizontalTab()
                ->endRelation()
            ->endTab()
            ->startTab(trans('admin::app.social_media'),'fa fa-facebook fa-2x');

            foreach ($socialNetworks as $socialNetwork)
                $table = $table->startRelation('contact[social]['.$socialNetwork->id.']')
                               ->setDefaultValue('#')
                               ->addInputText($socialNetwork->lang_name[$this->lang]['text'],'contact.social.'.$socialNetwork->code.'.pivot.url' ,'contact.social.'.$socialNetwork->code.'.pivot.url','none' ,'' ,'' ,true ,false ,true ,false)
                               ->endRelation();

            $table = $table->endTab();
        if (in_array($type, $this->allowedResearches)) {
            $table->addActionButton(trans('admin::app.researches'), 'btn-researches', 'btn-researches', 'center all', '80px');
        }
            $table->addActionButton(trans('admin::app.upload_images') ,'upload_image' ,'upload_image', 'center all' ,'100px')
                ->addActionButton($this->update,'update','update')
                ->addActionButton($this->delete,'delete','delete')
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
