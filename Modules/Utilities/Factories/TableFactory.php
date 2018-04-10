<?php

namespace Modules\Utilities\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Modules\Utilities\Entities\Table;

class TableFactory extends GlobalFactory
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
            ->queryMultiLang(['name'])
            ->queryAddColumn('isPageable', function ($item) {
                return $item->pageable ? trans('utilities::app.yes') : trans('utilities::app.no');
            })
            ->queryAddColumn('isMenuable', function ($item) {
                return $item->menuable ? trans('utilities::app.yes') : trans('utilities::app.no');
            })
            ->queryAddColumn('isDynamic', function ($item) {
                return $item->dynamic ? trans('utilities::app.yes') : trans('utilities::app.no');
            })
            ->queryAddColumn('created', function ($item){
                $class = 'fa-ban text-danger';
                if($item->schemaTable){
                    $class = 'fa-check-circle text-success';
                }
                return "<span class='fa {$class}'></span>";
            })
            ->queryAddColumn('has_lang_table', function ($item){
                return $item->languageTables->count() ? trans('utilities::app.yes') : trans('utilities::app.no');
            })
            ->queryCustomButton('language_tables', 'table_name', 'fa fa-language', 'language_tables', "href='javascript:void(0);' onclick='languageTablesModal(this)'")
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
            ->addMultiInputTextLangs(['name'])
            ->addInputText(trans('utilities::app.namespace'), 'namespace', 'namespace', 'required req')
            ->addSelect([0 => trans('utilities::app.no'), 1 => trans('utilities::app.yes')], trans('utilities::app.pageable'), 'pageable', 'pageable', 'isPageable')
            ->addInputText(trans('utilities::app.pageable_column'), 'pageable_column', 'pageable_column')
            ->addSelect([0 => trans('utilities::app.no'), 1 => trans('utilities::app.yes')], trans('utilities::app.menuable'), 'menuable', 'menuable', 'isMenuable')
            ->addSelect([0 => trans('utilities::app.no'), 1 => trans('utilities::app.yes')], trans('utilities::app.dynamic'), 'dynamic', 'dynamic', 'isDynamic')
            ->addInputText(trans('utilities::app.morph_code'), 'morph_code', 'morph_code')
            ->addActionButton(trans('utilities::app.created'), 'created', 'created')
            ->addActionButton(trans('utilities::app.has-lang-table'), 'has_lang_table', 'has_lang_table', 'center all', '80px')
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
