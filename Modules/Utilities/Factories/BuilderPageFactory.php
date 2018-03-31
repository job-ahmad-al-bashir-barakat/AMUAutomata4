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
    protected $builderColumn;
    protected $builderMorphCode;
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
        $objectId = $request->get('objectId');
        $builderPage = $this->builderModel;
        $hasSubPages = false;

        if(!$objectId) {
            $menuId = SiteMenu::where('dynamic', $this->builderMorphCode)->first();
            if ($menuId) {
                $hasSubPages = (bool)SiteMenu::where('parent_id', $menuId->id)->count();
            }
            $query = $builderPage::allLangs()->get();
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
            ->queryDatatable($query);

        if ($this->builderColumnWithLang) {
            $this->table->queryMultiLang([$this->builderColumn]);
        }

        $this->table->queryAddColumn('modules', function ($row) use ($hasSubPages, $objectId) {
            if ($hasSubPages) {
                return "<i data-table_name='{$this->builderTable}' data-object_id='{$row->id}' class='icon-layers hand' onclick='subPagesModal(this)'></i>";
            }
            return "<i data-object_id='{$objectId}' data-table_name='{$this->builderTable}' data-page_id='{$row->id}' data-page_name='{$row->langName[$this->lang]->text}' class='fa fa-cubes hand' data-toggle='modal' data-target='#page_modules'></i>";
        });

        $this->table->queryAddColumn('seos', function ($row) use ($hasSubPages, $objectId) {
            if (!$hasSubPages) {
                $param = collect(['table_name' => $this->builderTable, 'page_id' => $row->id, 'optional_id' => $objectId]);
                return "<i data-object_id='{$objectId}' data-table_name='{$this->builderTable}' data-page_id='{$row->id}' data-page_name='{$row->langName[$this->lang]->text}' class='fa fa-google-wallet hand' data-toggle='modal' data-target='#page_seos_modal' data-form-update data-editable-target='".\RouteUrls::builderSeo()."' data-editable-target-param='$param'></i>";
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
            ->config("datatable-builder-pages-{$this->builderTable}-{$objectId}", trans('utilities::app.pages') ,['pagingType' => 'simple'])
            ->addPrimaryKey('id','id');

        if ($this->builderColumnWithLang) {
            $this->table->addMultiInputTextLangs([$this->builderColumn], 'req required');
        } else {
            $this->table->addInputText(trans('utilities::app.name'), $this->builderColumn, $this->builderColumn);
        }

        $this->table->addActionButton(trans('utilities::app.modules'), 'modules','modules','center all','50px')
            ->addActionButton(trans('utilities::app.seos'), 'seos','seos','center all','80px')
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
        $builderTable = Table::whereTableName($tableName)->first();

        if ($builderTable->pageable_column) {
            $this->builderColumnWithLang = Str::startsWith($builderTable->pageable_column, 'lang:');
            if ($this->builderColumnWithLang) {
                $this->builderColumn = explode(':', $builderTable->pageable_column)[1];
            } else {
                $this->builderColumn = $builderTable->pageable_column;
            }
        }
        $this->builderModel = $builderTable->namespace;
        $this->builderTable = $tableName;
        $this->builderMorphCode = $builderTable->morph_code;
    }
}
