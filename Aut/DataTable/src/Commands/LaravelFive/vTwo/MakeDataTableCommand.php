<?php

namespace Aut\DataTable\Commands\LaravelFive\vTwo;

use Aut\DataTable\Commands\MakeDatatable;
use Illuminate\Console\AppNamespaceDetectorTrait;
use Illuminate\Console\Command;

class MakeDataTableCommand extends Command
{
    use AppNamespaceDetectorTrait ,MakeDatatable;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'make:datatable';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'publish all content datatable';
}
