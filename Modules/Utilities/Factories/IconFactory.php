<?php

namespace Modules\Utilities\Factories;

use Aut\DataTable\Factories\GlobalFactory;

class IconFactory extends GlobalFactory
{

    /**
     *  get datatable query
     */
    public function getDatatable($model ,$request)
    {
        $query = $model::all();

        return $this->table
            ->queryConfig('datatable-icons')
            ->queryDatatable($query)
            ->queryAddColumn('icon_preview', function ($item){
                return "<i class='{$item->code}'></i>";
            })
            ->queryUpdateButton()
            ->queryDeleteButton()
            ->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($lang ,$request)
    {
        return $this->table
            ->config('datatable-icons',trans('utilities::app.icons'))
            ->addPrimaryKey('id','id')
            ->addActionButton(trans('utilities::app.preview'), 'icon_preview', '', 'center all', '100px')
            ->addInputText(trans('utilities::app.code'),'code','code','required req')
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
