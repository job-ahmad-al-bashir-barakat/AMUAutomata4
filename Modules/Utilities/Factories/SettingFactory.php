<?php

namespace Modules\Utilities\Factories;

use Aut\DataTable\DataTableBuilder;
use Aut\DataTable\Factories\GlobalFactory;

class SettingFactory extends GlobalFactory
{

    /**
     *  get datatable query
     */
    public function getDatatable($model, $request)
    {
        $query = $model::allLangs();

        return $this->table
            ->queryConfig('datatable-settings')
            ->queryDatatable($query)
            ->queryMultiLang(['name'])
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryRender(true);
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model, $request)
    {
        $this->table
            ->config('datatable-settings', trans('utilities::app.settings'))
            ->addPrimaryKey('id', 'id')
            ->addMultiInputTextLangs(['name'])
            ->addInputText(trans('utilities::app.code'), 'code', 'code', 'required req')
            ->addInputText(trans('utilities::app.value'), 'value', 'value', 'required req')
            ->can('automata', function (DataTableBuilder $table) {
                $table
                    ->addActionButton($this->delete, 'delete', 'delete')
                    ->addActionButton($this->update, 'update', 'update')
                    ->addNavButton();
            });
        return $this->table->render();
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
