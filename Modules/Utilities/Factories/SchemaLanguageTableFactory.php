<?php

namespace Modules\Utilities\Factories;

use Modules\Utilities\Entities\Table;
use Aut\DataTable\Factories\GlobalFactory;
use Modules\Utilities\Entities\SchemaLanguageTable;

class SchemaLanguageTableFactory extends GlobalFactory
{

    /**
     * @param string|Table $table
     * @param $request
     * @return mixed
     */
    public function getDatatable($table, $request)
    {

        $query = SchemaLanguageTable::with(['languageTable'])->tablesOf($request->get('table_name'));

        return $this->table
            ->queryConfig('datatable-schema-language-tables')
            ->queryDatatable($query)
            ->queryAddColumn('id', function ($item) {
                if($item->languageTable)
                    return $item->languageTable->id;
            })
            ->queryAddColumn('namespace', function ($item) {
                if($item->languageTable)
                    return $item->languageTable->namespace;
                return trans('utilities::app.not_set');
            })
            ->queryAddColumn('inserted', function ($item){
                $class = 'fa-ban text-danger';
                if($item->languageTable){
                    $class = 'fa-check-circle text-success';
                }
                return "<span class='fa {$class}'></span>";
            })
            ->queryUpdateButton()
            ->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($table, $request)
    {
        $tableId = Table::where('table_name', $request->get('table_name'))->first()->id;
        return $this->table
            ->config('datatable-schema-language-tables', trans('utilities::app.tables'))
            ->addPrimaryKey('id', 'id')
            ->addHiddenInput('table_id', 'table_id', $tableId, false, true)
            ->setName('table_name')
            ->addInputText(trans('utilities::app.table_name'), 'TABLE_NAME', 'TABLE_NAME', 'required req')
            ->addInputText(trans('utilities::app.namespace'), 'namespace', 'namespace', 'required req none'/*, '', '', false*/)
            ->addActionButton(trans('utilities::app.inserted'), 'inserted', 'inserted')
            ->addActionButton($this->update, 'update', 'update')
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
