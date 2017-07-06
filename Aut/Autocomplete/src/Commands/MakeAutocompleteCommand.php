<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 4/28/2017
 * Time: 10:27 PM
 */

namespace Aut\Autocomplete\Commands;

use Illuminate\Console\DetectsApplicationNamespace;
use Illuminate\Console\Command;

class MakeAutocompleteCommand extends Command
{
    use DetectsApplicationNamespace;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'make:autocompelte';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'publish all content autocompelte';

    /**
     * The views that need to be exported.
     *
     * @var array
     */
    protected $files = [
        //---------------------------------------config--------------------------------------//
        'config/autocompleteModels.stub'               => 'config/autocompleteModels.php',
    ];

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $this->exportFiles();

        $this->comment('Autocompelte scaffolding generated successfully!');
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