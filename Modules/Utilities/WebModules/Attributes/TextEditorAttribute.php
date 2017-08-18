<?php

namespace Modules\Utilities\WebModules\Attributes;


class TextEditorAttribute extends Attribute
{

    public $id = '4';

    public $code = 'text_editor';

    public $viewName = 'texteditor';

    public function getAttributeHtml()
    {
        return view($this->viewPath)->render();
    }

}