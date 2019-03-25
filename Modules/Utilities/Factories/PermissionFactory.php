<?php

namespace Modules\Utilities\Factories;

use Aut\DataTable\DataTableBuilder;
use Modules\Utilities\Entities\Role;
use Aut\DataTable\Factories\GlobalFactory;

class PermissionFactory extends GlobalFactory
{

    /**
     *  get data-table query
     */
    public function getDatatable($permission, $request)
    {
        $query = $permission::allLangs();

        return $this->table
            ->queryConfig('datatable-permissions')
            ->queryDatatable($query)
            ->queryMultiLang(['name'])
            ->queryAddColumn('to_automata', function ($item) {
                return Role::find(1)->hasPermissionTo($item->id) ? 'Y' : 'N';
            })
            ->queryAddColumn('to_admin', function ($item) {
                return Role::find(2)->hasPermissionTo($item->id) ? 'Y' : 'N';
            })
            ->queryUpdateButton()
            ->queryDeleteButton()
            ->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($permission, $request)
    {
        return $this->table
            ->config('datatable-permissions', trans('utilities::app.permissions'))
            ->addPrimaryKey('id', 'id')
            ->addMultiInputTextLangs(['name'])
            ->addInputText(trans('utilities::app.name'), 'name', 'name', 'required req')
            ->addInputText(trans('utilities::app.guard_name'), 'guard_name', 'guard_name')
            ->addSelect(['Y' => 'Yes', 'N' => 'No'], trans('utilities::app.hidden'), 'hidden', 'hidden')
            ->relation('extra', function (DataTableBuilder $table) {
                $table
                    ->addSelect(['Y' => 'Yes', 'N' => 'No'], 'To Automata', 'to_automata', 'to_automata', '', '', '', '', false)
                    ->addSelect(['Y' => 'Yes', 'N' => 'No'], 'To Admin', 'to_admin', 'to_admin', '', '', '', '', false);
            })
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
        list ($automata, $admin) = Role::whereIn('id', [1, 2])->get();

        if ($request->input('extra.to_automata', 'N') == 'Y') {
            $automata->givePermissionTo($result->id);
        }

        if ($request->input('extra.to_admin', 'N') == 'Y') {
            $admin->givePermissionTo($result->id);
        }
    }

    /**
     *  store action for update relation
     */
    public function updateDatatable($model = null, $request = null, $result = null)
    {
        list ($automata, $admin) = Role::whereIn('id', [1, 2])->get();

        if ($request->input('extra.to_automata', 'N') == 'Y') {
            $automata->hasPermissionTo($result->id) || $automata->givePermissionTo($result->id);
        } else {
            $automata->revokePermissionTo($result->id);
        }

        if ($request->input('extra.to_admin', 'N') == 'Y') {
            $admin->hasPermissionTo($result->id) || $admin->givePermissionTo($result->id);
        } else {
            $admin->revokePermissionTo($result->id);
        }
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
