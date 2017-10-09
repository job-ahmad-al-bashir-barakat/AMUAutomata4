<?php

namespace Modules\Admin\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Modules\Admin\Entities\Contact;
use Modules\Admin\Entities\UnivercityOffice;
use Modules\Utilities\Entities\Setting;

class UnivercityOfficeFactory extends GlobalFactory
{

    /**
     *  get datatable query
     */
    public function getDatatable($model, $request)
    {
        $query = UnivercityOffice::with(['contact' => function($query){
            $query->allLangs();
        } ,'person'])->allLangs()->get();

        return $this->table
            ->queryConfig('datatable-univercity-office')
            ->queryDatatable($query)
            ->queryMultiLang(['name' ,'contact' => 'address'])
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryRender(true);
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model, $request)
    {
        return $this->table
            ->config('datatable-univercity-office',trans('admin::app.univercity_office') ,['dialogWidth' => '650px'])
            ->addPrimaryKey('id' ,'id')
            ->addHiddenInput('contact_id' ,'contact_id')
            ->addAutocomplete('autocomplete/person' ,trans('admin::app.responsible_person') ,'person_id' ,"lang_name.{$this->lang}.text" ,"lang_name.{$this->lang}.text" ,'req required')
            ->addMultiInputTextLangs(['name'] ,'req required')
            ->startRelation('contact')
                ->addInputEmail(trans('admin::app.email') ,'contact.email' ,'contact.email' ,'required req none')
                ->addInputText(trans('admin::app.phone') ,'contact.phone' ,'contact.phone' ,'required req none' ,['data-masked' , 'data-inputmask-type' => "phone"])
                ->addInputText(trans('admin::app.mobile') ,'contact.mobile' ,'contact.mobile' ,'required req none',['data-masked' , 'data-inputmask-type' => "mobile"])
                ->addInputText(trans('admin::app.fax') ,'contact.fax' ,'contact.fax' ,'none' ,['data-masked' , 'data-inputmask-type' => "fax"])
                ->addMultiTextareaLangs(['address'] ,'req required')
            ->endRelation()
            ->startRelation('contact')
                ->addInputGroup(trans('admin::app.gelocation'),'contact.gelocation' ,'contact.gelocation' ,'req required none' ,'icon-location-pin' ,'input-location hand' ,['data-modal' => '#modal-univercity-office-input-location'] ,'' ,true ,false ,false ,false ,false)
            ->endRelation()
            ->addActionButton($this->update,'update','update')
            ->addActionButton($this->delete,'delete','delete')
            ->addBlade('univercity-office-input-location-custom' ,view('controle.component.location.input_location', [
                'id'                => 'univercity-office',
                'title'             => trans('admin::app.nivercity_office_gelocation'),
                'inputFullLocation' => '#datatable-univercity-office-modal .input-location input',
                'zoom'              => 10,
                'geoLocation'       => Setting::whereCode('UGL')->first()->value
            ])->render())
            ->addNavButton()
            ->render();
    }

    /**
     *  store action for save relation
     */
    public function storeDatatable($model = null, $request = null, $result = null)
    {
        $contact = Contact::create($request->input('contact'));

        UnivercityOffice::create(array_merge($request->except('contact'), ['contact_id' => $contact->id]));
    }

    /**
     *  update action for update relation
     */
    public function updateDatatable($model = null, $request = null, $result = null)
    {
        $find = UnivercityOffice::findOrFail($request->input('id'))->first();

        $find->update($request->input());

        $find->contact->update($request->input('contact'));
    }

    /**
     *  destroy action for destroy relation
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
        return [];
    }
}
