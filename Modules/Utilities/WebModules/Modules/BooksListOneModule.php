<?php

namespace Modules\Utilities\WebModules\Modules;


use Modules\Admin\Entities\Book;

class BooksListOneModule extends Module
{

    public $id = '49';

    public $code = 'books_list_1';

    public $viewName = 'books-list-one';

    public function getModuleData($data)
    {
        return $data;
    }
}