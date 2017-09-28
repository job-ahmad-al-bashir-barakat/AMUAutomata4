<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 4/28/2017
 * Time: 10:27 PM
 */

namespace Aut\Autocomplete\Commands\LaravelVersion\vFour;

use Aut\Autocomplete\Commands\MakeAutocomplete;
use Illuminate\Console\DetectsApplicationNamespace;
use Illuminate\Console\Command;

class MakeAutocompleteCommand extends Command
{
    use DetectsApplicationNamespace ,MakeAutocomplete;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'make:autocomplete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'publish all content autocompelte';
}