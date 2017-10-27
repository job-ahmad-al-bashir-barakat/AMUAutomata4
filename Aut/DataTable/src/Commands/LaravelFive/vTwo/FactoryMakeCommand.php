<?php

namespace Aut\DataTable\Commands\LaravelFive\vTwo;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class FactoryMakeCommand extends GeneratorCommand
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:factory';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new factory class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Factory';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        if ($this->option('resource')) {
            return preg_replace("/.Laravel.+/",'' ,__DIR__).'/stubs/make/Factory/factory.stub';
        }

        return preg_replace("/.Laravel.+/",'' ,__DIR__).'/stubs/make/Factory/factory.plain.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        $module = $this->argument('module');

        $Module = ucfirst($module);

        if($module != '')
            return $rootNamespace."\\Modules\\$Module\\Factories";
        else
            return $rootNamespace.'\Factories';
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return array(
            ['name', InputArgument::REQUIRED, 'The name of the factory'],
            ['module', InputArgument::OPTIONAL, 'The moudle of modules will be create factory on it.'],
        );
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['resource', null, InputOption::VALUE_NONE, 'Generate a resource factory class.'],
        ];
    }

    /**
     * Replace the param model name for the given stub.
     *
     * @param  string  $stub
     * @param  string  $name
     * @return string
     */
    protected function replaceParameter(&$stub, $search = [] ,$replace = [])
    {
        $stub = str_replace(
            $search,
            $replace,
            $stub
        );

        return $this;
    }

    /**
     * Build the class with the given name.
     *
     * @param  string  $name
     * @return string
     */
    protected function parentBuildClass($name)
    {
        $module = $this->argument('module');

        $stub = $this->files->get($this->getStub());

        if($module != '')
            $name = preg_replace("/App./",'' ,$name);

        $model = preg_replace('/(.+\\\\)|(factory)/i' ,'' ,$name);

        return $this->replaceParameter($stub ,['DummyModel'],[$model])->replaceNamespace($stub, $name)->replaceClass($stub, $name);
    }

    /**
     * Build the class with the given name.
     *
     * Remove the base controller import if we are already in base namespace.
     *
     * @param  string  $name
     * @return string
     */
    protected function buildClass($name)
    {
        $module = $this->argument('module');

        $namespace = $this->getNamespace($name);

        if($module != '')
            $namespace = preg_replace("/App./",'' ,$this->getNamespace($name));

        return str_replace("use $namespace\Factories;\n", '', $this->parentBuildClass($name));
    }

    /**
     * Execute the console command.
     *
     * @return bool|null
     */
    public function fire()
    {
        $module = $this->argument('module');

        $name = $this->parseName($this->getNameInput());

        $path = $this->getPath($name);

        if ($this->alreadyExists($this->getNameInput())) {
            $this->error($this->type.' already exists!');

            return false;
        }

        if($module != '')
            $path = base_path(preg_replace("/App./",'' ,$name)).'.php' ;

        $this->makeDirectory($path);

        $this->files->put($path, $this->buildClass($name));

        $this->info($this->type.' created successfully.');
    }
}