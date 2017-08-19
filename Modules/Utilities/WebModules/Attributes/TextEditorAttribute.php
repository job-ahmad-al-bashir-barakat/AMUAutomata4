<?php

namespace Modules\Utilities\WebModules\Attributes;


class TextEditorAttribute extends Attribute
{
    public $id = '4';
    public $code = 'text_editor';
    public $viewName = 'texteditor';
    public $title = 'Text Editor';
    public $data = 'a';//todo remove the default val

    protected $multiLang = true;
}