<?php

namespace Modules\Utilities\Factories;

use Aut\DataTable\DataTableBuilder;
use Aut\DataTable\Factories\GlobalFactory;

class RoleFactory extends GlobalFactory
{

    /**
     *  get data-table query
     */
    public function getDatatable($role, $request)
    {
        $query = $role::with(['permissions'])->allLangs();

        return $this->table
            ->queryConfig('datatable-roles')
            ->queryDatatable($query)
            ->queryMultiLang(['name'])
            ->queryUpdateButton()
            ->queryDeleteButton()
            ->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($role, $request)
    {
        return $this->table
            ->config('datatable-roles', trans('utilities::app.roles'))
            ->addPrimaryKey('id', 'id')
            ->addMultiInputTextLangs(['name'])
            ->addInputText(trans('utilities::app.name'), 'name', 'name', 'required req')
            ->relation('permissions', function (DataTableBuilder $table) {
                $table->addMultiAutocomplete('autocomplete/permissions', "permissions[,].lang_name.$this->lang.text", trans('utilities::app.permissions'), 'permissions.id', "permissions.lang_name.$this->lang.text", "permissions.lang_name.$this->lang.text", 'req required', 'multiple');
            })
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton()
            ->render();
    }

    /**
     *  store action for save relation
     */
    public function storeDatatable($role = null, $request = null, $result = null)
    {
        $request->request->add(['transSaveOper' => false]);
        $result->givePermissionTo($request->input('permissions.id'));
    }

    /**
     *  store action for update relation
     */
    public function updateDatatable($role = null, $request = null, $result = null)
    {
        $request->request->add(['transSaveOper' => false]);
        $result->syncPermissions($request->input('permissions.id'));
    }

    /**
     *  store action for destroy relation
     */
    public function destroyDatatable($model = null, $request = null, $result = null)
    {
        dd($request->input(), $result);
    }

    /**
     *  inline validate dialog form
     */
    public function validateDatatable()
    {
        return [];
    }
}
