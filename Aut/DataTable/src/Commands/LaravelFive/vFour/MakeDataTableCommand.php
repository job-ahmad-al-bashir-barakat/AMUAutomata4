<?php

namespace Aut\DataTable\Commands\LaravelFive\vFour;

use Aut\DataTable\Commands\MakeDatatable;
use Illuminate\Console\Command;
use Illuminate\Console\DetectsApplicationNamespace;

class MakeDataTableCommand extends Command
{
    use DetectsApplicationNamespace ,MakeDatatable;

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
