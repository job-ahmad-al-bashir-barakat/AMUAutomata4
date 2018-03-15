<?php

namespace Modules\Utilities\Factories;

use Aut\DataTable\Factories\GlobalFactory;

class UserFactory extends GlobalFactory
{
    /**
     *  get datatable query
     */
    public function getDatatable($user, $request)
    {
        $query = $user::with(['permissions', 'roles'])->allLangs()->get();

        return $this->table
            ->queryConfig('datatable-users')
            ->queryDatatable($query)
            ->queryMultiLang(['name' ,'summary'])
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryCustomButton('upload_image' ,'id' ,'fa fa-image' ,'' ,'onclick="showFileUploadModal(this)"')
            ->queryRender(true);
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model, $request)
    {
        return $this->table
            ->config('datatable-users',trans('utilities::app.users'))
            ->addPrimaryKey('id','id')
            ->addInputText(trans('utilities::app.user_name'),'name','name','required req')
            ->addInputText(trans('utilities::app.email'),'email','email','required req d:email')
            ->addMultiInputTextLangs(['name'] ,'req required')
            ->addMultiTextareaLangs(['summary'] ,'req required')
            ->startRelation('roles')
                ->addMultiAutocomplete('autocomplete/roles' ,"roles[ ,].lang_name.$this->lang.text",trans('utilities::app.roles') , 'roles.id', "roles.lang_name.$this->lang.text", "roles.lang_name.$this->lang.text" ,'' ,'multiple')
            ->endRelation()
            ->startRelation('permissions')
                ->addMultiAutocomplete('autocomplete/permissions' ,"permissions[ ,].lang_name.$this->lang.text",trans('utilities::app.permissions') , 'permissions.id', "permissions.lang_name.$this->lang.text", "permissions.lang_name.$this->lang.text" ,'' ,'multiple')
            ->endRelation()
            ->addInputPassword(trans('utilities::app.password'),'password','password','','','',false,false,false,false)
            ->addActionButton(trans('utilities::app.upload_images') ,'upload_image' ,'upload_image', 'center all' ,'100px')
            ->addActionButton($this->update,'update','update')
            ->addActionButton($this->delete,'delete','delete')
            ->addNavButton()
            ->render();
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
