<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 4/19/2017
 * Time: 11:49 PM
 */

namespace Aut\DataTable\Factories;

use Aut\DataTable\DataTableBuilder;
use Illuminate\Support\Facades\App;

class GlobalFactory
{
    protected $table;

    protected $en;
    protected $ar;
    protected $name;
    protected $summary;
    protected $description;
    protected $update;
    protected $delete;
    protected $lang;
    protected $langs;

    public function __construct(DataTableBuilder $table)
    {
        $this->table = $table;

        $this->en            =  trans('datatable::table.en');
        $this->ar            =  trans('datatable::table.ar');
        $this->name          =  trans('datatable::table.name');
        $this->add           =  trans('datatable::table.add');
        $this->summary       =  trans("datatable::table.summary");
        $this->description   =  trans('datatable::table.description');
        $this->add           =  trans('datatable::table.add');
        $this->update        =  trans('datatable::table.update');
        $this->delete        =  trans('datatable::table.delete');
        $this->code          =  trans('datatable::table.code');
        $this->lang          =  App::getLocale();
        $this->langs         =  \LaravelLocalization::getSupportedLocales();
    }
}