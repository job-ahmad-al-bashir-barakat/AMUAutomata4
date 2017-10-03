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
        $query = UnivercityOffice::with(['contact' ,'person'])->allLangs();

        return $this->table
            ->queryConfig('datatable-univercity-office')
            ->queryDatatable($query)
            ->queryMultiLang(['name'])
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
            ->addAutocomplete('autocomplete/person' ,trans('admin::app.responsible_person') ,'person_id' ,"person.lang_name.{$this->lang}.text" ,"person.lang_name.{$this->lang}.text" ,'req required')
            ->addMultiInputTextLangs(['name'] ,'req required')
            ->startRelation('contact')
                ->addInputEmail(trans('admin::app.email') ,'email' ,'email' ,'required req')
                ->addInputText(trans('admin::app.phone') ,'phone' ,'phone' ,'required req' ,['data-masked' , 'data-inputmask-type' => "phone"])
                ->addInputText(trans('admin::app.mobile') ,'mobile' ,'mobile' ,'required req',['data-masked' , 'data-inputmask-type' => "mobile"])
                ->addInputText(trans('admin::app.address1') ,'address1' ,'address1' ,'req required')
                ->addInputText(trans('admin::app.address2') ,'address2' ,'address2')
                ->addInputText(trans('admin::app.fax') ,'fax' ,'fax' ,'' ,['data-masked' , 'data-inputmask-type' => "fax"])
                ->addInputGroup(trans('admin::app.gelocation'),'gelocation' ,'gelocation' ,'req required' ,'icon-location-pin' ,'input-location hand' ,['data-modal' => '#modal-univercity-office-input-location'])
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

        UnivercityOffice::create(['contact_id' => $contact->id ,'person_id' => $request->input('person_id')]);
    }

    /**
     *  update action for update relation
     */
    public function updateDatatable($model = null, $request = null, $result = null)
    {
        //
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
