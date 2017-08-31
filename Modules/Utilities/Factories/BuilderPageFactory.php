<?php

namespace Modules\Utilities\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Modules\Utilities\Entities\BuilderPage;
use Modules\Utilities\Entities\Page;

class BuilderPageFactory extends GlobalFactory
{
    /**
     *  get datatable query
     */
    public function getDatatable($builderPage, $request)
    {
        $query = Page::allLangs()->get();

        return $this->table
            ->queryConfig('datatable-builder-pages')
            ->queryDatatable($query)
            ->queryMultiLang(['name'])
            ->queryAddColumn('modules', function ($row){
                return "<i data-page_id='{$row->id}' data-page_name='{$row->langName[$this->lang]->text}' class='fa fa-cubes hand' data-toggle='modal' data-target='#page_modules'></i>";
            })
            ->queryRender(true);
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model, $request)
    {
        return $this->table
            ->config('datatable-builder-pages',trans('utilities::app.pages'))
            ->addPrimaryKey('id','id')
            ->addMultiInputTextLangs(['name'], 'req required')
            ->addActionButton('Modules', 'modules')
            ->addNavButton([], ['add'])
            ->onTableCreate("
                
            ")
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
