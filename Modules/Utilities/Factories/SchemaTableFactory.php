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
            ->queryMultiLang(['name'])
            ->queryAddColumn('id', function ($item) {
                if($item->table)
                    return $item->table->id;
            })
            ->queryAddColumn('namespace', function ($item) {
                if($item->table)
                    return $item->table->namespace;
            })
            ->queryAddColumn('pageable', function ($item) {
                if($item->table)
                    return $item->table->pageable;
            })->queryAddColumn('pageable_column', function ($item) {
                if($item->table)
                    return $item->table->pageable_column;
            })
            ->queryAddColumn('menuable', function ($item) {
                if($item->table)
                    return $item->table->menuable;
            })
            ->queryAddColumn('morph_code', function ($item) {
                if($item->table)
                    return $item->table->morph_code;
            })
            ->queryAddColumn('inserted', function ($item){
                $class = 'fa-ban text-danger';
                if($item->table){
                    $class = 'fa-check-circle text-success';
                }
                return "<span class='fa {$class}'></span>";
            })
            ->queryCustomButton('language_tables', 'TABLE_NAME', 'fa fa-language', 'language_tables', "href='javascript:void(0);' onclick='schemaLanguageTablesModal(this)'")
            ->queryUpdateButton()
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
            ->addMultiInputTextLangs(['name'],'none')
            ->addInputText(trans('utilities::app.namespace'), 'namespace', 'namespace', 'required req none'/*, '', '', false*/)
            ->addSelect([0 => trans('utilities::app.no'), 1 => trans('utilities::app.yes')], trans('utilities::app.pageable'), 'pageable', 'pageable', 'pageable', 'none', '', '', false)
            ->addInputText(trans('utilities::app.pageable_column'), 'pageable_column', 'pageable_column', 'none')
            ->addSelect([0 => trans('utilities::app.no'), 1 => trans('utilities::app.yes')], trans('utilities::app.menuable'), 'menuable', 'menuable', 'menuable', 'none', '', '', false)
            ->addInputText(trans('utilities::app.morph_code'), 'morph_code', 'morph_code', 'none')
            ->addActionButton(trans('utilities::app.inserted'), 'inserted', 'inserted')
            ->addActionButton(trans('utilities::app.language-table'), 'language_tables', 'language_tables')
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
