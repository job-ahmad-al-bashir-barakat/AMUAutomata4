<?php

namespace Modules\Utilities\Factories;

use App\Library\Url\Facades\RouteUrls;
use Aut\DataTable\Factories\GlobalFactory;

class StepFactory extends GlobalFactory
{
    /**
     *  get datatable query
     */
    public function getDatatable($model, $request)
    {
        $query = $model::allLangs();

        return $this->table
            ->queryConfig('datatable-steps')
            ->queryDatatable($query)
            ->queryMultiLang(['title', 'text', 'url'])
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
            ->config('datatable-steps', trans('utilities::app.steps'))
            ->addPrimaryKey('id', 'id')
            ->addMultiInputTextLangs(['title'])
            ->addMultiTextareaLangs(['text'])
            ->addMultiInputTextLangs(['url'])
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
