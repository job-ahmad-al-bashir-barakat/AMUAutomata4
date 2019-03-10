<?php

namespace Modules\Utilities\Factories;

use Aut\DataTable\DataTableBuilder;
use Aut\DataTable\Factories\GlobalFactory;
use function foo\func;
use Modules\Admin\Entities\Contact;
use Modules\Utilities\Entities\SocialNetwork;

class FooterFactory extends GlobalFactory
{

    /**
     *  get data-table query
     */
    public function getDatatable($footers, $request)
    {
        $query = $footers::allLangs()->with(['image', 'contact' => function ($query) {
            return $query->allLangs();
        }]);

        return $this->table
            ->queryConfig('datatable-footers')
            ->queryDatatable($query)
            ->queryMultiLang(['name', 'text', 'contact' => 'address'])
            ->queryAddColumn('is_default_active', function ($item) {
                return $item->is_default ? trans('utilities::app.yes') : trans('utilities::app.no');
            })
            ->queryCustomButton('upload_image', 'id', 'fa fa-image', '', 'onclick="showFileUploadModal(this)"')
            ->queryCustomButton('links', 'id', 'fa fa-list', 'links', "href='javascript:void(0);' onclick='linksModal(this)'")
            ->queryUpdateButton()
            ->queryDeleteButton()
            ->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($attribute, $request)
    {
        $socialNetworks = SocialNetwork::all();

        return $this->table
            ->config('datatable-footers', trans('utilities::app.footers'), ['withTab' => true, 'gridSystem' => true, 'dialogWidth' => "60%"])
            ->addPrimaryKey('id', 'id')
            ->gridSystemConfig(false)
            ->setGridNormalCol(12, 'lg')
            ->tab(trans('utilities::app.basic_info'), function (DataTableBuilder $table) {
                $table
                    ->addMultiInputTextLangs(['name'], 'req required')
                    ->addMultiTextareaLangs(['text'])
                    ->addSelect([0 => trans('utilities::app.no'), 1 => trans('utilities::app.yes')], trans('utilities::app.active')/*trans('utilities::app.default')*/, 'is_default', 'is_default', 'is_default_active');
            }, 'fa fa-file fa-2x')
            ->tab(trans('admin::app.contact'), function (DataTableBuilder $table) {
                $table
                    ->relation('contact', function (DataTableBuilder $table) {
                        $table
                            ->addInputEmail(trans('admin::app.email'), 'contact.email', 'contact.email')
                            ->addInputText(trans('admin::app.phone'), 'contact.phone', 'contact.phone', '', ['data-masked', 'data-inputmask-type' => "phone"])
                            ->addInputText(trans('admin::app.mobile'), 'contact.mobile', 'contact.mobile', '', ['data-masked', 'data-inputmask-type' => "mobile"])
                            ->addInputGroup(trans('admin::app.gelocation'), 'contact.gelocation', 'contact.gelocation', '', 'icon-location-pin', 'input-location hand', ['data-modal' => '#modal-footers-input-location'])
                            ->addMultiTextareaLangs(['address'], 'none');
                    });
            }, 'fa fa-phone fa-2x')
            ->tab(trans('admin::app.social_media'), function (DataTableBuilder $table) {
                $table
                    ->each($socialNetworks, function (DataTableBuilder $table, $item) {
                        $table->relation("contact[social][{$item->id}]", function (DataTableBuilder $table) use ($item) {
                            $table
                                ->setDefaultValue('#')
                                ->addInputText($item->lang_name[$this->lang]['text'], 'contact.social.' . $item->code . '.pivot.url', 'contact.social.' . $item->code . '.pivot.url', 'none', '', '', true, false, true, false);
                        });
                    });
            }, 'fa fa-facebook fa-2x')
            ->addActionButton(trans('utilities::app.upload_logo'), 'upload_image', 'upload_image', 'center all', '100px')
            ->addActionButton(trans('utilities::app.footer_links'), 'links', 'links')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton()
            ->render();
    }

    /**
     *  store action for save relation
     */
    public function storeDatatable($model = null ,$request = null ,$result = null)
    {
        $contact = Contact::create($request->input('contact'));

        $contact->socialNetwork()->sync($request->input('contact.social'));

        $result->contact_id = $contact->id;

        $result->save();

    }

    /**
     *  store action for update relation
     */
    public function updateDatatable($model = null ,$request = null ,$result = null)
    {
        $result->contact()->update($request->input('contact'));

        $result->contact->socialNetwork()->sync($request->input('contact.social'));
    }

    /**
     *  store action for destroy relation
     */
    public function destroyDatatable($model = null ,$request = null ,$result = null)
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
