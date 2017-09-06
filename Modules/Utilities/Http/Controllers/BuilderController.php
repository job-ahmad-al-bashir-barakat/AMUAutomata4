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

class BuilderController extends Controller
{
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
//        $order = $request->get('order');
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
}