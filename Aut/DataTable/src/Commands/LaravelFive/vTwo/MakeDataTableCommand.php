<?php

namespace Aut\DataTable\Commands;

use Aut\DataTable\src\Commands\LaravelFive\MakeDatatable;
use Illuminate\Console\AppNamespaceDetectorTrait;
use Illuminate\Console\Command;

class MakeDataTableCommand extends Command
{
    use AppNamespaceDetectorTrait ,MakeDatatable;
}
