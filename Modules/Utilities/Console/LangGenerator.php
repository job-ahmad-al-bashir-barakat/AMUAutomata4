<?php

namespace Modules\Utilities\Console;

use Artisan;
use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Nwidart\Modules\Support\Migrations\SchemaParser;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Illuminate\Filesystem\Filesystem;

class LangGenerator extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:lang';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'generate model and migration with lang';

    protected $files;

    public function __construct(Filesystem $files)
    {
        $this->files = $files;

        parent::__construct($files);
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['name', InputArgument::REQUIRED, 'set name.'],
            ['module', InputArgument::OPTIONAL, 'set module.'],
        ];
    }

    /**
     * Get the console command option.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['fields', 'f', InputOption::VALUE_OPTIONAL, 'set fields table.', null],
            ['langs', 'L', InputOption::VALUE_OPTIONAL, 'set langs.', null],
            ['factory', 'F', InputOption::VALUE_OPTIONAL, 'set factory.', 'false'],
            ['model', 'M', InputOption::VALUE_OPTIONAL, 'create models.', 'true'],
            ['migration', 'm', InputOption::VALUE_OPTIONAL, 'create migrations.', 'true'],
        ];
    }

    protected function getSchemaParser()
    {
        return new SchemaParser($this->option('fields'));
    }

    protected function getMigrationFileName($lang = '')
    {
        return date('Y_m_d_His_') . 'create_' . snake_case($this->getClassName($lang)) . '_table';
    }

    protected function getModelFileName($lang = '')
    {
        return Str::studly($this->argument('name') . $lang);
    }

    protected function getClassName($lang = '')
    {
        return Str::studly($this->argument('name') . $lang);
    }

    protected function getTableName($lang = '')
    {
        return snake_case(Str::plural($this->argument('name') . $lang));
    }

    protected function getFkTable()
    {
        return snake_case(Str::singular($this->argument('name') . "_id"));
    }

    protected function getClass($lang = '')
    {
        return $this->getClassName($lang);
    }

    protected function getModule()
    {
        return Str::studly($this->argument('module'));
    }

    protected function getLangs()
    {
        return $this->option('langs');
    }

    protected function getFactory()
    {
        return $this->option('factory');
    }

    protected function getNameSpace()
    {
        $module = $this->getModule();

        if ($module)
            $namespace = "Modules\\$module\\Entities";
        else
            $namespace = "App\\Entities";

        return $namespace;
    }

    protected function getStubFile($path)
    {
        $stub = [
            'migrationModel'     => __DIR__ . '/stubs/MigrationModel.stub',
            'migrationLangModel' => __DIR__ . '/stubs/MigrationModelLang.stub',
            'model'              => __DIR__ . '/stubs/Model.stub',
            'modelLang'          => __DIR__ . '/stubs/ModelLang.stub',
        ];

        return $stub[$path];
    }

    protected function getDestinationFilePath($type = 'migration', $lang = '')
    {
        $module = $this->getModule();

        switch ($type) {
            case 'migration' : {

                if ($module)
                    $path = base_path("Modules/$module/Database/Migrations");
                else
                    $path = base_path("database/migrations");

                return $path . '/' . $this->getMigrationFileName($lang) . '.php';

            };
                break;

            case 'model' : {

                if ($module)
                    $path = base_path("Modules/$module/Entities");
                else
                    $path = base_path("app/Entities");

                return $path . '/' . $this->getModelFileName($lang) . '.php';

            };
                break;
        }
    }

    protected function replace($templete, $lang = '' ,$pushContent = '' ,$appends = '')
    {
        $stubMigration = $this->files->get($this->getStubFile($templete));

        $searchReplaceArray = array(
            '$NAMESPACE$' => $this->getNameSpace(),
            '$CLASS$'     => $this->getClass($lang),
            '$TABLE$'     => $this->getTableName($lang),
            '$FK$'        => $this->getFkTable(),
            '$FIELDS$'    => $this->getSchemaParser()->render(),
            '$CONTENT$'   => $pushContent,
            '$APPENDS$'   => $appends
        );

        $template = str_replace(
            array_keys($searchReplaceArray),
            array_values($searchReplaceArray),
            $stubMigration
        );

        return $template;
    }

    protected function generateMigration()
    {
        $template = $this->replace('migrationModel');

        $this->files->put($this->getDestinationFilePath(), $template);

        $this->line("<info>Created Migration {$this->getModule()} File:</info>" . $this->getDestinationFilePath());
    }

    protected function generateLangMigration()
    {
        if ($this->getLangs()) {
            foreach (explode(',', $this->getLangs()) as $lang) {
                $template = $this->replace('migrationLangModel', "_{$lang}Lang");

                $this->files->put($this->getDestinationFilePath("migration", "_{$lang}Lang"), $template);

                $this->line("<info>Created Migration Lang {$this->getModule()} File:</info>" . $this->getDestinationFilePath("migration", "_{$lang}Lang"));
            }
        }
    }

    protected function generateModel()
    {
        $content = '';
        $appends = [];
        if ($this->getLangs())
            foreach (explode(',', $this->getLangs()) as $lang)
            {
                $content .= $this->createRelationAndAttribute($this->getClass("_{$lang}Lang"), $lang);

                $appends[] = "'lang_{$lang}'";
            }

        $appends = 'protected $appends = [' . implode(',' ,$appends) . '];';

        $template = $this->replace('model' ,'' ,$content ,$appends);

        $this->files->put($this->getDestinationFilePath('model'), $template);

        $this->line("<info>Created Model {$this->getModule()} File:</info>" . $this->getDestinationFilePath('model'));
    }

    protected function generateLangModel()
    {
        if ($this->getLangs()) {
            foreach (explode(',', $this->getLangs()) as $lang) {
                $template = $this->replace('modelLang', "_{$lang}Lang");

                $this->files->put($this->getDestinationFilePath("model", "_{$lang}Lang"), $template);

                $this->line("<info>Created Model Lang {$this->getModule() } File:</info>" . $this->getDestinationFilePath("model", "_{$lang}Lang"));
            }
        }
    }

    protected function generateFactory()
    {
        $module = $this->getModule();

        $param = ['name' => $this->getClass()."Factory" ,'--resource' => true];

        if($module)
            $param['module'] = $module;

        Artisan::call('make:factory' ,$param);

        $this->line("<info>Created Factory {$this->getModule() } File Successfuly</info>");
    }

    protected function createRelationAndAttribute($classLang ,$lang)
    {

    $content =
    '
    public function trans'.ucfirst($lang).'()
    {
        return $this->hasMany('.$classLang.'::class);
    }
    
    public function getLang'.ucfirst($lang).'Attribute()
    {
        return $this->trans'.ucfirst($lang).'->keyBy("lang_code");
    }
    ';

        return $content;
    }

    protected function getTemplateContents()
    {

        if((bool) $this->option('migration'))
        {
            $this->generateLangMigration();

            $this->generateMigration();
        }

        if((bool) $this->option('model'))
        {
            $this->generateModel();

            $this->generateLangModel();
        }

        if((bool) $this->option('factory'))
            $this->generateFactory();
    }

    /**
     * Run the command.
     */
    public function fire()
    {
        $this->getTemplateContents();
    }
}
