<?php

namespace Modules\Admin\Factories;

use Aut\DataTable\DataTableBuilder;
use Aut\DataTable\Factories\GlobalFactory;
use Modules\Admin\Entities\Contact;
use Modules\Admin\Entities\UniversityOffice;
use Modules\Utilities\Entities\Setting;

class UniversityOfficeFactory extends GlobalFactory
{

    /**
     *  get datatable query
     */
    public function getDatatable($model, $request)
    {
        $query = UniversityOffice::with(['contact' => function($query){
            $query->allLangs();
        } ,'person'])->allLangs();

        return $this->table
            ->queryConfig('datatable-university-office')
            ->queryDatatable($query)
            ->queryMultiLang(['name' ,'contact' => 'address'])
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryCustomButton('addresses' ,'id' ,'icon-direction' ,'' ,'onclick="openAddressesModal(this)" data-contact={contact->id}')
            ->queryCustomButton('numbers' ,'id' ,'icon-phone' ,'' ,'onclick="openNumbersModal(this)" data-contact={contact->id}')
            ->queryRender(true);
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model, $request)
    {
        return $this->table
            ->config('datatable-university-office', trans('admin::app.university_office'), ['dialogWidth' => '650px'])
            ->addPrimaryKey('id', 'id')
            ->addHiddenInput('contact_id', 'contact_id')
            ->addAutocomplete('autocomplete/person', trans('admin::app.responsible_person'), 'person_id', "lang_name.{$this->lang}.text", "lang_name.{$this->lang}.text", 'req required')
            ->addMultiInputTextLangs(['name'], 'req required')
            ->relation('contact', function (DataTableBuilder $table) {
                $table
                    ->addInputEmail(trans('admin::app.email'), 'contact.email', 'contact.email', 'required req none')
                    ->addInputText(trans('admin::app.phone'), 'contact.phone', 'contact.phone', 'required req none', ['data-masked', 'data-inputmask-type' => "phone"])
                    ->addInputText(trans('admin::app.mobile'), 'contact.mobile', 'contact.mobile', 'required req none', ['data-masked', 'data-inputmask-type' => "mobile"])
                    ->addInputText(trans('admin::app.fax'), 'contact.fax', 'contact.fax', 'none', ['data-masked', 'data-inputmask-type' => "fax"])
                    ->addMultiTextareaLangs(['address'], 'req required')
                    ->addInputGroup(trans('admin::app.gelocation'), 'contact.gelocation', 'contact.gelocation', 'req required none', 'icon-location-pin', 'input-location hand', ['data-modal' => '#modal-university-office-input-location'], '', true, false, false, false, false);
            })
            ->addActionButton(trans('admin::app.addresses'), 'addresses', 'addresses', 'center all', '60px')
            ->addActionButton(trans('admin::app.numbers'), 'numbers', 'numbers', 'center all', '60px')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton()
            ->render();
    }

    /**
     *  store action for save relation
     */
    public function storeDatatable($model = null, $request = null, $result = null)
    {
        $contact = Contact::create($request->input('contact'));

        UniversityOffice::create(array_merge($request->except('contact'), ['contact_id' => $contact->id]));
    }

    /**
     *  update action for update relation
     */
    public function updateDatatable($model = null, $request = null, $result = null)
    {
        $find = UniversityOffice::findOrFail($request->input('id'))->first();

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
