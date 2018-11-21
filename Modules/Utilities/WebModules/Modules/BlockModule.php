<?php

namespace Modules\Utilities\WebModules\Modules;


class BlockModule extends Module
{

    public $id = '6';

    public $code = 'blocks';

    public $viewName = 'blocks';

    public function getModuleData($data)
    {
        if ($data['blocks']) {
            $data['blocks'] = $data['blocks']->blockDetails()->with('icon', 'front_image', 'back_image')->get();
        } else {
            $data['blocks'] = [];
        }
        return $data;
    }

}