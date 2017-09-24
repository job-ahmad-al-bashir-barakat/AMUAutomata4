<?php

namespace Modules\Utilities\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Modules\Utilities\Entities\VerticalSlider;

class VerticalSliderDetailFactory extends GlobalFactory
{
    /**
     *  get datatable query
     */
    public function getDatatable($model, $request)
    {
        $sliderId = request('verticalSliderId');
        $slider = VerticalSlider::findOrFail($sliderId);
        $query = $slider->verticalSliderDetails()->allLangs()->get();

        return $this->table
            ->queryConfig('datatable-vertical-slider')
            ->queryDatatable($query)
            ->queryMultiLang(['text', 'sub_text', 'small_text'])
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryRender(true);
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model, $request)
    {
        $sliderId = request('verticalSliderId');

        return $this->table
            ->config('datatable-vertical-slider',trans('utilities::app.slider'))
            ->addPrimaryKey('id','id')
            ->addHiddenInput('vertical_slider_id','vertical_slider_id', $sliderId, false, true)
            ->addMultiInputTextLangs(['text', 'sub_text', 'small_text'], 'req required')
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
