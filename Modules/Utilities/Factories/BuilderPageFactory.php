<?php

namespace Modules\Utilities\Factories;

use Illuminate\Support\Str;
use Aut\DataTable\DataTableBuilder;
use Modules\Utilities\Entities\Page;
use Modules\Utilities\Entities\SiteMenu;
use Modules\Utilities\Entities\Table;
use Aut\DataTable\Factories\GlobalFactory;

class BuilderPageFactory extends GlobalFactory
{

    protected $builderTable;
    protected $builderModel;
    protected $builderColumn = [];
    protected $builderMorphCode;
    protected $builderColumnWithLang = [];
    protected $builderColumnFirst;
    protected $allowGeneralContent = ['news', 'people', 'faculties', 'university_offices'];
    protected $with = [];

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
        $objectId = $request->get('objectId');
        $builderPage = $this->builderModel;
        $hasSubPages = false;

        if (!$objectId) {
            $menuId = SiteMenu::where('dynamic', $this->builderMorphCode)->first();
            if ($menuId) {
                $hasSubPages = (bool)SiteMenu::where('parent_id', $menuId->id)->count();
            }
            $query = $builderPage::allLangs();
        } else {
            $menuId = SiteMenu::where('dynamic', $this->builderMorphCode)->first();
            if ($menuId) {
                $pages = SiteMenu::where('parent_id', $menuId->id)->get()->pluck('menuable_id');
            }
            $query = Page::whereIn('id', $pages->toArray());
            $this->builderTable = 'pages';
        }

        $this->table
            ->queryConfig("datatable-builder-pages-{$this->builderTable}-{$objectId}")
            ->queryDatatable($query)
            ->when($this->builderColumnWithLang, function (DataTableBuilder $table) {
                $table->queryMultiLang($this->builderColumnWithLang);
            })
            ->queryAddColumn('modules', function ($row) use ($hasSubPages, $objectId) {
                if ($hasSubPages) {
                    return "<i data-table_name='{$this->builderTable}' data-object_id='{$row->id}' class='icon-layers hand' onclick='subPagesModal(this)'></i>";
                }
                $pageName = $row->{camel_case("lang{$this->builderColumnFirst}")}[$this->lang]->text;
                return "<i data-object_id='{$objectId}' data-table_name='{$this->builderTable}' data-page_id='{$row->id}' data-page_name='{$pageName}' class='fa fa-cubes hand' data-toggle='modal' data-target='#page_modules'></i>";
            })
            ->queryAddColumn('seos', function ($row) use ($hasSubPages, $objectId) {
                if (!$hasSubPages) {
                    $param = collect(['table_name' => $this->builderTable, 'page_id' => $row->id, 'optional_id' => $objectId]);
                    $pageName = $row->{camel_case("lang{$this->builderColumnFirst}")}[$this->lang]->text;
                    return "<i data-object_id='{$objectId}' data-table_name='{$this->builderTable}' data-page_id='{$row->id}' data-page_name='{$pageName}' class='fa fa-google-wallet hand' data-toggle='modal' data-target='#page_seos_modal' data-form-update data-editable-target='" . \RouteUrls::builderSeo() . "' data-editable-target-param='$param'></i>";
                }
            })
            ->queryAddColumn('menu', function ($row) use ($hasSubPages, $objectId) {
                if (!$hasSubPages) {
                    $param = collect(['table_name' => $this->builderTable, 'page_id' => $row->id, 'optional_id' => $objectId]);
                    $pageName = $row->{camel_case("lang{$this->builderColumnFirst}")}[$this->lang]->text;
                    return "<i data-object_id='{$objectId}' data-table_name='{$this->builderTable}' data-page_id='{$row->id}' data-page_name='{$pageName}' class='fa fa-list hand' data-toggle='modal' data-target='#page_menu_modal' data-form-update data-editable-target='" . \RouteUrls::builderMenu() . "' data-editable-target-param='$param'></i>";
                }
            });
        return $this->table->queryRender(true);
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model, $request)
    {
        $objectId = $request->get('objectId', false);
        $this->table
            ->config("datatable-builder-pages-{$this->builderTable}-{$objectId}", trans('utilities::app.pages'), ['pagingType' => 'simple'])
            ->addPrimaryKey('id', 'id')
            ->when($this->builderColumnWithLang, function (DataTableBuilder $table) {
                $table->addMultiInputTextLangs($this->builderColumnWithLang, 'req required');
            })
            ->each($this->builderColumn, function (DataTableBuilder $table, $column) {
                $table->addInputText(trans("utilities::app.{$column}"), $column, $column);
            })
            ->addActionButton(trans('utilities::app.modules'), 'modules', 'modules', 'center all', '50px')
            ->addActionButton(trans('utilities::app.seos'), 'seos', 'seos', 'center all', '80px')
            ->addActionButton(trans('utilities::app.menu'), 'menu', 'menu', 'center all', '80px')
            ->addNavButton([], ['add'])
            ->when(in_array($this->builderTable, $this->allowGeneralContent), function (DataTableBuilder $table) {
                $table->addCustomNavButton(
                    'Add General Template',
                    'fa fa-cubes hand', '',
                    "data-table_name='{$this->builderTable}' data-toggle='modal' data-target='#page_modules' data-page_name='General Template'"
                );
            });
        return $this->table->render();
    }

    /**
     *  store action for save relation
     */
    public function storeDatatable($model = null, $request = null, $result = null)
    {
        //
    }

    /**
     *  store action for update relation
     */
    public function updateDatatable($model = null, $request = null, $result = null)
    {
        //
    }

    /**
     *  store action for destroy relation
     */
    public function destroyDatatable($model = null, $request = null, $result = null)
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
        $builderTable = Table::whereTableName($tableName)->first();

        if ($builderTable->pageable_column) {
            foreach ($builderTable->pageable_columns as $column) {
                if (Str::contains($column, ['.'])) {
                    list($with, $column) = explode('.', $column, 2);
                    $this->with[] = $with;
                }
                if (Str::startsWith($column, 'lang:')) {
                    $this->builderColumnWithLang[] = explode(':', $column)[1];
                } else {
                    $this->builderColumn[] = $column;
                }
            }
        }
//        dd($this->with, $this->builderColumnWithLang, $this->builderColumn);
        $this->builderColumnFirst = $this->builderColumnWithLang[0] ?? $this->builderColumn[0];
        $this->builderModel = $builderTable->namespace;
        $this->builderTable = $tableName;
        $this->builderMorphCode = $builderTable->morph_code;
    }
}
