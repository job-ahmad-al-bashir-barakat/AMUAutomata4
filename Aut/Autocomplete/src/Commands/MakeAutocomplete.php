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

trait MakeAutocomplete
{
    /**
     * The views that need to be exported.
     *
     * @var array
     */
    protected $files = [
        //---------------------------------------config--------------------------------------//
        'config/autocompleteModels.stub'               => 'config/autocompleteModels.php',
        'helper/AutocompleteHelper.stub'               => 'app/Library/AutocompleteHelper.php',
    ];

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $this->createDirectories();

        $this->exportFiles();

        $this->comment('Autocompelte scaffolding generated successfully!');
    }

    /**
     * Create the directories for the files.
     *
     * @return void
     */
    protected function createDirectories()
    {
        // Dir Files
        if (! is_dir(base_path('app/Library'))) {
            mkdir(base_path('app/Library'), 0755, true);
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