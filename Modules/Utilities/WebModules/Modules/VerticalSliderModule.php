<?php

namespace Modules\Utilities\WebModules\Modules;


use Modules\Utilities\Entities\Icon;

class VerticalSliderModule extends Module
{

    public $id = '9';

    public $code = 'vertical_sliders';

    public $viewName = 'vertical-sliders';

    public function getModuleData($data)
    {
        $data = parent::getModuleData($data);
        if ($data['icon']) {
            $data['icon'] = Icon::query()->whereIn('id', array_keys($data['icon'][0]))->get()->first();
        }
        return $data;
    }

}