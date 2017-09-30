<?php

namespace Modules\Admin\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Modules\Admin\Entities\Contact;
use Modules\Admin\Entities\Lab;
use Modules\Utilities\Entities\Setting;

class LabFactory extends GlobalFactory
{
    /**
     *  get datatable query
     */
    public function getDatatable($model ,$request)
    {
        $query = Lab::with(['image','contact'])->where('faculty_id' ,'=' ,$request->input('id'))->allLangs();

        return $this->table
            ->queryConfig('datatable-labs')
            ->queryDatatable($query)
            ->queryMultiLang(['name' ,'description'])
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryCustomButton('upload_image' ,'id' ,'fa fa-image' ,'' ,'onclick="showFileUploadModal(this)"')
            ->queryRender(true);
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model ,$request)
    {
        return $this->table
            ->config('datatable-labs',trans('admin::app.labs') ,['gridSystem' => true ,'dialogWidth' => '70%'])
            ->addPrimaryKey('id' ,'id')
            ->addHiddenInput('faculty_id' ,'faculty_id' ,$request->input('id') ,false ,true)
            ->addMultiInputTextLangs(['name'] ,'req required')
            ->startRelation('contact')
            ->addInputText(trans('admin::app.phone'),'contact.phone' ,'contact.phone' ,'req required',['data-masked' , 'data-inputmask-type' => "phone"])
            ->addInputGroup(trans('admin::app.gelocation'),'contact.gelocation' ,'contact.gelocation' ,'req required' ,'icon-location-pin' ,'input-location hand' ,['data-modal' => '#modal-labs-input-location'])
            ->endRelation()
            ->setGridNormalCol(12)
            ->addMultiTextareaLangs(['description'] ,'req required text-editor d:tabs d:noLabel')
            ->addActionButton(trans('admin::app.upload_images') ,'upload_image' ,'upload_image', 'center all' ,'100px')
            ->addActionButton($this->update,'update','update')
            ->addActionButton($this->delete,'delete','delete')
            ->addBlade('lab-input-location-custom' ,view('controle.component.location.input_location', [
                'id'                => 'labs',
                'title'             => trans('admin::app.labs_gelocation'),
                'inputFullLocation' => '#datatable-labs-modal .input-location input',
                'zoom'              => 10,
                'geoLocation'       => Setting::whereCode('UGL')->first()->value
            ])->render())
            ->addNavButton()
            ->render();
    }

    public function storeDatatable($model ,$request ,$result)
    {
        $contact = Contact::create($request->input('contact'));

        Lab::create(array_merge($request->input(),['contact_id' => $contact->id]));
    }

    public function updateDatatable($model ,$request ,$result)
    {
        $result->contact()->update($request->input('contact'));
    }
}
