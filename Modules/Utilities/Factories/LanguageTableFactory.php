<?php

namespace Modules\Utilities\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Modules\Utilities\Entities\Table;

class LanguageTableFactory extends GlobalFactory
{

    /**
     * @param string|Table $table
     * @param $request
     * @return mixed
     */
    public function getDatatable($table, $request)
    {
        $query = $table::with(['schemaLanguageTable'])->tablesOf($request->get('table_name'));
        return $this->table
            ->queryConfig('datatable-language-tables')
            ->queryDatatable($query)
            ->queryAddColumn('created', function ($item) {
                $class = 'fa-ban text-danger';
                if ($item->schemaLanguageTable) {
                    $class = 'fa-check-circle text-success';
                }
                return "<span class='fa {$class}'></span>";
            })
            ->queryUpdateButton()
            ->queryDeleteButton()
            ->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($table, $request)
    {
        $tableId = Table::where('table_name', $request->get('table_name'))->first()->id;
        return $this->table
            ->config('datatable-language-tables', trans('utilities::app.tables'))
            ->addPrimaryKey('id', 'id')
            ->addHiddenInput('table_id', 'table_id', $tableId, false, true)
            ->addInputText(trans('utilities::app.table_name'), 'table_name', 'table_name', 'required req')
            ->addInputText(trans('utilities::app.namespace'), 'namespace', 'namespace', 'required req')
            ->addActionButton(trans('utilities::app.created'), 'created', 'created')
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
