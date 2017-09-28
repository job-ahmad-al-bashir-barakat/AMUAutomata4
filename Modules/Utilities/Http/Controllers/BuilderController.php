<?php
/**
 * Created by PhpStorm.
 * User: AA1992
 * Date: 8/24/2017
 * Time: 7:58 PM
 */

namespace Modules\Utilities\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Utilities\Entities\BuilderPage;
use Modules\Utilities\Entities\Page;
use Modules\Utilities\Entities\Slider;
use Modules\Utilities\Entities\Block;
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
        return view('utilities::page.builder', [
            'title' => 'Builder: Pages',
        ]);
    }

    public function getPages($pageId)
    {
        return BuilderPage::wherePageId($pageId)->orderBy('order')->with(['customModule'])->get();
    }

    public function storePages(Request $request)
    {
        $pageId = $request->get('page_id');
        $page = Page::find($pageId);
        $modulePosition = $request->get('module_position');
        $customModule = $request->get('custom_module');
        $id = $request->get('id');
        $deleteIds = $request->get('delete_id', []);

        $oldPageBuilders = $page->builder()->whereIn('id', $id)->get()->keyBy('id');

        $builderPages = [];
        for ($i = 0; $i < count($customModule); $i++) {
            $data = [
                'custom_module_id' => $customModule[$i],
                'position' => $modulePosition[$i],
                'order' => ($i+1),
            ];
            if($id[$i]) {
                if (in_array($id[$i], $deleteIds)) {
                    $oldPageBuilders[$id[$i]]->delete();
                } else {
                    $builderPages[] = $oldPageBuilders[$id[$i]]->fill($data);
                }
            } else {
                $builderPages[] = new BuilderPage($data);
            }
        }

        $page->builder()->saveMany($builderPages);

        return ['success' => true];
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
            'title' => trans('utilities::app.vertical-sliders')
            'subPage' => false,
        ]);
    }

    public function verticalSlider(VerticalSlider $verticalSlider)
    {
        return view('utilities::page.table',[
            'table' => 'vertical-slider',
            'param' => "verticalSliderId={$verticalSlider->id}",
            'title' => trans('utilities::app.vertical-slider') . " [{$verticalSlider->transName->first()->text}]",
            'subPage' => false,
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
}