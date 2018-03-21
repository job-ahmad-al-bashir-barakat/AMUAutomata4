<?php

namespace Aut\DataTable\Traits;

trait Table
{
    protected $header = "";

    protected $filter = "";

    protected $count = 0;

    protected function addTableColumn($param ,$choosen)
    {
        $this->header .= view('datatable::build_table',[
            'build_table_column' => true,
            'build_table_table'  => false,
            'build_table_filter' => false,

            'param'              => $param,
            'choosen'            => $choosen,
        ])->renderSections()['column'];

        if($this->optionDatatableConfig['filter']) {

            $this->filter .= view('datatable::build_table',[
                'build_table_filter' => true,
                'build_table_column' => false,
                'build_table_table'  => false,

                'param'              => $param,
                'transFilter'        => trans('datatable::table.filter'),
            ])->renderSections()['filter'];
        }

        $this->count += 1;
    }

    protected function renderTable($id = 'datatable', $class = 'table table-striped table-hover')
    {
        $buttonResponsive = $this->optionDatatableConfig['responsive'];
        $filter           = $this->optionDatatableConfig['filter'];
        $footer           = $this->optionDatatableConfig['responsive'] || $this->optionDatatableConfig['filter'];
        $sortable         = $this->optionDatatableConfig['sortable'];

        return view('datatable::build_table',[
            'build_table_table'  => true,
            'build_table_column' => false,
            'build_table_filter' => false,

            'id'                 => $id,
            'class'              => $class,
            'count'              => $this->count,

            'html_header'        => $this->header,

            'filter'             => $filter,
            'html_filter'        => $this->filter,

            'footer'             => $footer,
            'sortable'           => $sortable,

            'buttonResponsive'  => $buttonResponsive,
        ])->renderSections()['table'];
    }
}