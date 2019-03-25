<?php

namespace Modules\Admin\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Modules\Admin\Entities\Research;

class ResearchFactory extends GlobalFactory
{

    public function getDatatable($model, $request)
    {
        $query = Research::where('person_id', '=', $request->get('person'))
            ->allLangs();

        return $this->table
            ->queryConfig('datatable-researches')
            ->queryDatatable($query)
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryMultiLang(['name', 'journal'])
            ->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model, $request)
    {
        return $this->table
            ->config('datatable-researches', trans('admin::app.researches'), ['gridSystem' => true, 'dialogWidth' => '70%'])
            ->addPrimaryKey('id', 'id')
            ->addHiddenInput('person_id', 'person_id', $request->get('person'), false, true)
            ->addMultiInputTextLangs(['name'])
            ->addMultiInputTextLangs(['journal'])
            ->setPlaceholder('http://example.com')
            ->addInputUrl(trans('admin::app.url'), 'url', 'url', 'req required')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton()
            ->render();
    }

    /**
     *  store action for save relation
     */
    public function storeDatatable($Research = null, $request = null, $result = null)
    {
        //
    }

    /**
     *  update action for update relation
     */
    public function updateDatatable($Research = null, $request = null, $result = null)
    {
        //
    }

    /**
     *  destroy action for destroy relation
     */
    public function destroyDatatable($Research = null, $request = null, $result = null)
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
