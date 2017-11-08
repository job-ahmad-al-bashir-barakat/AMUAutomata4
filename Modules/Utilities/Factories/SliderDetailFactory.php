<?php

namespace Modules\Utilities\Factories;

use App\Library\Url\Facades\RouteUrls;
use Aut\DataTable\Factories\GlobalFactory;
use Modules\Utilities\Entities\Slider;

class SliderDetailFactory extends GlobalFactory
{
    /**
     *  get datatable query
     */
    public function getDatatable($model, $request)
    {
        $sliderId = request('sliderId');
        $slider = Slider::findOrFail($sliderId);
        $query = $slider->sliderDetails()->with(['image'])->allLangs()->get();

        return $this->table
            ->queryConfig('datatable-slider')
            ->queryDatatable($query)
            ->queryMultiLang(['head', 'title', 'text', 'btn'])
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryCustomButton('upload_image', 'id', 'fa fa-image', '', 'onclick="showFileUploadModal(this)"')
            ->queryRender(true);
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model, $request)
    {
        $sliderId = request('sliderId');

        return $this->table
            ->config('datatable-slider',trans('utilities::app.slider'))
            ->addPrimaryKey('id','id')
            ->addHiddenInput('slider_id','slider_id', $sliderId, false, true)
            ->addMultiInputTextLangs(['head', 'title', 'text'], 'req required')
            ->addMultiInputTextLangs(['btn'])
            ->addSelect(['R' => 'Right', 'C' => 'Center', 'L' => 'Left'], trans('utilities::app.position_location'), 'position', 'position', '', 'req required')
            ->addAutocomplete('autocomplete/pages', trans('utilities::app.page'), 'page_id', 'page_id')
            ->addActionButton(trans('utilities::app.upload_images'), 'upload_image', 'id', 'center all' ,'100px')
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
