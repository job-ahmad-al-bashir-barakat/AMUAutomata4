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

        $query = $table::with(['schemaTable']);

        return $this->table
            ->queryConfig('datatable-tables')
            ->queryDatatable($query)
            ->queryAddColumn('pageable', function ($item) {
                return $item->pageable ? trans('utilities::app.yes') : trans('utilities::app.no');
            })
            ->queryAddColumn('menuable', function ($item) {
                return $item->menuable ? trans('utilities::app.yes') : trans('utilities::app.no');
            })
            ->queryAddColumn('created', function ($item){
                $class = 'fa-ban text-danger';
                if($item->schemaTable){
                    $class = 'fa-check-circle text-success';
                }
                return "<span class='fa {$class}'></span>";
            })
            ->queryAddColumn('has_lang_table', function ($item){
                return 'Unknown Yet';
                return $item->langTables->count() ? trans('utilities::app.yes') : trans('utilities::app.no');
            })
            ->queryCustomButton('language_tables', 'table_name', 'fa fa-language', 'language_tables')
            ->queryUpdateButton()
            ->queryDeleteButton()
            ->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($table, $request)
    {
        return $this->table
            ->config('datatable-tables', trans('utilities::app.tables'))
            ->addPrimaryKey('id', 'id')
            ->addInputText(trans('utilities::app.table_name'), 'table_name', 'table_name', 'required req')
            ->addInputText(trans('utilities::app.namespace'), 'namespace', 'namespace', 'required req')
            ->addSelect([0 => trans('utilities::app.no'), 1 => trans('utilities::app.yes')], trans('utilities::app.pageable'), 'pageable', 'pageable', 'pageable')
            ->addSelect([0 => trans('utilities::app.no'), 1 => trans('utilities::app.yes')], trans('utilities::app.menuable'), 'menuable', 'menuable', 'menuable')
            ->addActionButton(trans('utilities::app.created'), 'created', 'created')
            ->addActionButton(trans('utilities::app.has-lang-table'), 'has_lang_table', 'has_lang_table')
            ->addActionButton(trans('utilities::app.language-table'), 'language_tables', 'language_tables')
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
