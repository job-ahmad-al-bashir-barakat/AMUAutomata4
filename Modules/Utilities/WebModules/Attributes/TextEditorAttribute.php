<?php

namespace Modules\Utilities\WebModules\Attributes;


class TextEditorAttribute extends Attribute
{
    public $id = '4';
    public $code = 'text_editor';
    public $viewName = 'texteditor';
    public $title = 'text_editor';
    public $data;

    protected $multiLang = true;
}