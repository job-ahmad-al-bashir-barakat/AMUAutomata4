<?php

namespace Modules\Admin\Factories;

use Aut\DataTable\DataTableBuilder;
use Aut\DataTable\Factories\GlobalFactory;
use Illuminate\Http\Request;
use Modules\Admin\Entities\Contact;
use Modules\Admin\Entities\Lab;
use Modules\Utilities\Entities\Setting;

class LabFactory extends GlobalFactory
{
    /**
     *  get datatable query
     */
    public function getDatatable($model, $request)
    {
        $query = Lab::with(['mainImage', 'image', 'contact'])->where('faculty_id', '=', $request->input('id'))->allLangs();

        return $this->table
            ->queryConfig('datatable-labs')
            ->queryDatatable($query)
            ->queryMultiLang(['name', 'description'])
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryCustomButton('main_upload_image', 'id', 'fa fa-image', '', 'onclick="showMainImageModal(this)"')
            ->queryCustomButton('upload_image', 'id', 'fa fa-image', '', 'onclick="showFileUploadModal(this)"')
            ->queryRender(true);
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model, Request $request)
    {
        return $this->table
            ->config('datatable-labs', trans('admin::app.labs'), ['gridSystem' => true, 'dialogWidth' => '60%'])
            ->addPrimaryKey('id', 'id')
            ->addHiddenInput('faculty_id', 'faculty_id', $request->input('id'), false, true)
            ->addMultiInputTextLangs(['name'])
            ->relation('contact', function (DataTableBuilder $table) {
                $table
                    ->addInputText(trans('admin::app.phone'), 'contact.phone', 'contact.phone', 'req required', ['data-masked', 'data-inputmask-type' => "phone"])
                    ->addInputGroup(trans('admin::app.gelocation'), 'contact.gelocation', 'contact.gelocation', 'req required', 'icon-location-pin', 'input-location hand', ['data-modal' => '#modal-labs-input-location']);
            })
            ->setGridNormalCol(12)
            ->addMultiTextareaLangs(['description'], 'text-editor d:tabs d:noLabel none')
            ->addActionButton(trans('admin::app.main_image'), 'main_upload_image', 'main_upload_image', 'center all', '100px')
            ->addActionButton(trans('admin::app.upload_images'), 'upload_image', 'upload_image', 'center all', '100px')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton()
            ->render();
    }

    public function storeDatatable($model, $request, $result)
    {
        $request->request->add(['transSaveOper' => false]);

        $contact = Contact::create($request->input('contact'));

        $request->request->add(['transSaveOper' => true]);

        Lab::create(array_merge($request->input(), ['contact_id' => $contact->id]));
    }

    public function updateDatatable($model, $request, $result)
    {
        $request->request->add(['transSaveOper' => false]);

        $result->contact()->update($request->input('contact'));
    }
}
