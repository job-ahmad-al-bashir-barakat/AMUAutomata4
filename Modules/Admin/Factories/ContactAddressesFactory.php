<?php

namespace Modules\Admin\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Modules\Admin\Entities\Addresses;
use Modules\Admin\Entities\Contact;

class ContactAddressesFactory extends GlobalFactory
{

    /**
     *  get datatable query
     */
    public function getDatatable($model, $request)
    {
        $query = Contact::with(['addresses' => function ($query) {
            return $query->allLangs();
        }])->where('id', '=', $request->input('id'))->first()->addresses;

        return $this->table
            ->queryConfig('datatable-addresses')
            ->queryDatatable($query)
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryMultiLang(['location'])
            ->queryRender();

    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model, $request)
    {
        return $this->table
            ->config('datatable-addresses', trans('admin::app.addresses'))
            ->addPrimaryKey('id', 'id')
            ->addHiddenInput('contact_id', 'contact_id', $request->get('id'), false, true)
            ->addMultiTextareaLangs(['location'])
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
        Addresses::create($request->input());

    }

    /**
     *  update action for update relation
     */
    public function updateDatatable($model = null, $request = null, $result = null)
    {
        Addresses::findOrFail($request->input('id'))->update(request()->except('id'));
    }

    /**
     *  destroy action for destroy relation
     */
    public function destroyDatatable($model = null, $request = null, $result = null)
    {
        Addresses::destroy($request['id']);
    }

    /**
     *  inline validate dialog form
     */
    public function validateDatatable()
    {
        return [];
    }
}
