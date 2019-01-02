<?php

namespace Modules\Utilities\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Modules\Utilities\Entities\Block;

class BlockDetailFactory extends GlobalFactory
{
    /**
     *  get datatable query
     */
    public function getDatatable($model, $request)
    {
        $blockId = request('blockId');
        $block = Block::findOrFail($blockId);
        $query = $block->blockDetails()->with(['page', 'icon', 'front_image', 'back_image'])->allLangs()->get();

        return $this->table
            ->queryConfig('datatable-block-details')
            ->queryDatatable($query)
            ->queryMultiLang(['title', 'text', 'btn', 'url'])
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryCustomButton('upload_image' ,'id' ,'fa fa-image' ,'' ,'onclick="showFileUploadModal(this)"')
            ->queryRender(true);
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model, $request)
    {
        $blockId = request('blockId');

        return $this->table
            ->config('datatable-block-details',trans('utilities::app.block'))
            ->addPrimaryKey('id','id')
            ->addHiddenInput('block_id','block_id', $blockId, false, true)
            ->addMultiInputTextLangs(['title'], 'req required')
            ->addMultiInputTextLangs(['text'])
            ->addMultiInputTextLangs(['btn', 'url'])
            ->addAutocomplete('autocomplete/icons', trans('utilities::app.icon'), 'icon_id', 'icon.code', 'icon.icon_html')
//            ->addAutocomplete('autocomplete/pages', trans('utilities::app.page'), 'page_id', "page.lang_name.{$this->lang}.text", "page.lang_name.{$this->lang}.text")
            ->addActionButton(trans('utilities::app.upload_images'),'upload_image','upload_image' ,'center all' ,'60px')
            ->addActionButton($this->update,'update','update')
            ->addActionButton($this->delete,'delete','delete')
            ->addNavButton()
            ->render();
    }

    /**
     *  store action for save relation
     */
    public function storeDatatable($model = null ,$request = null ,$result = null)
    {
        //
    }

    /**
     *  store action for update relation
     */
    public function updateDatatable($model = null ,$request = null ,$result = null)
    {
        $result->icon_id = $request->get('icon_id', null);
        $result->save();
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
