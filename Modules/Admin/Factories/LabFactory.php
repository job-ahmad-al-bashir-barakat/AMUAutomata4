<?php

namespace Modules\Admin\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Modules\Admin\Entities\Contact;
use Modules\Admin\Entities\Lab;

class LabFactory extends GlobalFactory
{
    /**
     *  get datatable query
     */
    public function getDatatable($model ,$request)
    {
        $query = Lab::with(['contact'])->where('faculty_id' ,'=' ,$request->input('id'))->allLangs();

        return $this->table
            ->queryConfig('datatable-labs')
            ->queryDatatable($query)
            ->queryMultiColumn(['name' ,'description'])
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
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
            ->addMultiInputs(['name'],'text' ,'req required')
            ->startRelation('contact')
                ->addInputText(trans('app.phone'),'contact.phone' ,'contact.phone' ,'req required')
                ->addInputText(trans('app.gelocation'),'contact.mobile' ,'contact.mobile' ,'req required')
            ->endRelation()
            ->setGridNormalCol(12)
            ->addMultiInputs(['description'],'textarea' ,'req required text-editor d:tabs d:noLabel' ,'' ,'rows=10 cols=80 data-resize=false')
            ->addActionButton($this->update,'update','update')
            ->addActionButton($this->delete,'delete','delete')
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
