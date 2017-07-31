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
        $query = $user::allLangs()->get();

        return $this->table
            ->queryConfig('datatable-users')
            ->queryDatatable($query)
            ->queryMultiLang(['name' ,'summary'])
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
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
            ->addInputPassword(trans('utilities::app.password'),'password','password','','','',false,false,false,false)
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
