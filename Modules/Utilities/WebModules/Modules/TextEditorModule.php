<?php

namespace Modules\Utilities\WebModules\Modules;


class TextEditorModule extends Module
{

    public $id = '2';

    public $code = 'text_editor';

    public $viewName = 'texteditor';

    public function getModuleHtml()
    {
        return view($this->viewPath)->render();
    }

}