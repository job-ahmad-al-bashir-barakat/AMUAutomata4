<?php

namespace Modules\Utilities\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Modules\Utilities\Entities\SchemaTable;
use Modules\Utilities\Entities\Table;

class SchemaTableFactory extends GlobalFactory
{

    /**
     * @param string|Table $table
     * @param $request
     * @return mixed
     */
    public function getDatatable($table, $request)
    {
        $query = SchemaTable::with(['table']);

        return $this->table
            ->queryConfig('datatable-schema-tables')
            ->queryDatatable($query)
            ->queryAddColumn('id', function ($item) {
                if($item->table)
                    return $item->table->id;
            })
            ->queryAddColumn('namespace', function ($item) {
                if($item->table)
                    return $item->table->namespace;
                return trans('utilities::app.not_set');
            })
            ->queryAddColumn('pageable', function ($item) {
                if($item->table)
                    return $item->table->pageable;
            })
            ->queryAddColumn('menuable', function ($item) {
                if($item->table)
                    return $item->table->menuable;
            })
            ->queryAddColumn('inserted', function ($item){
                $class = 'fa-ban text-danger';
                if($item->table){
                    $class = 'fa-check-circle text-success';
                }
                return "<span class='fa {$class}'></span>";
            })
            ->queryUpdateButton()
//            ->queryDeleteButton()
            ->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($table, $request)
    {
        return $this->table
            ->config('datatable-schema-tables', trans('utilities::app.tables'))
            ->addPrimaryKey('id', 'id')
            ->setName('table_name')
            ->addInputText(trans('utilities::app.table_name'), 'TABLE_NAME', 'TABLE_NAME', 'required req')
            ->addInputText(trans('utilities::app.namespace'), 'namespace', 'namespace', 'required req none'/*, '', '', false*/)
            ->addSelect([0 => trans('utilities::app.no'), 1 => trans('utilities::app.yes')], trans('utilities::app.pageable'), 'pageable', 'pageable', 'pageable', '', '', '', false)
            ->addSelect([0 => trans('utilities::app.no'), 1 => trans('utilities::app.yes')], trans('utilities::app.menuable'), 'menuable', 'menuable', 'menuable', '', '', '', false)
            ->addActionButton(trans('utilities::app.inserted'), 'inserted', 'inserted')
            ->addActionButton($this->update, 'update', 'update')
//            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton([], ['add'])
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
