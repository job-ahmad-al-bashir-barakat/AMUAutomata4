<?php

namespace Modules\Utilities\WebModules\Attributes;


class LimitAttribute extends Attribute
{

    public $id = '3';

    public $code = 'limit';

    public $viewName = 'limit';

    public function getAttributeHtml()
    {
        return view($this->viewPath)->render();
    }

}