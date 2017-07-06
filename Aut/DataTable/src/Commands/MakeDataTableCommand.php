<?php

namespace Aut\DataTable\Commands;

use Illuminate\Console\Command;
use Illuminate\Console\DetectsApplicationNamespace;
use Symfony\Component\Console\Input\InputArgument;

class MakeDataTableCommand extends Command
{
    use DetectsApplicationNamespace;

    protected $module;
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

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return array(
            array('module', InputArgument::OPTIONAL, 'The moudle of modules will be create datatable on it.'),
        );
    }

    /**
     * The views that need to be exported.
     *
     * @var array
     */
    protected $files = [
        //----------------------------------------Http---------------------------------------//
        'Factory/DatatableMaker.stub'                  => 'app/Http/Factory/DatatableMaker.php',
        //----------------------------------------Http---------------------------------------//
        'Factory/CustomDatatableMaker.stub'            => 'app/Http/Factory/CustomDatatableMaker.php',
        //---------------------------------------config--------------------------------------//
        'config/datatableModels.stub'                  => 'config/datatableModels.php',
        //----------------------------------------doc----------------------------------------//
        'datatable.md'                                 => 'datatable.md',
    ];

    /**
     * @return array
     *
     * empty for now
     */
    protected function setModuleFile()
    {
        return [

        ];
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $this->module = ucfirst($this->argument('module'));

        $this->createDirectories();

        $this->exportFiles();

        if(!empty($this->module))
            $this->exportModuleFiles();

        $this->comment('DataTable scaffolding generated successfully!');
    }

    /**
     * Create the directories for the files.
     *
     * @return void
     */
    protected function createDirectories()
    {
        // Dir Files
        if (! is_dir(base_path('app/Http/Factory'))) {
            mkdir(base_path('app/Http/Factory'), 0755, true);
        }

        if (! is_dir(base_path('app/Factories'))) {
            mkdir(base_path('app/Factories'), 0755, true);
        }

        foreach (\Module::all() as $module)
        {
            if (! is_dir(base_path("Modules/$module->name/Factories"))) {
                mkdir(base_path("Modules/$module->name/Factories"), 0755, true);
            }
        }
    }

    /**
     * Export the authentication views.
     *
     * @return void
     */
    protected function exportFiles()
    {
        $this->loopFiles($this->files);
    }

    protected function exportModuleFiles()
    {
       $this->loopFiles($this->setModuleFile());
    }

    protected function loopFiles($files)
    {
        foreach ($files as $key => $value)
        {
            $path = base_path($value);

            $this->line('<info>Created File:</info> '.$path);

            copy(__DIR__.'/stubs/make/'.$key, $path);
        }
    }
}
