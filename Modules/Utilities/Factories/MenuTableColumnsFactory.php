<?php

namespace Modules\Utilities\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Modules\Utilities\Entities\MenuTableColumns;

class MenuTableColumnsFactory extends GlobalFactory
{

    /**
     *  get datatable query
     */
    public function getDatatable($model, $request)
    {
        $query = MenuTableColumns::where('menu_table_id' ,'=' ,$request->input('id'))->get();

        return $this->table
            ->queryConfig('menu-table-columns-tables')
            ->queryDatatable($query)
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model, $request)
    {
        return $this->table
            ->config('menu-table-columns-tables',trans('utilities::app.table_columns'))
            ->addPrimaryKey('id','id')
            ->addHiddenInput('menu_table_id' ,'menu_table_id' ,$request->input('id') ,false ,true)
            ->addInputText($this->name ,'name','name','required req')
            ->addActionButton($this->update,'update','update')
            ->addActionButton($this->delete,'delete','delete')
            ->addNavButton()
            ->render();
    }
    /**
     *  inline validate dialog form
     */
    public function validateDatatable()
    {
        return [];
    }
}
