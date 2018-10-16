<?php

namespace Modules\Utilities\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Modules\Utilities\Entities\MenuList;

class MenuListFactory extends GlobalFactory
{

    /**
     *  get datatable query
     */
    public function getDatatable($model ,$request)
    {
        $query = MenuList::allLangs();

        return $this->table
            ->queryConfig('datatable-menu-list')
            ->queryDatatable($query)
            ->queryMultiLang(['name'])
            ->queryCustomButton('general-menu-tree','id','fa fa-list','','href='.\RouteUrls::generalMenu("{id}"))
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model ,$request)
    {
        $table = $this->table
            ->config('datatable-menu-list',trans('utilities::app.list'))
            ->addPrimaryKey('id' ,'id')
            ->addMultiInputTextLangs(['name'] ,'req required')
            ->addActionButton(trans('utilities::app.general'),'general-menu-tree','general-menu-tree')
            ->addActionButton($this->update,'update','update')
            ->addActionButton($this->delete,'delete','delete')
            ->addNavButton()
            ->render();

        return $table;
    }

    /**
     *  store action for save relation
     */
    public function storeDatatable($MenuList = null, $request = null, $result = null)
    {
        //
    }

    /**
     *  update action for update relation
     */
    public function updateDatatable($MenuList = null, $request = null, $result = null)
    {
        //
    }

    /**
     *  destroy action for destroy relation
     */
    public function destroyDatatable($MenuList = null, $request = null, $result = null)
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
