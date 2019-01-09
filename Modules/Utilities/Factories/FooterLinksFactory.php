<?php

namespace Modules\Utilities\Factories;

use Aut\DataTable\Factories\GlobalFactory;

class FooterLinksFactory extends GlobalFactory
{

    /**
     *  get data-table query
     */
    public function getDatatable($footerLink, $request)
    {
        $query = $footerLink::allLangs()->whereFooterId($request->get('footer_id'));

        return $this->table
            ->queryConfig('datatable-footer-links')
            ->queryDatatable($query)
            ->queryMultiLang(['text', 'url'])
            ->queryUpdateButton()
            ->queryDeleteButton()
            ->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($attribute, $request)
    {
        return $this->table
            ->config('datatable-footer-links',trans('utilities::app.footer-links'))
            ->addPrimaryKey('id','id')
            ->addHiddenInput('footer_id', 'footer_id', $request->get('footer_id'), false, true)
            ->addMultiInputTextLangs(['text', 'url'] ,'req required')
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
