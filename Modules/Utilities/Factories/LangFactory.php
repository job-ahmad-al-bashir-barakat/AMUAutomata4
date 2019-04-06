<?php

namespace Modules\Utilities\Factories;

use Aut\DataTable\Factories\GlobalFactory;

class LangFactory extends GlobalFactory
{

    /**
     *  get datatable query
     */
    public function getDatatable($lang, $request)
    {
        $query = $lang::with(['image']);

        return $this->table
            ->queryConfig('datatable-langs')
            ->queryDatatable($query)
            ->queryAddColumn('is_default_active', function ($item) {
                return $item->is_default ? trans('utilities::app.yes') : trans('utilities::app.no');
            })
            ->queryCustomButton('upload_image', 'id', 'fa fa-image', '', 'onclick="showFileUploadModal(this)"')
            ->queryUpdateButton()
            ->queryDeleteButton()
            ->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($lang, $request)
    {
        return $this->table
            ->config('datatable-langs', trans('utilities::app.langs'))
            ->addPrimaryKey('id', 'id')
            ->addInputText(trans('utilities::app.code'), 'lang_code', 'lang_code', 'required req')
            ->addInputText($this->name, 'name', 'name', 'required req')
            ->addInputText(trans('utilities::app.native'), 'native', 'native', 'required req')
            ->addInputText(trans('utilities::app.script'), 'script', 'script')
            ->addInputText(trans('utilities::app.regional'), 'regional', 'regional')
            ->addInputText(trans('utilities::app.font_url'), 'font_url', 'font_url')
            ->addInputText(trans('utilities::app.font_family'), 'font_family', 'font_family')
            ->addSelect([0 => trans('utilities::app.no'), 1 => trans('utilities::app.yes')], trans('utilities::app.active'), 'is_default', 'is_default', 'is_default_active')
            ->addActionButton(trans('utilities::app.upload_images'), 'upload_image', 'upload_image', 'center all', '100px')
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
        //
    }

    /**
     *  store action for update relation
     */
    public function updateDatatable($model = null, $request = null, $result = null)
    {
        //
    }

    /**
     *  store action for destroy relation
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
