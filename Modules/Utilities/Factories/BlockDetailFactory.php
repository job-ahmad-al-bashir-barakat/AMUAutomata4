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
        $query = $block->blockDetails()->with(['page', 'icon'])->allLangs()->get();

        return $this->table
            ->queryConfig('datatable-block')
            ->queryDatatable($query)
            ->queryMultiLang(['title', 'text', 'btn'])
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryRender(true);
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model, $request)
    {
        $blockId = request('blockId');

        return $this->table
            ->config('datatable-block',trans('utilities::app.block'))
            ->addPrimaryKey('id','id')
            ->addHiddenInput('block_id','block_id', $blockId, false, true)
            ->addMultiInputTextLangs(['title', 'text'], 'req required')
            ->addMultiInputTextLangs(['btn'])
            ->addViewField()
            ->addAutocomplete('autocomplete/icons', 'Icon', 'icon_id', 'icon.code', 'icon.icon_html', 'req required')
            ->addAutocomplete('autocomplete/pages', 'Page', 'page_id', "page.lang_name.{$this->lang}.text", "page.lang_name.{$this->lang}.text")
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
        //
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
