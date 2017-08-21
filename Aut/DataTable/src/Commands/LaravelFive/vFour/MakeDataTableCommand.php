<?php

namespace Aut\DataTable\Commands;

use Aut\DataTable\src\Commands\LaravelFive\MakeDatatable;
use Illuminate\Console\Command;
use Illuminate\Console\DetectsApplicationNamespace;

class MakeDataTableCommand extends Command
{
    use DetectsApplicationNamespace ,MakeDatatable;
}
