<?php

namespace Modules\Utilities\Factories;

use App\Library\Url\Facades\RouteUrls;
use Aut\DataTable\DataTableBuilder;
use Aut\DataTable\Factories\GlobalFactory;

class UserFactory extends GlobalFactory
{
    /**
     *  get datatable query
     */
    public function getDatatable($user, $request)
    {
        $query = $user::with(['permissions', 'roles'])->allLangs();

        $this->table
            ->queryConfig('datatable-users')
            ->queryDatatable($query)
            ->queryMultiLang(['name', 'summary'])
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryCustomButton('upload_image', 'id', 'fa fa-image', '', 'onclick="showFileUploadModal(this)"')
            ->can('automata', function (DataTableBuilder $table) {
                $table->queryAddColumn('login_as', function ($row) {
                    return "<a href='" . RouteUrls::loginAs($row->id) . "'><i class='icon-login'></i></a>";
                });
            });
        return $this->table->queryRender(true);
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model, $request)
    {
        $this->table
            ->config('datatable-users', trans('utilities::app.users'))
            ->addPrimaryKey('id', 'id')
            ->addInputText(trans('utilities::app.user_name'), 'name', 'name', 'required req')
            ->addInputText(trans('utilities::app.email'), 'email', 'email', 'required req d:email')
            ->addMultiInputTextLangs(['name'], 'req required')
            ->addMultiTextareaLangs(['summary'], 'req required')
            ->relation('roles', function (DataTableBuilder $table) {
                $table->addMultiAutocomplete('autocomplete/roles', "roles[,].lang_name.$this->lang.text", trans('utilities::app.roles'), 'roles.id', "roles.lang_name.$this->lang.text", "roles.lang_name.$this->lang.text", '', 'multiple');
            })
            ->relation('permissions', function (DataTableBuilder $table) {
                $table->addMultiAutocomplete('autocomplete/permissions', "permissions[,].lang_name.$this->lang.text", trans('utilities::app.permissions'), 'permissions.id', "permissions.lang_name.$this->lang.text", "permissions.lang_name.$this->lang.text", '', 'multiple');
            })
            ->addInputPassword(trans('utilities::app.password'), 'password', 'password', '', '', '', false, false, false, false)
            ->addActionButton(trans('utilities::app.upload_images'), 'upload_image', 'upload_image', 'center all', '100px')
            ->can('automata', function (DataTableBuilder $table) {
                $table->addActionButton(trans('utilities::app.login_as'), 'login_as', 'login_as', 'center all', '100px');
            })
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton();

        return $this->table->render();
    }

    /**
     *  store action for save relation
     */
    public function storeDatatable($model = null ,$request = null ,$result = null)
    {
        $request->request->add(['transSaveOper' => false]);
        $result->givePermissionTo($request->input('permissions.id', []));
        $result->assignRole($request->input('roles.id', []));
    }

    /**
     *  store action for update relation
     */
    public function updateDatatable($model = null ,$request = null ,$result = null)
    {
        $request->request->add(['transSaveOper' => false]);
        $result->syncPermissions($request->input('permissions.id', []));
        $result->syncRoles($request->input('roles.id', []));
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
