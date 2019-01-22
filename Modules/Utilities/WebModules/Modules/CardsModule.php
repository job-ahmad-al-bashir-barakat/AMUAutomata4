<?php

namespace Modules\Utilities\WebModules\Modules;

use Modules\Utilities\Entities\Card;

class CardsModule extends Module
{
    public $id = '45';
    public $code = 'cards';
    public $viewName = 'cards';

    public function getModuleData($data)
    {
        $data['cards'] = Card::whereIn('id', array_keys($data['cards']))->with(['image'])->get()->chunk(2);
        return $data;
    }
}