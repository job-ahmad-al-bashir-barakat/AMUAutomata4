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
        $query = Person::Type();

        return $this->table
            ->queryConfig('datatable-persons')
            ->queryDatatable($query)
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryMultiColumn(['name' ,'summary'])
            ->queryRender(true);
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model ,$request)
    {
        $socialNetworks = SocialNetwork::all();

        $table = $this->table
            ->config('datatable-persons',trans('admin::app.persons'),['withTab' => true ,'gridSystem' => true ,'dialogWidth' => "50%"])
            ->addPrimaryKey('id','id')
            ->addHiddenInput('type' ,'type' ,Str::studly(\Route::input('model')) ,false ,true)
            ->gridSystemConfig(false)
            ->setGridNormalCol(12 ,'lg')
            ->startTab(trans('app.Info'),'fa fa-user fa-2x')
                ->startHorizontalTab()
                    ->openHorizontalTab('name' ,$this->name ,'req',true)
                        ->addMultiInputs(['name'] ,'text','req required')
                    ->closeHorizontalTab()
                    ->openHorizontalTab('summary' ,$this->summary ,'req')
                        ->addMultiInputs(['summary'],'textarea' ,'req required')
                    ->closeHorizontalTab()
                    ->openHorizontalTab('extra' ,trans('admin::app.extra_info') ,'req')
                        ->addAutocomplete('autocomplete/gender' ,trans('admin::app.gender') , 'gender_id', 'gender_id', "gender.lang_name.$this->lang.text" ,'req required none' ,'' , '' ,true ,false ,true ,false)
                        ->addAutocomplete('autocomplete/position' ,trans('admin::app.position') , 'position_id', 'position_id', "position.lang_name.$this->lang.text" ,'req required none' ,'' , '' ,true ,false ,true ,false)
                        ->addAutocomplete('autocomplete/job-title' ,trans('admin::app.job_title') , 'job_title_id', 'job_title_id', "job_title.lang_name.$this->lang.text" ,'req required none' ,'' , '' ,true ,false ,true ,false)
                    ->closeHorizontalTab()
                ->endHorizontalTab()
            ->endTab()
            ->startTab(trans('app.image'),'fa fa-picture-o fa-2x')
                ->addComponent(view('controle.component.cropper' ,['preview' => true])->render())
            ->endTab()
            ->startTab(trans('app.contact'),'fa fa-phone fa-2x')
                ->startRelation('contact')
                    ->addInputText(trans('admin::app.email'),'contact.email','contact.email' ,'req required')
                    ->addInputText(trans('admin::app.phone'),'contact.phone' ,'contact.phone' ,'req required')
                    ->addInputText(trans('admin::app.mobile'),'contact.mobile' ,'contact.mobile' ,'req required')
                ->endRelation()
            ->endTab()
            ->startTab(trans('app.media'),'fa fa-facebook fa-2x');

            foreach ($socialNetworks as $socialNetwork)
                $table = $table->startRelation('contact[social]['.$socialNetwork->id.']')
                               ->addInputText($socialNetwork->lang_name[$this->lang]['text'],'contact.social.'.$socialNetwork->code.'.pivot.url' ,'contact.social.'.$socialNetwork->code.'.pivot.url','none' ,'' ,'' ,true ,false ,true ,false)
                               ->endRelation();

            $table = $table->endTab()
                      ->addActionButton($this->update,'update','update')
                      ->addActionButton($this->delete,'delete','delete')
                      ->addNavButton()
                      ->render();

        return $table;
    }

    public function storeDatatable($model ,$request ,$result)
    {
        $contact = Contact::create($request->input('contact'));

        Person::create(array_merge($request->input(),['contact_id' => $contact->id]));

        $contact->socialNetwork()->sync($request->input('contact.social'));
    }

    public function updateDatatable($model ,$request ,$result)
    {
        $result->contact()->update($request->input('contact'));

        $result->contact->socialNetwork()->sync($request->input('contact.social'));
    }
}
