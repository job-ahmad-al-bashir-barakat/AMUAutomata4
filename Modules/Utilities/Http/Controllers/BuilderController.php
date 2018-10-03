<?php
namespace Modules\Utilities\Http\Controllers;

use Illuminate\Http\Request;
use Aut\SeoBuilder\Entities\Seo;
use Illuminate\Routing\Controller;
use Modules\Utilities\Entities\Block;
use Modules\Utilities\Entities\Table;
use Modules\Utilities\Entities\Slider;
use Modules\Utilities\Entities\BuilderPage;
use Modules\Utilities\Entities\VerticalSlider;

class BuilderController extends Controller
{
    /**
     * Pages
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function pages()
    {
        $pageableTables = Table::pageable()->get();

        return view('utilities::page.builder', [
            'title' => trans('utilities::app.builder'),
            'pageableTables' => $pageableTables,
        ]);
    }

    public function getPages($tableName, $pageId = null, $objectId = null)
    {
        $morph = Table::whereTableName($tableName)->first()->morph_code;
        $query = BuilderPage::whereOrNull('buildable_id', $pageId)->whereBuildableType($morph);
        $query->whereOrNull('optional_id', $objectId);
        $builderPagesData = $query->orderBy('order')->with(['customModule']);
        return $builderPagesData->get();
    }

    public function storePages(Request $request)
    {
        $tableName = $request->get('table_name');
        $buildableType = Table::whereTableName($tableName)->first()->morph_code;
        $buildableId = $request->get('page_id');
//        $modulePosition = $request->get('module_position');
        $optionalId = $request->get('optional_id');
        $customModule = $request->get('custom_module');
        $id = $request->get('id');
        $deleteIds = $request->get('delete_id', []);

        $oldPageBuilders = BuilderPage::whereBuildableType($buildableType)
            ->whereOrNull('buildable_id', $buildableId)
            ->whereIn('id', $id)
            ->get()->keyBy('id');
        /*$builderPages = [];*/
        for ($i = 0; $i < count($customModule); $i++) {
            $data = [
                'custom_module_id' => $customModule[$i],
//                'position' => $modulePosition[$i],
                'order' => ($i+1),
                'buildable_id' => $buildableId,
                'buildable_type' => $buildableType,
                'optional_id' => $optionalId,
            ];
            if($id[$i]) {
                if (in_array($id[$i], $deleteIds)) {
                    $oldPageBuilders[$id[$i]]->delete();
                } else {
                    /*$builderPages[] = */$oldPageBuilders[$id[$i]]->fill($data)->save();
                }
            } else {
                /*$builderPages[] = */(new BuilderPage($data))->save();
            }
        }
//        BuilderPage::saveMany($builderPages);
        return ['success' => true];
    }

    public function getSeo(Request $request)
    {
        $tableName = $request->get('table_name');
        $pageId = $request->get('page_id');
        $optionalId = $request->get('optional_id', false);

        $morph = Table::whereTableName($tableName)->first()->morph_code;
        $query = Seo::allLangs()->with(['graphImage', 'cardImage'])->whereBuildableId($pageId)->whereBuildableType($morph);
        if ($optionalId) {
            $query->whereOptionalId($optionalId);
        } else {
            $query->whereNull('optional_id');
        }
        $seo = $query->get()->first();

        return $seo;
    }

    public function storeSeo(Request $request)
    {
        $tableName = $request->get('table_name');
        $buildableType = Table::whereTableName($tableName)->first()->morph_code;
        $buildableId = $request->get('page_id');

        $data = $request->only([
            'optional_id',
            'graph_type',
            'graph_image_id',
            'card_image_id',
            'article_published_time',
            'article_modified_time',
            'article_expiration_time',
            'profile_username',
            'profile_gender',
            'book_isbn',
            'book_release_date',
            'card_type',
        ]);

        $data['buildable_type'] = $buildableType;
        $data['buildable_id'] = $buildableId;

        $seo = (new Seo($data))->save();
        /*// for saving alt
        if ($seo->image()) {
            $seo->image()->first()->save();
        }*/

        return $seo;
    }

    public function updateSeo(Request $request, Seo $seo)
    {
        $tableName = $request->get('table_name');
        $buildableType = Table::whereTableName($tableName)->first()->morph_code;
        $buildableId = $request->get('page_id');

        $data = $request->only([
            'optional_id',
            'graph_type',
            'graph_image_id',
            'card_image_id',
            'article_published_time',
            'article_modified_time',
            'article_expiration_time',
            'profile_username',
            'profile_gender',
            'book_isbn',
            'book_release_date',
            'card_type',
        ]);

        $data['buildable_type'] = $buildableType;
        $data['buildable_id'] = $buildableId;

        $seo->fill($data)->save();
        // for saving alt
        /*if ($seo->graphImage()) {
            $seo->graphImage()->first()->save();
        }*/

        return $seo->id;
    }


    /**
     * Sliders
     */
    public function sliders()
    {
        return view('utilities::page.table',[
            'table' => 'sliders',
            'param' => '',
            'title' => trans('utilities::app.sliders'),
            'subPage' => false,
        ]);
    }

    public function slider(Slider $slider)
    {
        $view = 'slider';
        $subPage = \View::exists("utilities::page.table-sub.$view") ? "utilities::page.table-sub.$view" : false;

        return view('utilities::page.table',[
            'table' => 'slider',
            'param' => "sliderId={$slider->id}",
            'title' => trans('utilities::app.slider') . " [{$slider->transName->first()->text}]",
            'subPage' => $subPage,
        ]);
    }


    /**
     * Vertical Sliders
     */
    public function verticalSliders()
    {
        return view('utilities::page.table',[
            'table' => 'vertical-sliders',
            'param' => '',
            'title' => trans('utilities::app.vertical-sliders'),
            'subPage' => false,
        ]);
    }

    public function verticalSlider(VerticalSlider $verticalSlider)
    {
        $view = 'vertical-slider';
        $subPage = \View::exists("utilities::page.table-sub.$view") ? "utilities::page.table-sub.$view" : false;

        return view('utilities::page.table',[
            'table' => 'vertical-slider',
            'param' => "verticalSliderId={$verticalSlider->id}",
            'title' => trans('utilities::app.vertical-slider') . " [{$verticalSlider->transName->first()->text}]",
            'subPage' => $subPage,
        ]);
    }


    /**
     * Blocks
     */
    public function blocks()
    {
        return view('utilities::page.table',[
            'table' => 'blocks',
            'param' => '',
            'title' => trans('utilities::app.blocks'),
            'subPage' => false,
        ]);
    }

    public function block(Block $block)
    {
        return view('utilities::page.table',[
            'table' => 'block',
            'param' => "blockId={$block->id}",
            'title' => trans('utilities::app.block') . " [{$block->transName->first()->text}]",
            'subPage' => false,
        ]);
    }

    /**
     * Lists
     */
    public function steps()
    {
        return view('utilities::page.table',[
            'table' => 'steps',
            'param' => '',
            'title' => trans('utilities::app.steps'),
            'subPage' => false,
        ]);
    }

    /**
     * Cards
     */
    public function textCards()
    {
        return view('utilities::page.table',[
            'table' => 'text-cards',
            'param' => '',
            'title' => trans('utilities::app.text-cards'),
            'subPage' => false,
        ]);
    }

    /**
     * Galleries
     */
    public function galleries()
    {
        $view = 'galleries';
        $subPage = \View::exists("utilities::page.table-sub.$view") ? "utilities::page.table-sub.$view" : false;

        return view('utilities::page.table',[
            'table' => 'galleries',
            'param' => '',
            'title' => trans('utilities::app.galleries'),
            'subPage' => $subPage,
        ]);
    }
}