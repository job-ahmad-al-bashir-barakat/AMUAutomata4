<?php

namespace Modules\Admin\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Illuminate\Support\Str;
use Modules\Admin\Entities\Contact;
use Modules\Admin\Entities\Person;
use Modules\Utilities\Entities\SocialNetwork;

class PersonFactory extends GlobalFactory
{
    /**
     *  get datatable query
     */
    public function getDatatable($model ,$request)
    {
        $query = Person::with(['image'])->allLangs()->Type();

        return $this->table
            ->queryConfig('datatable-persons')
            ->queryDatatable($query)
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryMultiLang(['name' ,'summary'])
            ->queryCustomButton('upload_image' ,'id' ,'fa fa-image' ,'' ,'onclick="showFileUploadModal(this)"')
            ->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model ,$request)
    {
        $socialNetworks = SocialNetwork::all();
        $table = $this->table
            ->config('datatable-persons',trans('admin::app.'.Str::slug(\Route::input('model'),'_')),['withTab' => true ,'gridSystem' => true ,'dialogWidth' => "50%"])
            ->addPrimaryKey('id','id')
            ->addHiddenInput('type', 'type', Str::snake(\Route::input('model')), false, true)
            ->gridSystemConfig(false)
            ->setGridNormalCol(12 ,'lg')
            ->startTab(trans('admin::app.personal_Info'),'fa fa-user fa-2x')
                ->startHorizontalTab()
                    ->openHorizontalTab('name' ,$this->name ,'req',true)
                        ->addMultiInputTextLangs(['name'] ,'req required')
                    ->closeHorizontalTab()
                    ->openHorizontalTab('summary' ,$this->summary ,'req')
                        ->addMultiTextareaLangs(['summary'] ,'req required')
                    ->closeHorizontalTab()
                    ->openHorizontalTab('extra' ,trans('admin::app.extra_info') ,'req')
                        ->addAutocomplete('autocomplete/gender' ,trans('admin::app.gender') , 'gender_id', 'gender_id', "gender.lang_name.$this->lang.text" ,'req required none' ,'' , '' ,true ,false ,true ,false)
                        ->addAutocomplete('autocomplete/position' ,trans('utilities::app.position') , 'position_id', 'position_id', "position.lang_name.$this->lang.text" ,'req required none' ,'' , '' ,true ,false ,true ,false)
                        ->addAutocomplete('autocomplete/job-title' ,trans('utilities::app.job_title') , 'job_title_id', 'job_title_id', "job_title.lang_name.$this->lang.text" ,'req required none' ,'' , '' ,true ,false ,true ,false)
                    ->closeHorizontalTab()
                ->endHorizontalTab()
            ->endTab()
            ->startTab(trans('admin::app.contact'),'fa fa-phone fa-2x')
                ->startRelation('contact')
                    ->addInputEmail(trans('admin::app.email'),'contact.email','contact.email' ,'req required')
                    ->addInputText(trans('admin::app.phone'),'contact.phone' ,'contact.phone' ,'req required' ,['data-masked' , 'data-inputmask-type' => "phone"])
                    ->addInputText(trans('admin::app.mobile'),'contact.mobile' ,'contact.mobile' ,'req required' ,['data-masked' , 'data-inputmask-type' => "mobile"])
                ->endRelation()
            ->endTab()
            ->startTab(trans('admin::app.social_media'),'fa fa-facebook fa-2x');

            foreach ($socialNetworks as $socialNetwork)
                $table = $table->startRelation('contact[social]['.$socialNetwork->id.']')
                               ->setDefaultValue('#')
                               ->addInputText($socialNetwork->lang_name[$this->lang]['text'],'contact.social.'.$socialNetwork->code.'.pivot.url' ,'contact.social.'.$socialNetwork->code.'.pivot.url','none' ,'' ,'' ,true ,false ,true ,false)
                               ->endRelation();

            $table = $table->endTab()
                      ->addActionButton(trans('admin::app.upload_images') ,'upload_image' ,'upload_image', 'center all' ,'100px')
                      ->addActionButton($this->update,'update','update')
                      ->addActionButton($this->delete,'delete','delete')
                      ->addNavButton()
                      ->render();

        return $table;
    }

    public function storeDatatable($model ,$request ,$result)
    {
        $request->request->add(['transSaveOper' => false]);

        $contact = Contact::create($request->input('contact'));

        $request->request->add(['transSaveOper' => true]);

        $contact->socialNetwork()->sync($request->input('contact.social'));

        Person::create(array_merge($request->input(),['contact_id' => $contact->id]));
    }

    public function updateDatatable($model ,$request ,$result)
    {
        $request->request->add(['transSaveOper' => false]);

        $result->contact()->update($request->input('contact'));

        $result->contact->socialNetwork()->sync($request->input('contact.social'));
    }
}
