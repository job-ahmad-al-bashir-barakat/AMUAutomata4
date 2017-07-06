<?php

namespace App\Http\Factory;

use Aut\DataTable\DataTableBuilder;
use Aut\DataTable\Http\Maker\BaseDataTableMaker;

use DB;
use Illuminate\Http\Request;
use Modules\Utilities\Entities\User;

class DatatableMaker
{
    // use CustomDatatableMaker;

    protected $table;

    public function __construct(DataTableBuilder $table)
    {
        $this->table = $table;
    }
}

