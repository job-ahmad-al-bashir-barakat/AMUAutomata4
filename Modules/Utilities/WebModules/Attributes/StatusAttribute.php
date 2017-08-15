<?php

namespace Modules\Utilities\WebModules\Attributes;


class StatusAttribute extends Attribute
{

    public $id = '1';

    public $code = 'status';

    public $viewName = 'status';

    public function getAttributeHtml()
    {
        return view($this->viewPath)->render();
    }

}