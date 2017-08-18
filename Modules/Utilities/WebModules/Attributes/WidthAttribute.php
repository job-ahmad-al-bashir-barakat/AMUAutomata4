<?php

namespace Modules\Utilities\WebModules\Attributes;


class WidthAttribute extends Attribute
{

    public $id = '2';

    public $code = 'width';

    public $viewName = 'width';

    public function getAttributeHtml()
    {
        return view($this->viewPath)->render();
    }

}