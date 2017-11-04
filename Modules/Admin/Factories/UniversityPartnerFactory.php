<?php

namespace Modules\Admin\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Modules\Admin\Entities\Contact;
use Modules\Admin\Entities\Partner;
use Modules\Utilities\Entities\Setting;
use Modules\Utilities\Entities\SocialNetwork;

class UniversityPartnerFactory extends GlobalFactory
{
    /**
     *  get datatable query
     */
    public function getDatatable($model ,$request)
    {
        $query = Partner::with(['image_small', 'image_large' ,'contact.socialNetwork'])->allLangs();

        return $this->table
            ->queryConfig('datatable-partner')
            ->queryDatatable($query)
            ->queryMultiLang(['name' ,'description'])
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryCustomButton('upload_image_large' ,'id' ,'fa fa-image' ,'' ,'onclick="showFileUploadModal(this)" data-modal="#partner-larg-image-upload"')
            ->queryCustomButton('upload_image_small' ,'id' ,'fa fa-image' ,'' ,'onclick="showFileUploadModal(this)" data-modal="#partner-small-image-upload"')
            ->queryRender(true);
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model ,$request)
    {
        $socialNetworks = SocialNetwork::all();

        $table = $this->table
            ->config('datatable-partner',trans('admin::app.partners'),['withTab' => true , 'dialogWidth' => '700px'])
            ->startTab(trans('admin::app.personal_Info'),'fa fa-user fa-2x')
                ->addPrimaryKey('id' ,'id')
                ->addMultiInputTextLangs(['name'] ,'req required')
                ->addMultiTextareaLangs(['description'])
                ->startRelation('contact')
                    ->addInputEmail(trans('admin::app.email') ,'contact.email' ,'contact.email' ,'req required')
                    ->setPlaceholder('http://website.com')
                    ->addInputText(trans('admin::app.website') ,'contact.url' ,'contact.url' ,'req d:url')
                    ->addInputGroup(trans('admin::app.gelocation'),'contact.gelocation' ,'contact.gelocation' ,'req required' ,'icon-location-pin' ,'input-location hand' ,['data-modal' => '#modal-partner-input-location'])
                ->endRelation()
            ->endTab()
            ->startTab(trans('admin::app.social_media'),'fa fa-facebook fa-2x');
            foreach ($socialNetworks as $socialNetwork)
                $table = $table->startRelation('contact[social]['.$socialNetwork->id.']')
                               ->setDefaultValue('#')
                               ->addInputText($socialNetwork->lang_name[$this->lang]['text'],'contact.social.'.$socialNetwork->code.'.pivot.url' ,'contact.social.'.$socialNetwork->code.'.pivot.url','none' ,'' ,'' ,true ,false ,true ,false)
                               ->endRelation();

        $table = $table->endTab()
        ->addBlade('partner-input-location-custom' ,view('controle.component.location.input_location', [
            'id'                => 'partner',
            'title'             => trans('admin::app.gelocation'),
            'inputFullLocation' => '#datatable-partner-modal .input-location input',
            'zoom'              => 10,
            'geoLocation'       => Setting::whereCode('UGL')->first()->value
        ])->render())
        ->addActionButton(trans('admin::app.partner_larg_image'),'upload_image_large','upload_image_large' ,'center all' ,'80px')
        ->addActionButton(trans('admin::app.partner_small_image'),'upload_image_small','upload_image_small' ,'center all' ,'80px')
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

        $contact->socialNetwork()->sync($request->input('contact.social'));

        $request->request->add(['transSaveOper' => true]);

        Partner::create(array_merge($request->input(),['contact_id' => $contact->id]));
    }

    public function updateDatatable($model ,$request ,$result)
    {
        $request->request->add(['transSaveOper' => false]);

        $result->contact()->update($request->input('contact'));

        $result->contact->socialNetwork()->sync($request->input('contact.social'));
    }
}