<?php

namespace Modules\Utilities\Factories;

use Illuminate\Support\Str;
use Aut\DataTable\DataTableBuilder;
use Modules\Utilities\Entities\Table;
use Aut\DataTable\Factories\GlobalFactory;

class BuilderPageFactory extends GlobalFactory
{

    protected $builderTable;
    protected $builderModel;
    protected $builderColumn;
    protected $builderColumnWithLang = false;

    public function __construct(DataTableBuilder $table)
    {
        parent::__construct($table);
        $this->initBuilderPage();
    }

    /**
     *  get datatable query
     */
    public function getDatatable($builderPage, $request)
    {
        $builderPage = $this->builderModel;
        $query = $builderPage::allLangs()->get();

        $this->table
            ->queryConfig("datatable-builder-pages-{$this->builderTable}")
            ->queryDatatable($query);

        if ($this->builderColumnWithLang) {
            $this->table->queryMultiLang([$this->builderColumn]);
        }

        $this->table->queryAddColumn('modules', function ($row) {
            return "<i data-table_name='{$this->builderTable}' data-page_id='{$row->id}' data-page_name='{$row->langName[$this->lang]->text}' class='fa fa-cubes hand' data-toggle='modal' data-target='#page_modules'></i>";
        });

        return $this->table->queryRender(true);
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model, $request)
    {
        $this->table
            ->config("datatable-builder-pages-{$this->builderTable}", trans('utilities::app.pages') ,['pagingType' => 'simple'])
            ->addPrimaryKey('id','id');

        if ($this->builderColumnWithLang) {
            $this->table->addMultiInputTextLangs([$this->builderColumn], 'req required');
        } else {
            $this->table->addInputText(trans('utilities::app.name'), $this->builderColumn, $this->builderColumn);
        }

        $this->table->addActionButton(trans('utilities::app.modules'), 'modules')
            ->addNavButton([], ['add']);
        return $this->table->render();
    }

    /**
     *  store action for save relation
     */
    public function storeDatatable($model = null ,$request = null ,$result = null)
    {
        //
    }

    /**
     *  store action for update relation
     */
    public function updateDatatable($model = null ,$request = null ,$result = null)
    {
        //
    }

    /**
     *  store action for destroy relation
     */
    public function destroyDatatable($model = null ,$request = null ,$result = null)
    {
        //
    }

    /**
     *  inline validate dialog form
     */
    public function validateDatatable()
    {
        return [];
    }

    private function initBuilderPage()
    {
        $tableName = request()->input('tableName');
        //$modelName = Str::studly(Str::singular($tableName));
        $builderTable = Table::whereTableName($tableName)->first();
        if ($builderTable->pageable_column) {
            $this->builderColumnWithLang = Str::startsWith($builderTable->pageable_column, 'lang:');
            if ($this->builderColumnWithLang) {
                $this->builderColumn = explode(':', $builderTable->pageable_column)[1];
            } else {
                $this->builderColumn = $builderTable->pageable_column;
            }
        }
        $this->builderModel = $builderTable->table_namespace;//"{$builderTable->namespace}\\{$modelName}";
        $this->builderTable = $tableName;
    }
}
