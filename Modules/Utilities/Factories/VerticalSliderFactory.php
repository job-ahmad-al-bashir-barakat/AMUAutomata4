<?php

namespace Modules\Utilities\Factories;

use App\Library\Url\Facades\RouteUrls;
use Aut\DataTable\Factories\GlobalFactory;

class VerticalSliderFactory extends GlobalFactory
{
    /**
     *  get datatable query
     */
    public function getDatatable($model, $request)
    {
        $query = $model::allLangs();

        return $this->table
            ->queryConfig('datatable-vertical-sliders')
            ->queryDatatable($query)
            ->queryMultiLang(['name'])
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryAddColumn('slider_detail', function ($row) {
                return "<a href='" . RouteUrls::verticalSlider($row->id) . "' class='ajax'><i class='fa fa-sliders'></i></a>";
            })
            ->queryRender(true);
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model, $request)
    {
        return $this->table
            ->config('datatable-vertical-sliders', trans('utilities::app.vertical-sliders'))
            ->addPrimaryKey('id', 'id')
            ->addMultiInputTextLangs(['name'])
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addActionButton('Details', 'slider_detail', 'slider_detail')
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
